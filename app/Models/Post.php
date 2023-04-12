<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //Habilitamos la asignacion masiva los campos
    protected $fillable = ['title', 'content'];
}
