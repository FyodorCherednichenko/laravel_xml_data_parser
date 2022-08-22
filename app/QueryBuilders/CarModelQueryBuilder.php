<?php
declare(strict_types=1);

namespace App\QueryBuilders;

use App\Models\CarModel;

/**
 * @method CarModel first($columns = ['*'])
 * @method CarModelQueryBuilder existsByName(string $name)
 */
class CarModelQueryBuilder extends AbstractQueryBuilder
{
}
