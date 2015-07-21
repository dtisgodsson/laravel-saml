<?php
/**
 * Created by PhpStorm.
 * User: diego
 * Date: 21/03/14
 * Time: 00:25
 */

Route::get(Config::get('laravel-saml::saml.login_route', 'login'), 'SamlController@login');
Route::get(Config::get('laravel-saml::saml.logout_route', 'logout'), 'SamlController@logout');
