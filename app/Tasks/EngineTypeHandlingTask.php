<?php
declare(strict_types=1);

namespace App\Tasks;

use App\Models\EngineType;
use App\QueryBuilders\EngineTypeQueryBuilder;

class EngineTypeHandlingTask
{
    public function __construct(
        public EngineTypeQueryBuilder $query
    ) {
    }

    public function execute(string $value): int
    {
        if (empty($value)) {
            return 0;
        }

        $db_val = $this->query->clone()->existsByName($value)->first();
        if ($db_val === null) {
            $model = new EngineType();
            $model->name = $value;
            $model->save();

            return $model->id;
        }

        return $db_val->id;
    }
}
