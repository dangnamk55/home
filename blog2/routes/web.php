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
    return view('index');
});

Route::get('/information', 'index@information')->name('information');

Route::get('/contact', 'index@contact')->name('contact');

Route::get('/post', 'postController@postview')->name('post');

Route::post('/contact/send', ['uses' => 'FrontController@addFeedback', 'as' => 'feedback']);

Route::get('/login', 'index@login')->name('login');

Route::get('/register', 'index@register')->name('register');

Route::post('/dang-nhap', 'Auth\LoginController@postLogin')->name('dangnhap');

route::get('/hash', 'hashpass@pwhash');

route::get('/post/{id}', 'postController@postShow')->name('postshow');



Route::get('/logout', 'logoutController@logOut')->name('logout');

Route::get('user/activation/{token}', 'Auth\RegisterController@activateUser')->name('user.activate');

Route::post('/dang-ky', 'Auth\RegisterController@register')->name('dangky');

Route::group(
    [
        'prefix'     => 'admin',
        'middleware' => [ 'adminLogin' ]
    ],
    function () {
        Route::get('/quan-tri', 'CateController@getList')->name('quantri');
        Route::get('/delete/{id}', 'CateController@getDelete')->name('admin.getDelete');
        Route::get('/add', 'postController@getAdd')->name('admin.add');
        Route::resource( 'post', 'postController', [
            'except' => [
                'show','index'
            ],
            'names'  => [
                'create' => 'admin.add',
                'store'  => 'addPost',
                'edit'   => 'admin.getEdit',
                'update' => 'admin.editSubmit'
            ]
        ] );
    }
);
