<?php
	
	// Date = y => 18, Y => 2018 - m - d
	echo $data = date("d/m/Y")."<br /><br />";
	echo $data = date("d-m-Y")."<br /><br />";
	echo $horas = date("H:i")."<br /><br />";
	
	// Strtotime
	$data_inicial = '2018-07-02';
	$data_final = '2018-07-05';
	
	$time_inicial = strtotime($data_inicial);
	$time_final = strtotime($data_final);
	
	$diferenca_time = $time_final - $time_inicial;
		echo $diferenca_time."<br /><br />";
		
	$diaSegundos = 24*60*60;
	$diferenca_dias = $diferenca_time / $diaSegundos;
	echo $diferenca_dias;
	
?>