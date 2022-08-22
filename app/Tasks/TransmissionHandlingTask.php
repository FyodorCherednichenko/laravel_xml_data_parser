<?php
declare(strict_types=1);

namespace App\Tasks;

use App\Models\Transmission;
use App\QueryBuilders\TransmissionQueryBuilder;

class TransmissionHandlingTask
{
    public function __construct(
        public TransmissionQueryBuilder $query
    ) {
    }

    public function execute(string $transmission): int
    {
        if (empty($transmission)) {
            return 0;
        }

        $db_val = $this->query->clone()->existsByName($transmission)->first();

        if ($db_val === null) {
            $model = new Transmission();
            $model->name = $transmission;
            $model->save();

            return $model->id;
        }

        return $db_val->id;
    }
}
