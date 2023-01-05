<?php return array (
  'emails.orcidRequestAuthorAuthorization.description' => 'Ezt az email sablont arra használjuk, hogy Szerzőktől kérjünk ORCID rekord hozzáférést.',
  'emails.orcidRequestAuthorAuthorization.body' => 'Tisztelt {$authorName}!<br>
<br>
Önt a(z) {$contextName} folyóirathoz beküldött "{$submissionTitle}" című kézirat szerzőjeként jelölték meg.
<br>
<br>
Kérjük közreműködését, hogy a kézirathoz hozzárendelhessük ORCID azonosítóját, illetve beküldését hozzáadjuk ORCID pofiljának publikációs listájához.<br>
Ehhez keresse fel a lenti link segítségével az ORCID hivatalos weboldalát, lépjen be és hagyja jóvá a kérést.<br>
<a href="{$authorOrcidUrl}"><img id="orcid-id-logo" src="https://orcid.org/sites/default/files/images/orcid_16x16.png" width=\'16\' height=\'16\' alt="ORCID iD icon" style="display: block; margin: 0 .5em 0 0; padding: 0; float: left;"/>Regisztrálás vagy ORCID iD csatlakoztatása</a><br/>
<br>
<br>
<a href="{$orcidAboutUrl}">További információk az ORCID-ról a(z) {$contextName} folyóiratnál</a><br/>
<br>
Ha kérdése merül fel, kérem vegye fel a kapcsolatot szerkesztőségünkkel.<br>
<br>
Üdvözlettel,<br>
{$principalContactSignature}<br>
',
  'emails.orcidRequestAuthorAuthorization.subject' => 'Hozzáférési kérés ORCID rekordhoz',
  'emails.orcidCollectAuthorId.description' => 'Ezzel az email sablonnal az ORCID azonosítókat kérjük be a Szerzőktől.',
  'emails.orcidCollectAuthorId.body' => 'Tisztelt {$authorName}!<br/>
<br/>
Ön a(z) {$contextName} folyóirathoz beküldött kézirat szerzőjeként lett megjelölve.<br/>
Kérjük, erősítse meg szerzői státuszát az ORCID azonosítójának hozzárendelésével, melyet a következő címen tehet meg.<br/>
<br/>
<a href="{$authorOrcidUrl}"><img id="orcid-id-logo" src="https://orcid.org/sites/default/files/images/orcid_16x16.png" width=\'16\' height=\'16\' alt="ORCID iD icon" style="display: block; margin: 0 .5em 0 0; padding: 0; float: left;"/>Regisztrálás vagy ORCID iD összekapcsolása</a><br/>
<br/>
<br>
<a href="{$orcidAboutUrl}">További információk az ORCID-ról a(z) {$contextName} folyóiratnál</a><br/>
<br/>
Ha kérdése merül fel, kérem vegye fel a kapcsolatot szerkesztőségünkkel.<br/>
<br/>
Üdvözlettel,<br/>
{$principalContactSignature}<br/>
',
  'emails.orcidCollectAuthorId.subject' => 'ORCID azonosító hozzárendelés',
);