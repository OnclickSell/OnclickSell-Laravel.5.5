<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class frontend_frameworks extends Model
{
    protected $table = 'frontend_framework';

    public function frameworks() {
    	return $this->belongsTo('App\frontend_framework_list', 'frontend_framework_id');
    }
}
