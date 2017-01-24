<?php
//db details
/*$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'nuvevents';*/

$dbHost = 'localhost';
$dbUsername = 'smentin_palak';
$dbPassword = 'PKMN_sgo3#$';
$dbName = 'smentin_event';
//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>
