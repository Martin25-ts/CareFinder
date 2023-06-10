<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    protected $table = 'msgender';



    protected $primaryKey = 'genderId';

    public function msuser()
    {
        return $this->hasMany(msuser::class,'genderId');
    }
}
