create database mydb2;
use mydb2;

create table team
(
  teamid int(5) primary key,
  teamname varchar(30)
);

insert into team values(1,'abc');
insert into team values(2,'xyz');