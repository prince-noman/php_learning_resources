<?php
require 'Chap02/Abstraction/2_DataModel.php';
class ProductTable extends DataModel
{
    protected string $tableName = 'product-table';
    private string $name;
    private float $price;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName( string $name )
    {
        $this->name = $name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice( float $price )
    {
        $this->price = $price;
    }

}

$product = new ProductTable();
// Uses the DataModel class's save method
$product->save();
