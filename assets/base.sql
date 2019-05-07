create database zoofilm;
use zoofilm;

create table SALLE
(
   IDSALLE  INT AUTO_INCREMENT,
   NOMSALLE VARCHAR(5),
   NOMBREPLACE int,
   PRIMARY KEY (IDSALLE)
);

CREATE TABLE genrefilm(
    IDGENRE INT AUTO_INCREMENT,
    GENRE VARCHAR(20),
    INFOTEXTE VARCHAR(250),
    DESCRIPTIONGENRE TEXT,
    IMAGEPRINCIPALE VARCHAR(20),
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

CREATE table administrateur(
   idadministrateur int AUTO_INCREMENT,
   loginadmin  varchar(20),
   passwordadmin  varchar(40),
   primary key(idadministrateur)
);

insert into administrateur values ('1','root','dc76e9f0c0006e8f919e0c515c66dbba3982f785');

insert into SALLE values(1,'S1',35);
insert into SALLE values(2,'S2',40);
insert into SALLE values(3,'S3',50);

insert into GENREFILM values(1,'COMEDIE',"On appele comédie la tragédie envisagée d'un point de vue humoristique","",'genrecomedie.jpg','hero_bg_1.jpg','hero_bg_2.jpg');
insert into GENREFILM values(2,'ACTION',"L'action libère,l'action vivifie,l'action récompense","",'genreaction.jpg','hero_bg_1.jpg','hero_bg_2.jpg');
insert into GENREFILM values(3,'ROMANTIQUE',"Le romantisme remplace la beauté par le sublime","",'genreromantique.jpg','hero_bg_1.jpg','hero_bg_2.jpg');

INSERT INTO FILM VALUES ('1','INDISPUTED 3',2,'Scott Adkins',120,'undisputed4.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO FILM VALUES ('2','THE RAID',2,'Scott Adkins',120,'theraid.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO FILM VALUES ('3','AQUAMAN',2,'Scott Adkins',120,'aquaman.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO FILM VALUES ('4','BLACKPANTHER',2,'Scott Adkins',120,'blackpanther.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO FILM VALUES ('5','IPMAN 4',2,'Scott Adkins',120,'ipman4.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO FILM VALUES ('6','TRANSPORTER 3',2,'Scott Adkins',120,'transporter3.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");

INSERT INTO FILM VALUES ('7','LA LA LAND',3,'Scott Adkins',120,'lalaland.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO FILM VALUES ('8','CRAZY ASIAN',3,'Scott Adkins',120,'crazyasian.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO FILM VALUES ('9','TITANIC',3,'Scott Adkins',120,'titanic.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO FILM VALUES ('10','SECONDE CHANCE',3,'Scott Adkins',120,'secondchance.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO FILM VALUES ('11','LE PRINCE ET MOI',3,'Scott Adkins',120,'princeetmoi.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO FILM VALUES ('12',"LOVE THING",3,'Scott Adkins',120,'lovedontcoast.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");

INSERT INTO FILM VALUES ('13','JOHNY ENGLISH',1,'Scott Adkins',120,'johnyenglish.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO FILM VALUES ('14','LES PROFS',1,'Scott Adkins',120,'lesprofs2.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO FILM VALUES ('15','ACE VENTURA',1,'Scott Adkins',120,'aceventura.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO FILM VALUES ('16','THE MASK',1,'Scott Adkins',120,'themask.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO FILM VALUES ('17','THE OUTCASTS',1,'Scott Adkins',120,'theoutcast.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO FILM VALUES ('18','ALADIN',1,'Scott Adkins',120,'aladin.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");

insert into PROGRAMME VALUES (1,'2019-05-03',9,30,0,1,1);
insert into PROGRAMME VALUES (2,'2019-05-04',14,30,0,2,2);
insert into PROGRAMME VALUES (3,'2019-05-05',18,30,0,1,3);
insert into PROGRAMME VALUES (4,'2019-05-06',9,30,0,1,4);
insert into PROGRAMME VALUES (5,'2019-05-07',14,30,0,3,5);
insert into PROGRAMME VALUES (6,'2019-05-08',18,30,0,3,6);
insert into PROGRAMME VALUES (7,'2019-05-09',9,30,0,1,7);
insert into PROGRAMME VALUES (8,'2019-05-10',14,30,0,2,8);
insert into PROGRAMME VALUES (9,'2019-05-11',18,30,0,1,9);
insert into PROGRAMME VALUES (10,'2019-05-12',9,30,0,2,10);

insert into PROGRAMME VALUES (11,'2019-05-13',9,30,0,1,11);
insert into PROGRAMME VALUES (12,'2019-05-14',14,30,0,2,12);
insert into PROGRAMME VALUES (13,'2019-05-15',18,30,0,1,13);
insert into PROGRAMME VALUES (14,'2019-05-16',9,30,0,1,14);
insert into PROGRAMME VALUES (15,'2019-05-17',14,30,0,3,15);
insert into PROGRAMME VALUES (16,'2019-05-18',18,30,0,3,16);
insert into PROGRAMME VALUES (17,'2019-05-19',9,30,0,1,17);
insert into PROGRAMME VALUES (18,'2019-05-20',14,30,0,2,18);


insert into CONFIGRESERVATION values (1,12,20000,25000,15000);


---------------------------------------------------------------- Nouveau commit de base------------------------------------------------------------------------------------------------------------------------


drop table reservation;
drop table programme; 
drop table film;
drop table genrefilm;


CREATE TABLE genrefilm(
    IDGENRE INT AUTO_INCREMENT,
    GENRE VARCHAR(20),
    INFOTEXTE VARCHAR(250),
    DESCRIPTIONGENRE TEXT,
    IMAGEPRINCIPALE VARCHAR(20),
    IMAGE_GENRE1 VARCHAR(20),
    IMAGE_GENRE2 VARCHAR(20),
    PRIMARY KEY(IDGENRE)
);
insert into genrefilm values(1,'COMEDIE',"On appele comédie la tragédie envisagée d'un point de vue humoristique","La comédie joue un rôle important dans la cinématographie mais aussi dans l'âme, le coeur, la pensée, l'être même des gens, car c'est un remède de l'esprit, un médicament de l'âme.",'genrecomedie.jpg','hero_bg_1.jpg','hero_bg_2.jpg');
insert into genrefilm values(2,'ACTION',"L'action libère,l'action vivifie,l'action récompense","Qui est-ce-qui n'aimerais pas une petite dose d'adrénaline pour se mettre dans la peau de ces acteurs ? Rêver et accomplir de nombreuses missions, et partir à l'aventure, à la découverte du monde en éliminant tous les obstacles?",'genreaction.jpg','hero_bg_1.jpg','hero_bg_2.jpg');
insert into genrefilm values(3,'ROMANTIQUE',"Le romantisme remplace la beauté par le sublime","On dit que l'amour est une passion qui dévore, mais un remède apportant le bonheur à celui ou celle qui la possède dans le plus profond du coeur. Revivez votre jeunesse, rêver fotre futur avec ses passionnats histoires TO LOVE",'genreromantique.jpg','hero_bg_1.jpg','hero_bg_2.jpg');

create table film
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
   FOREIGN KEY (IDGENRE) references genrefilm(IDGENRE)
);

INSERT INTO film VALUES ('1','INDISPUTED 3',2,'Scott Adkins',120,'undisputed4.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO film VALUES ('2','THE RAID',2,'Scott Adkins',120,'theraid.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO film VALUES ('3','AQUAMAN',2,'Scott Adkins',120,'aquaman.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO film VALUES ('4','BLACKPANTHER',2,'Scott Adkins',120,'blackpanther.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO film VALUES ('5','IPMAN 4',2,'Scott Adkins',120,'ipman4.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO film VALUES ('6','TRANSPORTER 3',2,'Scott Adkins',120,'transporter3.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");

INSERT INTO film VALUES ('7','LA LA LAND',3,'Scott Adkins',120,'lalaland.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO film VALUES ('8','CRAZY ASIAN',3,'Scott Adkins',120,'crazyasian.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO film VALUES ('9','TITANIC',3,'Scott Adkins',120,'titanic.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO film VALUES ('10','SECONDE CHANCE',3,'Scott Adkins',120,'secondchance.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO film VALUES ('11','LE PRINCE ET MOI',3,'Scott Adkins',120,'princeetmoi.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO film VALUES ('12',"LOVE THING",3,'Scott Adkins',120,'lovedontcoast.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");

INSERT INTO film VALUES ('13','JOHNY ENGLISH',1,'Scott Adkins',120,'johnyenglish.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO film VALUES ('14','LES PROFS',1,'Scott Adkins',120,'lesprofs2.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO film VALUES ('15','ACE VENTURA',1,'Scott Adkins',120,'aceventura.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO film VALUES ('16','THE MASK',1,'Scott Adkins',120,'themask.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO film VALUES ('17','THE OUTCASTS',1,'Scott Adkins',120,'theoutcast.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");
INSERT INTO film VALUES ('18','ALADIN',1,'Scott Adkins',120,'aladin.jpg','hero_bg_3.jpg','2015',"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda aperiam perferendis deleniti vitae asperiores accusamus tempora facilis sapiente, quas! Quos asperiores alias fugiat sunt tempora molestias quo deserunt similique sequi.");

create table programme
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

insert into programme VALUES (1,'2019-05-03',9,30,0,1,1);
insert into programme VALUES (2,'2019-05-04',14,30,0,2,2);
insert into programme VALUES (3,'2019-05-05',18,30,0,1,3);
insert into programme VALUES (4,'2019-05-06',9,30,0,1,4);
insert into programme VALUES (5,'2019-05-07',14,30,0,3,5);
insert into programme VALUES (6,'2019-05-08',18,30,0,3,6);
insert into programme VALUES (7,'2019-05-09',9,30,0,1,7);
insert into programme VALUES (8,'2019-05-10',14,30,0,2,8);
insert into programme VALUES (9,'2019-05-11',18,30,0,1,9);
insert into programme VALUES (10,'2019-05-12',9,30,0,2,10);

insert into programme VALUES (11,'2019-05-13',9,30,0,1,11);
insert into programme VALUES (12,'2019-05-14',14,30,0,2,12);
insert into programme VALUES (13,'2019-05-15',18,30,0,1,13);
insert into programme VALUES (14,'2019-05-16',9,30,0,1,14);
insert into programme VALUES (15,'2019-05-17',14,30,0,3,15);
insert into programme VALUES (16,'2019-05-18',18,30,0,3,16);
insert into programme VALUES (17,'2019-05-19',9,30,0,1,17);
insert into programme VALUES (18,'2019-05-20',14,30,0,2,18);

create table reservation
(
   IDRESERVATION INT AUTO_INCREMENT,
   NOMCLIENT VARCHAR(20),
   PRENOMCLIENT VARCHAR(20),
   TELEPHONE VARCHAR(10),
   NOMBREENFANT INT,
   NOMBREADULTE INT,
   IDPROGRAMME INT,
   PRIMARY KEY (IDRESERVATION),
   FOREIGN KEY (IDPROGRAMME) REFERENCES programme(IDPROGRAMME)
);