<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'money',
    ];

    public function usuario()
    {
        return $this->hasMany(User::class);
    }
}
