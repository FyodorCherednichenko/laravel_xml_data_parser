<?php

namespace App\Providers;

use App\Models\BodyType;
use App\Models\Offer;
use App\Models\CarModel;
use App\Models\EngineType;
use App\Models\GearType;
use App\Models\Mark;
use App\Models\Transmission;
use App\QueryBuilders\BodyTypeQueryBuilder;
use App\QueryBuilders\CarModelQueryBuilder;
use App\QueryBuilders\OfferQueryBuilder;
use App\QueryBuilders\EngineTypeQueryBuilder;
use App\QueryBuilders\GearTypeQueryBuilder;
use App\QueryBuilders\MarkQueryBuilder;
use App\QueryBuilders\TransmissionQueryBuilder;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->app->bind(OfferQueryBuilder::class, function () {
            return (new Offer())->newQuery();
        });

        $this->app->bind(CarModelQueryBuilder::class, function () {
            return (new CarModel())->newQuery();
        });

        $this->app->bind(BodyTypeQueryBuilder::class, function () {
            return (new BodyType())->newQuery();
        });

        $this->app->bind(EngineTypeQueryBuilder::class, function () {
            return (new EngineType())->newQuery();
        });

        $this->app->bind(GearTypeQueryBuilder::class, function () {
            return (new GearType())->newQuery();
        });

        $this->app->bind(MarkQueryBuilder::class, function () {
            return (new Mark())->newQuery();
        });

        $this->app->bind(OfferQueryBuilder::class, function () {
            return (new Offer())->newQuery();
        });

        $this->app->bind(TransmissionQueryBuilder::class, function () {
            return (new Transmission())->newQuery();
        });
    }
}
