<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class SettingServiceProvider extends ServiceProvider
{

    protected $site_id;


    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        try {
            $this->getCurrentSite();
            foreach ($this->getSettings()->flatten()->toArray() as $setting) {
                config([$setting->category . '.' . $setting->name => $setting->value]);
            }

            View::addLocation(resource_path('/views/' . 'site_' . $this->site_id));
            if (!$this->site_id and isset($_SERVER['HTTP_HOST'])) {
                App::abort(503, 'Site configuration errors!');
            }
            config(['app.site_id' => $this->site_id]);
        } catch (\Exception $e) {
           Log::info('install');
        }
    }

    protected function getCurrentSite()
    {
        if (isset($_SERVER['HTTP_HOST']) and !empty($_SERVER['HTTP_HOST'])) {
            $this->site_id = DB::table('sites')
                ->where('domain', '=', $_SERVER['HTTP_HOST'])
                ->value('id');

            Route::get('/robots.txt', function () {
                return $this->site_id;
            });

            Route::get('/sitemap.xml', function () {
                return $this->site_id;
            });
        }
    }


    protected function getSettings()
    {
        $settings = DB::table('settings')->where('site_id', '=', $this->site_id)->get();
        return $settings;
    }
}
