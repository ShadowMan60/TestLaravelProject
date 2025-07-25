<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'score',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function resultDetails()
    {
        return $this->hasMany(ResultDetail::class);
    }
}
