<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Note Taker</title>
		<style>
			html {
				background-color: #99e6ff;
				font-size: 18px;
				color: inherit;
			}
			form input{
				width: 90%;
			}
		</style>
	</head>
	<body>
		<h1>Note Taking Page</h1>
		<form action="db/insert.php" method="post" autocomplete="off">
			<p>
				<label for="wnote">Note:</label>
				<input type="text" name="wnote" id="wnote">
			</p>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>
