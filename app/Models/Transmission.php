<?php
declare(strict_types=1);

namespace App\Models;

use App\QueryBuilders\TransmissionQueryBuilder;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 */
class Transmission extends Model
{

    public $timestamps = false;

    public function newEloquentBuilder($query): TransmissionQueryBuilder
    {
        return new TransmissionQueryBuilder($query);
    }
}
