
## Simpele Database

- lees:
``` 
We kunnen ook meerdere websites in onze compose hosten

dat gaan we nu uitproberen

```

## bewijzen & leerdoelen:


- Je kan (tech skills):
    - meerdere websites in 1 compose hosten
    - aparte rechten per website gebruiker maken
    - login

## De opdracht

- lees:
```

Op een de lokale middelbare school willen ze op monitors snel berichten laten zien als er wijzigingen of belangrijke aankondigingen zijn
ze willen een administratie site en op de monitors willen ze een display site hebben die alleen de berichten laat zien.

voor een bericht willen ze het volgende tonen:
- een header
- van wanneer dat bericht is
- de hoofdtekst
    - voor deze tekst kan html gebruikt worden
- wie het bericht gepost heeft
    - dit kan een afdeling of gebruiker zijn
        - dit mag nooit de login name zijn!
de administratie site mag eenvoudig zijn maar moet wel met een login beveiligd zijn
```

##### technisch
- maak een connectie met de database server (mariadb) met php
    - gebruik de .env file hiervoor
    - je hebt al files gekregen die helpen hierbij
- maak een nieuwe tabel voor de berichten en gebruikers van de adminstratie site. zet daar data in. werk vanuit de ERD
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

## extra skills:

- met 2 sites heb je vaak dubbelen php/helper code
    - kijk hoe je dit kan oplossen en de code kan delen op een nette manier

# HINTS

- je 5 containers nodig
- las je 2 sites dezelfde php gebruiken:
    - kijk naar je nginx config, kijk hoe je php werkt, zie je die poort?
- met sql kan je gebruikers aanmaken
- je kan meerdere volumes per container gebruiken, als je files wil ontdubbelen
- graaf even goed in hoe nginx en php samen werken
- let op je naamgeving van je containers en je afhankelijkheden