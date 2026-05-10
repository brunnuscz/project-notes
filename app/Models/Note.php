<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Note extends Model
{
    use HasApiTokens, HasFactory;

    protected $table = 'app.notes';

    protected $fillable = [
        'title',
        'description',
    ];
}
