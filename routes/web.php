<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    //member
    Route::get('/add_member', 'MemberController@insertform')->name('add_member.insertform');
    Route::post('createcust','MemberController@insertmember');
    Route::get('/view_member', 'MemberController@index_view_member')->name('cust_view.index');
    Route::get('delete/{id}','MemberController@destroy');
    Route::get('edit/{id}','MemberController@show');
    Route::post('edit/{id}','MemberController@edit');
    Route::get('/search_member', 'MemberController@search_member');

    Route::get('cuci_tipe1','CuciController@index1');
    Route::post('createtipe1','CuciController@insert1');

    Route::get('cuci_tipe2','CuciController@index2');
    Route::post('createtipe2','CuciController@insert2');

    Route::get('cuci_tipe3','CuciController@index3');
    Route::post('createtipe3','CuciController@insert3');

    Route::get('cuci_tipe4','CuciController@index4');
    Route::post('createtipe4','CuciController@insert4');
    
    Route::get('selesai/{id}','CuciController@destroy');

    Route::get('cetak/{id}','Controller@cetak');

    Route::get('/', 'Controller@index')->name('home.index');
    Route::get('/cuci', 'Controller@index_cuci_menu')->name('home.cuci');
    Route::get('/member', 'Controller@index_member_menu')->name('home.member');
    Route::get('/history', 'Controller@index_history_menu')->name('home.history');

    Route::get('/search', 'Controller@search');
    Route::get('cetak/{id}','Controller@cetak');
    Route::get('/search_history', 'Controller@search_history');



    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});

