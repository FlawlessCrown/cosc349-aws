<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Note Taker</title>
		<link href="StyleSheet.css" rel="stylesheet", type="text/css">
	</head>
	<body>
		<section>
			<h1>Note Taking Page</h1>
			<form action="insert.php" method="post" autocomplete="off">
				<p>
					<label for="userid">UserID:</label>
					<?php
						if(isset($_GET[userid])){
							$userid = $_GET[userid];
						} else{
							$userid = 'default';
						}
						echo "<br><input type='text' name='userid' id='userid' required='required' pattern='[A-Za-z0-9]{1,9}' value='$userid' onclick='this.select();'/>";
					?>
				</p>
				<p>
					<label for="wnote">Note:</label>
					<br><input type="text" name="wnote" id="wnote" maxlength="100" autofocus required="required" pattern="[A-Za-z0-9]{1,100}">
				</p>
				<button type="submit" name="inserting">Add Note</button>
			</form>
		</section>
	</body>
</html>
