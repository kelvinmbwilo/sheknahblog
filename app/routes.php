<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});

Route::get('user', function()
{
    $user = User::where('email',$_GET['email'])->first();
    if ($user  && $user->password == $_GET['password'])
{
    Redirect::route('adminhome');
}else{
    return "nope";
}
});


Route::get('admin',array("as"=>"adminhome",function()
{
	return View::make('layout.admin');
}));


///////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////manage posts///////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('admin/addpost',array('as'=>'addpost',  function (){
    return View::make('admin.addpost');
}));

Route::post('admin/addpost',array('as'=>'addpost',  "uses"=>"PostController@store"));

///////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////manage categories///////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////
Route::get('admin/addcat',array('as'=>'addcat',  function (){
    return View::make('admin.addcategory');
}));

Route::get('admin/managecat',array('as'=>'managecat',  function (){
    $cats = Category::all();
    return View::make('admin.managecat',  compact("cats"));
}));

Route::get('admin/editcat/{id}',array('as'=>'editcat',  function ($id){
    $cats = Category::find($id);
    return View::make('admin.editcat',  compact("cats"));
}));

Route::post('admin/deletecat',array('as'=>'deletecat',  function (){
    $cat = Category::find($_POST['id']);
    $cat->delete();
    $cats = Category::all();
    return View::make('admin.managecat',  compact("cats"));
}));

Route::post('admin/addcat',array('as'=>'addcat',  "uses"=>"CategoryController@store"));

Route::post('admin/editcat',array('as'=>'editcat',  "uses"=>"CategoryController@update"));

////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////managing subcategories////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('admin/addsubcat',array('as'=>'addsubcat',  function (){
    return View::make('admin.addsub');
}));

Route::get('admin/managesubcat',array('as'=>'managesubcat',  function (){
    $subs = Subcategory::all();
    return View::make('admin.managesubcat',  compact("subs"));
}));

//display a form to edit subcategory
Route::get('admin/editsub/{id}',  function ($id){
    $user = Subcategory::find($id);
    return View::make('admin.editsub',  compact('user'));
});

//display a form to edit subcategory
Route::post('admin/deletesub',  function (){
    $cat = Subcategory::find($_POST['id']);
    $cat->delete();
    $subs = Subcategory::all();
    return View::make('admin.managesubcat',  compact('subs'));
});

Route::post('admin/addsubcat',array('as'=>'addsubcat',  "uses"=>"SubcategoryController@store"));

Route::post('admin/editsub',array('as'=>'editsubcat',  "uses"=>"SubcategoryController@update"));

//////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////managing users///////////////////////
//////////////////////////////////////////////////////////////////////////////////////
//display a form to add user
Route::get('admin/adduser',array('as'=>'adduser',  function (){
    return View::make('admin.adduser');
}));

//display a table to manage user
Route::get('admin/manageuser',array('as'=>'manageuser',  function (){
    $user = User::all();
    return View::make('admin.manageUser',  compact('user'));
}));

//display a form to edit user
Route::get('admin/edituser/{id}',  function ($id){
    $user = User::find($id);
    return View::make('admin.edituser',  compact('user'));
});

//deleting a user
Route::post('admin/deleteuser', function (){
    $user = User::find($_POST['id']);
    $user->delete();
});

Route::post('admin/adduser',array('as'=>'adduser',  "uses"=>"UserController@store"));

Route::post('admin/updateuser',array('as'=>'edituser',  "uses"=>"UserController@update"));


Route::get('admin/addimages',array('as'=>'addimages1',  function(){
    
}));

Route::post('admin/addimages',array('as'=>'addimages',  "uses"=>"PostController@index"));