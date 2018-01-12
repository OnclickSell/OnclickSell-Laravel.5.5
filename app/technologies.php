<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class technologies extends Model
{
    protected $table = 'technology';

    public function GetListings () {
    	return $this->belongsTo('App\listings', 'listing_id');
    }

    public function Get_frontend_plateforms() {
    	return $this->hasMany('App\frontend_plateforms', 'technology_id');
    }

    public function Get_frontend_frameworks() {
    	return $this->hasMany('App\frontend_frameworks', 'technology_id');
    }

    public function Get_backend_plateforms() {
    	return $this->hasMany('App\backend_plateforms', 'technology_id');
    }

    public function Get_backend_frameworks() {
    	return $this->hasMany('App\backend_frameworks', 'technology_id');
    }
}
