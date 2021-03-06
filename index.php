<?php
/**
*Ficheiro que mostra o funcionamento da clase <b>Coche</b> e os seus métodos.
*
*Mostra a clase Coche xunto coas súas propiedades, constructor e métodos. 
*
* @package JCR
* @license https://creativecommons.org/licenses/by-sa/4.0/legalcode Creative Commons 4.0 Attributioin ShareAlike
* @author José Conde Rivero <josecond@hotmail.es>
* @version Version 1.0.1
*/
// Incluimos o  arquivo que contén a clase Coche clase.php
include "clase.php";

 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DAW Tarefa 06</title>
    </head>
    <body>
		<header><h1>DAW Tarefa 06</h1></header>
		<section>
			<?php
			// Creamos un obxeto Coche e visualizámos as suas propiedades cos métodos getter.
			$coche= new Coche("Azul","Opel Zafira");
			echo "<b>Cor do coche:</b>".$coche->getColor();
			echo " <b>Modelo do coche:</b>".$coche->getModelo()."<br /><br />";
			
			//Cos setter cambiamos os valores das propiedades
			$coche->setColor("Bermello");
			$coche->setModelo("Seat Toledo");
			echo "<b>Cor do coche modificado :</b>".$coche->getColor();
			echo " <b>Modelo do coche modificado:</b>".$coche->getModelo()."<br /><br />";

			//Metodo palíndromo
			$palabra="arenera";
			if ($coche->ePalindromo($palabra)){
			   echo "A palabra <b>'".$palabra."'</b> é palíndromo.<br /><br />";
			}else{
			   echo "A palabra <b>'".$palabra."'</b> no é palíndromo.<br /><br />";
			}
			$palabra="adios";
			if ($coche->ePalindromo($palabra)){
			   echo "A palabra <b>'".$palabra."'</b> é palíndromo.<br /><br />";
			}else{
			   echo "A palabra <b>'".$palabra."'</b> no é palíndromo.<br /><br />";
			}		   
			
			//Método ePrimo
			$numero="13";
			if ($coche->ePrimo($numero)){
			   echo "O número <b>'".$numero."'</b> é primo.<br /><br />";
			}else{
			   echo "O número <b>'".$numero."'</b> no é primo.<br /><br />";
			}
			$numero="12";
			if ($coche->ePrimo($numero)){
			   echo "O número <b>'".$numero."'</b> é primo.<br /><br />";
			}else{
			   echo "O número <b>'".$numero."'</b> non é primo.<br /><br />";
			}
			
			//Método maior
			echo "O número maior é o <b>'".$coche->maior(8,25)."'</b><br /><br />";
			
			//Método ePrimo
			$ano="2016";
			if ($coche->eBisiesto($ano)){
			   echo "O ano <b>'".$ano."'</b> é bisiesto.<br /><br />";
			}else{
			   echo "O ano <b>'".$ano."'</b> non é bisiesto.<br /><br />";
			}			

			$ano="2018";
			if ($coche->eBisiesto($ano)){
			   echo "O ano <b>'".$ano."'</b> é bisiesto.<br /><br />";
			}else{
			   echo "O ano <b>'".$ano."'</b> non é bisiesto.<br /><br />";
			}			
			?>
		</section>
		<footer><h2>José Conde Rivero</h2></footer>
    </body>
</html>