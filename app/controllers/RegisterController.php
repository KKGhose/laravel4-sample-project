<?php

class RegisterController extends BaseController {

    protected $layout = 'master';

    public function index()
    {
        $this->layout->title   = "gallery :: register";
        $this->layout->content = View::make('register.index');
    }

    public function store()
    {
        $s = $this->user->create(Input::all());

        if($s->isSaved())
        {
            return Redirect::route('users.index')
                ->with('flash', 'The new user has been created');
        }

        return Redirect::route('register.index')
            ->withInput()
            ->withErrors($s->errors());
    }

}