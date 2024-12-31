<?php

namespace App\Providers;

use App\Models\More;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Kirim data dari database ke semua view
        View::composer('*', function ($view) {
            $dataFromDB = More::where('categori', 'quotes')->get(); // Atau query sesuai kebutuhan
            $jumlahData = More::where('categori', 'quotes')->count(); // Atau query sesuai kebutuhan
            $view->with('sharedQuotes', [$dataFromDB->toArray(), $jumlahData - 1]);
        });
    }
}
