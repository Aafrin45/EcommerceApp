<?php
class Cart 
{
    //This property will store an array of product objects added to the cart:$product. 
    private $products;

    /*1.private - the property  can ONLY be accessed
     within the class.
     2.public - the property  can ONLY be accessed
     outside the class.*/

    public function __construct() 
    {
        //$this refers to the object ,here it refers the "Product"

    
        $this->products = [];  //the $products property as an empty array when a new Cart object is created.
        
    } //This is done to ensure that every Cart object starts with an empty list of products.

    public function addToCart($product) //Add the given $product to the shopping cart.
     {
        $this->products[] = $product;
    }

    public function getProducts() {
        return $this->products;  // returns the array of products currently stored in the cart
    }

    public function calculateTotal() {
        $total = 0;  // initializ a total variable as zero 
         // Iterate through each product in the cart.
        foreach ($this->products as $product) 
        {
            // Access the price of each product using the `getPrice` method and add it to the total.
            $total += $product->getPrice();
        }
        return $total; //Return the calculated total cost of all products in the cart.

    }
}
?>
