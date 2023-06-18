<?php

namespace App\Models;

use Illuminate\Foundation\Auth\msuser  as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class msuser extends Model
{

    use HasFactory;
    protected $table = 'msuser';
    protected $primaryKey = 'userid';
    protected $attributes = [
        'userid' => 'required',
        'userfname' => 'required',
        'userlname' => 'required',
        'password' => 'required',
        'userphone' => 'required',
        'useremail' => 'required',
        'userprofile' => 'required',
        'userheight' => 0,
        'userweight' => 0,
        'userDOB' => 'required',
        'bloodId' => 'BL000',
        'relationshipid' => 'RL000',
        'userinsurance' => 'required',
        'userdisesase' => 'required',
        'genderId' => 'GN000',
        'statusId' => 'ST001'


    ];




    public function detail(){
        return $this->hasMany(PeopleDetail::class);
    }


}
