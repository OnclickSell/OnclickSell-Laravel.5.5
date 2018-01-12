<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;
use App\listings;

class test extends Controller
{
    public function test() {
    	return listings::all()->load(['users', 'technology']);
    }
}
