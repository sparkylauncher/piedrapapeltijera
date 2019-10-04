<html>
<head>
		<?php 
		//0 -> piedra | 1 -> papel | 2 -> tijeras
		$arrayj1 = [ 0 => "&#x1F91C;", 1 => "&#x1F91A;", 2 => "&#x1F596;"];
		$arrayj2 = [ 0 => "&#x1F91B;", 1 => "&#x1F91A;", 2 => "&#x1F596;"];
		$j1 = array_rand($arrayj1);
		$j2 = array_rand($arrayj2);
		$resultado = "";
 
		/* posibles resultados 
		res		ganador		valor_resta
		00 		empate
		01 		j2 			-1
		02 		j1 			-2
		10 		j1			 1
		11 		empate
		12 		j2 			-1
		20 		j2 			 2
		21 		j1			 1
		22 empate*/
		
		if($j1 == $j2)
			$resultado = "¡Empate!";
		else{
			if($j1-$j2 == 1 || $j1-$j2 == -2)
				$resultado = "¡Ha ganado el jugador 1!";
			else
				$resultado = "¡Ha ganado el jugador 2!";
			}

		?>
	<style>
	   span{
	       font-size: 7rem;
	       font-weight: normal;
	   }
	   td{
	       text-align: center;
	   }
	   table{
	       font-weight: bold;
	   }
	   
	</style>
</head>

<body>
	<h1 style="text-align: center">Piedra,Papel,Tijera</h1><br/>
	<p>Actualice esta página para mostrar otra partida</p>
    <table>
    	<tr>
    		<td>Jugador 1</td>
    		<td>jugador 2</td>
    	</tr>
    		<tr>
    		<td><span><?php echo $arrayj1[$j1];?></span></td>
    		<td><span><?php echo $arrayj2[$j2];?></span></td>
    	</tr>
    		<tr>
    		<td colspan=2><?php echo $resultado;?></td>
    	</tr>
    </table>
</body>
</html>