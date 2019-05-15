<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table name
    //can change table name or change primary key
    protected $table ='posts';
    public $primaryKey = 'id';
    public $timestamps = true;
}
