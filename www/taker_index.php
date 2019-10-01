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
			h1:after {
				content: ' ';
				display: block;
				border: 2px solid black;
				margin-top:2px;
			}
			form input{
				width: 100%;
			}
			section {
				width: 70%;
				margin-left:auto;
				margin-right:auto;
			}
			textarea {
				resize: none;
				width: 100%;
			}
		</style>
	</head>
	<body>
		<section>
			<h1>Note Taking Page</h1>
			<form action="db/insert.php" method="post" autocomplete="off">
				<p>
					<label for="wnote">Note:</label>
					<textarea type="text" name="wnote" id="wnote" maxlength="70"></textarea>
				</p>
				<input type="submit" value="Add">
			</form>
		</section>
	</body>
</html>
