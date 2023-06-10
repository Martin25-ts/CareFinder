<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $table = 'msstatus';



    protected $primaryKey = 'statusId';

    public function getNameAttribute()
    {
        return $this->attributes['status'];
    }
}
