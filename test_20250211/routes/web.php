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
        Route::post(
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
            '{merchandise_id}/edit',
            'App\Http\Controllers\MerchandiseController@MerchandiseEditPage'
        );
        Route::post(
            '{merchandise_id}/edit',
            'App\Http\Controllers\MerchandiseController@MerchandiseEditProcess'
        );
        Route::get(
            'manage',
            'App\Http\Controllers\MerchandiseController@MerchandiseManagePage'
        );
        Route::get(
            'mainecoon',
            'App\Http\Controllers\MerchandiseController@MerchandiseMaineCoonPage'
        );
        Route::delete("/{id}",  "App\Http\Controllers\MerchandiseController@destroy"
        ); 
        Route::get(
            'purchase',
            'App\Http\Controllers\CheckoutController@__construct'
        );

        
        });
});

#用戶端產品
Route::group(['prefix' => 'user'], function () {
    Route::group(['prefix' => 'merchandise'], function () {
        Route::get(
            'mainecoon',
            'App\Http\Controllers\MerchandiseController@MerchandiseMaineCoonPage'
        
        );
        Route::get(
            'index',
            'App\Http\Controllers\MerchandiseController@MerchandiseIndexPage'
        
        );
    });
});

#預約系統管理
Route::group(['prefix' => 'user'], function () {
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
        
        // 頁面
        Route::get(
            'maine',
            'App\Http\Controllers\KittyController@MainePage'
        );
    });
});

            

