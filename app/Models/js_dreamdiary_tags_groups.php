<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class js_dreamdiary_tags_groups extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name'
    ];

    public function tags(){
        return $this->hasMany('\App\Models\js_dreamdiary_tags', 'group_id', 'id');
    }
}
