<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class Products extends Resource
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
            'ProductName'=>$this->name,
            'Description'=>$this->details,
            'Price'=> $this->price,
            'Stock'=>$this->stock,
            'Discount'=>$this->discount
        ];
    }
}
