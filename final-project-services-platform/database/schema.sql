-- Services platform: database schema
-- Reconstructed from the queries in the PHP code (the original dump was not kept).
-- Import into MySQL / MariaDB (e.g. XAMPP phpMyAdmin) as database `server`.

CREATE DATABASE IF NOT EXISTS `server` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `server`;

-- Accounts. sublogin.php sends type = 1 to the public site and every other type to /Admin.
-- Note: signup inserts type = 2, which also lands in /Admin (see Known issues in the README).
CREATE TABLE IF NOT EXISTS `users` (
  `id`       INT AUTO_INCREMENT PRIMARY KEY,
  `name`     VARCHAR(100) NOT NULL,
  `lname`    VARCHAR(100) NOT NULL,
  `email`    VARCHAR(150) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `type`     TINYINT NOT NULL DEFAULT 2
);

-- Seller cards shown on the home page ("Popular Sellers")
CREATE TABLE IF NOT EXISTS `creat` (
  `id`   INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(100) NOT NULL,
  `text` TEXT,
  `img`  VARCHAR(255)
);

-- Demo accounts (change them after the first login)
INSERT INTO `users` (`name`, `lname`, `email`, `password`, `type`)
VALUES ('Admin', 'User', 'admin@services.local', 'admin123', 0),
       ('Demo', 'Client', 'client@services.local', 'client123', 1);
