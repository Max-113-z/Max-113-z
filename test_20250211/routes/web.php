<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthUserAdminMiddleware;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['prefix' => 'user'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::get('login', 'App\Http\Controllers\UserAuthController@Login'
        );
        Route::get('signup', 'App\Http\Controllers\UserAuthController@SignUpPage'
        );
        Route::post('signup', 'App\Http\Controllers\UserAuthController@SignUpProcess'
        ); 
        Route::get(
            'signin',
            'App\Http\Controllers\UserAuthController@SignInPage'
        );
        Route::post(
            'signin',
            'App\Http\Controllers\UserAuthController@SignInProcess'
        );
        Route::get(
            'signout',
            'App\Http\Controllers\UserAuthController@SignOut'
        );
        
    });
});
Route::group(['prefix' => 'merchandise'], function () {
    Route::get(
        'create',
        'App\Http\Controllers\MerchandiseController@MerchandiseCreateProcess'
    )->middleware(AuthUserAdminMiddleware::class);
    
    Route::get(
        '{mechandise_id}/edit',
        'App\Http\Controllers\MerchandiseController@MerchandiseEditPage'
    );
    Route::post(
        '{mechandise_id}/edit',
        'App\Http\Controllers\MerchandiseController@MerchandiseEditProcess'
    );
    Route::get(
        'manage',
        'App\Http\Controllers\MerchandiseController@MerchandiseManagePage'
    );
    Route::get(
        'product',
        'App\Http\Controllers\MerchandiseController@MerchandiseProductPage'
    );
    
});
Route::group(['prefix' => 'booking'], function (){
    
    // 預約頁面
    Route::get(
        'booking',
        'App\Http\Controllers\BookingController@BookingPage'
    );
    
    //新增預約頁面
    Route::post(
        'booking',
        'App\Http\Controllers\BookingController@BookingProcess'
    );
});
Route::group(['prefix' => 'kitty'], function (){
    
    // 預約頁面
    Route::get(
        'maine',
        'App\Http\Controllers\KittyController@MainePage'
    );
});
            

