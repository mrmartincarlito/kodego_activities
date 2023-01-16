<!DOCTYPE html>
<html>
    <head>
        <style>

        </style>

    </head>

    <body>
        <input type="text" onkeydown="myFunction()">
        <button type="button" onclick="promptAlert()">CLICK ME</button>
    </body>

    <script>

        function myFunction() {
            console.log("on key down")
        }

        function addMe() {
            let a = 10;
            let b = 300;
            alert("The sum of " + a + " and " + b +" is equal to " + (a + b))
        }

        function confirmAlert() {
            let choice = confirm("Are you sure you wwant to logout?")
            
            if (choice) {
                document.write("Successfully Logout");
            } else {
                document.write("You choose no")
            }
        }

        function promptAlert() {
            let num1 = prompt("Enter a number")
            document.write("You input " + num1);
        }

    </script>
</html>
