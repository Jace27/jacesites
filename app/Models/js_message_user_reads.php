<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class js_message_user_reads extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'last_message_id',
        'chat',
        'created_at',
        'updated_at'
    ];

    public function user(){
        return $this->belongsTo('\App\Models\js_users', 'user_id', 'id');
    }
    public function last_message(){
        return $this->belongsTo('\App\Models\js_messages', 'last_message_id', 'id');
    }
}
