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
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Log In</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <!-- Default form login -->
                <form class="text-center border border p-5 m-5" action="#!">
                    <p class="h4 mb-4">Sign in</p>
                    <!-- Username -->
                    <input type="text" id="username" class="form-control mb-4" placeholder="Username">
                    <!-- Email -->
                    <input type="email" id="defaultLoginFormEmail" class="form-control mb-4" placeholder="E-mail">
                    <!-- Password -->
                    <input type="password" id="defaultLoginFormPassword" class="form-control mb-4"
                        placeholder="Password">

                    <div class="d-flex justify-content-around">
                
                        <div>
                            <!-- Forgot password -->
                            <a class="links" href="">Forgot password?</a>
                        </div>
                    </div>

                    <!-- Sign in button -->
                    <div class="text-center">
                        <button class="btn btn-info  my-4" type="submit">Sign in</button>
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