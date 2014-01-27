<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Category extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'category';
                
                protected  $guarded = array('id');

                public function post(){
                    return $this->hasMany('Post', 'category', 'id');
                }
                
                public function subcategory(){
                    return $this->hasMany('Subcategory', 'category', 'id');
                }

}
