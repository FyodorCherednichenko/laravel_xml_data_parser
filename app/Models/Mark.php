<?php
declare(strict_types=1);

namespace App\Models;

use App\QueryBuilders\MarkQueryBuilder;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 */
class Mark extends Model
{
    public $timestamps = false;

    public function newEloquentBuilder($query): MarkQueryBuilder
    {
        return new MarkQueryBuilder($query);
    }
}
