<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
	protected $table = 'comments';

    protected $fillable = [
    	'posts_id','isi'
    ];

    public function Post(){
    	return $this->belongsTo('App\Post','id');
    }
}
