<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;

class Post extends Model  {

	use DatePresenter;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'posts';
        protected $primaryKey = 'id_post';
        public $timestamps = false;

	public function tags(){
            return $this->belongsToMany('App\Models\Tag', 'posts_tags','id_post','id_tag');
	}
}