<?php
//Require music data & image helpers to use variable in this file
require_once "connectie_db.php";

//Retrieve the GET parameter from the 'Super global'
$reservationId = $_GET['id'];

//Remove from the database
$query = "DELETE FROM reserveringen WHERE id = " . mysqli_escape_string($db, $reservationId);

mysqli_query($db, $query) or die ('Error: '.mysqli_error($db));

//Close connection
mysqli_close($db);

//Redirect to homepage after deletion & exit script
header("Location: secure.php");
exit;
