<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Routing\Route;

class ProductResource extends JsonResource
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
           'Description'   =>  $this->detail,
            'price'         =>  $this->price,
            'stock'         =>  $this->stock,
            'discount'      =>  $this->discount,
//            the next line calculates the rating using the relationship between the product and reviews objects
            'Rating'=>$this->reviews->count() > 0 ? round($this->reviews->sum('star')/$this->reviews->count(),1) : "Not rated yet",
            'link' => [
//                this will place the routing link to the specified route and pass the id as parameter
                'Reciews'=> route('review.index',$this->id)
            ]
        ];
    }
}
