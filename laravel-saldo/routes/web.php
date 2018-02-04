<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
    $this->get('balance', 'BalaceController@index')->name('balance');

    $this->get('/', 'AdminController@index')->name('admin');

});


$this->get('/', 'Site\SiteController@index')->name('home');



Auth::routes();

