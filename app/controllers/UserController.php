<?php

class UserController extends \BaseController {

	protected $layout = 'master';

	public function index()
	{
        $this->layout->title   = "gallery :: user home";
		$this->layout->content = View::make('user.index');
	}

    public function login()
    {
        $data = array();
        $this->layout->title   = "gallery :: login";
        $this->layout->content = View::make('user.login', $data);
    }

    public function register()
    {
        $data = array();
        $this->layout->title   = "gallery :: register you account";
        $this->layout->content = View::make('user.register', $data);
    }

    public function postLogin()
    {
        if (Auth::attempt(array('email'=>Input::get('email'), 'password'=>Input::get('password')))) {
            return Redirect::to('profile')->with('message', 'You are now logged in!');
        } else {
            return Redirect::to('login')
                ->with('message', 'Your email/password combination was incorrect')
                ->withInput();
        }
    }

    public function postRegister()
    {
        $data = array();
        $data['input'] = $input = Input::all();
        $rules = array(
            'name' => 'required|regex:/[a-zA-Z0-9]*/',
            'email' => 'required|email|unique:users',
            'password' => 'confirmed|required|min:5|max:20',
            'birth_date' => 'required',
            'terms'    => 'accepted'
        );
        $validation = Validator::make($input, $rules);
        if ($validation->passes()) {
            User::saveUser($input);
            return Redirect::to('success');
        }
        return Redirect::back()->withInput()->withErrors($validation->errors());
    }

	public function profile()
	{
        if(!Auth::check()) return Redirect::to('login');

        $data = array();

		$data['user']          = User::find(Auth::user()->id);
        $this->layout->title   = "gallery :: user profile";
		$this->layout->content = View::make('user.index', $data);
	}

    public function logout() {
        Auth::logout();
        return Redirect::to('login')->with('message', 'Your are now logged out!');
    }

    public function success()
    {
        $this->layout->title   = "gallery :: registration success";
        $this->layout->content = View::make('user.success');
    }

}