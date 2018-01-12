<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class frontend_plateforms extends Model
{
    protected $table = 'frontend_plateform';

    public function plateforms() {
    	return $this->belongsTo('App\frontend_plateform_list', 'frontend_plateform_id');
    }
}
