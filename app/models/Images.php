<?php
class Images extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'image';
                
                protected  $guarded = array('id');
 
                public function post(){
                    return $this->belongsTo('Post', 'postid', 'id');
                }
                
                

}
