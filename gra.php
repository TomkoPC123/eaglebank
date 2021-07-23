<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <link rel="stylesheet" href="style.css">
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Eagle Bank - Centrum Aktywności Informatycznej</title>
</head>

<body>
<div id="container">
    <?php

	    echo "<p>Witaj ".$_SESSION['user'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>';

	    echo "<p><b>Saldo</b>: ".$_SESSION['money'], " D$" ;
	
	    echo "<p><b>E-mail</b>: ".$_SESSION['email'];
		
		echo "<p><b>Kredyt</b>: ".$_SESSION['kredyt'];
	
    ?>

</div>

</body>
</html>