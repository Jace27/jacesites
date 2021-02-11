<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class js_chats extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps = true;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name',
        'image',
        'status_id',
        'token',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function status(){
        return $this->belongsTo('\App\Models\js_chats_statuses', 'status_id', 'id');
    }
    public function users(){
        return $this->belongsToMany('\App\Models\js_users', 'js_chat_users', 'chat_id', 'user_id');
    }
    public function chat_user_role_status(){
        return $this->hasMany('\App\Models\js_chat_users', 'chat_id', 'id');
    }
}
