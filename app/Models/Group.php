<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Sanctum\HasApiTokens;

class Group extends Model
{
    use HasApiTokens, HasFactory, SoftDeletes;

    protected $table = 'app.groups';

    protected $fillable = [
        'title',
    ];

    public function notes()
    {
        return $this->belongsToMany(Group::class);
    }
}
