<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class js_roles extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'type_id',
        'name'
    ];

    public function type(){
        return $this->belongsTo('\App\Models\js_roles_types', 'type_id', 'id');
    }
    public function users(){
        return $this->belongsToMany('\App\Models\js_users', 'js_user_roles', 'role_id', 'user_id');
    }
    public function rights(){
        return $this->belongsToMany('\App\Models\js_rights', 'js_right_roles', 'role_id', 'right_id');
    }
    public function chat_user_role_status(){
        return $this->hasMany('\App\Models\js_chat_users', 'role_id', 'id');
    }
}
