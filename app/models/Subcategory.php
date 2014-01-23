<?php

class Subcategory extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'subcategory';
                
                protected  $guarded = array('id');
 
                public function post(){
                    return $this->hasMany('Post', 'subcategory', 'id');
                }
                
                public function maincategory(){
                    return $this->belongsTo('Category', 'category', 'id');
                }
                

}
