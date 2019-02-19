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
        <title>Log In page</title>
    </head>
</head>


<body style="background-color: #3ca6ec;">
    <section class="login">
        <div class="container-fluid">
            <div class="row p-5">
                <div class="col-3">

                </div>
                <div class="col-6 login text-center p-0">
                    <form action="login.php" method="post">
                        <div class="form-row">
                            <div class="form-group col-12">
                                <p class="remp py-4 px-0">

                                    WELCOME BACK !
                                </p>
                            </div>
                            <div class="col-12">
                                <img class="img-fluid"src="images/login/man.png" width=120px>
                            </div>
                            <div class="form-group col-10">
                                <input name="username" type="email" class="form-control"  placeholder="Email ID" required>
                            </div>
                            <div class="form-group col-10 pt-5">
                                <input name="password" type="password" class="form-control"  placeholder="Password" required>
                            </div>
                              <div class="form-group col-12 pt-4">
                                <button name="login_btn" type="submit" class="btn btn-lg btn-primary">Log In</button>
                              </div>
                              <div style="color:silver;" class="form-group col-12 pt-1">
                                  Don't have an account? <a href="signup.php"> <p style="font-style:oblique; color:skyblue; font-weight:500;">Create One.</p>
                              </div>

                        </div>
                    </form>
                    <?php
			if(isset($_POST['login_btn']))
			{
				$username = $_POST['username'];
				$password = $_POST['password'];
                $query = "select * from user WHERE Email_ID = '$username' AND password = '$password' ";
                $query_run = mysqli_query($con,$query);
                if(mysqli_num_rows($query_run) > 0) {
                    //valid
                    $_SESSION['username'] =$username;
                    header('location:welcome.php');
                }
                else {
                    echo '<script type="text/javascript"> alert("Invalid credential!") </script>';
                }
			}
		?>
		
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