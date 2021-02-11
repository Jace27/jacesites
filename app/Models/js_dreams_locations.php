<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class js_dreams_locations extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'description',
        'tag_id',
        'map_coords',
        'map_shape'
    ];
}
