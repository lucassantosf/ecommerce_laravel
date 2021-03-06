<?php

namespace App\Models;
use Illuminate\Contracts\Auth\Authenticatable;

class Usuario extends ModelDefault implements Authenticatable
{
    protected $table = "usuarios";

    protected $fillable = ['login','email','password','nome','status','image'];

    public function getAuthIdentifierName(){
        return 'login';
    }

    public function getAuthIdentifier(){
        return $this->login;
    }

    public function getAuthPassword(){
        return $this->password;
    }

    public function getRememberToken(){}

    public function setRememberToken($value){}

    public function getRememberTokenName(){}

    public function setLoginAttribute($login){
        $value = preg_replace("/[^0-9]/","",$login);
        $this->attributes["login"] = $value;
    }

    public function setPasswordAttribute($value){
        $this->attributes["password"] = \Hash::make($value);
    }

}
