<?php
session_start();
include 'back.php';
// Taking into variables user's input
if (isset($_POST['username'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $logError = "";
    $sql = "SELECT * FROM student WHERE username = '$username'";

    $query = mysqli_query($conn, $sql);
    $numrows = mysqli_num_rows($query);
    // echo $numrows;

    if ($numrows == 0) {
        $logError = "Username incorrect, please register first";
    }
    else {
        $row = mysqli_fetch_assoc($query);
        if (password_verify($_POST['password'], $row['password'])){
            $_SESSION['id']=$row['id'];
            $_SESSION['username']=$row['username'];
            $_SESSION['email']=$row['email'];
            $_SESSION['first_name']=$row['first_name'];
            $_SESSION['last_name']=$row['last_name'];
            $_SESSION['linkedin']=$row['linkedin'];
            $_SESSION['github']=$row['github'];
            header('location:profil.php');
        }
        
		
    }

}





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
    <title>Log In</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <!-- Default form login -->
                <form class="text-center p-5 m-5" action="" method="post">
                    <p class="h2 mb-4">Sign in</p>
                    <!-- Username -->
                    <input type="text" name="username" id="username" class="form-control mb-4" placeholder="Username"
                        required>
                    <!-- Password -->
                    <input type="password" name="password" id="password" class="form-control mb-4" placeholder="Password"
                        >
                    <div class="d-flex justify-content-around">
                    <span class="error"><?php echo $logError ?></span>
                        <div>
                            <!-- Forgot password -->
                            <a class="links" href="">Forgot password?</a>
                        </div>
                    </div>
                    <!-- Sign in button -->
                    <div class="text-center">
                        <button class="btn btn-info  my-4" name="login" type="submit">Sign in</button>
                    </div>
                    <!-- Register -->
                    <p>Not a member? <a class="links" href="register.php">Register</a></p>
                </form>
            </div>
        </div>
    </div>








    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>