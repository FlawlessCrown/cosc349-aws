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

$q 	     	= $pdo->query("SELECT * FROM webNotes ORDER BY noteID");
while($row 	= $q->fetch() or die(mysql_error())){
  echo "<tr><td>".$row["note"]."</td></tr>\n";
}
?>