<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class js_options extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'type_id',
        'page_id',
        'input_attrs'
    ];

    public function values(){
        return $this->hasMany('\App\Models\js_options_values', 'option_id', 'id');
    }
    public function type(){
        return $this->belongsTo('\App\Models\js_options_types', 'type_id', 'id');
    }
    public function page(){
        return $this->belongsTo('\App\Models\js_options_pages', 'page_id', 'id');
    }
}
