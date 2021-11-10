<?php

namespace Increment\Common\Payload;

use Illuminate\Support\ServiceProvider;

class PayloadServiceProvider extends ServiceProvider{

  public function boot(){
    $this->loadMigrationsFrom(__DIR__.'/migrations');
    $this->loadRoutesFrom(__DIR__.'/routes/web.php');
  }

  public function register(){
  }
}