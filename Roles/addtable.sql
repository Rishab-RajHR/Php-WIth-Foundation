CREATE DATABASE gymcorejava;

USE gymcorejava;

CREATE TABLE admin
(
   adminname VARCHAR(30) PRIMARY KEY,
   password VArCHAR(30)
);

INSERT INTO admin(adminname,password) VALUES('admin', 'admin');

CREATE TABLE enquiry
(
   id INT(5) PRIMARY KEY AUTO_INCREMENT,
   name VARCHAR(30),
   contact VARCHAR(10),
   emailid VARCHAR(40),
   age VARCHAR(10),
   gender VARCHAR(10)
);