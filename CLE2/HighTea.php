<?php
require_once "connectie_db.php";
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
                <div class="backGroundThemeHighTea">
                    <div class="highTeaContainer">
                        <h2 class="entryTitle">High Tea</h2>
                        <div class="titleUnderline">
                        </div>
                        <div class="whiteLine">
                        </div>
                        <div id="highTeaText">
                            <p>
                                <strong>High Tea (alleen op reservering vanaf 2 personen; van woensdag tot en met zaterdag).</strong>
                            </p>
                            <p>
                                We beginnen de High Tea met een glas Prosecco gevolgd door een klein voorgerecht (wisselend per seizoen) daarna een soepje en aansluitend en een etagère met 3 sandwiches,
                                een scone met jam en room, een stukje zoete taart, een plakje huisgemaakte cake en een maccaron.
                                En een coupje verse (seizoen) vruchten. Er wordt een pot verse thee voor U bereid met keus uit verschillende Dilmah thee:
                            </p>
                            <ul>
                                <li>Ceylon Single Estate</li>
                                <li>Earl Grey met Citroen en Lavendel</li>
                                <li>Rooibos Citrus</li>
                                <li>Moroccan Mint</li>
                                <li>Oolong Perzik</li>
                            </ul>
                            <p>
                                <strong>Afternoon Tea (alleen op reservering vanaf 2 personen; van woensdag tot en met zaterdag).</strong>
                            </p>
                            <p>
                                Als U minder tijd heeft maar toch even wil genieten van meer dan een kopje thee is er ook de Afternoon Tea,
                                hierbij wordt alleen de etagère en de thee geserveerd.
                            </p>
                            <p>
                                <strong>Royal Tea (alleen op reservering vanaf 2 personen; van woensdag tot en met zaterdag).</strong>
                            </p>
                            <p>
                                Onze Royal Tea wordt net als onze Afternoon en High tea geserveerd van 15:00 tot 17:00 uur.

                                Deze thee wordt geserveerd met het Engelse “Royal Albert” servies en uw tafel wordt stijlvol gedekt.
                                Deze Royal Tea wordt vanaf 2 personen tot maximaal 12 personen geserveerd en dient minimaal 2 dagen eerder bij ons te worden gereserveerd.
                            </p>
                            <p>
                                De Royal Tea is een beleving van luxe, zoete en hartige gerechtjes. Vooraf aan de Royal Tea wordt een glas Prosecco geserveerd.
                                En aansluitend komt er een heerlijke pot thee naar keuze. De Royal Tea wordt afgesloten met een glas wijn of een ander drankje naar wens.
                            </p>
                            <p>
                                <strong>Prijzen p.p. :</strong>
                            </p>
                            <p>
                                High Tea € 27,-

                                Afternoon Tea € 19,-

                                Royal Tea € 38,-
                            </p>
                            <p>
                                Ook is het mogelijk om in de periode van half mei tot 1 september te reserveren voor een High Tea buffet tussen 17:00 en 19:00 uur.
                                Uw gezelschap dient dan minimaal uit 40 personen tot maximaal 60 personen te bestaan.
                            </p>
                            <p>
                                Het theepaviljoen is dan privé voor uw gezelschap.
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
</body>
</html>
