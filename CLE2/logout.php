<?php
session_start();

//Destroy the whole session, redirect & exit script
session_destroy();
header("Location: Index.php");
exit;