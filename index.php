<?php 
	if (isset($_COOCKIE["Biscotto") == false){
		$contatore = 0;
		setcookie("Biscotto", $contatore);
		echo "Biscotto settato! Primo accesso eseguito ;) <br>";
	}
	else{
		$contatore = $_COOCKIE["Biscotto"] + 1;
		setcookie("Biscotto", $contatore);
		print "Il Biscotto dice che hai effettuato " . $contatore . " accessi questa settimana. <br>";
	}
	
?>

<html>
 <head>
  <title>Contatore Accessi :D</title>
 </head>
 <body>
 </body>
</html>