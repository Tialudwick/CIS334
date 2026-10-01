<?php
declare(strict_types=1);

class Food
{
    public function __construct(
        protected string $name,
    )
    {}

    public function __toString(): string 
    {
        return 'Food: ' . $this->name;
    }
    
}

class Dessert extends Food
{
    #[Override]
    public function __toString(): string
    {
        return 'Dessert ' . $this->name;
        }
}

function describe(Food $food): string
{
    return (string) $food;
}

foreach ([new Food('Apple'), new Dessert('Berry tart')] as $food){
    echo describe($food), PHP_EOL;
}

