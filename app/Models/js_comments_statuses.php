<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class js_comments_statuses extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
    ];

    public function comments(){
        return $this->hasMany('\App\Models\js_comments', 'status_id', 'id');
    }
}
