<?php
require_once 'connectie_db.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Reserveringssysteem</title>
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
                        <?php if(isset($_SESSION['email'])) { ?>
                            <li><a href="secure.php">Beheer pagina</a></li>
                            <li><a href="logout.php">Log out</a></li>
                        <?php } else { ?>
                            <li><a href="secure.php"><small>Log in</small></a></li>
                        <?php } ?>
                    </ul>
                </nav>
            </div>
            <div id="content">
                <div class="backGroundTheme">
                    <div class="routeBeschrijvingContainer">
                        <h2 class="entryTitleRoute">Route Beschrijving</h2>
                        <div class="titleUnderline">
                        </div>
                        <div class="whiteLine">
                        </div>
                        <div id="routeBeschrijvingText">
                            <p>
                                <strong>Dit adres is voor uw navigatiesysteem: Papeweg 36, Wassenaar</strong>
                            </p>
                            <p>
                                Telefoon: 070 – 511 26 19
                            </p>
                            <p>
                                Postadres: Raaphorst 6, 2245 BA Wassenaar
                            </p>
                        </div>
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
