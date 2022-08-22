<?php
declare(strict_types=1);

namespace App\Models;

use App\QueryBuilders\EngineTypeQueryBuilder;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 */
class EngineType extends Model
{
    public $timestamps = false;

    public function newEloquentBuilder($query): EngineTypeQueryBuilder
    {
        return new EngineTypeQueryBuilder($query);
    }
}
