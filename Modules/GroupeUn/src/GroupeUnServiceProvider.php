<?php

namespace DTIC\GroupeUn;

use Illuminate\Support\ServiceProvider;

class GroupeUnServiceProvider extends ServiceProvider{

    public function register(){


    }



    public function boot(){

        $this->loadMigrationsFrom(__DIR__."/database/migrations");
    
    }
}