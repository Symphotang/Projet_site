SET SERVEROUTPUT ON;

SELECT sum(m.quantiteDesire)
FROM membre m NATURAL JOIN Cadeau c
WHERE idMembre = 2;

SELECT sum(m.quantiteAchete)
FROM membre m NATURAL JOIN Cadeau c
WHERE idMembre = 2;

CREATE OR REPLACE FUNCTION cadeauMembre (idmem Membre.idMembre%type)
RETURN FLOAT IS cadeauRestant NUMBER := 0 ;
 desire FLOAT;
 achete FLOAT;
 monException Exception;
BEGIN
SELECT sum(d.quantiteDesire) into desire
FROM membre m  NATURAL JOIN Cadeau c
WHERE idMembre = idmem
;
SELECT sum(d.quantiteAchete) into achete
FROM view_cadeauAchete_membre
where idMembre = idmem;
cadeauRestant := desire - achete;
RETURN cadeauRestant;
END;

/
DECLARE--essayer fonction
BEGIN 
dbms_output.put_line('cadeau restant du membre 2'||cadeauMembre(2));
END;
/

create or replace trigger tig_aucunCadeau
before insert  on achete FOR EACH ROW
declare
cadeauRestant float;
 x float;
begin
 cadeaurestant := cadeauMembre(:NEW.idMembre);
 if cadeauRestant<=0 then
  RAISE_APPLICATION_ERROR(-20001, 'Il n y a plus de cadeau');
 end if ;
 select c.quantiteAchete into x 
 from  cadeau c
 where idcadeau = :new.idCadeau;
 if x>cadeauRestant then
  RAISE_APPLICATION_ERROR(-20001, 'Il n y a plus de cadeau');
 end if ;
END;
/