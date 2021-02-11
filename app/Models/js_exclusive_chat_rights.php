<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class js_exclusive_chat_rights extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'chat_id',
        'right_id'
    ];
}
