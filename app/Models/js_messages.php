<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class js_messages extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps = true;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'message_id',
        'content',
        'user_id',
        'chat',
        'status_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function user(){
        return $this->belongsTo('\App\Models\js_users', 'user_id', 'id');
    }
    public function status(){
        return $this->belongsTo('\App\Models\js_messages_statuses', 'status_id', 'id');
    }
}
