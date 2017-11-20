<html>
 <head>
  <title>Contatore Accessi :D</title>
 </head>
 <body>
	<?php 
	if (!isset($_COOKIE["Biscotto"])){
		$contatore = 0;
		setcookie("Biscotto", $contatore);
		echo "Biscotto settato! Primo accesso eseguito ;) <br>";
	}
	else{
		$contatore = ++$_COOKIE["Biscotto"];
		setcookie("Biscotto", $contatore);
		print("Biscotto rilevato! Hai eseguito l'accesso $contatore volte :D <br>");
	}

	?>
 </body>
</html>