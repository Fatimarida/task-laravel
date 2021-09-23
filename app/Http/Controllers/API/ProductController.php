<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Http\Resources\TrendingProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = Product::find($id);

        if ($product) {
            $product = $product->where('id', $product->id)->withCount(['reviews', 'ratings'])->withAvg('ratings', 'star_count')
                ->with(['sizes'])->get()[0];
//            dd($product);
            return (new \App\Http\JsonResponse)->success("Product Details", new ProductResource($product));
        } else {
            return (new \App\Http\JsonResponse)->resourceNotFound();
        }

    }

    public function trendingProducts()
    {
        $product = Product::withCount(['reviews', 'ratings'])->withAvg('ratings', 'star_count')
            ->with(['sizes'])->orderByDesc('ratings_avg_star_count')->paginate(5);
//            dd($product);
        return (new \App\Http\JsonResponse)->success("Product Details", new ProductCollection($product));
    }


}
