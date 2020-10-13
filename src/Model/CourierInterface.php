<?php 
namespace App\Model;

interface CourierInterface {
    public function generateLabel(): string;
    public function getName(): string;
    public function dispatchConsignments(array $consignments): void;
}