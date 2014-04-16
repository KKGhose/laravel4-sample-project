<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index() //API GET all
	{
		//

        return Post::find(1)->user;
        echo 'GET: all posts';
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
        echo 'POST: in create with post';
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store() //API POST
	{
		//
        echo 'POST: in store with post';
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id) //API GET SINGLE ITEM
	{
		//

        echo 'GET: show '. $id;
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

        echo 'POST: edit'. $id;
        die('asdf');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id) //API PUT
	{
        die('update');
        echo 'POST: update'. $id;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id) //API DELETE
	{
		//
        echo 'DELETE: in destroy';
	}

}