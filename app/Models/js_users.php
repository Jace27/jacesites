<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class js_users extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'nick',
        'password',
        'created_at',
        'updated_at'
    ];

    public function roles() {
        return $this->belongsToMany('\App\Models\js_roles', 'js_user_roles', 'user_id', 'role_id');
    }
    public function has_role($role){
        $roles = $this->roles()->get();
        foreach ($roles as $r){
            if (( is_object($role) && ($r->id == $role->id || $r->name == $role->name)) ||
                (!is_object($role) && ($r->id == $role     || $r->name == $role))){
                return true;
            }
        }
        return false;
    }
    public function rights(){
        $rights = [];
        $not_rights = [];

        $roles = $this->roles()->get();
        foreach ($roles as $role){
            $role_rights = $role->rights()->get();
            foreach ($role_rights as $right){
                $paste = true;
                if ($paste)
                    array_push($rights, $right);
                else
                    array_push($not_rights, $right);
            }
        }

        return $rights;
    }
    public function has_right($right){
        $rights = $this->rights();
        foreach ($rights as $r){
            if ((!is_object($right) && ($r->name == $right       || $r->id == $right)) ||
                ( is_object($right) && ($r->name == $right->name || $r->id == $right->id))){
                return true;
            }
        }
        return false;
    }

    public function options_values(){
        return $this->hasMany('\App\Models\js_options_values', 'user_id', 'id');
    }
    public function options(){
        $query = DB::select(DB::raw('SELECT js_options.name as `option`, js_options_types.name as `type`, js_options_pages.name as `page`, js_options_values.value, js_options_values.hidden FROM js_options, js_options_types, js_options_pages, js_options_values, js_users WHERE js_users.id='.$this->id.' AND js_options.type_id=js_options_types.id AND js_options.page_id=js_options_pages.id AND js_options.id=js_options_values.option_id AND js_users.id=js_options_values.user_id'));
        return $query;
    }

    public function dream_records(){
        return $this->hasMany('\App\Models\js_dreamdiary_records', 'user_id', 'id');
    }

    public function session(){
        return $this->hasOne('\App\Models\js_users_sessions', 'user_id', 'id');
    }

    public function chats(){
        return $this->belongsToMany('\App\Models\js_chats', 'js_chat_users', 'user_id', 'chat_id');
    }
    public function chat_user_role_status(){
        return $this->hasMany('\App\Models\js_chat_users', 'user_id', 'id');
    }

    public function has_chat_right($right, $chat){
        $roles = $this->chat_roles($chat);
        foreach ($roles as $role){
            $role_rights = $role->rights()->get();
            foreach ($role_rights as $r_right){
                if ((!is_object($right) && ($r_right->name == $right       || $r_right->id == $right)) ||
                    ( is_object($right) && ($r_right->name == $right->name || $r_right->id == $right->id))){
                    return true;
                }
            }
        }
        return false;
    }
    public function has_chat_role($role, $chat){
        $roles = $this->chat_roles($chat);
        foreach ($roles as $r){
            if (( is_object($role) && ($r->id == $role->id || $r->name == $role->name)) ||
                (!is_object($role) && ($r->id == $role     || $r->name == $role))){
                return true;
            }
        }
        return false;
    }

    public function messages($chat = null){
        if ($chat == null)
            return $this->hasMany('\App\Models\js_messages', 'user_id', 'id');
        else
            return $this->hasMany('\App\Models\js_messages', 'user_id', 'id')->where('chat', $chat);
    }
    public function last_message_read($chat = null){
        if ($chat == null)
            return $this->hasMany('\App\Models\js_message_user_reads', 'user_id', 'id');
        else
            return $this->hasMany('\App\Models\js_message_user_reads', 'user_id', 'id')->where('chat', $chat);
    }
}
