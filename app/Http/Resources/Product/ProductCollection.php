<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'Product Name' => $this->name,
            'Total Price' => round((1-$this->discount/100) * $this->price, 2),
            'Rating' => $this->reviews->count() >0 ? round($this->reviews->sum('star')/$this->reviews->count(), 2) : 'No Rating',
            'Discount' => $this->discount, 
            'href' => [
                'Details' => route('products.show', $this->id)
            ]
        ];
    }
}
