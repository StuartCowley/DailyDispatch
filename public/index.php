<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Repository\BatchRepository;
use App\Model\Consignment;
use App\Model\RoyalMailCourier;
use App\Model\ParcelForceCourier;
use App\Model\UPSCourier;

$batchRepo = new BatchRepository;

$dailyDispatch = $batchRepo->getCurrentBatch();

$dailyDispatch->addConsignment(new Consignment(new RoyalMailCourier));
$dailyDispatch->addConsignment(new Consignment(new ParcelForceCourier));
$dailyDispatch->addConsignment(new Consignment(new RoyalMailCourier));
$dailyDispatch->addConsignment(new Consignment(new UPSCourier));

var_dump($dailyDispatch);
