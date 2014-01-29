<?php

class HomeController extends \BaseController {

	protected $layout = 'master';

	public function index()
	{
		$data = array();
		$users = User::findAllUser();
        $data['users'] = $users;
        $this->layout->title = 'gallery :: home';
		$this->layout->content = View::make('home.index', $data);
	}

}