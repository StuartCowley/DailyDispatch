<?php 

namespace App\Model;

class Consignment {
    private CourierInterface $courier;
    private string $label;
	function __construct(CourierInterface $courier) {
		$this->courier = $courier;
		$this->label = $courier->generateLabel();
    }
    public function getCourier(): CourierInterface {
        return $this->courier;
    }
}