<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthUserAdminMiddleware;

#google登入
Route::get(
    '/google/auth',
    'App\Http\Controllers\SocialiteController@redirectToProvider'
);
Route::get(
    '/google/auth/callback',
    'App\Http\Controllers\SocialiteController@handleProviderCallback'
);



// 會員管理
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
#產品管理
Route::group(['prefix' => 'admin'], function () {
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
        Route::delete("/{id}",  "App\Http\Controllers\MerchandiseController@destroy");

        
        });
});
#預約系統管理
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
            

