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
                        <div class="login_form">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Login</h3>
                                </div>

                                <div class="panel-body">
                                    <?php
                                    if (isset($error)) {
                                        echo '<div class="alert-danger">' . $error . '</div><br/>';
                                    }
                                    ?>

                                    <form method="post" id="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" role="form">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" class="form-control" id="name" size="40" maxlength="60" required placeholder="Enter Name" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="surname">Surname</label>
                                            <input type="text" name="surname" class="form-control" id="surname" size="40" maxlength="60" required placeholder="Enter Surname" value="<?php if (isset($_POST['surname'])) echo $_POST['surname']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" class="form-control" id="email" size="40" maxlength="60" required placeholder="Enter Email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="Password">Password</label>
                                            <input type="password" name="password" class="form-control" id="password" size="40" maxlength="60" required placeholder="Enter Password" value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Login" name="login" class="form-control btn btn-success" id="login"/>
                                        </div>

                                        <p>Don't have an account ? <a href="Register.php" id="show_register">click here</a></p>
                                    </form>
                                </div>
                            </div>
                        </div><!--End login_form--> 
                    </div>
                </div>
            </div><!--End Container-->
        </div><!--End mainWrapper-->
    </body>
</html>
