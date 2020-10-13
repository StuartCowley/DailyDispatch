<?php 
namespace App\Model;

class RoyalMailCourier implements CourierInterface{
    public function generateLabel(): string {
        return 'RM' . rand(10000, 99999) . rand(10000, 99999) . 'GB';
    }
    public function getName(): string {
        return 'royal_mail';
    }
    public function dispatchConsignments(array $consignments) : void {
        
    }
}