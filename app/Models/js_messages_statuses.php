<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class js_messages_statuses extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name'
    ];

    public function messages($chat = null){
        if ($chat == null)
            return $this->hasMany('\App\Models\js_messages', 'status_id', 'id');
        else
            return $this->hasMany('\App\Models\js_messages', 'status_id', 'id')->where('chat', $chat);
    }
}
