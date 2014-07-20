<?php
 
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
 
class User extends Eloquent implements UserInterface, RemindableInterface {
 
    protected $table = 'users';
    protected $fillable = array('username', 'password', 'email');
    protected $hidden = array('password');
    static $rules =[
            'username'  =>'required|min:4',
            'email'     =>'required|email|unique:users',
            'password'  =>'required|min:4|confirmed'
        ];
 
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }
 
    public function getAuthPassword()
    {
        return $this->password;
    }
 
    public function getRememberToken()
    {
        return $this->remember_token;
    }
 
    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }
 
    public function getRememberTokenName()
    {
        return 'remember_token';
    }
 
    public function getReminderEmail()
    {
        return $this->email;
    }
 
    public function articles()
    {
        return $this->hasMany('Article');
    }
 
    public function comments()
    {
        return $this->hasMany('Comment');
    }
 
}