<?php

/**
 * Welcome to Luthier-CI!
 *
 * This is your main route file. Put all your HTTP-Based routes here using the static
 * Route class methods
 *
 * Examples:
 *
 *    Route::get('foo', 'bar@baz');
 *      -> $route['foo']['GET'] = 'bar/baz';
 *
 *    Route::post('bar', 'baz@fobie', [ 'namespace' => 'cats' ]);
 *      -> $route['bar']['POST'] = 'cats/baz/foobie';
 *
 *    Route::get('blog/{slug}', 'blog@post');
 *      -> $route['blog/(:any)'] = 'blog/post/$1'
 */

// Route::get('/', function(){
//    luthier_info();
// })->name('homepage');

Route::set('404_override', function(){
    show_404();
});

## 接口 
Route::group('api', [ 'namespace' => 'api01'], function(){
    Route::get('/', 'IndexController@index');        
});
## 后台 
Route::group('admin', [ 'namespace' => 'backstage01'], function(){
    Route::get('/', 'IndexController@index');  
    Route::get('login', 'LoginController@index');  

});
## 前台 
Route::group('/', [ 'namespace' => 'web01'], function(){
    Route::get('/', 'IndexController@index');        
});

Route::set('translate_uri_dashes',FALSE);

Route::auth();