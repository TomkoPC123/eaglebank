<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: gra.php');
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
	    <h1>Eagle Bank - Centrum Aktywności Informatycznej</h1>
	    <form action="zaloguj.php" method="post">
	
		    Numer karty kredytowej/debetowej: <br /> <input type="text" name="login" /> <br />
		    PIN: <br /> <input type="password" name="haslo" /> <br /><br />
		    <input type="submit" value="Zaloguj się" />
	
	    </form>
	   </div>
	
<?php
	if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
?>

</body>
</html>