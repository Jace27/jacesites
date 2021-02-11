<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class js_options_values extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'user_id',
        'option_id',
        'value',
        'hidden',
        'created_at',
        'updated_at'
    ];

    public function user(){
        return $this->belongsTo('\App\Models\js_users', 'user_id', 'id');
    }
    public function option(){
        return $this->belongsTo('\App\Models\js_options', 'option_id', 'id');
    }
}
