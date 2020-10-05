-- hiermee verwijderd je een database met dezelfde naam
-- Deze line create de project1 database.
CREATE DATABASE project1;
-- Deze line selecteert de project1 database om er mee te werken.
USE project1;

-- Deze statement creates een type
CREATE TABLE Usertype(
    id INT NOT NULL AUTO_INCREMENT,
    type varchar (255) NOT NULL,
    created DATE NOT NULL,
    updated DATE NOT NULL,
    PRIMARY KEY(id)
);
-- Deze statement creates een table.
CREATE TABLE Account (
    id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE  NOT NULL,
    password VARCHAR(255)  NOT NULL,
    usertype_id INT,
    FOREIGN KEY (usertype_id) REFERENCES usertype(id),
    created DATE NOT NULL,
    updated DATE NOT NULL,
    PRIMARY KEY(id)
);
-- Deze statement creates een table.
CREATE TABLE Persoon (
    id INT NOT NULL AUTO_INCREMENT,
    voornaam VARCHAR(255) NOT NULL,
    tussenvoegsel VARCHAR(255),
    achternaam VARCHAR(255) NOT NULL,
    account_id INT,
    created DATE NOT NULL,
    updated DATE NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (account_id) REFERENCES account(id)
);


INSERT INTO Account (email, password, username)
VALUES ('akka@admin.com', 'admin', 'admin');

INSERT INTO Persoon (voornaam, achternaam)
VALUES ('nouaman', 'akka');

INSERT INTO usertype(type)
VALUE('Admin');

UPDATE Persoon 
SET account_id = (select id from account where email = 'akka@admin.com')
WHERE achternaam = 'akka';

UPDATE account
set usertype_id = (select id from usertype where type = 'admin')
where email = 'akka@admin.com';
