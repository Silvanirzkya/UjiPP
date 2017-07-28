<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    //
    protected $table = 'posts';
    protected $fillable = ['title','content'];
    protected $visible = ['title','content'];
    public $timestamps = true;
}
