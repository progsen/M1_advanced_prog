## 3. Studentenregistratie

```
 Een school wil een systeem waarin studenten zich kunnen inschrijven voor vakken. Het systeem moet inschrijvingen en vakken bijhouden.
 Een student moet het studentnummer en wachtwoord kunnen invullen en dan een overzicht krijgen van de vakken waar de student ingeschreven staat.
 Op een andere pagina kan de student zich inschrijven.

 Een student mag zich ook bedenken en zich weer uitschrijven
```

# Technische vereisten:
- Gebruik C# 
- Maak tabellen voor studenten, vakken en inschrijvingen
    > *Maak ook een ERD (Entity Relationship Diagram) voor deze opdracht.*
- Voeg functionaliteit toe voor inschrijven en overzicht
- Test data mag je met AI genereren, nadat je je design klaar hebt


## bewijzen & leerdoelen:
- Je kan (tech skills):
    - een c# website maken
    - een dynamische pagina maken op basis van een database
    - een connectie leggen met de database
    - de database runtime laten opbouwen
    - dependancy injection 
    
    - INSERT,DELETE, SELECT
    - JOIN gebruiken
    - Tabelstructuur ontwerpen
- nieuwe skills:
    - login maken


##### technisch
- gebruik een C# website met razor
- kijk of je de login kan maken met de tools binnen asp net
- Het wachtwoord is per student uniek en mag van te voren in de database gezet worden
- Maak tabellen voor student, vak en inschrijving, let op dat een student zich voor meerdere vakken kan inschrijven
    - *Maak ook een ERD (Entity Relationship Diagram) voor deze opdracht.*
    - zorg dat je de relatie tussen de tabellen aanmaakt
- Voeg functionaliteit toe voor zoeken en verwijderen
- maak een database context waar al je database code staat
- gebruik dependancy injection om je database context te injecteren in je controllers

## git
- maak een aparte git repository aan voor dit project, geef dit een goede naam waar minimaal de naam van het vak in voorkomt:
    - M1Prog_cs
    
## opleveren

- je levert een werkend programma op
- je maakt een presentatie van je product
- je ontwikkelt een korte presentatie alsof je leraar bent en legt daarin uit hoe je de ERD gemaakt hebt en je keuzes daarin
