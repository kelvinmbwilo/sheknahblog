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

Route::get('/', array('as'=>"homepage", function()
{
	return View::make('index');
}));

Route::get('post/{id}', array('as'=>"homepage", function($id)
{
    $onepost = Post::find($id);
	return View::make('page',compact("onepost"));
}));

Route::get('user', function()
{
    $user = User::where('email',$_GET['email'])->first();
    if ($user  && $user->password == $_GET['password'])
{
    Session::put('fname',$user->firstname." ".$user->lastname);
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

Route::get('admin/editpost/{id}',array('as'=>'editpost',  function ($id){
    $post = Post::find($id);
    return View::make('admin.editpost',  compact("post"));
}));

Route::get('admin/subaddcat/{id}',array('as'=>'addsubcatt',  function ($id){
    $subs = Subcategory::where("category",$id)->get();
    return Form::select('subcategory',$subs->lists('name','id'),'',array('class'=>'form-control'));
}));

Route::get('admin/managepost',array('as'=>'managepost',  function (){
    $post = Post::all();
    return View::make('admin.managepost',  compact("post"));
}));

Route::post('admin/addpost',array('as'=>'addpost1',  "uses"=>"PostController@show"));

Route::post('admin/editpost',array('as'=>'editpost1',  "uses"=>"PostController@edit"));

Route::post('admin/deletepost/{id}',  function ($id){
    $cat = Post::find($id);
    foreach($cat->images as $image){
        $image->delete();
        unlink(public_path().'/uploads/rooms/'.$image->name);
    }
    $cat->delete();
});
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
         foreach ($cat->post as $value)
        {
            $value->delete();
        }
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

Route::get('admin/slideshow/add',array( function(){
   return View::make('admin.slideshow');
}));

Route::get('admin/slideshow',array( function(){
    $post = Slideshow::orderBy("created_at","DESC")->get();
    return View::make('admin.manageslide',compact("post"));
}));

Route::post('admin/deleteslide/{id}',array( function($id){
    $slide  = Slideshow::find($id);
    unlink(public_path().'/uploads/slideshow/'.$slide->picture);
    $slide->delete();
}));


Route::post('admin/slideshow/add',array("uses"=>"PostController@addslideshow"));

Route::post('admin/addimages',array('as'=>'addimages',  "uses"=>"PostController@index"));

Route::get('logout',array("as"=>"logout",function(){
    Session::forget('fname');
     Session::flush();
    return Redirect::to("/");
}));