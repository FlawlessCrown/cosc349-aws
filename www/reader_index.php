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
			th, td, tr, table{
				padding: 3px;
				width: 100%;
			}
			section {
				width: 70%;
				margin-left:auto;
				margin-right:auto;
			}
		</style>
	</head>
	<body>
		<section>
			<h1>Note Reader Page</h1>
			<form action="db/deleteall.php">
				<button type="submit" value="Delete All Notes">Delete All Notes</button>
			</form>
			<table border="1">
				<?php require 'db/read.php';?>
			</table>
		</section>
	</body>
</html>
