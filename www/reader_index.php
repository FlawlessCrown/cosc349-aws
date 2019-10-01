<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
	<head>
		<meta charset="UTF-8">
		<title>Note Reader</title>
		<style>
			html {
				background-color: #99e6ff;
				font-size: 18px;
				color: inherit;
			}
			h1:after {
					content: ' ';
					display: block;
					border: 2px solid black;
					margin-top:2px;
				}
			th { 
				text-align: left; 
			}
			table, th, td {
				border: 2px solid;
				border-collapse: collapse;
			}
			th, tr, table{
				padding: 3px;
				width: 100%;
			}
			td{
				width:80%;
			}
			td:last-of-type {
				width: 20%;
			}
			section {
				width: 70%;
				margin-left:auto;
				margin-right:auto;
			}
			button {
				width: 160px;
			}
		</style>
	</head>
	<body>
		<section>
			<h1>Note Reader Page</h1>
			<form action="db/deleteall.php" method="post">
				<button type="submit" value="Delete All Notes" name="deleteall">Delete User Notes:</button>
				<input type="text" name="userid" id="userid" maxlength="9">
			</form>
			<form action="reader_index.php" method="post">
				<button type="submit" value="View User" name="viewuser">View User:</button>
				<input type="text" name="userid" id="userid" maxlength="9" value="default">
			</form>
			<table border="1">
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
				if($userid=='showall') {
					$q = $pdo->query("SELECT * FROM webNotes ORDER BY userID ASC;");
				} else {
					$q = $pdo->query("SELECT * FROM webNotes WHERE userID='$userid' ORDER BY userID ASC;");
				}
				while($row 	= $q->fetch() or die(mysql_error())){
				  echo "<tr><td>".$row["note"]."</td><td>".$row["userID"]."</td></tr>\n";
				}
				?>
			</table>
		</section>
	</body>
</html>
