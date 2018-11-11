<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';
	protected $foreignKey = 'posts_id';

    protected $fillable = [
    	'title','isi'
    ];

    public function Comment(){
    	return $this->hasMany('App\Comment','posts_id','id');
    }

}
