<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class js_dreamdiary_records extends Model
{
    use HasFactory, SoftDeletes;
    public $timestamps = true;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'hidden',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function user(){
        return $this->belongsTo('\App\Models\js_users', 'user_id', 'id');
    }
    public function tags(){
        return $this->belongsToMany('\App\Models\js_dreamdiary_tags', 'js_dreamdiary_record_tags', 'record_id', 'tag_id');
    }
}
