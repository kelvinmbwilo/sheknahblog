<?php

class Post extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'posts';
                
    protected  $guarded = array('id');

    public function category(){
        $this->belongsTo('Category', 'category', 'id');
    }

    public function subcategory(){
        $this->belongsTo('Subcategory', 'subcategory', 'id');
    }

    public function user(){
        $this->belongsTo('User', 'user_id', 'id');
    }

    public function images(){
        return $this->hasMany("Images","postid","id");
    }


}