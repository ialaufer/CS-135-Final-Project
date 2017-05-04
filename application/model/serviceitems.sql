DROP DATABASE IF EXISTS SERVICEITEMS;

CREATE DATABASE SERVICEITEMS;

USE SERVICEITEMS;

/* Commented out tables will be revisited after next update (Claremont Yelp 2.0)

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
); */

CREATE TABLE Category(
	id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(256) NOT NULL,
	imagepath VARCHAR(256) NOT NULL
);


CREATE TABLE ServiceItem(
	id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
	providerName VARCHAR(256) NOT NULL,
	providerAddress VARCHAR(256) NOT NULL,
	providerEmail VARCHAR(256) NOT NULL,
	providerPhone INT NOT NULL,
	serviceItemName VARCHAR(256) NOT NULL,
	serviceDescription VARCHAR(256) NOT NULL,
	categoryId INT UNSIGNED NOT NULL,
	FOREIGN KEY (categoryId) REFERENCES Category(id),
	servicePrice VARCHAR(256) NOT NULL
);

/* 
CREATE TABLE BookOrder(
	cid INT UNSIGNED NOT NULL,
	FOREIGN KEY (cid) REFERENCES Customer(id),
	sid INT UNSIGNED NOT NULL ,
	FOREIGN KEY (sid) REFERENCES ServiceItem(id)
); */


Describe Category;

LOAD DATA INFILE "/Applications/MAMP/htdocs/cs135/GITHUB_REPO/CS-135-Final-Project/application/model/category.csv"
INTO TABLE Category
COLUMNS TERMINATED BY ','
LINES TERMINATED BY '\r'
(name, imagepath)
;

Describe ServiceItem;

LOAD DATA INFILE "/Applications/MAMP/htdocs/cs135/GITHUB_REPO/CS-135-Final-Project/application/model/serviceitem.csv"
INTO TABLE ServiceItem
COLUMNS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
LINES TERMINATED BY '\r'
(providerName, providerAddress, providerEmail, providerPhone, serviceItemName, serviceDescription, categoryId, servicePrice)

;
