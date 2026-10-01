<?php

class Product
{
    private int $skuID;

    public function __construct(int $skuID)
    {
        $this->skuID = $skuID;
    }

    final public function getSkuID(int $skuID): void
    {
        if($skuID <= 0) {
            throw new InvalidArgumentException('SKU ID must be a positive integer.');
        }
        $this->skuID = $skuID;
    }
    final public function getSkuId(): int
    {
        return $this->skuID;
    }
}

class Book extends Product
{
}

//execution section
$book = new Book(101);
echo $book->getSkuId(), PHP_EOL; // Output: 101

$book->getSkuID(202);
echo $book->getSkuId(), PHP_EOL; // Output: 202
