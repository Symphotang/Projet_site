#------------------------------------------------------------
# Table: Membre
#------------------------------------------------------------

CREATE TABLE Membre(
        idMembre     Int  Auto_increment  NOT NULL ,
        nomMembre    Varchar (50) NOT NULL ,
        prenomMembre Varchar (50) NOT NULL ,
        mailMembre   Varchar (50) NOT NULL ,
		loginMembre   Varchar (50) NOT NULL ,
        mdpMembre    Varchar (50) NOT NULL,
		CONSTRAINT Membre_PK PRIMARY KEY (idMembre)
);

CREATE SEQUENCE seq_membre
MINVALUE 1
START WITH 1
INCREMENT BY 1
CACHE 50;

#------------------------------------------------------------
# Table: Groupe
#------------------------------------------------------------

CREATE TABLE Groupe(
        idGroupe  Int  Auto_increment  NOT NULL ,
        nomGroupe Varchar (50) NOT NULL ,
        idMembre  Int NOT NULL,
		CONSTRAINT Groupe_PK PRIMARY KEY (idGroupe),
		CONSTRAINT Groupe_Membre_FK FOREIGN KEY (idMembre) REFERENCES Membre(idMembre)
);

CREATE SEQUENCE seq_groupe
MINVALUE 1
START WITH 1
INCREMENT BY 1
CACHE 50;

#------------------------------------------------------------
# Table: ListeCadeaux
#------------------------------------------------------------

CREATE TABLE ListeCadeaux(
        idListe  Int  Auto_increment  NOT NULL ,
        nomListe Varchar (50) NOT NULL ,
        idMembre Int NOT NULL ,
        idGroupe Int,
		CONSTRAINT ListeCadeaux_PK PRIMARY KEY (idListe),
		CONSTRAINT ListeCadeaux_Membre_FK FOREIGN KEY (idMembre) REFERENCES Membre(idMembre),
		CONSTRAINT ListeCadeaux_Groupe0_FK FOREIGN KEY (idGroupe) REFERENCES Groupe(idGroupe)
);

CREATE SEQUENCE seq_listeCadeaux
MINVALUE 1
START WITH 1
INCREMENT BY 1
CACHE 50;

#------------------------------------------------------------
# Table: Cadeau
#------------------------------------------------------------

CREATE TABLE Cadeau(
        idCadeau        Int  Auto_increment  NOT NULL ,
        nomCadeau       Varchar (50) NOT NULL ,
        descCadeau      Varchar (200) NOT NULL ,
        imgCadeau       Varchar (200) NOT NULL ,
        lienCadeau      Varchar (200) NOT NULL ,
        quantiteDesire  Float NOT NULL ,
        quantiteAchete  Float NOT NULL ,
        idMembre        Int NOT NULL ,
        idMembre_achete Int,
		CONSTRAINT Cadeau_PK PRIMARY KEY (idCadeau),
		CONSTRAINT Cadeau_Membre_FK FOREIGN KEY (idMembre) REFERENCES Membre(idMembre),
		CONSTRAINT Cadeau_Membre0_FK FOREIGN KEY (idMembre_achete) REFERENCES Membre(idMembre)
);

CREATE SEQUENCE seq_cadeau
MINVALUE 1
START WITH 1
INCREMENT BY 1
CACHE 50;

#------------------------------------------------------------
# Table: Invitation
#------------------------------------------------------------

CREATE TABLE Invitation(
        idInvit  Int  Auto_increment  NOT NULL ,
        idMembre Int NOT NULL ,
        idGroupe Int NOT NULL,
		CONSTRAINT Invitation_PK PRIMARY KEY (idInvit),
		CONSTRAINT Invitation_Membre_FK FOREIGN KEY (idMembre) REFERENCES Membre(idMembre),
		CONSTRAINT Invitation_Groupe0_FK FOREIGN KEY (idGroupe) REFERENCES Groupe(idGroupe)
);

CREATE SEQUENCE seq_invit
MINVALUE 1
START WITH 1
INCREMENT BY 1
CACHE 50;

#------------------------------------------------------------
# Table: est membre de
#------------------------------------------------------------

CREATE TABLE est_membre_de(
        idMembre Int NOT NULL ,
        idGroupe Int NOT NULL,
		CONSTRAINT est_membre_de_PK PRIMARY KEY (idMembre,idGroupe),
		CONSTRAINT est_membre_de_Membre_FK FOREIGN KEY (idMembre) REFERENCES Membre(idMembre),
		CONSTRAINT est_membre_de_Groupe0_FK FOREIGN KEY (idGroupe) REFERENCES Groupe(idGroupe)
);


#------------------------------------------------------------
# Table: est associe à
#------------------------------------------------------------

CREATE TABLE est_associe_a(
        idCadeau Int NOT NULL ,
        idListe  Int NOT NULL,
		CONSTRAINT est_associe_a_PK PRIMARY KEY (idCadeau,idListe),
		CONSTRAINT est_associe_a_Cadeau_FK FOREIGN KEY (idCadeau) REFERENCES Cadeau(idCadeau),
		CONSTRAINT est_associe_a_ListeCadeaux0_FK FOREIGN KEY (idListe) REFERENCES ListeCadeaux(idListe)
);

