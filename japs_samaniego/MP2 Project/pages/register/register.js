
const EMPLOYEE_API =  "../../api/employee.php";
const DEPARTMENT_API = "../../api/department.php";

getDepartments()

function getDepartments()
{
    $.ajax({
        "url" : DEPARTMENT_API + "?getDepartments",
        "success" : function(response) {
            
            let jsonParse = JSON.parse(response)
            let options = '';

            for (var i = 0; i<jsonParse.records.length; i++) 
            {
                options += "<option value='" +jsonParse.records[i].id+ "'>" + jsonParse.records[i].name + "</option>"
            }

            $("#department").html(options)
        }
    })
}

/** Actual Functions */

/**
 * index = get all informations
 * show?id = get 1 information only
 * store = saving new data or resource
 * destroy?id = delete a resource
 * update?id new resource = to update new resource
 */

//Get all informations
index();
function index()
{
    $.ajax({
        "url" : EMPLOYEE_API + "?index",
        "success" : function(response) {
            
            let jsonParse = JSON.parse(response)
            let tr = '';

            for (var i = 0; i<jsonParse.records.length; i++) 
            {
                //jsonParse.records[i].id
                tr += "<tr>" +
                    "<td>" + jsonParse.records[i].id + "</td>" + 
                    "<td>" + jsonParse.records[i].first_name + "</td>" + 
                    "<td>" + jsonParse.records[i].middle_name + "</td>" + 
                    "<td>" + jsonParse.records[i].last_name + "</td>" + 
                    "<td>" + jsonParse.records[i].department_id + "</td>" + 
                    "<td>" + jsonParse.records[i].salary + "</td>" + 
                    "<td><button onclick='update(" +jsonParse.records[i].id+ ")'>SAVE EDIT</button><button onclick='show(" +jsonParse.records[i].id+ ")'>SHOW</button>&nbsp;"+
                    "<button onclick='destroy(" +jsonParse.records[i].id+ ")'>DELETE</button></td>" + 
                "</tr>";
            }

            /**
             * Change element to be display
             */
            $("#records").html(tr)
        }
    })
}

/**
 * 
 * @param {*} id 
 */
function show(id)
{
    $.ajax({
        "url" : EMPLOYEE_API + "?show&id=" + id,
        "success" : function(response) {
            
            let jsonParse = JSON.parse(response)
            let tr = '';

            for (var i = 0; i<jsonParse.records.length; i++) 
            {
                /**
                 * Change display depending on your needs
                 */
                //jsonParse.records[i].id
                tr += "<tr>" +
                    "<td>" + jsonParse.records[i].id + "</td>" + 
                    "<td>" + jsonParse.records[i].first_name + "</td>" + 
                    "<td>" + jsonParse.records[i].middle_name + "</td>" + 
                    "<td>" + jsonParse.records[i].last_name + "</td>" + 
                    "<td>" + jsonParse.records[i].department_id + "</td>" + 
                    "<td>" + jsonParse.records[i].salary + "</td>" + 
                    "<td><button onclick='show(" +jsonParse.records[i].id+ ")'>SHOW</button>&nbsp;"+
                    "<button onclick='destroy(" +jsonParse.records[i].id+ ")'>DELETE</button></td>" + 
                "</tr>";
            }

            /**
             * Change element to be display
             */
            $("#records").html(tr)
        }
    })
}

//Saving a record
function store()
{

    /**
     * Change json collections
     */
    let employeeForm = {
		first_name : $("#first_name").val(),
        middle_name : $("#middle_name").val(),
        last_name : $("#last_name").val(),
        department : $("#department").val(),
        salary : $("#salary").val()
	}

    $.ajax({
        "url" : EMPLOYEE_API ,
        "type" : "POST",
        "data" : "store=" + JSON.stringify(employeeForm),
        "success" : function(response) {

            let responseJSON = JSON.parse(response)

            alert(responseJSON.description);

            getEmployees();
            
            return false;
        }
    })

    return false;
}

function destroy(id)
{

    if (!confirm("Are you sure you want to delete?"))
    {
        return;
    }

    $.ajax({
        "url" : EMPLOYEE_API ,
        "type" : "POST",
        "data" : "destroy&id=" + id,
        "success" : function(response) {

            let responseJSON = JSON.parse(response)

            alert(responseJSON.description);

            index();
            
            return false;
        }
    })
}

function update(id)
{
    let employeeFormUpdate = {
        id : id,
		first_name : $("#first_name").val(),
        department : $("#department").val(),
        salary : $("#salary").val()
	}

    $.ajax({
        "url" : EMPLOYEE_API ,
        "type" : "POST",
        "data" : "update=" + JSON.stringify(employeeFormUpdate) + "&id=" + id,
        "success" : function(response) {

            let responseJSON = JSON.parse(response)

            alert(responseJSON.description);

            index();
            
            return false;
        }
    })
}

/** End Actual Functions */

