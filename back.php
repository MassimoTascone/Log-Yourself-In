<?php

// function openConnection(){
//     $dbhost = "database";
//     $dbuser = "root";
//     $dbpass = "root";
//     $db = "mydb";

    
//     try {
//         $pdo = new PDO("mysql:host=$dbhost;dbname=$db",$dbuser,$dbpass);
//         echo "VICTORY!";
//     }

//     catch (PDOException $e) {
//         echo "ca merch po";
//     }
// }

// openConnection();
$conn = mysqli_connect("database","root","root","BeCode");
if (!$conn) {
    echo 'prob with db'; // Check if connection is good
}    


// Send values of input into DB
if (isset($_POST['username'])){
    $username = $_POST['username'];
    $email = $_POST['mail'];
    $pass = $_POST['password'];
    $sql = "INSERT INTO student (username,email,password) VALUES ('$username','$email','$pass');";
    if (mysqli_query($conn, $sql)) {
        echo 'all ok';
    } else {
        echo 'no ok';
    }
}

?>