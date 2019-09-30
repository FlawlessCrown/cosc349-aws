<?php
$dbhost = 'webnotes.cn4fbzuyvxpk.us-east-1.rds.amazonaws.com';
$dbname = 'notes';

$dsn = "mysql:host={$dbhost};dbname={$dbname};";
$username = 'admin';
$password = '!4h5CDEdyph8';

$pdo = new PDO($dsn, $username, $password);

$q = $pdo->query("SELECT * FROM webNotes ORDER BY noteID;");

while($row 	= $q->fetch() or die(mysql_error())){
  echo "<tr><td>".$row["note"]."</td></tr>\n";
}
?>