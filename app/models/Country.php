<?php

class Country extends \Eloquent {
	protected $fillable = [];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'countries';

    public function posts()
    {
        return $this->hasManyThrough('Post', 'User');
    }
}