use whms;

show tables;

create table users(
user_id int primary key auto_increment,
name varchar(100),
username varchar(100),
password varchar(100)
);
 select * from users;
 
 CREATE TABLE items (
    item_id INT AUTO_INCREMENT PRIMARY KEY,
    item_name VARCHAR(255) NOT NULL,
    quantity INT NOT NULL,
    category VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE shipping (
    id INT AUTO_INCREMENT PRIMARY KEY,
    item_id INT,
    item_name VARCHAR(255),
    recipient_name VARCHAR(255),
    shipping_address TEXT,
    contact_number VARCHAR(20),
    email_address VARCHAR(255),
    shipping_provider VARCHAR(50),
    tracking_number VARCHAR(50)
);


select * from shipping;
