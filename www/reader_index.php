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
		th { text-align: left; }
		table, th, td {
		  border: 2px solid;
		  border-collapse: collapse;
		}
		th, td {
		  padding: 3px;;
		}
		td {
		  width: 100%;
		}
	</style>
	</head>
	<body>
		<h1>Note Reader Page</h1>
		<p>Showing notes:</p>
		<table border="1">
			<?php require 'db/read.php';?>
		</table>
	</body>
</html>
