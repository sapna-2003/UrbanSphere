CREATE TABLE payments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    cardholder_name VARCHAR(255) NOT NULL,
    stripe_payment_id VARCHAR(255) NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    currency VARCHAR(10) NOT NULL,
    payment_status VARCHAR(50) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Test Insert Statement
INSERT INTO payments (email, cardholder_name, stripe_payment_id, amount, currency, payment_status)  
VALUES ('user@example.com', 'John Doe', 'pi_1234567890', 499.99, 'INR', 'Success');
