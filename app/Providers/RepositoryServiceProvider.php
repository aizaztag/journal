<?php

namespace App\Providers;

use App\Contracts\CategoryContract;
use App\Contracts\SectionContract;
use App\Repositories\CategoryRepository;
use App\Repositories\SectionRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        CategoryContract::class         =>          CategoryRepository::class,
        SectionContract::class        =>            SectionRepository::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->repositories as $interface => $implementation)
        {
            $this->app->bind($interface, $implementation);
        }
    }
}