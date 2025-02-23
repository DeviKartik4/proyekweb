<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    /** @use HasFactory<\Database\Factories\DosenFactory> */
    use HasFactory;

    protected $fillable = [
        'namadosen',
        'nidn',
        'makul',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}