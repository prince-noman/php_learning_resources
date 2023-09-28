<?php

/*
1. Create a cart class
2. Add itemsTotal and shippingCost public properties
3. Instantiate a Cart using the new keyword
4. Set values for itemsTotal and shippingCost
5. Use var_dump and check the values
 */

class Cart
{
    public $itemsTotal;
    public $shippingCost;

    public function calculateTotal()
    {
        $subTotal = $this->itemsTotal + $this->shippingCost;
        return $subTotal;
    }
}

$cart = new Cart();

$cart->itemsTotal   = 100;
$cart->shippingCost = 20;

$subTotal = $cart->calculateTotal();
echo $subTotal;
print_r( $cart );

// Task
// Create a discount property
// Then calculate the subtotal using the calculateTotal() method
