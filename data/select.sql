SELECT id, nom, pack,count(pack)
FROM
	`BFV`.dashboard 
	where year(date_ajout)=2002 and month(date_ajout)=2
	group by id,pack
	order by id,nom desc;

SELECT dashboard.id, dashboard.nom, dashboard.idpack, (select count(*) from client where admin=dashboard.id and pack=dashboard.idpack ) as n
FROM
	`BFV`.dashboard   
	group by id,idpack
	order by id,nom desc;

SELECT id, nom, prenom, identifiant, mdp
FROM
	`BFV`.admin n;

SELECT id, nom, prenom, pack
FROM
	`BFV`.historique e;

SELECT id, nom
FROM
	`BFV`.pack k;

INSERT INTO `BFV`.client
	( id, nom, prenom, ddn, cin, mail, tel, admin, pack, date_ajout) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ? );

DELETE FROM `BFV`.client;


UPDATE `BFV`.client SET ... = ... ;

INSERT INTO `BFV`.admin
	( nom, prenom, identifiant, mdp) VALUES ('Admin 1','Jean','
    ', sha1('coca') );