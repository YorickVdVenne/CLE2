<?php
require_once 'connectie_db.php';

if (isset($_POST['submit'])) {
//Postback with the data showed to the user, first retrieve data from 'Super global'
    $peopleAmount   = mysqli_real_escape_string($db, $_POST['aantal']);
    $date           = mysqli_real_escape_string($db, $_POST['datum']);
    $time           = mysqli_real_escape_string($db, $_POST['tijd']);
    $firstName      = mysqli_real_escape_string($db, $_POST['voornaam']);
    $lastName       = mysqli_real_escape_string($db, $_POST['achternaam']);
    $phoneNumber    = mysqli_real_escape_string($db, $_POST['telefoonnummer']);
    $email          = mysqli_real_escape_string($db, $_POST['email']);


    $query = "INSERT INTO reserveringen (aantal, datum, tijd, voornaam, achternaam, telefoonnummer, email)
                  VALUES ('$peopleAmount', '$date', '$time', '$firstName', '$lastName', '$phoneNumber', '$email')";
    $result = mysqli_query($db, $query)
    or die('Error: ' . $query);
    //When you inserted data into the table you'll get redirected to the index.php page
    if ($result) {
        header('Location: index.php');
        exit;
    } else {
        $errors[] = 'Something went wrong in your database query: ' . mysqli_error($db);
    }
    //Close connection
    mysqli_close($db);
    header('Location: Index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Reserveringssysteem</title>
    <link href="assets/css/firstPage.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <h1>Theepaviljoen de Horsten</h1>
    </header>
        <div class="topnav" id="myTopnav">
            <a href="Index.php">Home</a>
            <a href="Menu.php">Menu</a>
            <a href="HighTea.php">HighTea</a>
            <a href="Recepties.php">Recepties</a>
            <a href="Bruidstaart.php">Bruidstaart</a>
            <a href="Landgoed.php">Landgoed</a>
            <a href="RouteBeschrijving.php">Routebeschrijving</a>
            <a href="login.php">Login</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
        </div>
        <div id="contentFirst">
            <div class="backGroundTheme">
                <form method="post" name="container" class="container">
                    <h2 class="input">Reserveren</h2>
                    <div class="input">
                        <div class="labels">Hoeveelheid personen</div>
                        <input type="number" name="aantal" id="aantal" placeholder="Aantal">
                    </div>
                    <div class="input">
                        <div class="labels">Datum</div>
                        <input type="date" name="datum" id="datum" placeholder="dd-mm-jjjj">
                    </div>
                    <div class="input">
                        <div class="labels">Tijd</div>
                        <select name="tijd" id="tijd" class="input">
                            <option value="tijd">Tijd</option>
                            <option value="10:00">10:00</option>
                            <option value="10:30">10:30</option>
                            <option value="11:00">11:00</option>
                            <option value="11:30">11:30</option>
                            <option value="12:00">12:00</option>
                            <option value="12:30">12:30</option>
                            <option value="13:00">13:00</option>
                            <option value="13:30">13:30</option>
                            <option value="14:00">14:00</option>
                            <option value="14:30">14:30</option>
                            <option value="15:00">15:00</option>
                            <option value="15:30">15:30</option>
                            <option value="16:00">16:00</option>
                        </select>
                    </div>
                    <div class="input">
                        <div class="labels">Voornaam</div>
                        <input type="text" name="voornaam" id="voornaam" placeholder="Voornaam">
                    </div>
                    <div class="input">
                        <div class="labels">Achternaam</div>
                        <input type="text" name="achternaam" id="achternaam" placeholder="Achternaam">
                    </div>
                    <div class="input">
                        <div class="labels">Telefoonnummer</div>
                        <input type="tel" name="telefoonnummer" id="telefoonnummer" placeholder="Telefoonnummer">
                    </div>
                    <div class="input">
                        <div class="labels">Email</div>
                        <input type="email" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="data-submit">
                        <input type="submit" name="submit" id="submit" value="Reserveren">
                    </div>
                </form>

            </div>
        </div>

<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>
<script src="assets/js/stickynavbar.js"> </script>
</body>
</html>
