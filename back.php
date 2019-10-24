<?php

// define variables and set to empty values
$userErr = $mailErr = $passErr = "";
$user = $mail = $psw = "";


// openConnection();
$conn = mysqli_connect("database","root","root","BeCode");
if (!$conn) {
    echo 'prob with db'; // Check if connection is good
}




if ($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validation Username
    if(empty($_POST['username'])){
        $userErr = "Please enter a username.";
    } 
    else {

        if (!preg_match("/^[a-zA-Z0-9]*$/", $_POST['username'])){
            $userErr = "Please enter only characters and numbers";
        }

    }
        
    // Validation mail
    if (empty($_POST['mail'])){
        $mailErr = "Please enter an email adress.";
    }
    else {
        if (!preg_match("/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/", $_POST['mail'])){
            $userErr = "Please enter valid email adress.";
        }
    }
    // Validation password
    if(empty($_POST['password'])){
        $passErr = "Please enter a password.";
    }
    else {
        if (!preg_match("/^[a-zA-Z0-9]*$/", $_POST['password'])){
            $userErr = "Please enter valid password";
        }
    }
}

if (empty($userErr) && empty($mailErr) && empty($passErr)) { // If all errors are empty then send to DB

        //Send values of input into DB
    if (isset($_POST['username'])){
        $username = $_POST['username'];
        $email = $_POST['mail'];
        $pass = crypt($_POST['password']);
        $sql = "INSERT INTO student (username,email,password) VALUES ('$username','$email','$pass');";
        if (mysqli_query($conn, $sql)) {
            echo 'Data sent';
        } else {
            echo 'Bug mon pote';
        }

        if (!preg_match("/^[a-zA-Z0-9]*$/", $user)){
            $user = $_POST['username'];
            $userErr = "Only characters and numbers !";
        }

    }

}



?>