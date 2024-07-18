<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'author_id',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id'); // Sesuaikan dengan kolom foreign key
    }
}
