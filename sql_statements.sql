-- hiermee verwijderd je een database met dezelfde naam
DROP DATABASE project1;

-- en dan kun je met deze statement een database maken 
CREATE DATABASE project1;

CREATE TABLE Account {
    id int not null primary key AUTO_INCREMENT,
    email varchar(255) unique,
    password varchar(255)
};

CREATE TABLE Persoon {
    id int not null PRIMARY KEY AUTO_INCREMENT,
    voornaam VARCHAR(255),
    tussenvoegsel VARCHAR(255),
    achternaam VARCHAR(255),
    username VARCHAR(255),
    account_id int not null, 
    foreign key account_id REFERENCES account(id)
};

