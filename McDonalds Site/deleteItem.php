<?php
include('connection.php');
session_start();
$id = $_GET["id"];



//hier verwijdere we de item met het opgegeven id
$sql = "DELETE FROM berichten WHERE id = '" . $id . "'";
$con->query($sql);

header('location: berichten.php');
