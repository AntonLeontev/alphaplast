<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'address',
        'primary_phone',
        'secondary_phone',
        'email',
        'instagram',
        'vk',
    ];
}
