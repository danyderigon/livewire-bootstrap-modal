<?php

namespace DanyDerigon\LaravelLivewireModals\Providers;

use DanyDerigon\LaravelLivewireModals\Components\Modals;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LaravelLivewireModalsProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'livewire-bootstrap-modal');

        $this->publishes(
            [__DIR__ . '/../../resources/views' => resource_path('views/vendor/livewire-bootstrap-modal')],
            ['livewire-bootstrap-modal', 'livewire-bootstrap-modal:views']
        );

        Livewire::component('modals', Modals::class);
    }
}
