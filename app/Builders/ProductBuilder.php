<?php

namespace App\Builders;

class ProductBuilder implements ProductBuilderInterface
{
    private string $name = '';

    private string $description = '';

    private float $price = 0.0;

    private array $variants = [];

    private array $allowedShippingMethods = [];

    public function withDetails(string $name, string $description, float $price): self
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;

        return $this;
    }

    public function withVariants(array $variants): self
    {
        $this->variants = $variants;

        return $this;
    }

    public function withAllowedShippingMethods(array $methods): self
    {
        $this->allowedShippingMethods = $methods;

        return $this;
    }

    public function build(): Product
    {
        $product = new Product(
            name: $this->name,
            description: $this->description,
            price: $this->price,
            variants: $this->variants,
            allowedShippingMethods: $this->allowedShippingMethods,
        );

        return $product;
    }
}
