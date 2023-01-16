const DASHBOARD_API = "../../api/dashboard.php";

getAuthenticatedUser()

function getAuthenticatedUser() {
    $.ajax({
        "url" : DASHBOARD_API + "?getAuthUser",
        "success" : function(response) {
            let responseJSON = JSON.parse(response);

            if (responseJSON.code == 200) {
                $("#firstName").text(responseJSON.details.firstname)
            } else {
                window.location.href = "../../"
            }
        }
    })
}

