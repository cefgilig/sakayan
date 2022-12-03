<?php
session_start();
require'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">

    <title>THE YELLOW FERRIES</title>
</head>

<body style="height: 120vh;">
    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="container">
            <a class="navbar-brand text-light" href="#">
                <img src="./images/logo.jpg" alt="LOGO" class="img-fluid rounded">
                THE YELLOW FERRIES
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active text-light" aria-current="page" href="#">SIGN UP</a>
                </div>
            </div>
        </div>
    </nav>


    <div class="container mt-5">

        <form action="logincode.php" method="POST" class="bg-light bg-opacity-50 text-center text-dark p-1 rounded-5">
            <div class="container">
                <h2>Login</h2>
                <?php include('message.php') ?>

                <?php
                if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <div class="form-outline mb-4 mt-5">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" name="username" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" name="password" class="form-control" />
                </div>

                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                            <label class="form-check-label" for="form2Example31"> Remember me </label>
                        </div>
                    </div>

                    <div class="col">
                        <a href="#!">Forgot password?</a>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-block mb-4" href="dashboard.php">Sign in</button>

                <div class="text-center">
                    <p>Not a staff? <a href="index.html" >Sign is as guest</a></p>
                    <p>or sign up with:</p>
                    <button type="button" class="btn btn-light btn-floating mx-1">
                        <i class="bi bi-facebook"></i>
                    </button>

                    <button type="button" class="btn btn-light btn-floating mx-1">
                        <i class="bi bi-google"></i>
                    </button>

                    <button type="button" class="btn btn-light btn-floating mx-1">
                        <i class="bi bi-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-light btn-floating mx-1">
                        <i class="bi bi-github"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="footer">
        <div class="opacity-75">
            <div class="container-fluid bg-dark text-light mt-5">
                <div class="container p-1 text-center">
                    <p>© The Yellow Ferries 2022 | All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>