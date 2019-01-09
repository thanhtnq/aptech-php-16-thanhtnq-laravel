-- INSERT DATA --
-- EXERCISE 1 : Add 5 users in your table

-- SUGGESTION :
/* INSERT INTO aptech_php_12.users
    (id,last_name, first_name, email, created_at,uState,uCreatedDate)
VALUES
    (1, 'Nam', 'Nguyen', 'namnh.website@gmail.com', 1, 1, NOW()),
    (2, 'John', 'Cenna', 'cenna.john@hotmail.com', 2, 1, NOW()),
    (3, 'Henry', 'Tran', 'tranhe@resolutioninc.com', 2, 1, NOW()),
    (4, 'Christiaan', 'Hunter', 'ch.pageworth@pageworth.com', 1, 1, NOW()),
    (5, 'Vicky', 'Nguyen', 'vicky06@gmail.com', 2, 1, NOW()); */

INSERT INTO aptech-php-16-thanhtnq.users (last_name, first_name, email, created_at, modified_at, deleted_at)
VALUES
('Tran', 'Nguyen', 'a@gmail.com', 1, 1, now()),
('Nguyen', 'Quang', 'b@gmail.com', 2, 1, now()),
('Quang', 'Thanh', 'c@gmail.com', 1, 2, now()),
('Thanh', 'Tran', 'd@gmail.com', 2, 2, now()),
('Tran', 'Thanh', 'e@gmail.com', 3, 1, now());