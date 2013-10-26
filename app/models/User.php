<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Cartalyst\Sentry\Users\Eloquent\User {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

    public function name() {
        return $this->attributes['first_name'] . ' ' . $this->attributes['last_name'];
    }

    public function getGravatar() {
        $email = md5($this->attributes['email']);
        return "https://www.gravatar.com/avatar/$email";
    }


}