# apiGSB
API REST en PHP pour GSB. /!\ Etude de cas BTS SIO /!\

Actuellement ce que l'on peut obtenir avec l'api :
  - GET rapport_visite - /apiGSB/rapport_visite/read.php
  - POST rapport_visite - /apiGSB/rapport_visite/create.PHP
    - COL_MATRICULE : string
    - RAP_BILAN : string
    - RAP_DATE : datetime (Y-m-d H:i:s)
    - PRA_NUM : number

  - GET departement praticien /apiGSB/praticien/readDep.php
  - GET with id, praticien - /apiGSB/praticien/read_one.php?id=
  - GET praticien - /apiGSB/praticien/read.php

  - GET with id, medicament - /apiGSB/medicmanet/read_one.php?id=
  - GET medicament - /apiGSB/medicament/read.php

  - GET collaborateur - /apiGSB/collaborateur/read.php
  - GET with id, collaborateur - /apiGSB/collaborateur/read_one.php?id=
