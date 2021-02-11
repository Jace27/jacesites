<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class js_chat_users_statuses extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name'
    ];

    public function chat_user_role_status(){
        return $this->hasMany('\App\Models\js_chat_users', 'status_id', 'id');
    }
}
