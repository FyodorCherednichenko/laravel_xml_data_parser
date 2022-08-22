<?php
declare(strict_types=1);

namespace App\Models;

use App\QueryBuilders\GearTypeQueryBuilder;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 */
class GearType extends Model
{
    public $timestamps = false;

    public function newEloquentBuilder($query): GearTypeQueryBuilder
    {
        return new GearTypeQueryBuilder($query);
    }
}
