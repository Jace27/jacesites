<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class js_roles_types extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name'
    ];

    public function roles(){
        return $this->hasMany('\App\Models\js_roles', 'type_id', 'id');
    }
}
