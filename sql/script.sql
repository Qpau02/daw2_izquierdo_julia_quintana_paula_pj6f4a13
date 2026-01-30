use mysql;
alter user 'root'@'localhost' identified by "smxB1234";
flush privileges;
create user 'crudUser'@'localhost' identified by "smxB1234";

create database if not exists company;

use company;

create table if not exists `workers`(
    username varchar(6) not null,
    id int primary key,
    password varchar(255) not null,
    type char not null,
    name varchar(255) not null,
    surname varchar(255) not null,
    address varchar(255) not null,
    email varchar(255) not null,
    phoneNumber varchar(9) not null
);
create table if not exists `product`(
    id int primary key,
    name varchar(255) not null,
    price varchar(255) not null
);

grant select,insert,delete,update on company.workers to 'crudUser'@'localhost';
grant select,insert,delete,update on company.product to 'crudUser'@'localhost';
