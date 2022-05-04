<?php

use Illuminate\Support\Facades\Route;

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
// Route::get('abd',function(){
// 	return view('users/page/chontuyen');
// });
Route::get('/', function () {
    return view('welcome');
});
Route::get('oanh','UserController@oanh');
Route::get('login','LoginController@getlogin');
Route::post('login','LoginController@postlogin');
Route::get('register','LoginController@getregister');
Route::post('register','LoginController@postregister');
Route::get('logout','LoginController@getlogout');
Route::get('home','PageController@hienthi')->name("home");

Route::POST('postsearch','PageController@PostSearch')->name('home.PostSearch');
// Route::get('search', function(){
// 	return view('users.page.search');
// });
Route::get('chontuyen/{id_route}/{id_ticket}','PageController@getchontuyen')->name('chontuyen');
Route::post('chontuyen','PageController@postchontuyen')->name("postchontuyen");
Route::get('limousine','PageController@limousine');
Route::get('vecuaban','PageController@vecuaban')->name('vecuaban');
Route::get('huyve/{id}','PageController@huyve');

// Route::get('oanh', function(){
// 	return view('owner.register');
// });

Route::get('admin/login','UserController@getloginAdmin');
Route::post('admin/login','UserController@postloginAdmin');
Route::get('admin/logout','UserController@getlogoutAdmin');
Route::group(['prefix'=>'admin','middleware'=>'adminLogin'], function(){
	Route::get('trangchu',function(){
		return view('admin/home');
	});
	Route::group(['prefix'=>'user'], function(){
		Route::get('list','UserController@list');
		Route::get('them','UserController@getThem');
		Route::post('them','UserController@postThem');
		
		Route::get('suauser/{id}','UserController@getSua');
		Route::post('suauser/{id}','UserController@postSua');
		Route::get('xoauser/{id}','UserController@getxoa');
	});
});

Route::get('owner/login','OwnerController@getlogin');
Route::post('owner/login','OwnerController@postlogin');
Route::get('owner/logout','OwnerController@getlogout');
Route::get('owner/register','OwnerController@getregister');
Route::post('owner/register','OwnerController@postregister');

Route::group(['prefix'=>'owner','middleware'=>'ownerLogin'], function(){
	Route::get('home','OwnerController@home');
	Route::POST('postsearch','OwnerController@PostSearch')->name('PostSearch');
	Route::group(['prefix'=>'tuyenduong'], function(){
		Route::get('danhsach','TuyenduongController@tuyenduong');
		Route::get('themtuyen','TuyenduongController@getThem');
		Route::post('themtuyen','TuyenduongController@postThem');
		
		Route::get('suatuyen/{id}','TuyenduongController@getSua');
		Route::post('suatuyen/{id}','TuyenduongController@postSua');
		Route::get('xoa/{id}','TuyenduongController@getxoa');
		// Route::get('chitiet/{id}','TuyenduongController@chitiet')->name('oanh');
	});
	Route::group(['prefix'=>'car'], function(){
		Route::get('chitiet/{id}/{id_route}','CarController@chitiet')->name('oanh');
		Route::get('addcar/{id}','CarController@getThem')->name("addcar");
		Route::post('addcar','CarController@postThem')->name("postaddcar");
		Route::get('suacar/{id}','CarController@getSua');
		Route::post('suacar/{id}','CarController@postSua');

		Route::get('xoa/{id_car}/{id_ticket}','CarController@getxoa')->name('xoachitiet');
		Route::get('xoacar/{id_car}','CarController@getxoa')->name('xoacar');
	});
	Route::group(['prefix'=>'drive'], function(){
		Route::get('danhsach','DriveController@list');
		Route::get('themtai','DriveController@getthem')->name("tai");
		Route::post('themtai','DriveController@postthem')->name("posttai");
		Route::get('suadrive/{id}','DriveController@getSua');
		Route::post('suadrive/{id}','DriveController@postSua');
		Route::get('xoadrive/{id}','DriveController@getxoa');
	});
	Route::group(['prefix'=>'ticket'], function(){
		Route::get('themve/{id_route}/{id}','TicketController@getThemve')->name("addticket");
		Route::post('themve','TicketController@postThemve')->name("postaddticket");
		Route::get('suave/{id_ticket}','TicketController@getSua')->name('suave');
		Route::post('suave/{id_ticket}','TicketController@postSua');
	});
});
