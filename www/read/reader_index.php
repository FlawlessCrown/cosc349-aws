<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
	<head>
		<meta charset="UTF-8">
		<title>Note Reader</title>
		<link href="StyleSheet.css" rel="stylesheet", type="text/css">
	</head>
	<body>
		<section>
			<h1>Note Reader Page</h1>
			<form action="deleteuser.php" method="post">
				<button type="submit" value="Delete All Notes" name="deleteall">Delete User Notes:</button>
				<input type="text" name="userid"  required="required" pattern="[A-Za-z0-9]{1,9}" id="userid" maxlength="9">
			</form>
			<form action="reader_index.php" method="post">
				<button type="submit" value="View User" name="viewuser">View User:</button>
				<?php
					if(isset($_POST[userid])){
						$userid = $_POST[userid];
					} else {
						$userid = 'default';
					}
					echo "<input type='text' name='userid' id='userid' required='required' pattern='[A-Za-z0-9]{1,9}' value='$userid' autofocus onfocus='this.select();'/>";
				?>
			</form>
			<table border="1">
				<?php
				$dbhost = '';
				$dbname = 'notes';
				$dsn = "mysql:host={$dbhost};dbname={$dbname};";
				$username = '';
				$password = '';
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
