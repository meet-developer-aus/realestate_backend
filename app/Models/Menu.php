<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    

    protected $fillable = [
        'title',
        'url',
        'parent_id',
        'meta_title',         // Add these lines
        'meta_description',   // Add these lines
    ];
    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id', 'id');
    }
}
