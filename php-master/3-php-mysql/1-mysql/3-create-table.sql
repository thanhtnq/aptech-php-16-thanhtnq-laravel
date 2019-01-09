-- CREATE TABLE --
-- EXERCISE 1 : CREATE TABLE User;
-- SUGGESTION :
/*
CREATE TABLE aptech_php_12.users
(
    id int,
    last_name varchar(255),
    first_name varchar(255),
    email varchar(255) unique,
    created_at datetime,
    modified_at datetime,
    deleted_at datetime
) 
*/
CREATE TABLE aptech-php-16-thanhtnq.users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    last_name VARCHAR(255),
    first_name VARCHAR(255),
    email VARCHAR(255) unique,
    created_at DATETIME,
    modified_at DATETIME,
    deleted_at DATETIME
)
