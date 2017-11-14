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
            'Product Name' => $this->name,
            'Description' => $this->details,
            'Price' => $this->price,
            'Stock' => $this->stock == 0 ? 'Out Of Stock' : $this->stock,
            'Discount' => $this->discount, 
            'Total Price' => round((1-$this->discount/100) * $this->price, 2),
            'Rating' => $this->reviews->count() >0 ? round($this->reviews->sum('star')/$this->reviews->count(), 2) : 'No Rating',
            'href' => [
                'Review' => route('reviews.index', $this->id)
            ]
        ];
    }
}
