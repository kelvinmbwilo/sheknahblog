<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
                     
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
	    $users = User::create(
                    array('email'=>Input::get('email'),'firstname'=>Input::get('firstname'),'lastname'=>Input::get('lastname'),'password'=>Input::get('password')));
    $user = User::all();
    return View::make('admin.manageUser',  compact('user'));
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
	public function update()
	{
                     $user = User::find(Input::get('id'));
                      $user->email = Input::get('email');
                      $user->firstname = Input::get('firstname');
                      $user->lastname = Input::get('lastname');
                      $user->save();
                      
                     return Redirect::route("manageuser");
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	
	}

}