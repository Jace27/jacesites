<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class js_chat_users extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'chat_id',
        'user_id',
        'role_id',
        'status_id'
    ];

    public function chat(){
        return $this->belongsTo('\App\Models\js_chats', 'chat_id', 'id');
    }
    public function user(){
        return $this->belongsTo('\App\Models\js_users', 'user_id', 'id');
    }
    public function role(){
        return $this->belongsTo('\App\Models\js_roles', 'role_id', 'id');
    }
    public function status(){
        return $this->belongsTo('\App\Models\js_chat_users_statuses', 'status_id', 'id');
    }
}
