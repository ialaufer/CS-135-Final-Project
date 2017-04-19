DROP DATABASE IF EXISTS SERVICEITEMS;

CREATE DATABASE SERVICEITEMS;

USE SERVICEITEMS;

CREATE TABLE Provider(
	 id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
	 name VARCHAR(256) NOT NULL,
	 address VARCHAR(256) NOT NULL,
	 email VARCHAR(256) NOT NULL,
	 phone INT NOT NULL
 );


CREATE TABLE Customer(
	 id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
	 name VARCHAR(256) NOT NULL,
	 email VARCHAR(256) NOT NULL,
	 phone INT NOT NULL
);



CREATE TABLE ServiceItem(
	 id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
	 providerId INT UNSIGNED NOT NULL,
	 FOREIGN KEY (providerId) REFERENCES Provider(id),
	 name VARCHAR(256) NOT NULL,
	 description VARCHAR(256) NOT NULL,
	 categoryId INT UNSIGNED NOT NULL,
	 FOREIGN KEY (categoryId) REFERENCES Category(id),
	 price VARCHAR(256) NOT NULL
);

CREATE TABLE Catagory(
	id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(256) NOT NULL
);


CREATE TABLE BookOrder(
	cid INT UNSIGNED NOT NULL,
	FOREIGN KEY (cid) REFERENCES Customer(id),
	sid INT UNSIGNED NOT NULL ,
	FOREIGN KEY (sid) REFERENCES ServiceItem(id),
);


LOAD DATA INFILE "/Applications/MAMP/htdocs/cs135/CS135_TEMP/provider.csv"
INTO TABLE Provider
COLUMNS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(name, email, address, phone)
;


Describe Category;

LOAD DATA INFILE "/Applications/MAMP/htdocs/cs135/CS135_TEMP/category.csv"
INTO TABLE Category
COLUMNS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(name)
;

Describe Service;

LOAD DATA INFILE "/Applications/MAMP/htdocs/cs135/CS135_TEMP/service.csv"
INTO TABLE ServiceItem
COLUMNS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\n'
(name, description, categoryId, price)
;