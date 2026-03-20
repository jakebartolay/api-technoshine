<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // ✅ import
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory; // ✅ enable factory

    protected $fillable = ['label', 'before', 'after', 'user_id'];
}