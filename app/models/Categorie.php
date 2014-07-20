<?php

class Categorie extends \Eloquent {
	protected $fillable = [];

	public function articles()
    {
        return $this->hasMany('Article');
    }
}