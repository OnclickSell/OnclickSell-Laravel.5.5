<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;
use App\User;
use App\Http\Resources\UserCollection;


class listingsResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [

            'id' => $this->id,
            'title' => $this->title,
            'summary' => $this->summary,
            'description' => $this->description,
            'plan_id' => $this->id,
            'user' => $this->load(array('users'=>function($query){

                $query->select('id','first_name', 'last_name', 'description', 'profile_picture')->get();

            })),

            'technologies' => $this->technologies->load([

                'Get_frontend_plateforms',
                'Get_frontend_frameworks',
                'Get_backend_plateforms',
                'Get_backend_frameworks'

            ])->load([

                'Get_backend_frameworks.frameworks',
                'Get_backend_plateforms.plateforms',
                'Get_frontend_frameworks.frameworks',
                'Get_frontend_plateforms.plateforms'
            ]),

            'comments' => $this->comments->load(['replies']),
            'comments' => $this->reviews,
            'completed' => $this->completed,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at

        ];
    }
}
