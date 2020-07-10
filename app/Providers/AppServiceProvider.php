<?php

namespace App\Providers;

use App\Entities\Note;
use App\Observers\NoteObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Note::observe(NoteObserver::class);
    }
}
