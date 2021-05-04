<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include_once ('libs/loginUsers.php'); ?>
<html>
    <head>
        <title>TODO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/bootstrap-theme.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </head>
    <body>
        <div id="mainWrapper">
           <br/><br/><br/>
            <div class="container">


                <div class="row">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-6">
                      <div class="register_form">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Register Here</h3>
                                </div>

                                <div class="panel-body">
                                    <?php
                                    if (isset($error)) {
                                        echo '<div class="alert-danger">' . $error . '</div><br/>';
                                    }
                                    ?>

                                    <form method="post" id="form" action="Register.php" role="form">
                                        <div class="form-group">
                                            <label for="name">First Name</label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter First Name"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="surname">Last Name</label>
                                            <input type="text" name="surname" class="form-control" id="surname" placeholder="Enter Surname"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="Email">Email</label>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="Password">Password</label>
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="Password">Password Again</label>
                                            <input type="password" name="repassword" class="form-control" id="repassword" placeholder="Enter Password Again"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Register" name="register" class="form-control btn btn-success" id="register"/>
                                        </div>
                                        <p><a href="login.php" id="show_login">Already have an account ?</a></p>
                                    </form>
                                </div>
                            </div>
                        </div><!--end register_form-->
                    </div>
                </div>
            </div><!--End Container-->
        </div><!--End mainWrapper-->
    </body>
</html>