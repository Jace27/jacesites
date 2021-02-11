<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class js_posts_types extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'folder'
    ];
}
