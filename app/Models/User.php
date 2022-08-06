<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'name' ,
        'email' ,
        'cpf' ,
        'password' ,
        'role'

    ];

    protected $hidden =[
        'password'
    ];

    //relationship

    public function address(){
        return $this->hasOne(Address::class);
    }

    public function phones(){
        return $this->hasMany(Phone::class);
    }




    //mutators
    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }
}
