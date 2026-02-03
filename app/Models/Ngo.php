<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ngo extends Model
{
    use HasFactory;

    protected $fillable = [
    'name',
    'email',
    'phone',
    'location',
    'mission',
    'description',
    'verification_token',
    'email_verified_at',
];

protected $casts = [
    'email_verified_at' => 'datetime',
];

public function isVerified()
{
    return !is_null($this->email_verified_at);
}

}
