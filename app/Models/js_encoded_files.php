<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class js_encoded_files extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'file',
        'password',
        'downloadable',
        'mime',
        'created_at',
        'updated_at'
    ];

    function user(){
        return $this->belongsTo('\App\Models\js_users', 'user_id', 'id');
    }
}
