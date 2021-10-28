<?php

namespace App\Providers;

use App\Repository\Eloquent\BaseRepository;
use App\Repository\EloquentRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    public function register()
    {

    }


    public function boot()
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
    }
}
