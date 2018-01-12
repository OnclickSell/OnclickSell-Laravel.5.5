<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\listings;
use App\Http\Resources\listings as listingsResource;
use App\Http\Resources\listingsCollection;
use App\User;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollection;

class usersController extends Controller
{
    public function getUsers() {
    	return new UserCollection(User::all());
    }

    public function getSingleUsers(Request $request) {
    	return new UserResource(User::find($request->id));
    }
}
