function validate() {
    let email = document.getElementById('exampleInputEmail1');
    let password = document.getElementById('exampleInputPassword1');
    let loginData = ["kodego@yahoo.com", "webdevelopment"];

    if (email.value === loginData[0] && password.value === loginData[1]) {
        alert("Login Success!");
    } else {
        alert("Wrong login details!");
    }
}