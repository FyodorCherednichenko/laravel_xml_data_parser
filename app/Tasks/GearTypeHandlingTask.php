<?php
declare(strict_types=1);

namespace App\Tasks;

use App\Models\GearType;
use App\QueryBuilders\GearTypeQueryBuilder;

class GearTypeHandlingTask
{
    public function __construct(
        public GearTypeQueryBuilder $query
    ) {
    }

    public function execute(string $value): int
    {
        if (empty($value)) {
            return 0;
        }

        $db_val = $this->query->clone()->existsByName($value)->first();
        if ($db_val === null) {
            $model = new GearType();
            $model->name = $value;
            $model->save();

            return $model->id;
        }

        return $db_val->id;
    }
}
