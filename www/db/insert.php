<?php
$db_host   	= '192.168.2.12';
$db_name   	= 'webNotes';
$db_user   	= 'web_user';
$db_passwd 	= 'password';
$pdo_dsn   	= "mysql:host=$db_host;dbname=$db_name";
$pdo = new PDO($pdo_dsn, $db_user, $db_passwd)
or die("ERROR: Could not connect to database");
$webnoteID = $_POST[wnoteID];
$webnote = $_POST[wnote];
$pdo->query("INSERT INTO webNotes (noteID, note) VALUES('$webnoteID', '$webnote')")
or die("An unexpected error occurred when summitting your note.");
echo "Note Successfully Taken.\n";
header('location: http://192.168.2.11');
exit;
?>