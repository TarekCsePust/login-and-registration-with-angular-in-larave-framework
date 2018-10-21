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
    return view('welcome');
});

Route::get('/login',[
  'uses'=>'UserController@getlogin',
  'as'=>'login'
  ]);

Route::get('/register', function () {
    return view('register');
});


Route::get('/logout',[
   'uses'=>'UserController@logout',
   'as'=>'logout'
  ])->middleware('authenticated');


Route::post('/logedin',[
    'uses'=>'UserController@getlogedin',
    'as'=>'logedin'
	]);


Route::post('/registration',[
	'uses'=>'UserController@Registration',
	'as'=>'registration'
	]);

Route::get('/deactive/{id}',[
  'uses'=>'UserController@getDeactive',
  'as'=>'deactive'
  ])->middleware('authenticated');

Route::get('/active/{id}',[
  'uses'=>'UserController@getActive',
  'as'=>'active'
  ])->middleware('authenticated');



 Route::get('/userimage/{filename}',[
      'uses'=>'UserController@getUserImage',
      'as'=>'account.image'

      ])->middleware('authenticated');
 Route::get('/home',[
    'uses'=>'UserController@gethome',
    'as'=>'home'
 	])->middleware('authenticated');

 Route::get('/upadetimage',[
      'uses'=>'UserController@getUpdateImage',
      'as'=>'updateimage'
      ])->middleware('authenticated');


Route::post('/changeimage',[
    'uses'=>'UserController@getChangeImg',
    'as'=>'changeimage'
	])->middleware('authenticated');

Route::get('/users',[
	'uses'=>'UserController@getusers',
	'as'=>'users'
	])->middleware('authenticated');

Route::get('/account',[
'uses'=>'UserController@getAccount',
'as'=>'account'
  ])->middleware('authenticated');

Route::post('/update',[
   'uses'=>'UserController@updateinfo',
   'as'=>'update'
  ])->middleware('authenticated');