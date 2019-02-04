<?php
session_start();
//Require database in this file
require_once "connectie_db.php";
//If form is posted, lets validate!
if (isset($_POST['submit'])) {
    //Retrieve values (email safe for query)
    $email      = mysqli_escape_string($db, $_POST['email']);
    $password   = $_POST['password']; // real_escape_string is not needed because of hash later.
    $errors = [];
    if(empty($email)) {
        $errors['email'] = 'Email cannot be empty';
    }
    if(empty($password)) {
        $errors['password'] = 'Password cannot be empty';
    }
    // If everything is filled in the db can be checked
    if(empty($errors))
    {
        //Get password & name from DB
        $query = "SELECT * 
              FROM users
              WHERE email = '$email'";
        $result = mysqli_query($db, $query);
        $user = mysqli_fetch_assoc($result);
        //Check if email exists in database
        $errors = [];
        if ($user)
        {
            //Validate password
            if (password_verify($password, $user['password'])) {
                //Set email for later use in Session
                $_SESSION['email'] = $email;
                //Redirect to secure.php & exit script
                header("Location: secure.php");
                exit;
            }
            else {
                $errors['password'] = 'The password is incorrect';
            }
        } else
        {
            $errors['email'] = 'This email does not appear to exist.';
        }
    }
}
?>
<!doctype html>
<html>
<head>
    <title>Reserveringssysteem</title>
    <meta charset="utf-8"/>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="fullPage">
        <section id="page1">
            <header>
                <h1>Theepaviljoen de Horsten</h1>
            </header>
            <div id="navBar">
                <nav class="mainBar">
                    <ul>
                        <li><a href="Index.php">Home</a></li>
                        <li><a href="Menu.php">Menu</a></li>
                        <li><a href="HighTea.php">High Tea</a></li>
                        <li><a href="Recepties.php">Recepties</a></li>
                        <li><a href="Bruidstaart.php">Bruidstaart</a></li>
                        <li><a href="Landgoed.php">Landgoed</a></li>
                        <li><a href="RouteBeschrijving.php">Route beschrijving</a></li>
                        <li><a href="login.php"><small>Log in</small></a></li>
                    </ul>
                </nav>
            </div>
            <div id="content">
                <div class="backGroundTheme">
                    <div class="loginForm">
                        <h2>Login</h2>
                            <form id="login" method="post" action="<?= $_SERVER['REQUEST_URI']; ?>">
                                <div class="inputEmail">
                                    <div>
                                        <label for="email">E-mail*</label>
                                    </div>
                                    <input type="email" name="email" id="email"/>
                                    <span class="error"><?= isset($errors['email']) ? $errors['email'] : ''; ?></span>
                                </div>
                                <div class="inputPassword">
                                    <div>
                                        <label for="password">Wachtwoord*</label>
                                    </div>
                                    <input type="password" name="password" id="password"/>
                                    <span class="error"><?= isset($errors['password']) ? $errors['password'] : ''; ?></span>
                                </div>
                                <div class="loginSubmit">
                                    <input type="submit" name="submit" value="Login"/>
                                </div>
                            </form>
                     </div>
                 </div>
            </div>
        </section>
        <footer>
            <p>Theepaviljoen de Horsten | Papeweg 36 | 2245 BA Wassenaar | tel: 070-5112619</p>
        </footer>
    </div>
<script src="assets/js/stickynavbar.js"> </script>
</body>
</html>