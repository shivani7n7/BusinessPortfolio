<?php
    session_start();
    require 'DBconfig/config.php';
?>

<html>
<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="fontawesome-free-5.6.3-web/css/all.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Welcome page</title>
    </head>
</head>


<body style="background-color: #3ca6ec;">
    <section class="signin">
        <div class="container-fluid">
            <div class="row p-5">
                <div class="col-3">

                </div>
                <div class="col-6 login text-center p-0">
                    <form action="login.php">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <p class="remp py-4 px-0">
                                    Home Page
                                </p>
                            </div>
                            <div class="form-group col-12">
                                <p class="py-3 px-0" style="color:white; font-weight: 500; font-size:28px; font-family: cursive;">
                                    WELCOME 
                                    <?php
                                    echo $_SESSION['username'];
                                    ?>
                                </p>
                            </div>
                            <div class="col-12">
                                <img src="images/login/man.png" width=120px>
                            </div>
                            
                              <div class="form-group col-12 pt-4">
                                <button name="logout" "type="submit" class="btn btn-lg btn-primary">Log Out</button>
                              </div>
                        </div>
                    </form>
                </div>
                <div class="col-3">

                </div>
            </div>
        </div>
    </section>

    <script src="bootstrap/JS/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap/JS/popper.min.js"></script>
    <script src="bootstrap/JS/bootstrap.min.js"></script>
</body>

</html>