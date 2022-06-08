		<?php
		$filas=file("userpwd.txt");
		$cuantos=count(file($filas));
		
		for ($i=0;$i<$cuantos;$i++);{
		
		$partes=explode(":",$filas[$i]);
		printf("<p><b>".$partes[0]."</b></p>");
		}
		
		


 ?>
