<?php

class Factorial {

	public $number;

	public function myFactor($fact){
		$this->number  = $fact;
		return gmp_fact($fact);
	}

}