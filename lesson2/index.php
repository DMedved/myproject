<?php
class Animal {
	protected $params = [
		'weight' => 0,
		'color' => 'white',
	];
	
	protected $params = 
	
	function getWeight() {
			return $this->params('weight');
	}
	
	function setWeight($weight) {
			$this->params['color'];
	}
	function getColor(){
		return $this->params['color'];
	}
	function setColor($Color){
		$this->params['color'] = $color;
	}
	
	public $weight;
	
	public function show() {
		print_r($this);
	}
};

$p = new Animal();
$p->weight = 10;

print '<pre>';
$p-> show();
