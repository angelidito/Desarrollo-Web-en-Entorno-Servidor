<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ejercicio 9</title>
	<style>
		body {
			background-color: rgb(93, 101, 128);
			color: white;
			margin: 0;
		}

		table {
			border: 5px solid white;
			border-collapse: collapse;
		}

		a {
			text-decoration: none;
		}

		a:visited,
		a:link,
		a:hover,
		a:active {
			color: white;
		}

		td,
		th {
			font-size: 25px;
			border: 1px solid black;
			padding: 5px;
		}

		div {
			display: flex;
			height: 100vh;
			align-items: center;
			justify-content: center;
		}
	</style>
</head>

<body> 
	<?php
	session_start();
	if (isset($_SESSION['ciclo'])) {
		header('Location: enlaces.php?ciclo=' . $_SESSION['ciclo']);
	}
	?>
	<div>
		<table>
			<tr>
				<th>DAM</th>
				<th>DAW</th>
				<th>ASIR</th>
			</tr>
			<tr>
				<td>
					<a href="enlaces.php?ciclo=dam">Accede al CFGS DAM</a>
				</td>
				<td>
					<a href="enlaces.php?ciclo=daw">Accede al CFGS DAW</a>
				</td>
				<td>
					<a href="enlaces.php?ciclo=asir">Accede al CFGS ASIR</a>
				</td>
			</tr>
		</table>
	</div>
</body>

</html>