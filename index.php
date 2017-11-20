<html>
 <head>
  <title>Contatore Accessi :D</title>
 </head>
 <body>
	<?php 
	if (!isset($_COOKIE["Biscotto"])){
		$contatore = 1;
		setcookie("Biscotto", $contatore, time() + (86400 * 7));	//86400 sono i secondi in un giorno!
		echo "Biscotto settato! Primo accesso eseguito ;) <br>";
	}
	else{
		$contatore = ++$_COOKIE["Biscotto"];
		setcookie("Biscotto", $contatore, time() + (86400 * 7));
		print("Biscotto rilevato! Hai eseguito l'accesso $contatore volte :D <br>");
	}

	?>
 </body>
</html>