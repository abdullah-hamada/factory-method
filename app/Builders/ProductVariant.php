<?php

namespace App\Builders;

class ProductVariant
{
    public function __construct(
        public string $name,
        public string $sku,
        public float $priceModifier = 0.0,
    ) {}
}
