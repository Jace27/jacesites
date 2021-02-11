<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class js_user_chat_roles extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'user_id',
        'chat_id',
        'role_id'
    ];

    public function user(){
        return $this->belongsTo('\App\Models\js_users', 'user_id', 'id');
    }
    public function chat(){
        return $this->belongsTo('\App\Models\js_chats', 'chat_id', 'id');
    }
    public function role(){
        return $this->belongsTo('\App\Models\js_roles', 'role_id', 'id');
    }
}
