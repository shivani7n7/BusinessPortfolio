<?php
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
        <title>Registration page</title>
    </head>
</head>


<body style="background-color: #3ca6ec;">
    <section class="signup">
        <div class="container">
            <div class="row p-5">
                <div class="col-3">

                </div>
                <div class="col-6 login text-center p-0">
                    <form action="signup.php" method="post">
                        <div class="form-row">
                            <div class="col-12">
                                <p class="remp py-4 px-0">

                                    CUSTOMER REGISTRATION !
                                </p>
                            </div>
                            <div class="col-12">
                                <img class="img-fluid" src="images/login/man.png" width=120px>
                            </div>
                            <div class="form-group col-8">
                                <input name="username" type="email" class="form-control"  placeholder="Email ID" required>
                            </div><br/>
                            <div class="form-group col-8 pt-5">
                                <input name="password" type="password" class="form-control"  placeholder="Password" required>
                            </div>
                            <div class="form-group col-8 pt-5">
                                <input name="cpassword" type="password" class="form-control"  placeholder="Confirm Password" required>
                            </div>
                              <div class="form-group col-12 pt-4" >
                                <button name="submit_btn" type="submit"class="btn btn-lg btn-primary">Create An Account</button>
                              </div>
                              <div class="form-group col-12 pt-2" >
                                  <a href="login.php">
                                <button  type="button" class="btn btn-lg btn-light" style="width:180px;">Back</button>
                              </div>
                        </div>
                    </form>
                    <?php
                    if(isset($_POST['submit_btn'])) {
                        // echo '<script type="text/javascript"> alert("Hello World") </script>';
                        $email = $_POST['username'];
                        $password = $_POST['password'];
                        $cpassword = $_POST['cpassword'];
                        
                        if($password == $cpassword) {
                            $query = "select * from user WHERE Email_ID = '$email' ";
                            $query_run = mysqli_query($con,$query);

                            if(mysqli_num_rows($query_run) > 0) {
                                // Email id already exists
                                echo '<script type="text/javascript"> alert("Email Id already exist!") </script>';
                            }

                            else {
                                $query = "insert into user values('$email' , '$password')";
                                $query_run = mysqli_query($con,$query);

                                if($query_run) {
                                    echo '<script type="text/javascript"> alert("User Registered .. Go to logIn page") </script>';
                                }
                                else {
                                    echo '<script type="text/javascript"> alert("Error!") </script>';
                                }
                            }
                        }

                        else {
                            echo '<script type="text/javascript"> alert("Password and confirm password does not match!") </script>';

                        }

                    
                    }
                    ?>

                </div>
            </div>
        </div>
    </section>

    <script src="bootstrap/JS/jquery-3.3.1.slim.min.js"></script>
    <script src="bootstrap/JS/popper.min.js"></script>
    <script src="bootstrap/JS/bootstrap.min.js"></script>
</body>

</html>