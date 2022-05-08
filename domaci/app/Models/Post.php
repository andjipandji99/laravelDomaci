<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // //table name
    // protected $table = 'posts';
    // //primary key
    // public $primaryKey = 'id';
    // //timestamps
    // public $timestamps = false;
    public function user(){
        return $this->belongsTo('App\User');
    }

    protected $fillable = [
        'title', 'body', 'user_id', 'cover_image'
    ];
}
