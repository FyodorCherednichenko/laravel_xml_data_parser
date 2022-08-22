<?php
declare(strict_types=1);

namespace App\Models;

use App\QueryBuilders\OfferQueryBuilder;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $offer_id
 * @property int $mark_id
 * @property int $model_id
 * @property string $generation
 * @property int $year
 * @property int $run
 * @property string $color
 * @property int $body_type_id
 * @property int $engine_type_id
 * @property int $transmission_id
 * @property int $gear_type_id
 * @property int $generation_id
 */
class Offer extends Model
{
    protected $primaryKey = 'offer_id';

    public function newEloquentBuilder($query): OfferQueryBuilder
    {
        return new OfferQueryBuilder($query);
    }
}
