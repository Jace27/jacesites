<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class js_title_events extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'page_id',
        'title',
        'description',
        'created_at',
        'updated_at'
    ];

    public function page(){
        return $this->belongsTo('\App\Models\js_site_pages', 'page_id', 'id');
    }
}
