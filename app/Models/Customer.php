<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Customer extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'phone',
        'chat_id',
        'dob',
    ];
    protected $casts = [
        'dob' => 'date',
    ];
}
