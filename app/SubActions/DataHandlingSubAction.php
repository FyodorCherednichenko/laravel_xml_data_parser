<?php
declare(strict_types=1);

namespace App\SubActions;

use App\Models\Offer;
use App\QueryBuilders\OfferQueryBuilder;
use App\Tasks\BodyTypeHandlingTask;
use App\Tasks\CarModelHandlingTask;
use App\Tasks\EngineTypeHandlingTask;
use App\Tasks\GearTypeHandlingTask;
use App\Tasks\MarkHandlingTask;
use App\Tasks\TransmissionHandlingTask;
use SimpleXMLElement;

class DataHandlingSubAction
{
    public function __construct(
        public OfferQueryBuilder        $offer_query,
        public BodyTypeHandlingTask     $body_type_task,
        public CarModelHandlingTask     $car_model_task,
        public EngineTypeHandlingTask   $engine_type_task,
        Public GearTypeHandlingTask     $gear_type_task,
        public MarkHandlingTask         $mark_task,
        public TransmissionHandlingTask $transmission_task
    ) {
    }

    public function execute(SimpleXMLElement $element): void
    {
        $offer = $this->offer_query->clone()->find($element->id) === null ? new Offer() : $this->offer_query->clone()->find($element->id);

        $offer->offer_id      = (int) $element->id;
        $offer->generation    = (string) $element->generation;
        $offer->year          = (int) $element->year;
        $offer->run           = (int) $element->run;
        $offer->color         = (string) $element->color;
        $offer->generation_id = (int) $element->generation_id;

        $offer->body_type_id    = $this->body_type_task->execute((string) $element->{"body-type"});
        $offer->model_id        = $this->car_model_task->execute((string) $element->model);
        $offer->engine_type_id  = $this->engine_type_task->execute((string) $element->{"engine-type"});
        $offer->gear_type_id    = $this->gear_type_task->execute((string) $element->{"gear-type"});
        $offer->mark_id         = $this->mark_task->execute((string) $element->mark);
        $offer->transmission_id = $this->transmission_task->execute((string) $element->transmission);

        $offer->touch();
    }
}
