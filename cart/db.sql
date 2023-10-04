CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    price DECIMAL(10, 2),
    availability INT
);

INSERT INTO products (name, price, availability) VALUES
    ('Product 1', 10.00, 100),
    ('Product 2', 15.00, 50),
    ('Product 3', 20.00, 200);
