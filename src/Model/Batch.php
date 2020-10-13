<?php
namespace App\Model;

use DateTimeImmutable;

class Batch {
    private array $consignments = [];
    private array $couriers = [];
    private DateTimeImmutable $createdAt;
    private ?DateTimeImmutable $closedAt = NULL;
    public function __construct() {
        $this->createdAt = new DateTimeImmutable();
    }
    public function isOpen(): bool {
        return $this->closedAt === NULL;
    }
    
	public function addConsignment(Consignment $consignment) {
        $courier = $consignment->getCourier();
        $this->couriers[$courier->getName()] = $courier;
        if (!isset($this->consignments[$courier->getName()])) {
            $this->consignments[$courier->getName()] = [];
        }
        $this->consignments[$courier->getName()][] = $consignment;
	}
	public function close() {
        $this->closedAt = new DateTimeImmutable;
        foreach ($this->couriers as $courier) {
            $courier->dispatchConsignments($this->consignments[$courier->getName()]); 
        }
	}
}