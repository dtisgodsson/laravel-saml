laravel-saml
============

Open Source SAML Auth Support for Laravel using simplesamlphp.


#### Requeriments
- Laravel install, of course
- Working SimpleSAMLphp instance acting like an Service Provider


#### Instalation

First, we need this package available on Laravel, update your `composer.json` dependencies with:
    
    "knight-swarm/laravel-saml": "dev-master"
and run `composer update`

After we have this package, we need to load it on Laravel, for this, add this

    'KnightSwarm\LaravelSaml\LaravelSamlServiceProvider'

service provider on the `'providers'` array (`app/config/app.php`)

and the 

    'Saml'      => 'KnightSwarm\LaravelSaml\Facades\Saml'

 facade on the `'aliases'` array.
 
 
 Now, we need to configure it, run
 
     php artisan config:publish knight-swarm/laravel-saml
    
 the above command will create a `saml.php` file inside `app/config/packages/knight-swarm/laravel-saml`, edit this file and be sure to insert:
 
 Your **SimpleSamlPHP** SP install path
 
     'sp_path' => app_path()."/../../sp",
     
 Your default SP id
 
     'sp_name' => 'saml.dev',
     
 And afther logout, where users, should go,
 
     'logout_target' => 'http://saml.dev'
     
## Creating the Routes

Now you have configured laravel-saml, you will need to define 2 routes for Logging in and Logging Out. laravel-saml ships with a basic controller you can use. Should you wish to use the default controller, your routes could look like this:

    Route::get('login', 'SamlController@login');
    Route::get('logout', 'SamlController@logout');

##@TODO
We need to implement custom attributes bindings on model and database, for PoC it gets only `uid` and `name` attribuites and will fail it they does not exists
