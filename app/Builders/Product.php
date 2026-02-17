<?php

namespace App\Builders;

class Product
{
    public function __construct(
        public string $name,
        public string $description,
        public float $price,
        public array $variants = [],
        public array $allowedShippingMethods = [],
    ) {}

    public static function builder(): ProductBuilderInterface
    {
        return new ProductBuilder();
    }
}
