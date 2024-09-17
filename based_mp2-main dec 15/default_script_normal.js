
//@TODO Change api variable api path
//@var change variable name value
const USERS_API =  "../../api/users.php";

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
    //@TODO
    //@var change variable
    $.ajax({
        "url" : USERS_API + "?index",
        "success" : function(response) {
            
            let jsonParse = JSON.parse(response)
            let tr = '';

            for (var i = 0; i<jsonParse.records.length; i++) 
            {
                //@TODO Change display iterations
                //jsonParse.records[i].id
                tr += "<tr>" +
                    "<td>" + jsonParse.records[i].id + "</td>" + 
                    "<td>" + jsonParse.records[i].username + "</td>" + 
                    "<td>" + jsonParse.records[i].date_time + "</td>" + 
                    "<td><button onclick='update(" +jsonParse.records[i].id+ ")'>SAVE EDIT</button><button onclick='show(" +jsonParse.records[i].id+ ")'>SHOW</button>&nbsp;"+
                    "<button onclick='destroy(" +jsonParse.records[i].id+ ")'>DELETE</button></td>" + 
                "</tr>";
            }

            /**
             * Change element to be display
             * @var change records to your html id
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
    //@var change variable users_api
    $.ajax({
        "url" : USERS_API + "?show&id=" + id,
        "success" : function(response) {
            
            let jsonParse = JSON.parse(response)
            let tr = '';

            for (var i = 0; i<jsonParse.records.length; i++) 
            {
                //@TODO same with index
                /**
                 * Change display depending on your needs
                 */
                //jsonParse.records[i].id
               //jsonParse.records[i].id
               tr += "<tr>" +
               "<td>" + jsonParse.records[i].id + "</td>" + 
               "<td>" + jsonParse.records[i].username + "</td>" + 
               "<td>" + jsonParse.records[i].date_time + "</td>" + 
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

//Saving a record
function store()
{

    /**
     * Change json collections
     */
    //@TODO change json collection
    let employeeForm = {
		username : $("#username").val(),
        password : $("#password").val(),
        confirm_password : $("#confirm_password").val(),
	}

    $.ajax({
        "url" : USERS_API ,
        "type" : "POST",
        "data" : "store=" + JSON.stringify(employeeForm),
        "success" : function(response) {

            let responseJSON = JSON.parse(response)

            alert(responseJSON.description);

            index();
            
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
        "url" : USERS_API ,
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
    //@TODO Change json collections
    let employeeFormUpdate = {
        username : $("#username").val(),
        password : $("#password").val(),
        confirm_password : $("#confirm_password").val(),
	}

    $.ajax({
        "url" : USERS_API ,
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
