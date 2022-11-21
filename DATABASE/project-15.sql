CREATE TABLE IF NOT EXISTS adms (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR (30) NOT NULL,
    lastname VARCHAR (30) NOT NULL,
    roles VARCHAR (20) NOT NULL DEFAULT ("Admin"),
    emails VARCHAR (100) NOT NULL,
    passwords VARCHAR (30) NOT NULL,
    city VARCHAR (30) NOT NULL DEFAULT ("Bago"),
    country VARCHAR (30) NOT NULL DEFAULT ("Myanmar")
);

CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR (30) NOT NULL,
    lastname VARCHAR (30) NOT NULL,
    emails VARCHAR (100) NOT NULL,
    phoneNumber INT (20) NOT NULL,
    city VARCHAR (30) NOT NULL DEFAULT ("Bago"),
    country VARCHAR (30) NOT NULL DEFAULT ("Myanmar"),
    passwords VARCHAR (30) NOT NULL
)

CREATE TABLE IF NOT EXISTS customerFeedBack (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR (30) NOT NULL,
    lastname VARCHAR (30) NOT NULL,
    emails VARCHAR (100) NOT NULL,
    messages VARCHAR (255) NOT NULL DEFAULT("Hello Your Service Is Awesome! Thank You !!!")
);
