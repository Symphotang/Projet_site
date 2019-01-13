------------------------------------------------------------
-- Table: Membre
------------------------------------------------------------

INSERT INTO Membre VALUES (seq_membre.nextval , 'Lars', 'Monsen', 'Lars.Monsen@gmail.com', 'toto123');
INSERT INTO Membre VALUES (seq_membre.nextval , 'Lars', 'Yves', 'Lars.yves@gmail.com', 'toto456');
INSERT INTO Membre VALUES (seq_membre.nextval , 'Wilson', 'Julien', 'Wilson.julien@gmail.com', 'tutu123');
INSERT INTO Membre VALUES (seq_membre.nextval , 'Wilson', 'Isabelle', 'Wilson.isabelle@gmail.com', 'tutu456');
INSERT INTO Membre VALUES (seq_membre.nextval , 'Gates', 'Pascal', 'Gates.pascal@gmail.com', 'titi123');
INSERT INTO Membre VALUES (seq_membre.nextval , 'Gates', 'Valentine', 'Gates.valentine@gmail.com', 'titi456');
INSERT INTO Membre VALUES (seq_membre.nextval , 'Smith', 'John', 'Smith.john@gmail.com', 'mdp123');
INSERT INTO Membre VALUES (seq_membre.nextval , 'Smith', 'Sarah', 'Smith.sarah@gmail.com', 'mdp456');

------------------------------------------------------------
-- Table: Groupe
------------------------------------------------------------

INSERT INTO Groupe VALUES (seq_groupe.nextval , 'Groupe1', 1);
INSERT INTO Groupe VALUES (seq_groupe.nextval , 'Groupe2', 3);
INSERT INTO Groupe VALUES (seq_groupe.nextval , 'Groupe3', 5);
INSERT INTO Groupe VALUES (seq_groupe.nextval , 'Groupe4', 7);

------------------------------------------------------------
-- Table: ListeCadeaux
------------------------------------------------------------

INSERT INTO ListeCadeaux VALUES (seq_listeCadeaux.nextval , 'Liste1', 1, 1);
INSERT INTO ListeCadeaux VALUES (seq_listeCadeaux.nextval , 'Liste2', 3, 2);
INSERT INTO ListeCadeaux VALUES (seq_listeCadeaux.nextval , 'Liste3', 6, 3);
INSERT INTO ListeCadeaux VALUES (seq_listeCadeaux.nextval , 'Liste4', 8, 4);

------------------------------------------------------------
-- Table: Cadeau
------------------------------------------------------------

INSERT INTO Cadeau VALUES (seq_cadeau.nextval, 'Voiture télécommandée', 'Petite voiture pouvant être commandée à distance grâce à une télécommande sans fil', '', '', 1.0, 1.0, 1, 1);
INSERT INTO Cadeau VALUES (seq_cadeau.nextval, 'Poupée', 'Petite poupée en laine', '', '', 1.0, 1.0, 3, 3);
INSERT INTO Cadeau VALUES (seq_cadeau.nextval, 'Jeux de société', 'Boîte contenant des jeux de société', '', '', 1.0, 1.0, 6, 6);
INSERT INTO Cadeau VALUES (seq_cadeau.nextval, 'Ballon', 'Ballon en mousse pour jouer en intérieur et extérieur', '', '', 1.0, 1.0, 8, 8);
INSERT INTO Cadeau VALUES (seq_cadeau.nextval, 'Maquillage', 'Boîte contenant un paquet de maquillage différent', '', '', 1.0, 1.0, 1, 1);

------------------------------------------------------------
 --Table: Invitation
------------------------------------------------------------

INSERT INTO Invitation VALUES (seq_invit.nextval, 1, 1);
INSERT INTO Invitation VALUES (seq_invit.nextval, 3, 2);
INSERT INTO Invitation VALUES (seq_invit.nextval, 5, 3);
INSERT INTO Invitation VALUES (seq_invit.nextval, 7, 4);

------------------------------------------------------------
--Table: est membre de
------------------------------------------------------------

INSERT INTO est_membre_de VALUES (1, 1);
INSERT INTO est_membre_de VALUES (2, 1);
INSERT INTO est_membre_de VALUES (3, 2);
INSERT INTO est_membre_de VALUES (4, 2);
INSERT INTO est_membre_de VALUES (5, 3);
INSERT INTO est_membre_de VALUES (6, 3);
INSERT INTO est_membre_de VALUES (7, 4);
INSERT INTO est_membre_de VALUES (8, 4);

------------------------------------------------------------
-- Table: est associe à
------------------------------------------------------------

INSERT INTO est_associe_a VALUES (1, 1);
INSERT INTO est_associe_a VALUES (2, 2);
INSERT INTO est_associe_a VALUES (3, 3);
INSERT INTO est_associe_a VALUES (4, 4);
INSERT INTO est_associe_a VALUES (5, 1);
