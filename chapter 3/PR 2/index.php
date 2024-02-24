<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        Enter username : <input type="text" name="username" id="username" onkeyup="showdata(); return false " />
        <br>
    </form>

    <div id="info"></div>



    <script>
        function showdata() {
            var xmlhttp;
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            }

            var username = document.getElementById("username").value;
            xmlhttp.open("POST", 'ajaxform.php?username=' + username, true);
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById('info').innerHTML = xmlhttp.responseText;
                } else {
                    document.getElementById('info').innerHTML = "Response is not getting , please try again";
                }
            }
            xmlhttp.send();
        }
    </script>
</body>

</html>