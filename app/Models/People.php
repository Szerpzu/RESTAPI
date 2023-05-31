<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'street',
        'city',
    ];

    protected $guarded = ['id'];

    protected $casts = [
        'id' => 'integer',
    ];
}