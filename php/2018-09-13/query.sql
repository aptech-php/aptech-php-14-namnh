CREATE DATABASE aptech_php_14;
USE aptech_php_14;
CREATE TABLE users (
id int AUTO_INCREMENT PRIMARY KEY,
name varchar(100),
email varchar(50),
password varchar(50),
created_date timestamp
);
SELECT * FROM users;
INSERT INTO aptech_php_14.users 
(name,email,password,created_date)
VALUES ('Nam','nam@autointegrity.com.au','123456', NOW());

DROP TABLE users;

DELETE FROM users;

CREATE TABLE roles (
id int AUTO_INCREMENT PRIMARY KEY,
name varchar(50)
);

CREATE TABLE role_user (
id int AUTO_INCREMENT PRIMARY KEY,
user_id int,
role_id int
);

TRUNCATE TABLE users;

INSERT INTO users (name,email,password,created_date)
VALUES ('yourname','yourname@gmail.com','123456', NOW()),
('Nam','nam@autointegrity.com.au','123456',NOW());

SELECT * FROM users;

INSERT INTO roles (name)
VALUES ('admin'),('copy-writer'),('manager'),('director');

SELECT * FROM roles;

INSERT INTO role_user (user_id,role_id)
VALUES (1,2), (1,1), (2,3), (1,4);

SELECT * FROM role_user;

SELECT * FROM users WHERE name = 'Nam';

SELECT A.name FROM users
JOIN (SELECT id, name FROM roles) as A
JOIN (SELECT user_id,role_id FROM role_user) as B
ON A.id = B.role_id and users.id = B.user_id
WHERE users.name = 'yourname';

SELECT * FROM users WHERE name = 'yourname';
SELECT * FROM role_user WHERE user_id = 1;
SELECT * FROM roles WHERE id = 2;
SELECT * FROM roles WHERE id = 1;
SELECT * FROM roles WHERE id = 4;

SELECT * FROM role_user where user_id = 
(SELECT id from users WHERE name = 'yourname');