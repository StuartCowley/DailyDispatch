<?php 
namespace App\Model;

class UPSCourier implements CourierInterface{
    public function generateLabel(): string {
        return 'UPS' . rand(10000, 99999) . rand(1000, 9999) . 'GB';
    }
    public function getName(): string {
        return 'ups';
    }
    public function dispatchConsignments(array $consignments) : void {
        
    }
}