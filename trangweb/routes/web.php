<?php
 use App\product;
use Illuminate\Support\Facades\Input;
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

Route::group(['prefix' => 'backend/'], function () {

	// Hien thi cac page len trang web
	
	Route::get('trangchu', [
		'as'  =>'trang-chu',
		'uses'=>'PageController@gettrangchu'	
	]);
// /{type}
	Route::get('loai-san-pham/{type}', [
		'as'=> 'loaisanpham',
		'uses'=>'PageController@getloaiSP'
	]);

	Route::get('chitiet/{id}', [
		'as'=> 'chitiet',
		'uses'=>'PageController@getChitiet'
	]);

	Route::get('lienhe', [
		'as'=> 'lienhe',
		'uses'=>'PageController@getLH'
	]);

	Route::get('about', [
		'as'=> 'about',
		'uses'=>'PageController@getAbout'
	]);

	Route::get('list', [
		'as'=> 'list',
		'uses'=>'PageController@getList'
	]);
	Route::get('homeadmin', [
		'as'=> 'homeadmin',
		'uses'=>'PageController@getadmin'
	]);


	//  Thao tac cua admin
	// Select user
	Route::get('listUser', [
		'as' 	=> 'user',
		'uses' 	=> 'PageController@getlistUser'
	]);

	// Select customer
	Route::get('listCus', [
		'as' 	=> 'customer',
		'uses' 	=> 'PageController@getListCus'
	]);


	// Add products
	Route::get('addProduct', [
		'as' 	=> 'backend.product.addProduct',
		'uses' 	=> 'productController@addProduct'
	]);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
	Route::post('addProduct', [
		'as' 	=> 'postAdd',
		'uses' 	=> 'productController@postAdd'
	]);

	// Select products by table
	Route::get('listProduct', [
		'as' 	=> 'backend.product.getList',
		'uses' 	=> 'productController@getListProduct'
	]);
	
	// Delete products
	Route::get('deleteProduct/{id}', [
		'as' 	=> 'getDeleteProduct',
		'uses' 	=> 'productController@deleteProduct'
	]);

	//Edit products
	Route::get('editProduct/{id}', [
		'as' 	=> 'backend.product.editProduct',
		'uses' 	=> 'productController@editProduct'
	]);

	Route::post('editProduct/{id}', [
		'as' 	=> 'backend.product.posteditProduct',
		'uses' 	=> 'productController@posteditProduct'
	]);

	// Shopping card
	Route::get('add-to-card/{id}', [
		'as' 	=> 'themgiohang',
		'uses' 	=> 'PageController@getAddtoCard'
	]);
	Route::get('delete-card/{id}', [
		'as' 	=> 'xoagiohang',
		'uses' 	=> 'PageController@getDeleteItemCart'
	]);
	Route::get('dat-hang', [
		'as' 	=> 'dathang',
		'uses' 	=> 'PageController@getCheckout'
	]);
	Route::post('dat-hang', [
		'as' 	=> 'dathang',
		'uses' 	=> 'PageController@postCheckout'
	]);

	// Dang nhap
	Route::get('dangnhap', [
		'as' 	=> 'dangnhap',
		'uses' 	=> 'LoginController@getLogin'
	]);
	Route::post('dangnhap', [
		'as' 	=> 'dangnhap',
		'uses' 	=> 'LoginController@postLogin'
	]);


	Route::get('dangki', [
		'as' 	=> 'dangki',
		'uses' 	=> 'LoginController@getRegister'
	]);
	Route::post('dangki', [
		'as' 	=> 'dangki',
		'uses' 	=> 'LoginController@postRegister'
	]);

	

});



Route::any ( '/search', function () {
    $q = Input::get ( 'product_search' );
    $search = product::where('name','LIKE','%'.$q.'%')->get();
    if(count($search) > 0)
       return view('layout.pages.search')->withDetails($search)->withQuery ( $q );
    else
       return view ('layout.pages.search')->withMessage('No Details found. Try to search again !');
});

 
 

 
