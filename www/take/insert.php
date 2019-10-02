<?php
$dbhost = 'webnotes.cn4fbzuyvxpk.us-east-1.rds.amazonaws.com';
$dbname = 'notes';
$dsn = "mysql:host={$dbhost};dbname={$dbname};";
$username = 'admin';
$password = '!4h5CDEdyph8';
$pdo = new PDO($dsn, $username, $password);
$webnote = $_POST[wnote];
if(isset($_POST[userid])){ 
	$userid = $_POST[userid];
}else {
	$userid = 'default';
}
$pdo->query("INSERT INTO webNotes (note, userID) VALUES ('$webnote', '$userid')")
or die("An unexpected error occurred when summitting your note.");
echo "Note Successfully Taken.\n";
header("refresh:0; url=taker_index.php");
exit;
?>