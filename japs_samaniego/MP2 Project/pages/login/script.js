
//const LOGIN_API = "../../api/login.php";
//const LOGIN_API = "../../api-dbh/login.php";
const LOGIN_API = "../../api-oop/routes/login.php";

function login() {
    let loginCredentials = {
        username : $("#username").val(),
        password : $("#password").val()
    }

    $.ajax({
        "url" : LOGIN_API,
        "type" : "POST",
        "data" : "auth=" + JSON.stringify(loginCredentials),
        "success" : function(response) {
            let responseJSON = JSON.parse(response)

            alert(responseJSON.description);

            if (responseJSON.code == 200) {
                window.location.href = "../dashboard";
            }

            return false;
        }
    })

    return false;
}