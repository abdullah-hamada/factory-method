<?php

namespace App\Http\Controllers;

use App\Builders\Product;
use App\Builders\ProductVariant;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    public function create(): JsonResponse
    {
        $product = Product::builder()
            ->withDetails('Coffe latte', 'Coffe latte please select the size', 10.00)
            ->withVariants([
                new ProductVariant('Small', 'cofee-small', 0.00),
                new ProductVariant('Large', 'cofee-large', 5.00),
            ])
            ->withAllowedShippingMethods(['mrsool', 'talbat', 'noon'])
            ->build();

        return response()->json([
            'product' => [
                'name' => $product->name,
                'description' => $product->description,
                'price' => $product->price,
                'variants' => array_map(
                    fn ($variant) =>
                         ['name' => $variant->name, 'sku' => $variant->sku, 'priceModifier' => $variant ->priceModifier],
                    $product->variants
                ),
                'allowedShippingMethods' => $product->allowedShippingMethods,
            ],
        ]);
    }
}
