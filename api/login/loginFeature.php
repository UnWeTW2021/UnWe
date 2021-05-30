<?php
include '../config/database.php';


$conn = OpenCon();



if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: admin.php");
    exit;
}


$email = $password = "";
$email_err = $password_err = $login_err = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){


    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter email.";
    } else{
        $email = trim($_POST["email"]);

    }

    if(empty(trim($_POST["password"]))){

        $password_err = "Please enter your password.";
    } else{

        $password = trim($_POST["password"]);

    }

    // Validam credentialele
    if(empty($email_err) && empty($password_err)){

        $sql = "SELECT  email, password FROM users WHERE email = ?";


        try {





            $query = $conn->prepare("SELECT * FROM users WHERE email = '$email'");
            $query->execute();
            $result = $query->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }

        if(md5($password)==$result['password']){
            // Password is correct, start a new session
            session_start();

            // Store data in session variables
            $_SESSION["loggedin"] = true;

            $_SESSION["email"] = $email;

            // Redirect user to admin page
            header("location: ../../admin.php");
        } else{
            // Password is not valid, display a generic error message
            $login_err = "Invalid email or password.";
            header("location: ../../login.php");
        }
    }




    CloseCon($conn);




}
