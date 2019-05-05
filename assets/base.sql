create database zoofilm;
use zoofilm;

create table SALLE
(
   IDSALLE  INT AUTO_INCREMENT,
   NOMSALLE VARCHAR(5),
   NOMBREPLACE int,
   PRIMARY KEY (IDSALLE)
);

CREATE TABLE GENREFILM(
    IDGENRE INT AUTO_INCREMENT,
    GENRE VARCHAR(20),
    IMAGE_GENRE1 VARCHAR(20),
    IMAGE_GENRE2 VARCHAR(20),
    PRIMARY KEY(IDGENRE)
);

create table FILM
(
   IDFILM   INT AUTO_INCREMENT,
   TITREFILM  VARCHAR(50),
   IDGENRE INT ,
   ACTEUR VARCHAR(50),
   DUREE INT,
   IMAGEFILM VARCHAR(20),
   IMAGEFILM2 VARCHAR(20),
   DATESORTIE VARCHAR(4),
   DESCRIPTIONFILM TEXT,
   PRIMARY KEY (IDFILM),
   FOREIGN KEY (IDGENRE) references GENREFILM(IDGENRE)
);

create table PROGRAMME
(
   IDPROGRAMME INT AUTO_INCREMENT,
   DATEFILM DATE,
   HEUREDATE INT,
   MINUTEDATE INT,
   ESTFINI SMALLINT,
   IDSALLE VARCHAR(5),
   IDFILM INT,
   PRIMARY KEY (IDPROGRAMME),
   FOREIGN KEY (IDFILM) REFERENCES FILM(IDFILM)
);

create table CONFIGRESERVATION
(
   IDCONF INT AUTO_INCREMENT,
   HEURELIMITE INT,
   MINUTELIMITE INT,
   TARIF FLOAT,
   PRIXENFANT float,
   PRIMARY KEY (IDCONF)
);

create table RESERVATION
(
   IDRESERVATION INT AUTO_INCREMENT,
   NOMCLIENT VARCHAR(20),
   PRENOMCLIENT VARCHAR(20),
   TELEPHONE VARCHAR(10),
   NOMBREENFANT INT,
   NOMBREADULTE INT,
   IDPROGRAMME INT,
   PRIMARY KEY (IDRESERVATION),
   FOREIGN KEY (IDPROGRAMME) REFERENCES PROGRAMME(IDPROGRAMME)
);



insert into SALLE values(1,'S1',35);
insert into SALLE values(2,'S2',40);
insert into SALLE values(3,'S3',50);

insert into GENREFILM values(1,'COMEDIE','hero_bg_1.jpg','hero_bg_2.jpg');
insert into GENREFILM values(2,'ACTION','hero_bg_1.jpg','hero_bg_2.jpg');
insert into GENREFILM values(3,'ROMANTIQUE','hero_bg_1.jpg','hero_bg_2.jpg');

INSERT INTO FILM VALUES ('1','INDISPUTED',2,'Scott Adkins',120,'img_3.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO FILM VALUES ('2','MUMMY',2,'Scott Adkins',120,'img_3.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO FILM VALUES ('3','AQUAMAN',2,'Scott Adkins',120,'img_3.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");

INSERT INTO FILM VALUES ('4','LA LA LAND',3,'Scott Adkins',120,'img_3.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO FILM VALUES ('5','CRAZY ASIAN',3,'Scott Adkins',120,'img_3.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO FILM VALUES ('6','TITANIC',3,'Scott Adkins',120,'img_3.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");

INSERT INTO FILM VALUES ('7','JOHNY ENGLISH',1,'Scott Adkins',120,'img_3.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO FILM VALUES ('8','LES PROFS',1,'Scott Adkins',120,'img_3.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO FILM VALUES ('9','THE GAUNT',1,'Scott Adkins',120,'img_3.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");

insert into PROGRAMME VALUES (1,'2019-05-03',9,30,0,1,1);
insert into PROGRAMME VALUES (2,'2019-05-04',14,30,0,2,2);
insert into PROGRAMME VALUES (3,'2019-05-05',18,30,0,1,3);
insert into PROGRAMME VALUES (4,'2019-05-06',9,30,0,1,4);
insert into PROGRAMME VALUES (5,'2019-05-07',14,30,0,3,5);
insert into PROGRAMME VALUES (6,'2019-05-08',18,30,0,3,6);
insert into PROGRAMME VALUES (7,'2019-05-09',9,30,0,1,7);
insert into PROGRAMME VALUES (8,'2019-05-10',14,30,0,2,8);
insert into PROGRAMME VALUES (9,'2019-05-11',18,30,0,1,9);
insert into PROGRAMME VALUES (10,'2019-05-12',9,30,0,2,1);

insert into CONFIGRESERVATION values (1,12,20000,25000,15000);


