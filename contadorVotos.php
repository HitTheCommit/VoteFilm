<?php
	include('conexion.php');

	function contarVotos($host, $user, $pw, $db){
		
		$con = mysqli_connect($host, $user, $pw)
				or die("problemas al conectar server");
			
			mysqli_select_db($con, $db)
				or die("problemas al conectar db");
		
		$peliculaVotos;
		
		$votosPorCiento = array();

		$votostotales=0;
		$j=0;

			$peliculaVotos = mysqli_query($con,'SELECT votos FROM peliculas')
									or die ('Error en contavilizar los datos');

			while($row[] = mysqli_fetch_assoc($peliculaVotos)){
				$votostotales = $votostotales + $row[$j]['votos'];
				$j++;
			}
		

		for ($i=0; $i < 7; $i++) { 
			
			if($row[$i]['votos'] == 0){
			
				$votosPorCiento[$i] = 0;
			
			}else{
			
				$votosPorCiento[$i] = $row[$i]['votos']/$votostotales;
				$votosPorCiento[$i] = $votosPorCiento[$i]*100;
			
			}
		
		}

		return $votosPorCiento;

	}
?>