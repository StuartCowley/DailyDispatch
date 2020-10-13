<?php

namespace App\Repository;

use App\Model\Batch;

class BatchRepository {
    private array $batches = [];
    public function getCurrentBatch(): Batch {
        $batch = end($this->batches);
        if ($batch === false || !$batch->isOpen()) {
            $batch = new Batch;
            $this->batches[] = $batch;
        }
        return $batch;
    }
}