<?php
//Require DB settings with connection variable
require_once "connectie_db.php";

//Get the result set from the database with a SQL query
$query = "SELECT * FROM reserveringen";
$result = mysqli_query($db, $query);

//Loop through the result to create a custom array
$reservations = [];
while ($row = mysqli_fetch_assoc($result)) {
    $reservations[] = $row;
}

//Close connection
mysqli_close($db);
