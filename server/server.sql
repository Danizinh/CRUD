CREATE DATABASE crud;

USE crud;


CREATE TABLE client( 
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(225),
    email VARCHAR(225),
    phone VARCHAR(20),
    address VARCHAR(200),
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO 
    client (name,email,phone,address) 
VALUES('Emilio G','emilio.g@microsoft.com','+11329-0286','Hong-Kong');
INSERT INTO client(name,email,phone,address) VALUES("Bob Marley","bob@gmail.com","+11329-0286","Florida,USA");
INSERT INTO client(name,email,phone,address) VALUES("Will Smith","Will.smith@gmail.com","+111333555","California, USA");
INSERT INTO client(name,email,phone,address) VALUES("Ellon Musk","elon.musk@gmail.com","+11329-0286","Texas,USA");

SELECT * FROM client;


DROP DATABASE crud;