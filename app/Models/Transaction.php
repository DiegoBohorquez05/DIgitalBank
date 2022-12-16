<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'money',
        'user_id_send',
        'user_id_receives',
    ];

    protected $table = 'transaction';
}
