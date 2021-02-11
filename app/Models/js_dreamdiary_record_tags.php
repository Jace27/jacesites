<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class js_dreamdiary_record_tags extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'record_id',
        'tag_id'
    ];
}
