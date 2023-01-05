<?php return array (
  'emails.passwordResetConfirm.subject' => 'Potvrda o promjeni lozinke',
  'emails.passwordResetConfirm.body' => 'Zaprimili smo vaš zahtjev za promjenu lozinke za mrežnu stranicu {$siteTitle}.<br />
<br />
U slučaju da takav zahtjev niste poslali, molimo vas da ignorirate ovu e-poštu i vaša će lozinka ostati nepromijenjena. U slučaju da želite promijeniti lozinku, molimo vas da kliknete na dolje priloženu poveznicu.<br />
<br />
Promjena lozinke: {$url}<br />
<br />
{$principalContactSignature}',
  'emails.passwordResetConfirm.description' => 'Ovaj obrazac e-pošte šalje se registriranim korisnicima kada informiraju sustav da su zaboravili svoju lozinku ili da se ne mogu prijaviti u sustav. U poruci se nalazi URL koji mogu slijediti kao bi postavili svoju novu lozinku.',
  'emails.passwordReset.subject' => 'Promjena lozinke',
  'emails.passwordReset.body' => 'Vaša lozinka za mrežnu stranicu {$siteTitle} je uspješno promijenjena. Molimo vas da pohranite vaše korisničko ime i lozinku jer su oni nužni za sve aktivnosti vezane uz časopis.<br />
<br />
Vaše korisničko ime: {$username}<br />
Lozinka: {$password}<br />
<br />
{$principalContactSignature}',
  'emails.passwordReset.description' => 'Ovaj obrazac e-pošte šalje se registriranim korisnicima nakon što  uspješno ponovno postave  svoju  lozinku slijedeći postupak koji je opisan u PASSWORD_RESET_CONFIRM.',
  'emails.userRegister.subject' => 'Registracija novog korisnika',
  'emails.userRegister.body' => 'Zahvaljujemo vam se što ste se registrirali kao korisnik časopisa {$contextName}. Molimo vas da pohranite vaše korisničko ime i lozinku jer su oni nužni za sve aktivnosti vezane uz časopis.<br />
<br />
Korisničko ime: {$username}<br />
Lozinka: {$password}<br />
<br />
Srdačno,<br />
{$principalContactSignature}',
  'emails.userRegister.description' => 'Ovaj se obrazac e-pošte šalje novoregistriranim korisnicima u sustavu i sadrži njihovo korisničko ime i lozinku.',
  'emails.publishNotify.subject' => 'Objavljen novi broj',
  'emails.publishNotify.body' => 'Poštovani čitatelji,<br />
<br />
upravo je objavljen novi broj časopisa {$contextName} koji je dostupan na adresi {$contextUrl}. Pozivamo vas da pregledate sadržaj broja i posjetite našu mrežnu stranicu kako bi pročitali vama zanimljive članke i druge priloge.<br />
<br />
Hvala vam na interesu za naš rad,<br />
{$editorialContactSignature}',
  'emails.publishNotify.description' => 'Ovaj obrazac e-pošte šalje se registriranim čitateljima kroz opciju "Obavijesti korisnika" na početnom urednikovom izborniku. Čitatelji se njome obavještavaju o izlasku novog broja časopisa i pozivaju se da posjete stranice časopisa na priloženom URL-u.',
  'emails.lockssExistingArchive.subject' => 'Zamolba za arhiviranje časopisa {$contextName}',
  'emails.lockssExistingArchive.body' => 'Poštovani [Knjižničar ustanove],<br />
<br />
{$contextName} &amp;lt;{$contextUrl}&amp;gt; je časopis s kojim zaposlenik vašeg fakulteta [ime zaposlenika] surađuje kao [titula]. Časopis pokušava, u ovoj i drugim knjižnicama u sustavu znanosti i visokog obrazovanja, uspostaviti arhivu u skladu s LOCKSS sustavom (Lots of Copies Keep Stuff Safe).<br />
<br />
[Kratki opis časopisa]<br />
<br />
Adresa LOCKSS izdavače izjave za naš časopis je: {$articleUrl}/gateway/lockss<br />
<br />
Prema našim spoznajama, vi već sudjelujete u sustavu LOCKSS. Vrlo rado ćemo vam pružiti bilo kakve dodatne metapodatke koji bi mogli biti potrebni u svrhu prijave našeg časopisa unutar vaše verzije LOCKSS sustava.<br />
<br />
Unaprijed hvala,<br />
{$principalContactSignature}',
  'emails.lockssExistingArchive.description' => 'Ovaj obrazac e-pošte skreće pozornost osobe nadležne za LOCKSS arhivu da razmotri uključenje ovog časopisa u svoju arhivu. E-pošta šalje i URL poveznicu ka izjavi izdavača ovog časopisa o korištenju LOCKSS sustava.',
  'emails.lockssNewArchive.subject' => 'Zamolba za arhiviranje časopisa {$contextName}',
  'emails.lockssNewArchive.body' => 'Poštovani [Knjižničar ustanove],<br />
<br />
{$contextName} &amp;lt;{$contextUrl}&amp;gt; časopis je s kojim zaposlenik vašeg fakulteta [ime zaposlenika] surađuje kao [titula]. Časopis pokušava, u ovoj i drugim knjižnicama u sustavu znanosti i visokog obrazovanja, uspostaviti arhivu u skladu s LOCKSS sustavom (Lots of Copies Keep Stuff Safe).<br />
<br />
[Kratki opis časopisa]<br />
<br />
Međunarodna bibliotekarska/izdavačka inicijativa Program LOCKSS &amp;lt;http://lockss.org/&amp;gt; predstavlja funkcionalni primjer distribuiranog repozitorija namijenjenog čuvanju i arhiviranju sadržaja. Dodatne informacije možete pročitati u nastavku teksta. Potreban software koji se može koristiti i na običnom osobnom računalu je besplatan; sustav se vrlo jednostavno postavlja on-line te zahtijeva vrlo malo kontinuiranog održavanja.<br />
<br />
Kako biste doprinijeli arhiviranju našeg časopisa, pozivamo vas da postanete član LOCKSS zajednice čime biste pripomogli u sakupljanju i očuvanju naslova koje izdaje vaš fakultet i drugi znanstvenici diljem svijeta. Želite li se uključiti, molimo vas da jedan/a od vaših djelatnika/ca posjeti stranicu LOCKSS-a kako bi dobio/la informacije o funkcioniranju sustava. Nadamo se da ćete nas uskoro kontaktirati u vezi s izvedivošću pružanja ovakve podrške arhiviranju časopisa.<br />
<br />
Unaprijed hvala,<br />
{$principalContactSignature}',
  'emails.lockssNewArchive.description' => 'Ovaj obrazac e-pošte potiče primatelja na sudjelovanje u LOCKSS inicijativi i uvrštenje ovog časopisa u arhivu. Obrazac pruža osnovne informacije o LOCKSS inicijativi i načinima uključivanja.',
  'emails.submissionAck.subject' => 'Prilog zaprimljen',
  'emails.submissionAck.body' => 'Poštovana/i {$authorName},<br />
<br />
zahvaljujemo što ste prijavili prilog &quot;{$submissionTitle}&quot; našem časopisu {$contextName}. Pomoću sustava upravljanja časopisom koji koristimo, moći ćete aktivno pratiti kretanje članka kroz postupak uređivanja prijavljujući se na mrežnu stranicu časopisa:<br />
<br />
URL rukopisa: {$submissionUrl}<br />
Korisničko ime: {$authorUsername}<br />
<br />
U slučaju da imate bilo kakvih pitanja, molimo vas da nam se obratite.<br />
<br />
Srdačno,<br />
{$editorialContactSignature}',
  'emails.submissionAck.description' => 'Ovaj se obrazac e-pošte automatski šalje autoru kada su on ili ona završili postupak prijave priloga časopisu. Poruka daje informacije o tome kako mogu pratiti prilog kroz uređivački postupak.',
  'emails.submissionComment.subject' => 'Komentar priloga',
  'emails.submissionComment.body' => 'Poštovana/i {$name},<br />
<br />
{$commentName} je upravo priložio komentar članka &quot;{$submissionTitle}&quot; u časopisu {$contextName}:<br />
<br />
{$comments}<br />
',
  'emails.submissionComment.description' => 'Ovaj obrazac e-pošte obavještava osobe uključene u postupak uređivanja nekog priloga o tome da je unesen novi komentar.',
  'emails.submissionDecisionReviewers.subject' => 'Odluka o članku "{$submissionTitle}"',
  'emails.submissionDecisionReviewers.body' => 'Kao jednom od recenzenata članka &quot;{$submissionTitle}&quot; za časopis {$contextName} šaljemo vam recenzije i uredničke odluke koje su poslane autoru ovog rada. Željeli bismo vam još jednom zahvaliti na vašem važnom doprinosu ovom postupku.<br />
<br />
Srdačno,<br />
{$editorialContactSignature}<br />
<br />
{$comments}',
  'emails.submissionDecisionReviewers.description' => 'Ovim se obrascem e-pošte obavještavaju recenzenti da je recenzijski postupak završen. Poruka sadrži informacije o članku i donesenoj odluci.',
  'emails.editorAssign.subject' => 'Dodjela uredničkog zaduženja',
  'emails.editorAssign.body' => '{$editorialContactName},<br />
<br />
u okviru raspodjele uredničkih zaduženja za časopis {$contextName} vama je dodijeljen zaprimljeni prilog &quot;{$submissionTitle}&quot; kako biste proveli postupak njegova uređivanja.<br />
<br />
URL priloga: {$submissionUrl}<br />
Korisničko ime: {$editorUsername}<br />
<br />
Unaprijed hvala.',
  'emails.editorAssign.description' => 'Ovim obrascem e-pošte glavni urednik obavještava urednika rubrike da mu je dodijeljen zadatak vođenja priloga kroz uređivački postupak. Obrazac pruža i osnovne informacije o prilogu.',
  'emails.reviewRequestRemindAuto.subject' => 'Zamolba za recenziju članka',
  'emails.reviewRequestRemindAuto.body' => 'Poštovana/i {$reviewerName},<br />
<br />
s obzirom na vaše iskustvo i područje ekspertize, rado bismo vam povjerili zadatak recenzije članka &quot;{$submissionTitle}&quot; prijavljenog u naš časopis {$contextName}. Sažetak članka nalazi se u nastavku ove poruke. Nadamo se da ćete prihvatiti našu ponudu te izvršiti ovu, za nas iznimno važnu, zadaću.<br />
<br />
Molimo vas da se kao korisnik prijavite na mrežnu stranicu časopisa do {$responseDueDate} kako biste naznačili hoćete li preuzeti recenziju ili ne. Potom, ukoliko prihvatite izradu recenzije, na istome mjestu možete pristupiti tekstu članka te zabilježili vašu recenziju i preporuku. Mrežna stranica časopisa je {$contextUrl}<br />
<br />
U slučaju da nemate pri ruci svoje korisničko ime ili lozinku za mrežnu stranicu časopisa, možete se koristiti ovom poveznicom kako biste promijenili lozinku (koju ćemo vam tada, zajedno s korisničkim imenom, poslati putem e-pošte). {$passwordResetUrl}<br />
<br />
Sama recenzija trebala bi biti završena zaključno s {$reviewDueDate}.<br />
<br />
URL članka: {$submissionReviewUrl}<br />
<br />
Srdačno,<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestRemindAuto.description' => 'Ovim obrascem e-pošte urednik rubrike šalje upit recenzentu može li prihvatiti zadatak recenziranja članka. Zamolba sadrži osnovne informacije u vidu naslova i kratkog sadržaja članka, datum do kojeg bi recenzija trebala biti napisana te načina na koji se recenzent može prijaviti u sustav. Ova poruka se koristi kada je odabran standardni recenzijski postupak u 2. koraku Postavljanja časopisa (Ako nije, koristi se Zamolba za recenziju članka u privitku)',
  'emails.reviewRequestRemindAutoOneclick.subject' => 'Zamolba za recenziju članka',
  'emails.reviewRequestRemindAutoOneclick.body' => 'Poštovana/i {$reviewerName},<br />
<br />
s obzirom na vaše iskustvo i područje ekspertize, rado bismo vam povjerili zadatak recenzije članka &quot;{$submissionTitle}&quot; prijavljenog u naš časopis {$contextName}. Sažetak članka nalazi se u nastavku ove poruke. Nadamo se da ćete prihvatiti našu ponudu te izvršiti ovu, za nas iznimno važnu, zadaću.<br />
<br />
Molimo vas da se kao korisnik prijavite na mrežnu stranicu časopisa do {$responseDueDate} kako biste naznačili hoćete li preuzeti recenziju ili ne. Potom, ukoliko prihvatite izradu recenzije, na istome mjestu možete pristupiti tekstu članka te zabilježili vašu recenziju i preporuku.<br />
<br />
Sama recenzija trebala bi biti završena zaključno s {$reviewDueDate}.<br />
<br />
Do priloga možete doći izravno prateći ovu kodiranu pozivnicu: {$submissionReviewUrl}<br />
<br />
Srdačno,<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestRemindAutoOneclick.description' => 'Ovim obrascem e-pošte urednik rubrike šalje upit recenzentu može li prihvatiti ili je prisiljen odbiti zadatak recenziranja članka. Zamolba sadrži osnovne informacije u vidu naslova i kratkog sadržaja članka, datum do kojeg bi recenzija trebala biti napisana te načina na koji  recenzent može pristupiti članku. Ova poruka se koristi kada je odabran standardni recenzijski postupak u 2. koraku Postavljanja časopisa, a recenzentu je omogućen pristup jednim klikom.',
  'emails.reviewRequest.subject' => 'Zamolba za recenziju članka',
  'emails.reviewRequest.body' => 'Poštovana/i {$reviewerName},<br />
<br />
s obzirom na vaše iskustvo i područje ekspertize, rado bismo vam povjerili zadatak recenzije članka &quot;{$submissionTitle}&quot; prijavljenog u naš časopis {$contextName}. Sažetak članka nalazi se u nastavku ove poruke. Nadamo se da ćete prihvatiti našu ponudu te izvršiti ovu, za nas iznimno važnu, zadaću.<br />
<br />
Molimo vas da se kao korisnik prijavite na mrežnu stranicu časopisa do {$responseDueDate} kako biste naznačili hoćete li preuzeti recenziju ili ne. Potom, ukoliko prihvatite izradu recenzije, na istome mjestu možete pristupiti tekstu članka te zabilježili vašu recenziju i preporuku. Mrežna stranica časopisa je {$contextUrl}<br />
<br />
U slučaju da nemate pri ruci svoje korisničko ime ili lozinku za mrežnu stranicu časopisa, možete se koristiti ovom poveznicom kako biste promijenili lozinku (koju ćemo vam tada, zajedno s korisničkim imenom, poslati putem e-pošte). {$passwordResetUrl}<br />
<br />
Sama recenzija trebala bi biti završena zaključno s {$reviewDueDate}.<br />
<br />
URL članka: {$submissionReviewUrl}<br />
<br />
Srdačno,<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequest.description' => 'Ovim obrascem e-pošte urednik rubrike šalje upit recenzentu može li prihvatiti zadatak recenziranja članka. Zamolba sadrži osnovne informacije u vidu naslova i kratkog sadržaja članka, datum do kojeg bi recenzija trebala biti napisana te načina na koji se recenzent može prijaviti u sustav. Ova poruka se koristi kada je odabran standardni recenzijski postupak u 2. koraku Postavljanja časopisa (Ako nije, koristi se Zamolba za recenziju članka u privitku)',
  'emails.reviewRequestOneclick.subject' => 'Zamolba za recenziju članka',
  'emails.reviewRequestOneclick.body' => 'Poštovana/i {$reviewerName},<br />
<br />
s obzirom na vaše iskustvo i područje ekspertize, rado bismo vam povjerili zadatak recenzije članka &quot;{$submissionTitle}&quot; prijavljenog u naš časopis {$contextName}. Sažetak članka nalazi se u nastavku ove poruke. Nadamo se da ćete prihvatiti našu ponudu te izvršiti ovu, za nas iznimno važnu, zadaću.<br />
<br />
Molimo vas da se kao korisnik prijavite na mrežnu stranicu časopisa do {$responseDueDate} kako biste naznačili hoćete li preuzeti recenziju ili ne. Potom, ukoliko prihvatite izradu recenzije, na istome mjestu možete pristupiti tekstu članka te zabilježili vašu recenziju i preporuku.<br />
<br />
Sama recenzija trebala bi biti završena zaključno s {$reviewDueDate}.<br />
<br />
Do priloga možete doći izravno prateći ovu kodiranu pozivnicu: {$submissionReviewUrl}<br />
<br />
Srdačno,<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestOneclick.description' => 'Ovim obrascem e-pošte urednik rubrike šalje upit recenzentu može li prihvatiti ili je prisiljen odbiti zadatak recenziranja članka. Zamolba sadrži osnovne informacije u vidu naslova i kratkog sadržaja članka, datum do kojeg bi recenzija trebala biti napisana te načina na koji  recenzent može pristupiti članku. Ova poruka se koristi kada je odabran standardni recenzijski postupak u 2. koraku Postavljanja časopisa, a recenzentu je omogućen pristup jednim klikom.',
  'emails.reviewRequestAttached.subject' => 'Zamolba za recenziju članka u privitku',
  'emails.reviewRequestAttached.body' => 'Poštovana/i {$reviewerName},<br />
<br />
s obzirom na vaše iskustvo i područje ekspertize, rado bismo vam povjerili zadatak recenzije članka &quot;{$submissionTitle}&quot; prijavljenog u naš časopis. Nadamo se da ćete prihvatiti našu ponudu te izvršiti ovu, za nas iznimno važnu, zadaću.<br />
U nastavku teksta poruke nalaze se upute za recenzente našeg časopisa, a tekst članka nalazi se u prilogu. Od vas očekujemo da nam vašu recenziju članka, zajedno s preporukom dostavite e-poštom zaključno s {$reviewDueDate}.<br />
<br />
No prije svega, molimo vas da nam u odgovoru na ovu poruku e-poštom zaključno s datumom {$responseDueDate} naznačite da li ste u mogućnosti i da li ste voljni izvršiti recenziju<br />
<br />
Srdačno,<br />
{$editorialContactSignature}<br />
<br />
Upute za recenzente<br />
<br />
{$reviewGuidelines}',
  'emails.reviewRequestAttached.description' => 'Ovim obrascem e-pošte urednik rubrike šalje upit recenzentu može li prihvatiti ili je prisiljen odbiti zadatak recenziranja članka. Zamolba sadrži i tekst članka u privitku. Ova poruka se koristi kada je u 2. koraku Postavljanja časopisa odabran recenzijski postupak u kojem se prilog šalje recenzentu kao privitak e-pošte. (Ako ne, pogledajte Zamolba za recenziju članka.)',
  'emails.reviewCancel.subject' => 'Povlačenje zamolbe za recenziju',
  'emails.reviewCancel.body' => 'Poštovana/i {$reviewerName},<br />
<br />
s obzirom na okolnosti, odlučili smo povući zamolbu da izvršite recenziju članka &quot;{$submissionTitle}&quot; za časopis {$contextName}. Nadamo se da ćemo vam se u budućnosti ponovno moći obratiti da vašom recenzijom pridonesete ovom časopisu.<br />
<br />
Srdačno.',
  'emails.reviewCancel.description' => 'Ovim obrascem e-pošte urednik rubrike recenzenta obavještava o povlačenju zahtjeva za izradu recenzije za koju je prethodno recenzent bio zadužen ili koja je recenzentu bila ponuđena.',
  'emails.reviewConfirm.subject' => 'U mogućnosti sam izvršiti recenziju',
  'emails.reviewConfirm.body' => 'Poštovana/i {$editorialContactName},<br />
<br />
u mogućnosti sam izvršiti recenziju članka &quot;{$submissionTitle}&quot; za časopis {$contextName}. Recenziju namjeravam izvršiti  unutar dogovorenog vremenskog roka, {$reviewDueDate}.<br />
<br />
Srdačno,<br />
{$reviewerName}',
  'emails.reviewConfirm.description' => 'Ovim obrascem e-pošte recenzent potvrđuje uredniku rubrike da prihvaća zahtjev za recenzijom.',
  'emails.reviewDecline.subject' => 'Nisam u mogućnosti izvršiti recenziju',
  'emails.reviewDecline.body' => 'Poštovana/i {$editorialContactName},<br />
<br />
nažalost, u ovom trenutku nisam u mogućnosti izvršiti recenziju članka &quot;{$submissionTitle}&quot; za časopis {$contextName}. Hvala vam što ste me predložili za recenzenta, i molim vas da mi se svakako ponovno obratite u budućnosti.<br />
<br />
Srdačno,<br />
{$reviewerName}',
  'emails.reviewDecline.description' => 'Ovim obrascem e-pošte recenzent odgovara uredniku rubrike da ne prihvaća zahtjev za recenzijom.',
  'emails.reviewAck.subject' => 'Zaprimljena recenzija članka',
  'emails.reviewAck.body' => 'Poštovana/i {$reviewerName},<br />
<br />
hvala vam što ste izradili recenziju članka &quot;{$submissionTitle}&quot; za časopis {$contextName}. Cijenimo vaš doprinos kvaliteti radova objavljenih u našem časopisu.<br />
<br />
Srdačno,',
  'emails.reviewAck.description' => 'Ovim obrascem e-pošte  urednik rubrike potvrđuje recenzentu primitak završene recenzije.',
  'emails.reviewRemind.subject' => 'Podsjetnik za predaju Recenzije',
  'emails.reviewRemind.body' => 'Poštovana/i {$reviewerName},<br />
<br />
željeli bismo vas samo podsjetiti da je rok koji smo dogovorili za recenziju članka &quot;{$submissionTitle}&quot; za časopis {$contextName} istekao {$reviewDueDate}. Bilo bi nam izuzetno drago ukoliko biste recenziju završili i predali što je prije moguće.<br />
<br />
U slučaju da nemate pri ruci svoje korisničko ime ili lozinku za mrežnu stranicu časopisa, možete se koristi ovom poveznicom kako biste promijenili lozinku (koju ćemo vam tada, zajedno s korisničkim imenom, poslati putem e-pošte). {$passwordResetUrl}<br />
<br />
URL članka: {$submissionReviewUrl}<br />
<br />
Molimo vas da nas izvijestite u kojem ste roku u mogućnosti izraditi recenziju. Nadamo se skorom odgovoru.<br />
<br />
Srdačno,<br />
{$editorialContactSignature}',
  'emails.reviewRemind.description' => 'Ovim obrascem e-pošte urednik rubrike podsjeća recenzenta da rok za izradu recenzije istekao.',
  'emails.reviewRemindOneclick.subject' => 'Podsjetnik za predaju Recenzije',
  'emails.reviewRemindOneclick.body' => '{$reviewerName}:<br />
<br />
Željeli bismo vas samo podsjetiti da je rok koji smo dogovorili za recenziju članka, &quot;{$submissionTitle},&quot; za časopis {$contextName} istekao {$reviewDueDate}. Bilo bi nam izuzetno drago ukoliko biste recenziju završili i predali čim je prije moguće.<br />
<br />
Podsjećamo da do priloga možete doći izravno prateći ovu kodiranu pozivnicu:<br />
{$submissionReviewUrl}<br />
<br />
Molimo vas da potvrdite da ste u mogućnosti privesti kraju ovaj ključan doprinos radu časopisa. Nadamo se skorom odgovoru.<br />
<br />
{$editorialContactSignature}',
  'emails.reviewRemindOneclick.description' => 'Ovu e-poštu je poslao urednik rubrike da podsjeti recenzenta da je njegova recenzija dospjela.',
  'emails.reviewRemindAuto.subject' => 'Automatski podsjetnik za predaju recenzije',
  'emails.reviewRemindAuto.body' => 'Poštovana/i {$reviewerName},<br />
<br />
željeli bismo vas samo podsjetiti da je rok koji smo dogovorili za recenziju članka &quot;{$submissionTitle}&quot; za časopis {$contextName} istekao. Nadali smo se da će recenzija biti gotova do {$reviewDueDate}. Ova poruka se automatski šalje nakon prolaska tog datuma. Molimo vas da nam recenziju pošaljete u najskorijem roku.<br />
<br />
U slučaju da nemate pri ruci svoje korisničko ime ili lozinku za mrežnu stranicu časopisa, možete se koristiti ovom poveznicom kako biste promijenili lozinku (koju ćemo vam tada, zajedno s korisničkim imenom, poslati putem e-pošte). {$passwordResetUrl}<br />
<br />
URL članka: {$submissionReviewUrl}<br />
<br />
Molimo vas da nas izvijestite u kojem ste roku u mogućnosti izraditi recenziju. Nadamo se skorom odgovoru.<br />
<br />
Srdačno,<br />
{$editorialContactSignature}',
  'emails.reviewRemindAuto.description' => 'Ovaj se obrazac e-pošte automatski šalje recenzentu kada datum naveden kao rok za izradu recenzije istekao (pogledajte Opcije recenzije unutar Postavljanja časopisa, 2. korak), a recenzentu nije omogućen pristup jednim klikom. Za ovu funkciju Raspoređeni zadaci moraju biti aktivirani i namješteni (pogledajte konfiguracijsku datoteku stranice).',
  'emails.reviewRemindAutoOneclick.subject' => 'Automatski podsjetnik za predaju recenzije',
  'emails.reviewRemindAutoOneclick.body' => 'Poštovana/i {$reviewerName},<br />
<br />
željeli bismo vas samo podsjetiti da je rok koji smo dogovorili za recenziju članka &quot;{$submissionTitle}&quot; za časopis {$contextName} istekao {$reviewDueDate}. Bilo bi nam izuzetno drago ukoliko biste recenziju završili i predali čim je prije moguće.<br />
<br />
Do priloga možete doći izravno prateći ovu kodiranu pozivnicu:<br />
URL članka: {$submissionReviewUrl}<br />
<br />
Molimo vas da potvrdite da ste u mogućnosti privesti kraju ovaj ključan doprinos radu časopisa. Nadamo se skorom odgovoru.<br />
<br />
Srdačno,<br />
{$editorialContactSignature}',
  'emails.reviewRemindAutoOneclick.description' => 'Ovim obrascem e-pošte urednik rubrike podsjeća recenzenta da rok za izradu recenzije istekao. Obrazac se koristi ukoliko je recenzentu je omogućen pristup jednim klikom.',
  'emails.copyeditRequest.subject' => 'Zamolba za lekturu',
  'emails.copyeditRequest.body' => 'Poštovana/i {$participantName},<br />
<br />
željeli bismo vas zamoliti da prihvatite lekturu rukopisa &quot;{$submissionTitle}&quot; za časopis {$contextName}. Prijavljeni rukopis, kao i upute za lektoriranje možete pronaći na mrežnim stranicama časopisa.<br />
<br />
URL rukopisa: {$submissionUrl}<br />
Korisničko ime: {$participantUsername}<br />
<br />
U slučaju da trenutačno niste u mogućnosti preuzeti lekturu ili da imate bilo kakvih dodatnih pitanja, molimo vas da nam se obratite.<br />
<br />
Srdačno,',
  'emails.copyeditRequest.description' => 'Ovim obrascem e-pošte urednik rubrike šalje lektoru zamolbu da započne s lekturom priloga. Poruka pruža osnovne informacije o prilogu i kako mu pristupiti.',
  'emails.layoutRequest.subject' => 'Zamolba za prijelom',
  'emails.layoutRequest.body' => 'Poštovana/i {$participantName},<br />
<br />
molim vas da pripremite prijelom priloga &quot;{$submissionTitle}&quot; za časopis {$contextName}.<br />
<br />
URL rukopisa: {$submissionUrl}<br />
Korisničko ime: {$participantUsername}<br />
<br />
U slučaju da trenutačno niste u mogućnosti preuzeti ovu obavezu ili ako imate bilo kakvih dodatnih pitanja, molim vas da mi se obratite.<br />
<br />
Srdačno,',
  'emails.layoutRequest.description' => 'Ovim obrascem e-pošte urednik rubrike obavještava grafičkog urednika da mu je dodijeljen zadatak  izrade prijeloma priloga.',
  'emails.layoutComplete.subject' => 'Napravljen prijelom',
  'emails.layoutComplete.body' => 'Poštovana/i {$editorialContactName},<br />
<br />
prijelom priloga &quot;{$submissionTitle}&quot; za časopis {$contextName} je završen te spreman za korekturu.<br />
U slučaju da imate bilo kakvih pitanja molim vas da mi se obratite.<br />
<br />
Srdačno,<br />
{$participantName}<br />
',
  'emails.layoutComplete.description' => 'Ova e-pošta urednika prijeloma uredniku rubrike obaviještava da je proces prijeloma završen.',
  'emails.layoutAck.subject' => 'Zaprimljen prijelom',
  'emails.layoutAck.body' => 'Poštovana/i {$participantName},<br />
<br />
zahvaljujem vam što ste pripremili prijelom priloga &quot;{$submissionTitle}&quot; za časopis {$contextName}.<br />
<br />
Srdačno,<br />
{$editorialContactSignature}',
  'emails.layoutAck.description' => 'Ovim obrascem e-pošte grafički urednik obavještava urednika rubrike da je postupak prijeloma završen.',
  'emails.proofreadAuthorRequest.subject' => 'Zahtjev za korekturu (Autor)',
  'emails.proofreadAuthorRequest.body' => 'Poštovana/i {$authorName},<br />
<br />
molimo vas da izvršite korekturu prijeloma vašeg priloga &quot;{$submissionTitle}&quot; za časopis {$contextName}. Kako biste pristupili radnom primjerku prijeloma, molimo vas da otiđete na mrežnu stranicu časopisa koristeći se poveznicom koja se nalazi u nastavku teksta. Koristite poveznicu VIEW PROOF kako biste pregledali postoje li tiskarske pogreške i greške u prijelomu u tekstu oblikovanom za objavljivanje. Ispravke zabilježite unutar okvira Korektorski ispravci, koristeći se priloženim uputama za ispravke.<br />
<br />
URL Rukopisa: {$submissionUrl}<br />
<br />
U slučaju da trenutačno niste u mogućnosti izraditi korekturu svog priloga ili ako imate bilo kakvih dodatnih pitanja, molim vas da nam se obratite.<br />
<br />
Srdačno,<br />
{$editorialContactSignature}',
  'emails.proofreadAuthorRequest.description' => 'Ovim obrascem e-pošte urednik rubrike obavještava autora da je prijelom članka spreman za korekturu. Poruka uključuje informacije o članku i kako mu pristupiti.',
  'emails.proofreadAuthorComplete.subject' => 'Napravljena korektura (Autor)',
  'emails.proofreadAuthorComplete.body' => 'Poštovana/i {$editorialContactName},<br />
<br />
korektura prijeloma mog priloga &quot;{$submissionTitle}&quot; za časopis {$contextName} je napravljena. Prijelom je sada spreman za završne ispravke korektora.<br />
<br />
Srdačno,<br />
{$authorName}',
  'emails.proofreadAuthorComplete.description' => 'Ovim obrascem e-pošte autor obavještava korektora i urednika završio autorsku korekturu. Autorski ispravci mogu se pronaći u komentarima članka.',
  'emails.proofreadAuthorAck.subject' => 'Zaprimljena korektura (Autor)',
  'emails.proofreadAuthorAck.body' => 'Poštovana/i {$authorName},<br />
<br />
zahvaljujemo vam na korekturi prijeloma vašeg priloga &quot;{$submissionTitle}&quot; za časopis {$contextName}. Bit će nam zadovoljstvo uskoro objaviti vaš rad.<br />
<br />
Ako se predbilježite za naš sustav obavještavanja, dobivat ćete e-poštu sadržaja broja čim se on objavi. U slučaju da imate bilo kakva dodatna pitanja, molimo vas da nam se obratite.<br />
<br />
Srdačno,<br />
{$editorialContactSignature}',
  'emails.proofreadAuthorAck.description' => 'Ovim obrascem e-pošte urednik rubrike potvrđuje autoru primitak korekture.',
  'emails.proofreadRequest.subject' => 'Zamolba za korekturu',
  'emails.proofreadRequest.body' => 'Poštovana/i {$proofreaderName},<br />
<br />
molim vas da izvršite korekturu prijeloma priloga &quot;{$submissionTitle}&quot; za časopis {$contextName}.<br />
<br />
URL Rukopisa: {$submissionUrl}<br />
Korisničko ime: {$proofreaderUsername}<br />
<br />
U slučaju da trenutačno niste u mogućnosti preuzeti ovu korekturu ili u slučaju da imate bilo kakvih pitanja, molimo vas da nam se obratite.<br />
<br />
Srdačno,<br />
{$editorialContactSignature}',
  'emails.proofreadRequest.description' => 'Ovim obrascem e-pošte urednik rubrike šalje korektoru zamolbu za korekturu prijeloma članka. Poruka daje osnovne informacije o članku i kako mu pristupiti.',
  'emails.proofreadComplete.subject' => 'Napravljena korektura',
  'emails.proofreadComplete.body' => 'Poštovana/i {$editorialContactName},<br />
<br />
korektura prijeloma priloga &quot;{$submissionTitle}&quot; za časopis {$contextName} je napravljena. Prijelom je spreman za unos završnih ispravaka od strane grafičkog urednika.<br />
<br />
Srdačno,<br />
{$proofreaderName}',
  'emails.proofreadComplete.description' => 'Ovim obrascem e-pošte korektor obavještava urednika rubrike da je završio postupak korekture.',
  'emails.proofreadAck.subject' => 'Zaprimljena korektura',
  'emails.proofreadAck.body' => 'Poštovana/i {$proofreaderName},<br />
<br />
zahvaljujem vam na korekturi prijeloma priloga &quot;{$submissionTitle}&quot; za časopis {$contextName}.<br />
<br />
Srdačno,<br />
{$editorialContactSignature}',
  'emails.proofreadAck.description' => 'Ovim obrascem e-pošte urednik rubrike potvrđuje korektoru zaprimanje korekture.',
  'emails.proofreadLayoutComplete.subject' => 'Napravljena korektura (grafički urednik)',
  'emails.proofreadLayoutComplete.body' => 'Poštovana/i {$editorialContactName},<br />
<br />
prijelom priloga &quot;{$submissionTitle}&quot; za časopis {$contextName} ispravljen je prema priloženim korektorskim uputama. Članak je sada spreman za objavljivanje.<br />
<br />
Srdačno,<br />
{$participantName}',
  'emails.proofreadLayoutComplete.description' => 'Ovim obrascem e-pošte grafički urednik obavještava urednika rubrike da je unos korekture završen i da je članak spreman za objavljivanje.',
  'emails.proofreadLayoutAck.subject' => 'Zaprimljena korektura (grafički urednik)',
  'emails.proofreadLayoutAck.body' => 'Poštovana/i {$participantName},<br />
<br />
hvala vam što ste završili unos korektura u prijelom priloga &quot;{$submissionTitle}&quot; za časopis {$contextName}.<br />
<br />
Srdačno,<br />
{$editorialContactSignature}',
  'emails.proofreadLayoutAck.description' => 'Ovim obrascem e-pošte urednik rubrike potvrđuje grafičkom uredniku da je zaprimio prijelom sa unesenim  korekturama.',
  'emails.emailLink.subject' => 'Potencijalno zanimljiv članak',
  'emails.emailLink.body' => 'Skrećem vam pozornost na članak &quot;{$submissionTitle}&quot; autora {$authorName} koji je objavljen u godištu {$volume}, broju {$number} ({$year}) časopisa {$contextName}, a može se naći na &quot;{$articleUrl}&quot;.',
  'emails.emailLink.description' => 'Ovaj obrazac e-pošte omogućuje registriranom čitatelju da šalje informaciju o članku nekome tko je zainteresiran. Ovaj je obrazac dostupan putem alata za čitanje i njegovu upotrebu mora aktivirati glavni urednik unutar postavki alata za čitanje među postavkama časopisa.',
  'emails.subscriptionNotify.subject' => 'Obavijest o pretplati',
  'emails.subscriptionNotify.body' => 'Poštovana/i {$subscriberName},<br />
<br />
upravo smo vas u našem e-sustavu za uređivanje časopisa evidentirali kao pretplatnika časopisa {$contextName}. Tip vaše pretplate je:<br />
<br />
{$subscriptionType}<br />
<br />
Kako biste pristupili sadržaju koji je raspoloživ isključivo za pretplatnike, sve što trebate učiniti je prijaviti se u sustav uz pomoć vašeg korisničkog imena &quot;{$username}&quot;.<br />
<br />
Nakon što ste se prijavili u sustav, možete u bilo kojem trenutku promijeniti detalje svog profila ili lozinku.<br />
<br />
Molimo vas da uzmete u obzir da u slučaju da koristite institucionalnu pretplatu nije potrebno da se korisnici pri vašoj instituciji registriraju, budući da će sustav automatski autorizirati zahtjeve za pretplatnički sadržaj koji dolaze s mrežnih adresa vaše institucije.<br />
<br />
Molimo vas da nam se obratite u slučaju da imate bilo kakva dodatna pitanja.<br />
<br />
Srdačno,<br />
{$subscriptionContactSignature}',
  'emails.subscriptionNotify.description' => 'Ovim se obrascem e-pošte obavještavaju pretplatnici o aktivaciji njihove pretplate . Poruka sadrži URL časopisa i upute za pristup.',
  'emails.openAccessNotify.subject' => 'Broj dostupan pod uvjetima otvorenog pristupa',
  'emails.openAccessNotify.body' => 'Ovaj broj časopisa {$contextName} od sada je u cijelosti dostupan svim čitateljima pod uvjetima otvorenog pristupa. Pozivamo vas da pregledate kazalo sadržaja i potom posjetite našu mrežnu stranicu ({$contextUrl}) gdje možete bez ograničenja pregledati sve članke i priloge koji vas zanimaju.<br />
<br />
Hvala vam na zanimanju za naš rad,<br />
{$editorialContactSignature}',
  'emails.openAccessNotify.description' => 'Ovaj obrazac e-pošte šalje se registriranim čitateljima koji su zatražili primanje obavijesti e-poštom kada broj časopisa postane dostupan pod uvjetima otvorenog pristupa.',
  'emails.subscriptionBeforeExpiry.subject' => 'Obavijest o isteku pretplate',
  'emails.subscriptionBeforeExpiry.body' => '{$subscriberName},<br />
<br />
vaša pretplata na časopis {$contextName} uskoro ističe.<br />
<br />
{$subscriptionType}<br />
Datum isteka: {$expiryDate}<br />
<br />
Kako biste osigurali kontinuitet pristupa sadržaju ovog časopisa, molimo da posjetite mrežnu stranicu časopisa i obnovite vašu pretplatu. U sustav se možete prijaviti koristeći vaše korisničko ime &quot;{$username}&quot;.<br />
<br />
U slučaju da imate bilo kakvih dodatnih pitanja, molimo vas da nam se obratite.<br />
<br />
Srdačno,<br />
{$subscriptionContactSignature}',
  'emails.subscriptionBeforeExpiry.description' => 'Ovim se obrascem e-pošte obavještavaju pretplatnici da će njihova pretplata uskoro isteći. Poruka sadrži URL časopisa i upute za pristup.',
  'emails.subscriptionAfterExpiry.subject' => 'Vaša pretplata je istekla',
  'emails.subscriptionAfterExpiry.body' => '{$subscriberName},<br />
<br />
vaša pretplata na časopis {$contextName} je istekla.<br />
<br />
{$subscriptionType}<br />
Datum isteka: {$expiryDate}<br />
<br />
Kako biste obnovili vašu pretplatu posjetite mrežnu stranicu časopisa. U sustav se možete prijaviti koristeći vaše korisničko ime &quot;{$username}&quot;.<br />
<br />
U slučaju da imate bilo kakvih dodatnih pitanja, molimo vas da nam se obratite.<br />
<br />
Srdačno,<br />
{$subscriptionContactSignature}<br />
',
  'emails.subscriptionAfterExpiry.description' => 'Ovim se obrascem e-pošte obavještavaju pretplatnici da je njihova pretplata istekla. Poruka sadrži URL časopisa i upute za pristup.',
  'emails.subscriptionAfterExpiryLast.subject' => 'Vaša pretplata je istekla - Posljednji podsjetnik',
  'emails.subscriptionAfterExpiryLast.body' => '{$subscriberName},<br />
<br />
vaša pretplata na časopis {$contextName} je istekla.<br />
Ovo je posljednji podsjetnik koji će vam biti poslan e-poštom.<br />
<br />
{$subscriptionType}<br />
Datum isteka: {$expiryDate}<br />
<br />
Kako biste obnovili vašu pretplatu, posjetite mrežnu stranicu časopisa. U sustav se možete prijaviti koristeći vaše korisničko ime &quot;{$username}&quot;.<br />
<br />
U slučaju da imate bilo kakvih dodatnih pitanja, molimo vas da nam se obratite.<br />
<br />
Srdačno,<br />
{$subscriptionContactSignature}',
  'emails.subscriptionAfterExpiryLast.description' => 'Ovim se obrascem e-pošte obavještavaju pretplatnici da je njihova pretplata istekla. Poruka sadrži URL časopisa i upute za pristup.',
  'emails.reviewerRegister.subject' => 'Registrirani ste kao recenzent časopisa {$contextName}',
  'emails.reviewerRegister.body' => 'Imajući u vidu vaše područje ekspertize, odlučili smo registrirati vas u bazu recenzenata časopisa {$contextName}. Ovo vas ne obvezuje ni na koji način, već samo omogućava uredništvu da vas kontaktira sa informacijama o prilozima koje biste potencijalno mogli recenzirati. Po zaprimljenom pozivu za recenziju, bit ćete u mogućnosti pregledati naslov i sažetak konkretnog rada čiju recenziju predlažemo, te ćete uvijek biti u mogućnosti prihvatiti ili odbiti rencenzijsko zaduženje. Također, u bilo kojem trenutku možete zatražiti da uklonimo vaše ime iz baze recenzenata i zatvorimo vaš korisnički račun.<br />
<br />
Ovdje vam prilažemo vaše korisničko ime i lozinku, koja vam je potrebna za rad sa časopisom kroz naš sustav za elektroničko uređivanje. U njemu možete i dopuniti svoje korisničke detalje (npr. recenzentske interese).<br />
<br />
Korisničko ime: {$username}<br />
Lozinka: {$password}<br />
<br />
Srdačno,<br />
{$principalContactSignature}',
  'emails.reviewerRegister.description' => 'Ova se poruka šalje recenzentima koje registriraju urednici. Njome se novoregistriranom recenzentu želi dobrodošlica te pružaju informacije o korisničkom imenu i lozinki.',
  'emails.userValidate.subject' => 'Validacija korisničkog računa',
  'emails.userValidate.body' => '{$userFullName}<br />
<br />
Hcala vam što ste kreirali korisnički račun pri časopisu {$contextName}. No, prije nego aktiviramo vaš račun trebate učiniti još jedan korak, a to je potvrda vaše adrese e-pošte. To ćete učiniti jednostavno tako što ćete slijediti poveznicu priloženu ovoj poruci:<br />
<br />
{$activateUrl}<br />
<br />
Srdačno,<br />
{$principalContactSignature}',
  'emails.userValidate.description' => 'Ova se poruka šalje novoregistriranim korisnicima kako bi im se zaželila dobrodošlica na sistem i zatražila potvrda njihove adrese e-pošte.',
  'emails.submissionAckNotUser.description' => 'Ova e-pošta, kada je uključena, automatski se šalje ostalim autorima koji nisu korisnici u OJS-u, a koji su navedeni tijekom procesa prijave.',
  'emails.submissionAckNotUser.body' => 'Pozdrav,<br />
<br />
{$submitterName} prijavio/la je rukopis, &quot;{$submissionTitle}&quot; u  {$contextName}. <br />
<br />
Ako imate nekih pitanja, molim kontaktirajte me. Hvala što ste prijavili rad u ovom časopisu.<br />
<br />
{$editorialContactSignature}',
  'emails.submissionAckNotUser.subject' => 'Potvrda o prijavi članka',
  'emails.notification.description' => 'Ova e-pošta šalje se registriranim korisnicima koji su odabrali primati ovu vrstu obavijesti.',
  'emails.notification.body' => 'Imate novu obavijest od časopisa {$siteTitle}:<br />
<br />
{$notificationContents}<br />
<br />
Poveznica: {$url}<br />
<br />
{$principalContactSignature}',
  'emails.notification.subject' => 'Nova obavijest od časopisa {$siteTitle}',
);