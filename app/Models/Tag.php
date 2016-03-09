<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model  {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tags';
        protected $primaryKey = 'id_tag';
        public $timestamps = false;
        
	public function posts(){
            return $this->belongsToMany('App\Models\Post', 'posts_tags','id_tag','id_post');
	}
}