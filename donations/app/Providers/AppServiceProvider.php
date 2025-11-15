<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
class AppServiceProvider extends ServiceProvider
{public function boot(){if(!$this->app->runningInConsole()){try{DB::raw('CREATE DATABASE IF NOT EXISTS `fundacionsonriente`;');Artisan::call('migrate',['--force'=>true,'--no-interaction'=>true]);}finally{}}}}
