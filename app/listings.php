<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class listings extends Model
{
	protected $table = 'listings';

	public function users() {
		return $this->belongsTo('App\User', 'user_id');
	}

	public function technologies() {
		return $this->hasMany('App\technologies', 'listing_id');
	}

	public function reviews() {
		return $this->hasMany('App\reviews', 'listing_id');
	}

	public function comments() {
		return $this->hasMany('App\comments', 'listing_id');
	}

	
}
