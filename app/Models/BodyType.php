<?php
declare(strict_types=1);

namespace App\Models;

use App\QueryBuilders\BodyTypeQueryBuilder;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 */
class BodyType extends Model
{
    public $timestamps = false;

    public function newEloquentBuilder($query): BodyTypeQueryBuilder
    {
        return new BodyTypeQueryBuilder($query);
    }
}
