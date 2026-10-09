<?php
declare(strict_types=1);
namespace App\Tutorials\Class6;
use InvalidArgumentException;
class Product
{
    public string $name {
        set {
            $value = trim($value);
            if ($value === '') {
                throw new InvalidArgumentException('Product name must not be
empty.');
            }
            $this->name = $value;
        }
    }
    public float $price {
        set {
            if (!is_finite($value) || $value <= 0) {
                throw new InvalidArgumentException('Product price must be finite
and greater than zero.');
            }
            $this->price = $value;
        }
    }
    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}
