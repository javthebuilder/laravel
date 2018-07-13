<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table name rename: if ever
    protected $table = 'posts';
    //primary key
    public $primaryKey = 'id';
    //Time timestamps
    public $timestamps = true;
}
