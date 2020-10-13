<?php 
namespace App\Model;

class ParcelForceCourier implements CourierInterface{
    public function generateLabel(): string {
        return 'PF' . rand(10000, 99999) . rand(10000, 99999) . 'GB';
    }
    public function getName(): string {
        return 'parcelforce';
    }
    public function dispatchConsignments(array $consignments) : void {
        
    }
}