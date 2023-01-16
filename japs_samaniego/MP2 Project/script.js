
const REGISTER_API = "api/register.php";
const LOGIN_API = "api/login.php";

function store() {
    let notarialRegister = {
        entry_number: $("#entry_number").val(),
        description: $("#description").val(),
        party_name: $("#party_name").val(),
        id_presented: $("#id_presented").val(),
        entry_date: $("#entry_date").val(),
        type_act: $("#type_act").val()
    }
    $.ajax({
        "url": REGISTER_API,
        "type": "POST",
        "data": "store=" + JSON.stringify(notarialRegister),
        "success": function (response) {

            let responseJSON = JSON.parse(response)

            alert(responseJSON.description);

            index();

            return false;
        }
    })
    return false;
    
}

index();
function index() {
    $.ajax({
        "url": REGISTER_API + "?index",
        "success": function (response) {

            let jsonParse = JSON.parse(response)
            let tr = '';

            for (var i = 0; i < jsonParse.records.length; i++) {
                jsonParse.records[i].id
                tr += "<tr>" +
                    "<td>" + jsonParse.records[i].entry + "</td>" +
                    "<td>" + jsonParse.records[i].description + "</td>" +
                    "<td>" + jsonParse.records[i].name + "</td>" +
                    "<td>" + jsonParse.records[i].id + "</td>" +
                    "<td>" + jsonParse.records[i].date + "</td>" +
                    "<td>" + jsonParse.records[i].type + "</td>" +
                    "<td><button onclick='destroy(" +jsonParse.records[i].entry+ ")'>DELETE</button></td>" + 
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
 * @param {*} entry  
 */
function destroy(entry) {
    if (!confirm("Are you sure you want to delete?")) {
        return;
    }

    $.ajax({
        "url": REGISTER_API,
        "type": "POST",
        "data": "destroy&entry=" + entry,
        "success": function (response) {

            let responseJSON = JSON.parse(response)

            alert(responseJSON.description);

            index();

            return false;
        }
    })
}    

function update(entry)
{
    let updateEntry = {
        entry : entry,
        entry_number: $("#entry_number").val(),
        description: $("#description").val(),
        party_name: $("#party_name").val(),
        id_presented: $("#id_presented").val(),
        entry_date: $("#entry_date").val(),
        type_act: $("#type_act").val()
    }

    $.ajax({
        "url" : REGISTER_API,
        "type" : "POST",
        "data" : "update=" + JSON.stringify(updateEntry) + "&entry=" + entry,
        "success" : function(response) {

            let responseJSON = JSON.parse(response)

            alert(responseJSON.description);

            index();
            
            return false;
        }
    })
}

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
                jsonParse.records[i].id
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

function login() {
    let loginCredentials = {
        username : $("#username").val(),
        password : $("#password").val()
    }

    $.ajax({
        "url" : LOGIN_API + "auth=" + JSON.stringify(loginCredentials),
        "success" : function(response) {
            let responseJSON = JSON.parse(response)

            alert(responseJSON.description);

            if (responseJSON.code == 200) {
                window.location.href = "register.html";
            }
        }
    })
}