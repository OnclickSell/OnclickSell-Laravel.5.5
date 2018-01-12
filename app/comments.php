<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    protected $table = 'comment';

    public function replies() {
    	return $this->hasMany('App\replies', 'comment_id');
    }
}
