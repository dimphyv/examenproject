# examenproject
<br>
<b>Inhoudsopgave</b><br>

<b>Planning</b><br>
<b>Rollen verdeling</b><br>
<b>Beschrijving van het project</b><br></b><br>
<b>Databases</b><br>
<b>Planning</b><br>
<b>Interne rollen verdeling </b><br>
<b>Beschrijving van het project </b><br>

Een website voor een club, met een inlogsysteem voor leden.<br>
Daarnaast een evenementen pagina waar leden op in kunnen schrijven.<br>
De leden kunnen zelf een evenement toevoegen.<br>
Inschrijven op een evenement kan alleen als je als lid ingelogd bent op de website.<br>
De databases:<br>
Users<br>
user_id naam<br>
email<br>
wachtwoord<br>
geaccepteerd ja/nee<br>

Evenementen<br>
evenement_id<br>
datum<br>
omschrijving<br>
geannuleerd?<br>

Pages: <br>

landingspage log in velden user/password -> evenementen pagina die uit de database gehaald worden button nieuwe aanmelding -> nieuwe pagina met formulier naam/email/password<br>
evenementen pagina: lijst evenementen knoppen inschrijven/uitschrijven/ lijst meegaande leden/wijzigen->zelfde form voor nieuw event met opgehaalde data uit de database nieuwe evenement toevoegen button -> formulier new event button lid -> lijst alle leden<br>
Databases: <br>

<b>Users</b><br>
user_id integer primary key<br>
naam varchar<br>
email varchar<br>
toegelaten boolean default is false<br>
wachtwoord varchar<br>
<b>Evenement</b> <br>
evenement_id integer primary key <br>
datum date<br>
omschrijving text <br>
geannuleerd tinyInt<br>



