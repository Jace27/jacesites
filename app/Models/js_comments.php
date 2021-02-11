<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class js_comments extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps = true;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'post_id',
        'user_id',
        'status_id',
        'parent_id',
        'content',
        'comment_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function status(){
        return $this->belongsTo('\App\Models\js_comments_statuses', 'status_id', 'id');
    }
    public function post(){
        return $this->belongsTo('\App\Models\js_posts', 'post_id', 'id');
    }
    public function user(){
        return $this->belongsTo('\App\Models\js_users', 'user_id', 'id');
    }
    public function parent(){
        return $this->belongsTo('\App\Models\js_comments', 'parent_id', 'id');
    }
    public function children(){
        return $this->hasMany('\App\Models\js_comments', 'parent_id', 'id');
    }
}
