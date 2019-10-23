<?php
include 'back.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="assets/img/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 offset-2">
                <!-- Default form login -->
                <form class="text-center border p-5 m-5" method='POST' action="">
                    <p class="h2 mb-4">Register</p>
                    <!-- Username -->
                    <input type="text" name="username" id="username" class="form-control mb-4" placeholder="Username">
                    <!-- Email -->
                    <input type="email" name="mail" id="mail" class="form-control mb-4" placeholder="E-mail">
                    <!-- Password -->
                    <input type="password" name="password" id="password" class="form-control mb-4"
                        placeholder="Password">

                    <!-- Sign in button -->
                    <div class="text-center">
                        <button class="btn btn-info  my-4" type="submit" name="register">Send</button>
                    </div>
                    <!-- Register -->
                    <p>Go back to <a class="links" href="index.php">Login</a></p>
                </form>
            </div>
        </div>
    </div>