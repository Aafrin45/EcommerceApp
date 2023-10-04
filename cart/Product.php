<?php
class Product {
    //Private properties are encapsulated ,its based on oops concept.
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
   // these are getter method-> getId(),getName(),getPrice()
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    /*example code:
    
    $product = new Product(1, 'Widget', 19.99);

    $id = $product->getId();      // 1
    $name = $product->getName();  // 'Widget'
    $price = $product->getPrice();// 19.99*/

}
?>
