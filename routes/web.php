<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

Route::get('/intro', function () {
    return view('intro');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'as' =>'admin'
], function () {



    Route::get('login', ['as' => 'login', 'uses' => 'AuthController@getLogin'])->name('login');
    Route::post('postLogin', ['as' => 'postLogin', 'uses' => 'AuthController@postLogin'])->name('postLogin');
    Route::get('getForgotPassword', ['as' => 'getForgotPassword', 'uses' => 'AuthController@getForgotPassword'])->name('getForgotPassword');
    Route::post('postForgotPassword', ['as' => 'postForgotPassword', 'uses' => 'AuthController@postForgotPassword'])->name('postForgotPassword');

    Route::get('getTokenResetPassword/{token}', ['as' => 'getTokenResetPassword', 'uses' => 'AuthController@getTokenResetPassword'])->name('getTokenResetPassword');

    Route::get('getResetPassword', ['as' => 'getResetPassword', 'uses' => 'AuthController@getResetPassword'])->name('getResetPassword');

    Route::post('postResetPassword', ['as' => 'postResetPassword', 'uses' => 'AuthController@postResetPassword'])->name('postResetPassword');

    Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@getLogout'])->name('logout');

    Route::group(['middleware' => 'admin'], function () {

        Route::group(['prefix' => 'feed-back'], function () {
            Route::get('new', ['as' => 'list', 'uses' => 'FeedBackController@new'])->name('new');
            Route::any('save', ['as' => 'save', 'uses' => 'FeedBackController@save'])->name('save');
            Route::get('list', ['as' => 'list', 'uses' => 'FeedBackController@index'])->name('list');
            Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'FeedBackController@edit'])->name('edit');
            Route::get('delete/{id}', ['as' => 'delete', 'uses' => 'FeedBackController@delete'])->name('delete');

        });

        Route::group(['prefix' => 'slider'], function () {
            Route::get('new', ['as' => 'list', 'uses' => 'SliderController@new'])->name('new');
            Route::any('save', ['as' => 'save', 'uses' => 'SliderController@save'])->name('save');
            Route::get('list', ['as' => 'list', 'uses' => 'SliderController@index'])->name('list');
            Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'SliderController@edit'])->name('edit');
            Route::get('delete/{id}', ['as' => 'delete', 'uses' => 'SliderController@delete'])->name('delete');

        });

        Route::group(['prefix' => 'fund-facts'], function () {
            Route::get('view', ['as' => 'list', 'uses' => 'FunFactsController@index'])->name('view');
            Route::any('save', ['as' => 'list', 'uses' => 'FunFactsController@save'])->name('save');

        });

        Route::group(['prefix' => 'config'], function () {
            Route::get('view', ['as' => 'list', 'uses' => 'GoogleController@index'])->name('view');
            Route::any('save', ['as' => 'list', 'uses' => 'GoogleController@save'])->name('save');

        });

        Route::group(['prefix' => 'order'], function () {
            Route::get('list-new', ['as' => 'list-new', 'uses' => 'OrdersController@listNew'])->name('list-new');
            Route::get('list-active', ['as' => 'list-active', 'uses' => 'OrdersController@listActive'])->name('list-active');
            Route::get('active/{id}', ['as' => 'active', 'uses' => 'OrdersController@active'])->name('active');

        });
        // route tin tuc
        Route::group(['prefix' => 'admins', 'as' => 'admin.'], function () {
            Route::get('list', ['as' => 'list', 'uses' => 'AdminsController@index'])->name('list');
            Route::get('getAdd', ['as' => 'getAdd', 'uses' => 'AdminsController@getAdd'])->name('getAdd');
            Route::post('postAdd', ['as' => 'postAdd', 'uses' => 'AdminsController@postAdd'])->name('postAdd');
            Route::get('getEdit/{id}', ['as' => 'getEdit', 'uses' => 'AdminsController@getEdit'])->name('getEdit');
            Route::post('postEdit/{id}', ['as' => 'postEdit', 'uses' => 'AdminsController@postEdit'])->name('postEdit');
            Route::get('getDelete/{id}', ['as' => 'getDelete', 'uses' => 'AdminsController@getDelete'])->name('getDelete');
        });

        // route sản phẩm
        Route::group(['prefix' => 'products'], function () {
            Route::get('list', ['as' => 'list', 'uses' => 'ProductsController@index'])->name('list');
            Route::get('getAdd', ['as' => 'getAdd', 'uses' => 'ProductsController@getAdd'])->name('getAdd');
            Route::any('save', ['as' => 'save', 'uses' => 'ProductsController@saveNewProduct'])->name('save');
            Route::get('getEdit/{id}', ['as' => 'getEdit', 'uses' => 'ProductsController@getEdit'])->name('getEdit');
            Route::post('postEdit/{id}', ['as' => 'postEdit', 'uses' => 'ProductsController@postEdit'])->name('postEdit');
            Route::get('getDelete/{id}', ['as' => 'getDelete', 'uses' => 'ProductsController@getDelete'])->name('getDelete');
        });

        Route::group(['prefix' => 'users'], function () {
            Route::get('list', ['as' => 'list', 'uses' => 'UsersController@index'])->name('list');
            Route::get('getDelete/{id}', ['as' => 'getDelete', 'uses' => 'UsersController@getDelete'])->name('getDelete');
        });


        Route::group(['prefix' => 'abouts'], function () {
            Route::get('getEdit', ['as' => 'getEdit', 'uses' => 'AboutsController@getEdit'])->name('getEdit');
            Route::post('postEdit', ['as' => 'postEdit', 'uses' => 'AboutsController@postEdit'])->name('postEdit');
        });

        Route::get('home', ['as' => 'home', 'uses' => 'HomeController@index'])->name('home');
    });


Route::get('/', ['as'=>'', 'uses'=>'HomeController@index']);
Route::get('{slug}-sp{id}.html', ['as'=>'chi-tiet', 'uses'=>'HomeController@viewDetail'])
    ->where(['slug'=>'[a-zA-Z0-9-_]+','id'=>'[0-9]+']);
Route::post('add-product', ['as'=>'add-product', 'uses'=>'ProductsController@addOrder'])->name('add-product');
Route::get('homepage-manga', ['as'=>'homepage-manga', 'uses'=>'HomeController@manga'])->name('homepage-manga');

});




