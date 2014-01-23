<?php

class PostController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
//            $options = array(
//                'delete_type' => 'POST',
//                'db_host' => 'localhost',
//                'db_user' => 'root',
//                'db_pass' => 'kevdom',
//                'db_name' => 'example',
//            );
	   require('UploadHandler.php');
////           require ('CustomUploadHandler.php');
//                   $upload_handler = new CustomUploadHandler($options);
           $upload_handler = new UploadHandler();
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post =  Post::create(array(
                                "category"      =>Input::get('category'),
                                "subcategory"=>Input::get('subcategory'),
                                "name"           =>Input::get('name'),
                                "discr"            =>Input::get('discr'),
                                "user_id"        => 1
                            ));
                Session::put('pid',$post->id);
                return View::make('admin/addpostimages',  compact("post"));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}