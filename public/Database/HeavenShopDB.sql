-- =========================
-- CREATE DATABASE
-- =========================
DROP DATABASE IF EXISTS heavenshopdb;
CREATE DATABASE heavenshopdb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE heavenshopdb;

-- =========================
-- DELETE TABLES
-- =========================
DROP TABLE IF EXISTS `products`, `categories`, `variants`, `users`;

-- =========================
-- TABLE: products
-- =========================
CREATE TABLE products (
    id_product INT(11) PRIMARY KEY AUTO_INCREMENT,
    name_product VARCHAR(150) NOT NULL,
    description_product TEXT,
    status_product ENUM('Active', 'Inactive') DEFAULT 'Active',
    price_product DECIMAL(10, 2) NOT NULL,
    id_category INT(11) NOT NULL
);

-- =========================
-- TABLE: categories
-- =========================
CREATE TABLE categories (
    id_category INT PRIMARY KEY AUTO_INCREMENT,
    name_category VARCHAR(100) NOT NULL,
    description_category TEXT
);

-- =========================
-- TABLE: variants
-- =========================
CREATE TABLE variants (
    id_variant INT(11) PRIMARY KEY AUTO_INCREMENT,
    color_variant VARCHAR(50),
    size_variant VARCHAR(50),
    stock_variant INT NOT NULL DEFAULT 0,
    price_variant DECIMAL(10, 2) NOT NULL, 
    id_product INT(11) NOT NULL
);

-- =========================
-- TABLE: users
-- =========================
CREATE TABLE users (
    id_user INT(11) PRIMARY KEY AUTO_INCREMENT,
    name_user VARCHAR(150) NOT NULL,
    email_user VARCHAR(150) NOT NULL,
    password_user VARCHAR(255) NOT NULL
);

-- =========================
-- FOREIGN KEYS
-- =========================
ALTER TABLE products 
ADD CONSTRAINT fk_products_categories
FOREIGN KEY (id_category) REFERENCES categories(id_category) 
ON DELETE RESTRICT ON UPDATE CASCADE;

ALTER TABLE variants
ADD CONSTRAINT fk_variants_products
FOREIGN KEY (id_product) REFERENCES products(id_product)
ON DELETE RESTRICT ON UPDATE CASCADE;
