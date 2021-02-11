<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class js_users_sessions extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'token',
        'created_at',
        'updated_at'
    ];

    public function user(){
        return $this->belongsTo('\App\Models\js_users', 'user_id', 'id');
    }
}
