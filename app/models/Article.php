<?php

class Article extends \Eloquent {
	protected $fillable = [];
  

    public function comments()
    {
        return $this->hasMany('Comment');
    }
 
    public function categorie()
    {
        return $this->belongsTo('Categorie');
    }
 
    public function user()
    {
        return $this->belongsTo('User');
    }
}