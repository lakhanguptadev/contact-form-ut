<?php
    namespace ut\contacts;

    use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function register(){

    }
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','contacts');
        $this->loadMigrationsFrom((__DIR__.'/database/migrations'));

    }
}
