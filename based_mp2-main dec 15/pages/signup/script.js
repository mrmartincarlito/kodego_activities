const SIGNUP_API = "../../api/signup.php";

/**
 * Other alternative to submit a form
 */
// $("form#signupForm").on("submit", function() {

// })


function save() {
    let signUpForms = {
        email : $("#email").val(),
        complete_name : $("#complete_name").val(),
        address : $("#address").val(),
        username : $("#username").val(),
        password : $("#password").val(),
        confirm_password :  $("#confirm_password").val()
    };

    $.ajax({
        "url" : SIGNUP_API ,
        "type" : "POST",
        "data" : "signup=" + JSON.stringify(signUpForms),
        "success" : function(response) {
            
            let responseJSON = JSON.parse(response)

            alert(responseJSON.description);
            
            return false;
        }
    })

    return false;
}