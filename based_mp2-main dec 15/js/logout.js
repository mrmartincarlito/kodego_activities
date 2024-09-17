const LOGOUT_API = "../../api/logout.php";

function logout() {
    
    let confirmLogout = confirm("Do you want to logout?")

    if (confirmLogout) {
        $.ajax({
            "url" : LOGOUT_API,
            "success" : function(response) {
                let responseJSON = JSON.parse(response)
    
                alert(responseJSON.description);
    
                if (responseJSON.code == 200) {
                    window.location.href = "../../index.html";
                }
            }
        })
    }
}