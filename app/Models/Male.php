<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Male extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'number_tlp',
        'city',
        'motivation',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
