<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\listings;
use App\Http\Resources\listingsResource;
use App\Http\Resources\listingsCollection;
use App\User;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserCollection;

class listingsController extends Controller
{
    public function getListings() {
    	//return listingsCollection(listings::all());
    	return new listingsCollection(listings::all());
    }

    public function getSingleListings(Request $request) {
    	return new listingsResource(listings::find($request->id));
    }

    public function getAuthorizeSingleListings() {
    	return 'Success!';
    }
}
