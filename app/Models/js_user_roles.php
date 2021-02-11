<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class js_user_roles extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'role_id'
    ];
}
