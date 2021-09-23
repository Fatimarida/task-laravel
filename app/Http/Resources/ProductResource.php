<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        $sizes = null;
        if (isset($this->sizes)) {
            foreach ($this->sizes as $size)
                $sizes[] = $size->size;
        }
        return [
            'name' => $this->name,
            'rent' => $this->rent,
            'refundable_deposit' => $this->refundable_deposit,
            'image_path' => $this->image_path,
            'reviews_count' => $this->reviews_count,
            'ratings_count' => $this->ratings_count,
            'ratings_avg_star_count' => $this->ratings_avg_star_count,
            'sizes' => $sizes

        ];
    }
}
