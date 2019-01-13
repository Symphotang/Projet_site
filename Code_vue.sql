CREATE OR REPLACE VIEW view_cadeauDesire_membre AS
SELECT m.nomMembre , m.prenomMembre, c.nomCadeau, c.quantiteDesire;
FROM Membre m NATURAL JOIN Cadeau c;

CREATE OR REPLACE VIEW view_cadeauAchete_membre AS
SELECT m.nomMembre , m.prenomMembre, c.nomCadeau, c.quantiteAchete;
FROM Membre m NATURAL JOIN Cadeau c;

SELECT * FROM view_cadeauDesire_membre;
SELECT * FROM view_cadeauAchete_membre;