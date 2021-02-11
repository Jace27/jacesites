<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class js_posts extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps = true;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'title',
        'content_file',
        'available_after',
        'right_id',
        'show_after',
        'type_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function comments(){
        return $this->hasMany('\App\Models\js_comments', 'post_id', 'id');
    }
}
