<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeopleDetail extends Model
{
    use HasFactory;

    protected $atribute =  [
        'userid' => 'required',

    ];
    public function people(){
        return $this->belongsTo(msuser::class);
    }
}
