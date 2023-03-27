<?php

namespace App\Providers;

use App\Models\Setting;
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
        // $setting = Setting::firstOr(function(){
        //     Setting::create([
        //         'name'=>'gestion location',
        //         'description'=>'gzstion location voiture',
        //         'phone'=>'+212 632 7816 36',
        //         'logo'=> null,
        //         'address'=>'hy riyad',
        //         'email'=>'salahdein4321@gmail.com'
        //     ]);
        // });

        // view()->share('setting',$setting);
    }
}
