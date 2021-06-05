<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

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
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'details' => $this->details,
            'new' => $this->new,
            'url_img' => $this->url_img,
            'price' => $this->price,
            'price_discount' => $this->price_discount,

        ];
    }
}
