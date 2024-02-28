<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <style>
        body {
            background-color: rgb(198, 37, 37);
            color: white;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
            width: 100vw;
            background: #dccbcb;
        }

        form {
            background-color: aquamarine;
            padding: 50px;
        }

        .button {
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .btn {
            padding: 10px 20px;
            background-color: black;
            color: white;
            font-size: larger;
            cursor: pointer;
            border-radius: 10px;
        }

        label {
            font-size: 60px;
            color: red;
        }

        input {
            font-size: 40px;
            padding: 5px 10px;
        }
    </style>

</head>

<body>
    <h1>
        <center>
            REGISTER YOURSELF
        </center>
    </h1>

    <div class="container">
        <form action="function.php" method="post">
            <label for="fname">Enter first name : </label>
            <input type="text" name="fname" placeholder="enter first name" required>
            <br><br>
            <label for="lname">Enter last name : </label>
            <input type="text" name="lname" placeholder="enter last name " required>
            <br><br>

            <div class="button">
                <input type="submit" value="submit" class="btn">
                <input type="reset" value="reset" class="btn">
            </div>
        </form>
    </div>
</body>

</html>