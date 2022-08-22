<?php
declare(strict_types=1);

namespace App\Models;

use App\QueryBuilders\CarModelQueryBuilder;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 */
class CarModel extends Model
{
    public $timestamps = false;

    public function newEloquentBuilder($query): CarModelQueryBuilder
    {
        return new CarModelQueryBuilder($query);
    }
}
