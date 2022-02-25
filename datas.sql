CREATE DATABASE MyDatabase;
USE MyDatabase;
SHOW databases;
CREATE TABLE Brand(
	ID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    BrandName varchar(255)
)ENGINE = InnoDB;

CREATE TABLE ItemType(
	ID int NOT NULL PRIMARY KEY AUTO_iNCREMENT ,
    item_type varchar(255)
)ENGINE = InnoDB;

CREATE TABLE Toko (
    ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	item_name varchar(255),
	brand_id INT NOT NULL,
	Price INT,
    types_id INT,
	Specification varchar(255),
	Descriptions varchar(255),
    FOREIGN KEY (brand_id) REFERENCES Brand(ID) ON DELETE cascade,
    FOREIGN KEY (types_id) REFERENCES ItemType(ID) ON DELETE cascade
);
SET FOREIGN_KEY_CHECKS=0;
ALTER TABLE Toko RENAME COLUMN type_id TO types_id;
INSERT INTO Toko (ID,item_name,brand_id,Price,types_id,Specification,Descriptions) 
	VALUES
		(1,'Lenovo T440p',1,8000000,1,'Intel Core i5','Laptopnya bagus');
SET FOREIGN_KEY_CHECKS=1;        
INSERT INTO ItemType (ID,item_type) VALUES (1,'Laptop'),(2,'Accessory'),(3,'Phone');
INSERT INTO Brand (ID,BrandName) VALUES (1,'Lenovo'),(2,'Asus'),(3,'HP'),(4,'Acer');

SELECT * FROM Toko;
select * FROM Brand;
select * FROM ItemType;
#DROP DATABASE MyDatabase;
#DROP TABLE Toko;
#DROP TABLE Brand;