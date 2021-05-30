<?php
//
//
//session_start();
//
//
//if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
//    header("location: admin.php");
//    exit;
//}
//?>

<!doctype html>
<html class="no-js" lang="ro">

<head>
    <meta charset="utf-8">
    <title>Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">


</head>

<body>


<div class="login-wrapper">


        <form action="api/login/loginFeature.php" method="POST" class="login-form">
            <div class="login-input-wrapper">
                <label> Email: </label>
                <input type="text" id="email"  name="email" placeholder="your provided email..." required>
                <label> Password  </label>
                <input type="text" id="password"  name="password" placeholder="your provided password..." required>
            </div>
<div class="login-input-button">
    <button type="button" class="login-button" onclick="submitForm()">Log in</button>
</div>


        </form>

</div>








<script src="js/login.js"></script>
</body>

</html>
