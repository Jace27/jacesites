<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class js_dreamdiary_tags extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'description',
        'group_id'
    ];

    public function group(){
        return $this->belongsTo('\App\Models\js_dreamdiary_tags_groups', 'group_id', 'id');
    }
    public function records(){
        return $this->belongsToMany('\App\Models\js_dreamdiary_records', 'js_dreamdiary_record_tags', 'tag_id', 'record_id');
    }
}
