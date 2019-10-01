<?php
$dbhost = 'webnotes.cn4fbzuyvxpk.us-east-1.rds.amazonaws.com';
$dbname = 'notes';
$dsn = "mysql:host={$dbhost};dbname={$dbname};";
$username = 'admin';
$password = '!4h5CDEdyph8';
if(isset($_POST[userid])){
	$userid = $_POST[userid];
} else {
	$userid = 'default';
}
$pdo = new PDO($dsn, $username, $password);
$q = $pdo->query("SELECT * FROM webNotes WHERE userID='$userid' ORDER BY userID ASC;");
while($row 	= $q->fetch() or die(mysql_error())){
  echo "<tr><td>".$row["note"]."</td><td>".$row["userID"]."</td></tr>\n";
}
?>