<?php

namespace App\Builders;

interface ProductBuilderInterface
{
    public function withDetails(string $name, string $description, float $price): self;

    public function withVariants(array $variants): self;

    public function withAllowedShippingMethods(array $methods): self;

    public function build(): Product;
}
