<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class js_post_user_reads extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'post_id',
        'created_at',
        'updated_at'
    ];

}
