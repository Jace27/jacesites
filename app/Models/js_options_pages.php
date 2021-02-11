<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class js_options_pages extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name'
    ];

    public function options(){
        return $this->hasMany('\App\Models\js_options', 'page_id', 'id');
    }
}
