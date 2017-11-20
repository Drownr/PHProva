<?php 
	if (!isset($_COOCKIE["Biscotto")){
		$contatore = 0;
		setcookie("Biscotto", $contatore);
		echo "Biscotto settato! Primo accesso eseguito ;) <br>";
	}

?>

<html>
 <head>
  <title>Contatore Accessi :D</title>
 </head>
 <body>
 </body>
</html>