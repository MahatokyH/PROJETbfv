CREATE SCHEMA `BFV`;

CREATE TABLE `BFV`.admin ( 
	id                   int  NOT NULL  AUTO_INCREMENT  PRIMARY KEY,
	nom                  varchar(255)  NOT NULL    ,
	prenom               varchar(250)  NOT NULL    ,
	identifiant          varchar(255)  NOT NULL    ,
	mdp                  varchar(255)  NOT NULL    
 ) engine=InnoDB;

CREATE TABLE `BFV`.pack ( 
	id                   int  NOT NULL  AUTO_INCREMENT  PRIMARY KEY,
	nom                  varchar(150)  NOT NULL    
 ) engine=InnoDB;

CREATE TABLE `BFV`.client ( 
	id                   int  NOT NULL  AUTO_INCREMENT  PRIMARY KEY,
	nom                  varchar(255)      ,
	prenom               varchar(255)      ,
	ddn                  date      ,
	cin                  varchar(12)  NOT NULL    ,
	mail                 varchar(250)      ,
	tel                  varchar(10)  NOT NULL    ,
	admin                int  NOT NULL    ,
	pack                 int  NOT NULL    ,
	date_ajout           date  NOT NULL DEFAULT CURRENT_DATE   ,
	CONSTRAINT fk_client_admin FOREIGN KEY ( admin ) REFERENCES `BFV`.admin( id ) ON DELETE NO ACTION ON UPDATE NO ACTION,
	CONSTRAINT fk_client_client FOREIGN KEY ( pack ) REFERENCES `BFV`.pack( id ) ON DELETE NO ACTION ON UPDATE NO ACTION
 ) engine=InnoDB;

CREATE VIEW dashboard AS 
SELECT n.id, n.nom, k.id as idpack,t.pack as pack, t.date_ajout
FROM
	`BFV`.admin n
	INNER JOIN `BFV`.client t
	cross	 JOIN `BFV`.pack k ;;

CREATE VIEW historique AS 
SELECT   t.id, t.nom, t.prenom,k.nom as pack  
FROM
	`BFV`.pack k
	INNER JOIN `BFV`.client t ON ( t.pack = k.id ) ;;

INSERT INTO `BFV`.admin( id, nom, prenom, identifiant, mdp ) VALUES ( 1, 'Admin 1', 'Jean', 'admin1', 'af94c74c2fcadc4ef4a9dc3eb87f24e800e5fc6d');
INSERT INTO `BFV`.pack( id, nom ) VALUES ( 1, 'RETRAITE: Offre ZOKY');
INSERT INTO `BFV`.pack( id, nom ) VALUES ( 2, 'EBENE OR ');
INSERT INTO `BFV`.pack( id, nom ) VALUES ( 3, 'ZEN');
INSERT INTO `BFV`.pack( id, nom ) VALUES ( 4, 'ECO');
INSERT INTO `BFV`.pack( id, nom ) VALUES ( 5, 'CONFORT');
INSERT INTO `BFV`.client( id, nom, prenom, ddn, cin, mail, tel, admin, pack, date_ajout ) VALUES ( 2, 'ANDRIANISA', 'Kiady Jérémy', '2000-06-07', '200012055012', 'kiady@mada.com', '0349889012', 1, 3, '2022-07-02');
