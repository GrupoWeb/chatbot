create TABLE data_user(
 id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
 carnet VARCHAR(200),
 nombre varchar(200),
 apellido VARCHAR(200)
);

INSERT INTO data_user(carnet,nombre,apellido) VALUES('3190-16-16201','Juan Jose','Jolon Granados');
SELECT * FROM data_user;

CREATE TABLE semestre(

 id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
 id_alumno INTEGER NOT NULL,
 semestre VARCHAR(100),
 CONSTRAINT semestre_data FOREIGN KEY(id_alumno) REFERENCES data_user(id) 
 );
 
 INSERT INTO semestre(id_alumno,semestre) VALUES(1,9);
 SELECT * FROM semestre;
 
 CREATE TABLE cuenta(
 id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
 id_user INTEGER NOT NULL,
 saldo VARCHAR(200),
 CONSTRAINT cuenta_alumno FOREIGN KEY(id_user) REFERENCES data_user(id)
 );
 
 INSERT INTO cuenta(id_user,saldo) VALUES(1,'1,200');
 SELECT * FROM cuenta;
 
 CREATE TABLE notas(
 id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
 nota1 VARCHAR(200),
 nota2 VARCHAR(200),
 nota3 VARCHAR(200),
 nota4 VARCHAR(200),
 nota5 VARCHAR(200),
 id_user INTEGER NOT NULL,
 CONSTRAINT nota_alumno FOREIGN KEY(id_user) REFERENCES data_user(id)
 );
 
 INSERT INTO notas(nota1,nota2,nota3,nota4,nota5,id_user) VALUES('60','80','90','80','100',1);
 SELECT * FROM notas;
 
 
 