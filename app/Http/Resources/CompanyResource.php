<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;


class CompanyResource extends JsonResource
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
           'name'=>$this->name,
           'url'=>$this->url,
           'location'=>$this->location,
           'type'=>$this->type,
           'reg_no'=>$this->reg_no,
           'about'=>Str::of($this->about)->limit(75),
           'created_at'=>$this->created_at->diffForHumans()

        ];
    }
}
