<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class js_site_pages extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'link',
        'name',
        'access',
        'show_in_menu'
    ];

    public function title_events(){
        return $this->hasMany('\App\Models\js_title_events', 'page_id', 'id');
    }
}
