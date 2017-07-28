<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post1 extends Model
{
    //
    protected $table = 'post1';
    protected $fillable = ['judul','content'];
    protected $visible = ['judul','content'];
    public $timestamps = true;
}
