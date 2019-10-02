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
						if(isset($_POST[userid])){
							$userid = $_POST[userid];
						} else {
							$userid = 'default';
						}
						echo "<br><input type='text' name='userid' id='userid' maxlength='9' value='$userid' onclick='this.select();'/>";
					?>
				</p>
				<p>
					<label for="wnote">Note:</label>
					<br><input type="text" name="wnote" id="wnote" maxlength="70" autofocus>
				</p>
				<button type="submit" name="inserting">Add Note</button>
			</form>
		</section>
	</body>
</html>
