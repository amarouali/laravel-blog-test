<?php namespace Amar\Media\models;

use Eloquent;
class Thumb extends \Eloquent {
	protected $table = 'medias';
	protected $fillable = ['id','ref','ref_id','position'];
    public $timestamps=false;  

    public function get(){
        return Thumb::all();
    } 


}