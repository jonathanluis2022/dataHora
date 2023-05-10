<?php


// data atual em segundos 
echo "<p> Mostrar data atual em timestamp: ". time() . "</p> " ;

// transforma os segundos em data dia/mes/ano 
echo "<p> Mostrar  timestamp em data atual : ". date("d/m/Y", time() ). "</p> " ;

// dia/mes/ano em sgundos 
echo "<p> Mostrar data atual em timestamp: ".strtotime("10/05/2023"). "</p> " ;

// almentar 100 dias mas tudo em segundos 
$data = "2023-05-10";
$nova_data = strtotime($data) + (86400*100);
echo "<p> somar 100 dias em uma data : " . date("d/m/Y", $nova_data) . "</p> " ;

// subtrair 
$data = "2023-05-10";
$nova_data = strtotime($data) - (86400*10);
echo "<p> subtraia 10 dias em uma data : " . date("d/m/Y", $nova_data) . "</p> " ;

// converteer a data dia/mes/ano para o bd ano/mes/dia 
echo "<p> converter para o banco de dados : ". date( "Y/m/d" , time()). "</p> " ;

// dia da semana colocando em MAIUSCULO O "D"
echo "<p> Descobrir o dia da semana de uma data : ".date("D" , $nova_data). "</p> " ;



