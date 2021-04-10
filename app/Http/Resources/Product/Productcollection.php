<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class Productcollection extends JsonResource
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
            'name'          =>  $this->name,
//            the next line calculates the rating using the relationship between the product and reviews objects
            'Rating'=>$this->reviews->count() > 0 ? round($this->reviews->sum('star')/$this->reviews->count(),1) : "Not rated yet",
            'MoreInfo' => [
//                this will place the routing link to the specified route and pass the id as parameter
                'Show'=> route('Products.show',$this->id),]
        ];
    }
}
