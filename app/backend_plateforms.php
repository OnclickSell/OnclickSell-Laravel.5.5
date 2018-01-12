<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class backend_plateforms extends Model
{
    protected $table = 'backend_plateform';

    public function plateforms() {
    	return $this->belongsTo('App\backend_plateform_list', 'backend_plateform_id');
    }
}
