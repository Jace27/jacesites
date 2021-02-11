<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class js_chats_statuses extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name'
    ];

    public function chats(){
        return $this->hasMany('\App\Models\js_chats', 'status_id', 'id');
    }
}
