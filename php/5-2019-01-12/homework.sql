create database homework;
use homework;
create table roles (
	id int primary key auto_increment,
    role varchar(50)
);
create table users (
	id int primary key auto_increment,
    username varchar(50) unique,
    password varchar(50),
    fullname varchar(50),
    role int,
    foreign key (role) references roles(id)
);
insert into roles(role) values ('admin'), ('mod'), ('user');
select * from roles;
insert into users(username, password, fullname, role) values 
('admin', '123456', 'tran nguyen quang thanh', '1'),
('mod', '123456', 'thanhtnq', '2'),
('thanhtnq', '123456', 'thanh', '3'),
('thanhtnq1401', '123456', 'thanh1401', '3');
select * from users;
select users.id, users.username, users.fullname, roles.role from users inner join roles where users.role = roles.id;