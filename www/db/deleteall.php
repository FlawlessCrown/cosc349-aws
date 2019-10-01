<?php
$dbhost = 'webnotes.cn4fbzuyvxpk.us-east-1.rds.amazonaws.com';
$dbname = 'notes';

$dsn = "mysql:host={$dbhost};dbname={$dbname};";
$username = 'admin';
$password = '!4h5CDEdyph8';

$pdo = new PDO($dsn, $username, $password);

$webnote = $_POST[wnote];
$pdo->query("DELETE FROM webNotes")
or die("An unexpected error occurred when deleting your note.");

echo "All Notes Successfully Deleted.\n";

header("refresh:1; url=../reader_index.php");
exit;
?>