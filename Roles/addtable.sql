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

CREATE TABLE equipment
(
   id INT(5) PRIMARY KEY auto_increment,
   name VARCHAR(30),
   price VARCHAR(10),
   unit VARCHAR(10),
   date VARCHAR(20),
   description VARCHAR(200)
);

CREATE TABLE payment
(
    id INT(5) PRIMARY KEY AUTO_INCREMENT,
    memberid VARCHAR(5),
    plainid VARCHAR(5),
    amount VARCHAR(10)
);

CREATE TABLE plan
(
   id INT(5) PRIMARY KEY AUTO_INCREMENT,
   name VARCHAR(30),
   amount VARCHAR(10),
   duration VARCHAR(10)
);

CREATE TABLE member
(
   id INT(5) PRIMARY KEY AUTO_INCREMENT,
   name VARCHAR(30),
   mobile VARCHAR(10),
   email VARCHAR(40),
   age VARCHAR(20),
   gender VARCHAR(20),
   planid VARCHAR(20),
   joindate VARCHAR(100),
   expiredate VARCHAR(100),
   intialamount VARCHAR(10)
);