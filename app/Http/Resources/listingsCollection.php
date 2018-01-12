<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\User;
use App\Http\Resources\UserCollection;
use App\listings;

class listingsCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => listings::all()->load('technologies')->load([

                'technologies.Get_frontend_plateforms',
                'technologies.Get_frontend_frameworks',
                'technologies.Get_backend_plateforms',
                'technologies.Get_backend_frameworks'

            ])->load([

                'technologies.Get_backend_frameworks.frameworks',
                'technologies.Get_backend_plateforms.plateforms',
                'technologies.Get_frontend_frameworks.frameworks',
                'technologies.Get_frontend_plateforms.plateforms'
            ])->load('comments')->load(['comments.replies'])
                ->load('reviews')->load(array('users'=>function($query){

                     $query->select('id','first_name', 'last_name', 'description', 'profile_picture')->get();

            })),

            'links' => [
                'self' => 'link-value',
            ],
        ];
    }
}
