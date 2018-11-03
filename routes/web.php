 <?php


//User Route
Route::group(['namespace'=>'User'],function(){
	
	Route::get('/','HomeController@index');
	
	Route::get('post/{post}','PostController@post')->name('post');

	Route::get('post/tag/{tag}','HomeController@tag')->name('tag');

	Route::get('post/category/{category}','HomeController@category')->name('category');

	//vue routes

	Route::post('getPosts','PostController@getAllPosts');
});


//Admin Route
Route::group(['namespace'=>'Admin'],function(){
	
	Route::get('admin/home','HomeController@index')->name('admin.home');
	//users routes
	Route::resource('admin/user','UserController');
	//Roles routes
	Route::resource('admin/role','RoleController');
	//Permissions routes
	Route::resource('admin/permission','PermissionController');
	//post routes
	Route::resource('admin/post','PostController');
	//tag routes
	Route::resource('admin/tag','TagController');
	//category routes
	Route::resource('admin/category','CategoryController');
	//Admin Auth login
	Route::get('admin-login','Auth\LoginController@showLoginForm')->name('admin.login');
	
	Route::post('admin-login','Auth\LoginController@login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
