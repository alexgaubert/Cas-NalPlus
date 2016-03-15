DROP DATABASE IF EXISTS MLR3;

CREATE DATABASE IF NOT EXISTS MLR3;
USE MLR3;
# -----------------------------------------------------------------------------
#       TABLE : NATIONALITE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS NATIONALITE
 (
   ID CHAR (32) NOT NULL  ,
   LIBELLE CHAR (32) NULL  
   , PRIMARY KEY (ID) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : TYPE_PROGRAMME
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TYPE_PROGRAMME
 (
   ID CHAR (32) NOT NULL  ,
   LIBELLE CHAR (32) NULL  
   , PRIMARY KEY (ID) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : SIGNALETIQUE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS SIGNALETIQUE
 (
   ID CHAR (32) NOT NULL  ,
   LIBELLE CHAR (32) NULL  
   , PRIMARY KEY (ID) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : CHAINE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS CHAINE
 (
   ID CHAR (32) NOT NULL  ,
   LIBELLE CHAR (32) NULL  
   , PRIMARY KEY (ID) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : AVIS
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS AVIS
 (
   CODE CHAR (32) NOT NULL  ,
   ID CHAR (32) NOT NULL  ,
   NOTE DECIMAL (10,2) NULL  ,
   COMMENTAIRE CHAR (32) NULL  
   , PRIMARY KEY (CODE,ID) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE AVIS
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_AVIS_PROGRAMME
     ON AVIS (CODE ASC);

# -----------------------------------------------------------------------------
#       TABLE : REALISATEUR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS REALISATEUR
 (
   CODE CHAR (32) NOT NULL  ,
   NBFILM INTEGER NULL  ,
   NOM CHAR (32) NULL  ,
   PRENOM CHAR (32) NULL  
   , PRIMARY KEY (CODE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : PERIODE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PERIODE
 (
   ID CHAR (32) NOT NULL  ,
   LIBELLE CHAR (32) NULL  
   , PRIMARY KEY (ID) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : INVITE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS INVITE
 (
   CODE CHAR (32) NOT NULL  ,
   TARIF DECIMAL (10,2) NULL  ,
   NOM CHAR (32) NULL  ,
   PRENOM CHAR (32) NULL  
   , PRIMARY KEY (CODE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : INTERVENANT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS INTERVENANT
 (
   CODE CHAR (32) NOT NULL  ,
   NOM CHAR (32) NULL  ,
   PRENOM CHAR (32) NULL  
   , PRIMARY KEY (CODE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : PRESENTATEUR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PRESENTATEUR
 (
   CODE CHAR (32) NOT NULL  ,
   PROFESSION CHAR (32) NULL  ,
   NOM CHAR (32) NULL  ,
   PRENOM CHAR (32) NULL  
   , PRIMARY KEY (CODE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : PROGRAMME
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS PROGRAMME
 (
   CODE CHAR (32) NOT NULL  ,
   ID CHAR (32) NULL  ,
   ID_CORRESPOND CHAR (32) NOT NULL  ,
   ID_ORIGINAIRE CHAR (32) NOT NULL  ,
   NOM CHAR (32) NULL  ,
   DUREE TIME NULL  ,
   DESCRIPTION CHAR (32) NULL  ,
   ANNEE INTEGER NULL  ,
   INEDIT TINYINT NULL  ,
   HD TINYINT NULL  
   , PRIMARY KEY (CODE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE PROGRAMME
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_PROGRAMME_SIGNALETIQUE
     ON PROGRAMME (ID ASC);

CREATE  INDEX I_FK_PROGRAMME_TYPE_PROGRAMME
     ON PROGRAMME (ID_CORRESPOND ASC);

CREATE  INDEX I_FK_PROGRAMME_NATIONALITE
     ON PROGRAMME (ID_ORIGINAIRE ASC);

# -----------------------------------------------------------------------------
#       TABLE : DATE_HEURE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS DATE_HEURE
 (
   ID CHAR (32) NOT NULL  ,
   ID_REL_1 CHAR (32) NOT NULL  ,
   DATEH DATETIME NULL  
   , PRIMARY KEY (ID) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE DATE_HEURE
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_DATE_HEURE_PERIODE
     ON DATE_HEURE (ID_REL_1 ASC);

# -----------------------------------------------------------------------------
#       TABLE : ACTEUR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ACTEUR
 (
   CODE CHAR (32) NOT NULL  ,
   COTE DECIMAL (10,2) NULL  ,
   NOM CHAR (32) NULL  ,
   PRENOM CHAR (32) NULL  
   , PRIMARY KEY (CODE) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       TABLE : DIFFUSION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS DIFFUSION
 (
   CODE CHAR (32) NOT NULL  ,
   ID CHAR (32) NOT NULL  ,
   ID_1 CHAR (32) NOT NULL  
   , PRIMARY KEY (CODE,ID,ID_1) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE DIFFUSION
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_DIFFUSION_PROGRAMME
     ON DIFFUSION (CODE ASC);

CREATE  INDEX I_FK_DIFFUSION_DATE_HEURE
     ON DIFFUSION (ID ASC);

CREATE  INDEX I_FK_DIFFUSION_CHAINE
     ON DIFFUSION (ID_1 ASC);

# -----------------------------------------------------------------------------
#       TABLE : AVOIR
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS AVOIR
 (
   CODE CHAR (32) NOT NULL  ,
   CODE_1 CHAR (32) NOT NULL  
   , PRIMARY KEY (CODE,CODE_1) 
 ) 
 comment = "";

# -----------------------------------------------------------------------------
#       INDEX DE LA TABLE AVOIR
# -----------------------------------------------------------------------------


CREATE  INDEX I_FK_AVOIR_INTERVENANT
     ON AVOIR (CODE ASC);

CREATE  INDEX I_FK_AVOIR_PROGRAMME
     ON AVOIR (CODE_1 ASC);


# -----------------------------------------------------------------------------
#       CREATION DES REFERENCES DE TABLE
# -----------------------------------------------------------------------------


ALTER TABLE AVIS 
  ADD FOREIGN KEY FK_AVIS_PROGRAMME (CODE)
      REFERENCES PROGRAMME (CODE) ;


ALTER TABLE REALISATEUR 
  ADD FOREIGN KEY FK_REALISATEUR_INTERVENANT (CODE)
      REFERENCES INTERVENANT (CODE) ;


ALTER TABLE INVITE 
  ADD FOREIGN KEY FK_INVITE_INTERVENANT (CODE)
      REFERENCES INTERVENANT (CODE) ;


ALTER TABLE PRESENTATEUR 
  ADD FOREIGN KEY FK_PRESENTATEUR_INTERVENANT (CODE)
      REFERENCES INTERVENANT (CODE) ;


ALTER TABLE PROGRAMME 
  ADD FOREIGN KEY FK_PROGRAMME_SIGNALETIQUE (ID)
      REFERENCES SIGNALETIQUE (ID) ;


ALTER TABLE PROGRAMME 
  ADD FOREIGN KEY FK_PROGRAMME_TYPE_PROGRAMME (ID_CORRESPOND)
      REFERENCES TYPE_PROGRAMME (ID) ;


ALTER TABLE PROGRAMME 
  ADD FOREIGN KEY FK_PROGRAMME_NATIONALITE (ID_ORIGINAIRE)
      REFERENCES NATIONALITE (ID) ;


ALTER TABLE DATE_HEURE 
  ADD FOREIGN KEY FK_DATE_HEURE_PERIODE (ID_REL_1)
      REFERENCES PERIODE (ID) ;


ALTER TABLE ACTEUR 
  ADD FOREIGN KEY FK_ACTEUR_INTERVENANT (CODE)
      REFERENCES INTERVENANT (CODE) ;


ALTER TABLE DIFFUSION 
  ADD FOREIGN KEY FK_DIFFUSION_PROGRAMME (CODE)
      REFERENCES PROGRAMME (CODE) ;


ALTER TABLE DIFFUSION 
  ADD FOREIGN KEY FK_DIFFUSION_DATE_HEURE (ID)
      REFERENCES DATE_HEURE (ID) ;


ALTER TABLE DIFFUSION 
  ADD FOREIGN KEY FK_DIFFUSION_CHAINE (ID_1)
      REFERENCES CHAINE (ID) ;


ALTER TABLE AVOIR 
  ADD FOREIGN KEY FK_AVOIR_INTERVENANT (CODE)
      REFERENCES INTERVENANT (CODE) ;


ALTER TABLE AVOIR 
  ADD FOREIGN KEY FK_AVOIR_PROGRAMME (CODE_1)
      REFERENCES PROGRAMME (CODE) ;

