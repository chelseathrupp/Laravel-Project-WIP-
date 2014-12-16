<?php

class UserController extends \BaseController {

	public function __construct(){
		$this->beforeFilter("auth",array('only'=>array('edit','show','update')));

		if(Auth::check()){
			$authorisedID = Request::segment(2);
			$this->beforeFilter("authorisation:".$authorisedID,
				array('only'=>array('edit','show','update')));
		}
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
		//
		//validate input
		
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
	// 	$oUser = User::find($id);

	// 	return View::make("staffDetails")->with("user",$oUser);
	// }


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $ids
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
