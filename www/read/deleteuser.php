<?php
$dbhost = '';
$dbname = 'notes';
$dsn = "mysql:host={$dbhost};dbname={$dbname};";
$username = '';
$password = '';
$pdo = new PDO($dsn, $username, $password);
$webnote = $_POST[wnote];
$userid = $_POST[userid];
$pdo->query("DELETE FROM webNotes WHERE userID='$userid'")
or die("An unexpected error occurred when deleting your note.");
echo "All Notes Successfully Deleted From $userid.\n";
header("refresh:1; url=reader_index.php");
exit;
?>