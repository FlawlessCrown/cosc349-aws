<?php
$dbhost = 'webnotes.cn4fbzuyvxpk.us-east-1.rds.amazonaws.com';
$dbport = '3306';
$dbname = 'notes';

$dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};";
$username = 'admin';
$password = '!4h5CDEdyph8';

$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
); 

$pdo = new PDO($dsn, $username, $password, $options);

$webnote = $_POST[wnote];
$pdo->query("INSERT INTO webNotes(note) (note) VALUES('$webnote')")
echo "Note Successfully Taken.\n";
header("location:javascript://history.go(-1)");
exit;
?>