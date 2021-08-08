<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvestmentResource extends JsonResource
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
            'id'=>$this->id,
            'currency'=>$this->currency,
            'amount'=>$this->amount,
            'shares'=>$this->shares,
            'tc'=>$this->tc,
            'fac'=>$this->fac,
            'ti'=>$this->ti,
        ];
    }
}
