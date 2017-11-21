<html>
 <head>
  <title>Contatore Accessi :D</title>
 </head>
 <body>
	<?php 
	if (!isset($_COOKIE["Biscotto"])){
		$contatore = 1;
    		$scadenza = time() + (86400 * 7); //86400 sono i secondi in un giorno!
    
		setcookie("Biscotto", $contatore, $scadenza);
    		setcookie("DataScadenza", $scadenza, $scadenza);
    
		print("Biscotto settato! Primo accesso eseguito ;) <br>");
	}
	else {
		
		$contatore = ++$_COOKIE["Biscotto"];
		
		setcookie("Biscotto", $contatore, $_COOKIE["DataScadenza"]);
		
		print("Biscotto rilevato! Hai eseguito l'accesso $contatore volte :D <br>");
	}

	?>
 </body>
</html>
