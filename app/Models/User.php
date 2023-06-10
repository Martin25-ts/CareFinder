<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'msuser';


    protected $primaryKey = 'userid';

    // Getter for userid attribute
    public function getUseridAttribute($value)
    {
        // Check if the value matches the desired pattern
        if (preg_match('/^US[0-9]{3}$/', $value)) {
            return $value;
        }

        // If the value doesn't match the pattern, format it
        return 'US' . str_pad($value, 3, '0', STR_PAD_LEFT);
    }

    // Setter for userid attribute
    public function setUseridAttribute($value)
    {
        // Remove any non-numeric characters
        $value = preg_replace('/[^0-9]/', '', $value);

        $this->attributes['userid'] = $value;
    }


    public function gender()
    {
        return $this->belongsTo(Gender::class, 'genderId');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'statusId');
    }

    public function blood()
    {
        return $this->belongsTo(Blood::class, 'bloodId');
    }

    public function relationship()
    {
        return $this->belongsTo(Relationship::class, 'relationshipId');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'userfname',
        'useremail',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}
