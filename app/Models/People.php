<?php

namespace App\Models;

use Illuminate\Foundation\Auth\People  as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class People extends Model
{
    use HasFactory;

    protected $attributes = [
        'userid' => 'required',
        'firstname' => 'required',
        'lastname' => 'required',
        'password' => 'required',
        'userphone' => 'required',
        'useremail' => 'required',
        'userprofile' => 'required',
        'height' => 'required',
        'weight' =>'required' ,
        'bloodId' => 'required',
        'relationId' => 'required',
        'userinsurance' => 'required',
        'userdiseasase' => 'required',
        'genderid' => 'required',
        'statusId' => 'required',
        'remember_token' => 'required'
    ];



    public function detail(){
        return $this->hasMany(PeopleDetail::class);
    }
}
