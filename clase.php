<?php
/**
*Ficheiro coa definición da clase <b>Coche</b> e máis métodos
*
*Define a clase Coche xunto coas súas propiedades, constructor e métodos. 
*
* @package JCR
* @license https://creativecommons.org/licenses/by-sa/4.0/legalcode Creative Commons 4.0 Attributioin ShareAlike
* @author José Conde Rivero <josecond@hotmail.es>
* @version Version 1.0.1
*/

/**
*
*Clase Coche
*
* @package JCR
* @license https://creativecommons.org/licenses/by-sa/4.0/legalcode Creative Commons 4.0 Attributioin ShareAlike
* @author José Conde Rivero <josecond@hotmail.es>
* @version Version 1.0.1
*/
class Coche{
	/**
	* @var integer RODAS indica el número de rodas do coche.
	*/
	const RODAS = 4;

	/**
	* @var string $color indica o color do coche.
	*/
	public $color;

	/**
	* @var string $modelo indica o modelo do coche.
	*/
	private $modelo;
	
	/**
	* Construtor da clase Coche.
	*
	* @param string $color color do coche.
	* @param string $modelo modelo do coche.
	* @return void
	*/	
	public function __construct ($color = "", $modelo = ""){
		$this->color = $color;
		$this->modelo = $modelo;
	}
	
	/**
	* Setter da propiedade color de Coche.
	*
	* @param string $color color do coche.
	* @return void
	*/	
	public function setColor($color){
		$this->color = $color;
	}

	/**
	* Getter da propiedade color.
	*
	* @return string Devolve o color do coche.
	*/	
	public function getColor(){
		return $this->color;
	}

	/**
	* Setter da propiedade modelo de Coche.
	*
	* @param string $modelo modelo do coche.
	* @return void
	*/	
	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	/**
	* Getter da propiedade modelo.
	*
	* @return string Devolve o modelo do coche.
	*/	
	public function getModelo(){
		return $this->modelo;
	}

	/**
	* Función que comproba se unha palabra é palindromo.
	*
	* @param string $palabra É a palabra que se vai a comprobar.
	* @return boolean Devolve si a palabra é palídromo ou non.
	*/	
	public function ePalindromo ($palabra){
		/**
		* @var boolean $devolve Contén o valor a devolver.
		*/
		$devolve = false;
		if ($palabra == strrev($palabra)){
			$devolve = true;
		}
		return $devolve;
	}

	/**
	* Función que comproba se un numero é primo.
	*
	* @param integer $numero É o número que se vai a comprobar.
	* @return boolean Devolve si o número é primo ou non.
	*/	
	public function ePrimo ($numero){
		/**
		* @var boolean $devolve Contén o valor a devolver.
		*/		
		$devolve= true;
		
		/**
		* @var integer $divisores Contén o numero de divisores atopados;
		*/
		$divisores = 0;
		for ($i = 1; $i < $numero; $i++) {
			if ($numero % $i == 0) {
				$divisores++;
			}
		}
		if ($divisores > 1) {
			$devolve=false;
		}
		return $devolve;
	}

	/**
	* Función que comproba se un número é maior que outro.
	*
	* @param integer $numero1 É o primeiro número que se vai a comprobar.
	* @param integer $numero2 É o segundo número que se vai a comprobar.
	* @return integer Devolve o número maior.
	*/		
	public function maior ($numero1 , $numero2){
		/**
		* @var boolean $devolve Contén o valor a devolver.
		*/		
		$devolve=$numero1;
		if ($numero2 > $numero1){
			$devolve=$numero2;
		}
		return $devolve;
	}
		/**
	* Función que calcula una ecuación de primeiro grao tipo ax+b=0.
	*
	* @param integer $a É o valor de a.
	* @param integer $b É o valor de b.
	* @return double Devolve o resultada da ecuación.
	*/	
	public function ecuacion($a , $b ){
	return (($b*-1)/$a);
	}
	
	/**
	* Función que comproba se un un ano é bisiesto.
	*
	* @param integer $ano É o ano que se vai a comprobar.
	* @return boolean Devolve si o ano é bisiesto ou non.
	*/		
	public function eBisiesto($ano){ 
		/**
		* @var boolean $devolve Contén o valor a devolver.
		*/		
		$devolve=false;
		if (($ano % 4 == 0) && (($ano % 100 != 0) || ($ano % 400 == 0))){
			$devolve=true;
		}
		return $devolve;
	}	
}
?>