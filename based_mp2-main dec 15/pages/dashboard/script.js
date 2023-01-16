const DASHBOARD_API = "../../api/dashboard.php";
const IMAGE_UPLOADER_API = "../../api/uploader.php";
const USERS_API =  "../../api/users.php";

getAuthenticatedUser()

function getAuthenticatedUser() {
    $.ajax({
        "url" : DASHBOARD_API + "?getAuthUser",
        "success" : function(response) {
            let responseJSON = JSON.parse(response);

            if (responseJSON.code == 200) {
                $("#firstName").text(responseJSON.details.username)
            } else {
                window.location.href = "../../"
            }
        }
    })
}

getProfilePic()

function getProfilePic()
{
    $.ajax({
        "url" : USERS_API,
        "type" : "GET",
        "data" : "getProfilePic",
        "success" : function(response) {
            let responseJSON = JSON.parse(response)

            $("#profile_pic").attr("src", "../../api/" + responseJSON.records[0].profile_pic);

            return false;
        }
    })
}

function uploadImage() 
{
    $.blockUI();
    let image = new FormData();
    image.append("image_file", $("#file")[0].files[0])
    image.append("data", "your value");

    /**
     * Same as ^
     * let image = {
     *  image_file =  $("#file")[0].files[0]
     * }
     */

     $.ajax({
        "url" : IMAGE_UPLOADER_API ,
        "type" : "POST",
        "data" : image,
        "enctype" : "multipart/form-data",
        "cache" : false,
        "contentType" : false,
        "processData" : false,
        "success" : function(response) {
            $.unblockUI();

            let responseJSON = JSON.parse(response)

            alert(responseJSON.description);

            getProfilePic();
            
            return false;
        }
    })
}

