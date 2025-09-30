CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(100) NOT NULL,
    customer_address VARCHAR(100) NOT NULL,
    postalcode VARCHAR(10) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    number_pizza INT NOT NULL,
    pizza_size VARCHAR(20) NOT NULL,
    toppings TEXT DEFAULT NULL,
    sauces VARCHAR(50) DEFAULT NULL,
    beverages VARCHAR(50) DEFAULT NULL,
    special_instructions TEXT DEFAULT NULL,
    pickuptime TIME DEFAULT NULL,
    deliverymethod VARCHAR(20) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

