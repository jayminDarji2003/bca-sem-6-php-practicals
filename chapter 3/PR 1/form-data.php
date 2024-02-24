<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ajaxform.php" method="post" id="frm" onsubmit="event.preventDefault(); showdata();">
        <label for="username">Enter username : </label>
        <input type="text" name="username" id="username">
        <br><br>
        <label for="password">Enter password : </label>
        <input type="password" name="password" id="password">
        <br><br>
        <input type="submit" value="submit" name="submit">
        <div class="info"></div>
    </form>

    <script>
        function showdata() {
            var form = document.getElementById('frm');
            var formData = new FormData(form);

            var xmlhttp;
            if (window.XMLHttpRequest) {
                xmlhttp = new XMLHttpRequest();
            } else {
                xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
            }

            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.querySelector('.info').innerHTML = xmlhttp.responseText;
                }
            }

            xmlhttp.open('POST', form.getAttribute('action'), true);
            xmlhttp.send(formData);
        }
    </script>
</body>

</html>
