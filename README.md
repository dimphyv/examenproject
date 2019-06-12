# Examenproject Club website 
<br>

<strong>Inhoudsopgave </strong>  
<ul><li>Planning</li>
<li>Rollen verdeling</li>
<li>Beschrijving van het project</li>
<li>Databases</li>
<li>Planning</li></ul>
<strong>Interne rollen verdeling </strong>  <br>




<strong>Beschrijving van het project</strong>
Website voor motorclub<br>
<ul>
  <li>inloggen</li>
  <li>nieuw lid aanmaken</li>
  <li>evenementen bekijken en inschrijven(alleen leden)</li>
  <li>evenement aanmaken, wijzigen en verwijderen</li>
  <li>ledenlijst bekijken</li>
  <li>evenement deelnemers lijst bekijken</li>
  <li>lid accepteren, wijzigen, verwijderen</li>
</ul>




<strong>De database: club</strong><br>
<b>Users tabel</b><br>
user_id naam<br>
email<br>
wachtwoord<br>
geaccepteerd ja/nee<br>

<b>Evenementen tabel</b><br>
evenement_id<br>
datum<br>
omschrijving<br>
geannuleerd<br>

<b>Evenement/user tabel</b><br>
user_id<br>
evenement_id<br>


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
