<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class js_rights extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'name',
        'description'
    ];

    public function roles() {
        return $this->belongsToMany('\App\Models\js_roles', 'js_right_roles', 'right_id', 'role_id');
    }
    public function users(){
        $users = [];
        $not_users = [];

        $roles = $this->roles()->get();
        foreach ($roles as $role){
            $role_users = $role->users()->get();
            foreach ($role_users as $user){
                $paste = true;
                if ($paste)
                    array_push($users, $user);
                else
                    array_push($not_users, $user);
            }
        }

        return $users;
    }
    public function belongs_to_user($user){
        $users = $this->users();
        foreach ($users as $u){
            if ($u->nick == $user || $u->id == $user){
                return true;
            }
        }
        return false;
    }
}
