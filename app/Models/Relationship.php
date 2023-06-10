<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
    use HasFactory;
    protected $table = 'msrelationship';



    protected $primaryKey = 'relationshipId';

    public function getNameAttribute()
    {
        return $this->attributes['relatinshipId'];
    }
}

