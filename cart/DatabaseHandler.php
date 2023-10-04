<?php
class DatabaseHandler {
    private $conn; //hold the database connection object.

    public function __construct($servername, $username, $password, $dbname) {
        $this->conn = new mysql($servername, $username, $password, $dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getProductById($productId) {
        // Implement the logic to fetch product details from the database
        // This is a simplified example and does not include actual database queries
        // You would need to modify this function to fetch data from your database
        return new Product($productId, "Product " . $productId, $productId * 10);
    }
}
?>
