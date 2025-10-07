
## Simpele Database

- lees:
``` 
We hebben nu gezien hoe we een lokale database kunnen maken en met php kunnen gebruiken.
Vaak gebruiken we voor websites een database op een andere server, MYSQL, MongoDB of MSSQL

In het tweede jaar hebben de studenten al met mysql in docker gewerkt. dat gaan wij nu ook uitzoeken en toepassen

```

## bewijzen & leerdoelen:


- Je kan (tech skills):
    - de docker mysql server gebruiken en daar een tabel in aan te maken
        - let op dat je je SQL bewaard en vanuit een ERD werkt
    - een tabel maken vanuit de klant specificaties
    - data in de tabel zetten
    - de data uit de tabel lezen met php
    - een data class maken in php
## De opdracht

- lees:
```

Het lokale buurthuis (De Buurtfabriek) heeft jou gevraagd om een korte overzichts pagina te maken van hun evenementen.
Verder moet er op de website contact, toegangkelijkheid en regels geplaats worden 

ze hebben teksten,logo  en een voorbeeld planning geleverd in excel 
zie de files:
- De Buurtfabriek.txt
- evenementenplanning.csv

```

##### technisch
- maak een connectie met de database server (mariadb) met php
    - gebruik de .env file hiervoor
    - je hebt al files gekregen die helpen hierbij
- maak een nieuwe tabel voor de events. zet daar data in. werk vanuit de ERD
- Maak nu met php een website voor dit buurthuis
    - pas ook het model view controller patroon toe
- gebruik classes voor je modellen en controllers
- zorg voor mooie styling
    > bonus als je Scss gebruikt

## git
- maak een aparte git repository aan voor dit project, geef dit een goede naam waar minimaal de naam van het vak in voorkomt:
    - M1Prog_php
    
## opleveren

- je levert een werkend programma op