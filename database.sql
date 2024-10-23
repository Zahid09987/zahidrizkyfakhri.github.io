CREATE DATABASE portfolio_db;

DROP DATABASE portfolio_db;

USE portfolio_db;

CREATE TABLE contacts (
    student_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(100),
    gender VARCHAR(10),
    phone_number VARCHAR(15),
    address VARCHAR(255),
    description TEXT
);

SHOW TABLES;

DESCRIBE contacts;

INSERT INTO contacts VALUES
(2023071064, 'Zahid Rizky Fakhri', 'zahidrizkyfakhri@gmail.com', 'Male', '081382512312', 'Jl. Gunung Merbabu, Blok M-182, Komplek Mabad 124, Rempoa, Tangerang Selatan, Banten', 'He has a background of making databases more useful (such as SELECT, INSERT, UPDATE, DELETE, etc.), and making an algorithm using Python (.py) and Jupyter Notebook');