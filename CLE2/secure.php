<?php
session_start();
require_once "reserverings-data.php";
?>
<!doctype html>
<html>
<head>
    <title>Admin Page</title>
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
                        <li><a href="logout.php">Logout</a></li>

                </nav>
            </div>
            <div id="content">
                <div class="backGroundTheme">
                    <div class="adminContainer">
                        <h4>Reserveringen</h4>
                        <table id="reservations">
                            <thead>
                            <tr>
                                <th>Aantal</th>
                                <th>Datum</th>
                                <th>Tijd</th>
                                <th>Voornaam</th>
                                <th>Achternaam</th>
                                <th>telefoonnummer</th>
                                <th>email</th>
                                <th colspan="2"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($reservations as $reservation) {
                                $id = $reservation['id'];
                                ?>
                                <tr>
                                    <td><?= $reservation['aantal']; ?></td>
                                    <td><?= $reservation['datum']; ?></td>
                                    <td><?= $reservation['tijd']; ?></td>
                                    <td><?= $reservation['voornaam']; ?></td>
                                    <td><?= $reservation['achternaam']; ?></td>
                                    <td><?= $reservation['telefoonnummer']; ?></td>
                                    <td><?= $reservation['email']; ?></td>
                                    <td><a href="delete.php?id=<?= $reservation['id']; ?>">Delete</a></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
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