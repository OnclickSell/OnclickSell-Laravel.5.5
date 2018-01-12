<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class backend_frameworks extends Model
{
    protected $table = 'backend_framework';

    public function frameworks() {
    	return $this->belongsTo('App\backend_framework_list', 'backend_framework_id');
    }
}
