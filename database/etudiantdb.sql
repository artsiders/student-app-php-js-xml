DROP DATABASE IF EXISTS etudiantdb;
CREATE DATABASE etudiantdb;
use etudiantdb;


CREATE TABLE etudiant (
    idetudiant INT PRIMARY KEY AUTO_INCREMENT,
    matricule VARCHAR(50) NOT NULL,
    nom VARCHAR(50) NOT NULL,
    telephone INT NOT NULL
);

INSERT INTO etudiantdb.etudiant (matricule, nom, telephone) VALUES ('GLO699', 'salim', '677417638');

