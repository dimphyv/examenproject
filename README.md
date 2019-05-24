# examenproject
<br>
<b>Inhoudsopgave</b><br>

<b>Planning</b><br>
<b>Rollen verdeling</b><br>
<b>Beschrijving van het project</b><br></b><br>
<b>Databases</b><br>
<b>Planning</b><br>
Inhoudsopgave 
Planning
Rollen verdeling
Beschrijving van het project
Databases
Planning
Interne rollen verdeling 

Interne rollen verdeling



Beschrijving van het project
Beschrijving van het project 

master

Een website voor een club, met een inlogsysteem voor leden.
Daarnaast een evenementen pagina waar leden op in kunnen schrijven.
De leden kunnen zelf een evenement toevoegen.
Inschrijven op een evenement kan alleen als je als lid ingelogd bent op de website.
De databases:
Users
user_id naam
email
wachtwoord
geaccepteerd ja/nee

Evenementen
evenement_id
datum
omschrijving
geannuleerd?
master

Pages: 

landingspage log in velden user/password -> evenementen pagina die uit de database gehaald worden button nieuwe aanmelding -> nieuwe pagina met formulier naam/email/password
evenementen pagina: lijst evenementen knoppen inschrijven/uitschrijven/ lijst meegaande leden/wijzigen->zelfde form voor nieuw event met opgehaalde data uit de database nieuwe evenement toevoegen button -> formulier new event button lid -> lijst alle leden
Databases: 

Users
user_id integer primary key
naam varchar
email varchar
toegelaten boolean default is false
wachtwoord varchar
Evenement evenement_id integer primary key datum date omschrijving text geannuleerd tinyInt


evenement_id integer primary key
datum date
omschrijving text
geannuleerd tinyInt
Evenement/user
evenement_id
user_id
