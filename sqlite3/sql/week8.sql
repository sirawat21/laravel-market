CREATE TABLE Product (
    product_id INTEGER PRIMARY KEY AUTOINCREMENT,
    name VARCHAR(50),
    price INTEGER,
    manufacturer_id
);

CREATE TABLE Manufacturer (
    manufacturer_id INTEGER PRIMARY KEY AUTOINCREMENT,
    name VARCHAR(50)
);