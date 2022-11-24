
CREATE TABLE IF NOT EXISTS usermessages (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR (20) NOT NULL,
    lastname VARCHAR (20) NOT NULL,
    email VARCHAR (30) NOT NULL,
    message VARCHAR (255) NOT NULL DEFAULT ("Your Service is Very nice")
);

INSERT INTO usermessages (firstname,lastname,email,message) 
VALUE ("aung","myint","aungmyint@gmail.com","nice to meent you"),
("aung","ko","aung@gmail.com","nice to meent you"),
("ko","aung","ko@gmail.com","nice to meent you"),
("hla","hla","hla@gmail.com","nice to meent you"),
("hnin","wai","hnin@gmail.com","nice to meent you"),
("nu","nu","nu@gmail.com","nice to meent you"),
("min","myat","min@gmail.com","nice to meent you"),
("kyaw","ko","kyaw@gmail.com","nice to meent you"),
("khaing","thazin","khaing@gmail.com","nice to meent you");

CREATE TABLE IF NOT EXISTS pricings (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR (15) NOT NULL DEFAULT("item"),
    price VARCHAR (10) NOT NULL DEFAULT("100")
);

INSERT INTO pricings ( title,price ) VAlUE ('item1','99'),('item2','149'),('item3','249');


CREATE TABLE IF NOT EXISTS trainers (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR (15) NOT NULL,
    lastname VARCHAR (15) NOT NULL,
    type VARCHAR (20) NOT NULL,
    image VARCHAR (30 ) NOT NULL
);

INSERT INTO trainers (firstname,lastname,type,image) 
VALUE ("Erica","Greene","Crossfit Expert","team-01-1.jpg"),
("Steven","Rottman","COMBAT TRAINER","team-02.jpg"),
("Roderick","Burton","YOGA INSTRUCTOR","team-05.jpg"),
("Deborah","Adams","YOGA INSTRUCTOR","team-new-03.jpg"),
("Raymond","Montano","COMBAT TRAINER","team-new-06.jpg"),
("Beatrice","Dowdy","CROSSFIT EXPERT","team-04-600x780-1.jpg");
