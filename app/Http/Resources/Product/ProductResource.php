<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'Product Name'=>$this->name,
            'Description'=>$this->details,
            'Price'=> $this->price,
            'Stock'=>$this->stock,
            'Discount'=>$this->discount
        ];
    }
}