<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table ='categories';
    
    protected $fillabe = [
        'name',
        'slug',
        'description',
        'image',
        'meta_title',
        'meta_decription',
        'meta_keyword',
        'navbar_status',
        'status',
        'created_by'
    ];
}
