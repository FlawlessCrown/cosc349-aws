<?php
$db_host   	= '192.168.2.12';
$db_name   	= 'webNotes';
$db_user   	= 'web_user';
$db_passwd 	= 'password';
$pdo_dsn   	= "mysql:host=$db_host;dbname=$db_name";
$pdo 	   	= new PDO($pdo_dsn, $db_user, $db_passwd);
$q 	     	= $pdo->query("SELECT * FROM webNotes ORDER BY noteID");
while($row 	= $q->fetch() or die(mysql_error())){
  echo "<tr><td>".$row["noteID"]."</td><td>".$row["note"]."</td></tr>\n";
}
?>