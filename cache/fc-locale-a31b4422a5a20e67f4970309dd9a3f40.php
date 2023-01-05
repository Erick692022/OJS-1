<?php return array (
  'emails.notification.subject' => 'Új értesítés a(z) {$siteTitle} oldaltól',
  'emails.notification.body' => 'Önnek új értesítése van a(z) {$siteTitle} oldaltól:<br />
<br />
{$notificationContents}<br />
<br />
Link: {$url}<br />
<br />
{$principalContactSignature}',
  'emails.notification.description' => 'Az email azoknak a regisztrált felhasználóknak lett kiküldve, akik korábban jelezték, hogy ebben a témában kérnek értesítést.',
  'emails.passwordResetConfirm.subject' => 'Jelszó visszaállítás megerősítése',
  'emails.passwordResetConfirm.body' => 'Megkaptuk jelszavának visszaállítási kérését a(z) {$siteTitle} oldalhoz.<br />
<br />
Amennyiben nem Ön kezdeményezte, úgy hagyja figyelmen kívül értesítő levelünket és jelszava nem módosul. Ha szeretné visszaállítani jelszavát, kattintson az alábbi linkre.<br />
<br />
Jelszavam visszaállítása: {$url}<br />
<br />
{$principalContactSignature}',
  'emails.passwordResetConfirm.description' => 'Ez a levél egy regisztrált felhasználónak kerül kiküldésre, amikor jelzi, hogy elfelejtette a jelszavát, és nem tud bejelentkezni. Tartalmaz egy linket, amire kattintva visszaállítható a jelszava.',
  'emails.passwordReset.subject' => 'Jelszó visszaállítás',
  'emails.passwordReset.body' => 'Jelszavának visszaállítása sikeresen megtörtént a(z) {$siteTitle} oldalhoz. Kérem, őrizze meg felhasználónevét és jelszavát, mert a folyóirattal kapcsolatos összes munkafolyamatban szüksége lehet rá.<br />
<br />
Felhasználóneve: {$username}<br />
Jelszava: {$password}<br />
<br />
{$principalContactSignature}',
  'emails.passwordReset.description' => 'Ez az email egy regisztrált felhasználónak kerül kiküldésre, amikor sikeresen visszaállításra került jelszava, követve a PASSWORD_RESET_CONFIRM levélben írtakat.',
  'emails.userRegister.subject' => 'Folyóirat regisztráció',
  'emails.userRegister.body' => 'Tisztelt {$userFullName}!<br />
<br />
Köszönjük regisztrációját a(z) {$contextName} folyóirathoz. Levelünk tartalmazza felhasználónevét és jelszavát, mellyel nem csak olvasóként léphet be a folyóirat weboldalára, de szerzőként küldhet be cikket vagy vállalhat lektorálási feladatokat.<br />
Regisztrációjának törlését bármikor kezdeményezheti. Ehhez kérjük, vegye fel a kapcsolatot  szerkesztőségünkkel.<br />
<br />
Felhasználónév: {$username}<br />
Jelszó: {$password}<br />
<br />
Üdvözlettel,<br />
{$principalContactSignature}',
  'emails.userRegister.description' => 'Ez az email az újonnan regisztrált felhasználóknak kerül kiküldésre, köszöntésként, felhasználónevük, jelszavuk megadásával.',
  'emails.userValidate.subject' => 'Hitelesítse fiókját',
  'emails.userValidate.body' => 'Tisztelt {$userFullName}!<br />
<br />
Sikeresen létrehozta felhasználói fiókját a(z) {$contextName} folyóirathoz, melynek használatba vételéhez kérjük, hitelesítse email címét az alábbi hivatkozás segítségével:<br />
<br />
{$activateUrl}<br />
<br />
Köszönettel,<br />
{$principalContactSignature}',
  'emails.userValidate.description' => 'Ez az email az újonnan regisztrált felhasználónak kerül kiküldésre, hogy hitelesítse email fiókját.',
  'emails.reviewerRegister.subject' => 'Regisztráció szakmai lektorként a(z) {$contextName} folyóirathoz',
  'emails.reviewerRegister.body' => 'Tisztelt Szakértő!<br />
<br />
Ezúton értesítjük, hogy a(z) {$contextName} folyóirat regisztrálta szakmai lektorként, mert a jövőben szeretnénk lektorálási kéréssel fordulni Önhöz, amennyiben szakértelmének megfelelő kézirat érkezik. 
Ha lektori felkérést kap, lehetősége lesz megnézni a kérdéses cikk címét és absztraktját, majd elfogadhatja vagy elutasíthatja a felkérést. Bármikor kérheti, hogy távolítsuk el a szakmai lektorok listájáról.<br />
<br />
Létrehoztuk felhasználónevét és jelszavát, mellyel beléphet a folyóirat weboldalára. <br />
<br />
Felhasználónév: {$username}<br />
Jelszó: {$password}<br />
<br />
Belépést követően frissítheti profilját, beleértve a megadott szakterületeket is.<br />
<br />
Üdvözlettel,<br />
{$principalContactSignature}',
  'emails.reviewerRegister.description' => 'Ez az email az újonnan regisztrált lektoroknak kerül kiküldésre, köszöntésként és a felhasználónevük, jelszavuk elküldéséhez.',
  'emails.publishNotify.subject' => 'Új folyóiratszám jelent meg',
  'emails.publishNotify.body' => 'Kedves Olvasók!<br />
<br />
Megjelent a(z) {$contextName} folyóirat legújabb online száma, mely elérhető a {$contextUrl} címen. Tekintse át tartalomjegyzékünket, keresse fel oldalunkat érdeklődési körének megfelelő cikkeink megtekintéséhez.<br />
<br />
Köszönjük, hogy érdeklődik folyóiratunk iránt,<br />
{$editorialContactSignature}',
  'emails.publishNotify.description' => 'Ez az email a regisztrált felhasználóknak kerül kiküldésre, a "Felhasználók értesítése" linken keresztül a Szerkesztői főoldalról. Az új számokról értesíti a felhasználókat, és arra invitálja, hogy a kapott URL-en keressék fel az online folyóiratot.',
  'emails.lockssExistingArchive.subject' => 'Folyóirat archiválásának kérése a(z) {$contextName} számára',
  'emails.lockssExistingArchive.body' => 'Tisztelt Repozitórium üzemeltető!<br />
<br />
Az Önök intézményének munkatársa, [tag neve] a(z) {$contextName} &amp;lt;{$contextUrl}&amp;gt;, folyóiratnál [betöltött pozíció] pozíciót tölt be. A folyóirat egy LOCKSS (Lots of Copies Keep Stuff Safe) kompatibilis archívumot kíván létrehozni, az Önök könyvtárával és más könyvtárakkal is együttműködve.<br />
<br />
[A folyóirat rövid leírása]<br />
<br />
A folyóiratunk LOCKSS Publisher Manifest weboldalának URL címe:  {$contextUrl}/gateway/lockss<br />
<br />
Megértjük, ha korábban már csatlakozott a LOCKSS-hoz. Ha bármilyen további adattal tudunk szolgálni, hogy folyóiratunkat integrálják az Önök LOCKSS rendszerébe, örömmel válaszolunk kérdéseikre.<br />
<br />
Köszönettel,<br />
{$principalContactSignature}',
  'emails.lockssExistingArchive.description' => 'Ez az email a LOCKSS archívum üzemeltetőjét kéri, hogy fontolja meg a folyóirat bevonását az archívumába. Megadja az URL-jét a folyóirat LOCKSS Publisher Manifest oldalának.',
  'emails.lockssNewArchive.subject' => 'Archiválás kérése a(z) {$contextName} folyóirat számára',
  'emails.lockssNewArchive.body' => 'Tisztelt Repozitórium üzemeltető!<br />
<br />
Az Önök intézményének munkatársa, [tag neve] a {$contextName} &amp;lt;{$contextUrl}&amp;gt;, folyóiratnál [betöltött pozíció] pozíciót tölt be. A folyóirat egy LOCKSS (Lots of Copies Keep Stuff Safe) kompatibilis archívumot kíván létrehozni, az Önök könyvtárával és más könyvtárakkal is együttműködve.<br />
<br />
[A folyóirat rövid leírása]<br />
<br />
A LOCKSS Program &amp;lt;http://lockss.org/&amp;gt;, egy nemzetközi könyvtár/kiadói kezdeményezés, mely működő példája az osztott megőrzést és archiválást biztosító repozitóriumoknak. Az egyszerű, mindennapi személyi számítógépen futó szoftver ingyenes; a rendszer könnyen online üzembe helyezhető, kevés karbantartást igényel.<br />
<br />
Annak érdekében, hogy segítse a folyóirat archiválását, kérjük legyen tagja a LOCKSS közösségnek, és segítsen összegyűjteni, megőrizni az intézményben készült tudományos műveket és másokat is világszerte. További információért, a rendszer működésének további ismertetéséért keresse fel a LOCKSS oldalát. Várjuk visszajelzését a közös munkával és a folyóirat archiválásával kapcsolatban. <br />
<br />
Köszönettel,<br />
{$principalContactSignature}',
  'emails.lockssNewArchive.description' => 'Ez az email arra bátorítja a címzettet, hogy vegyen részt a LOCKSS kezdeményezésben és vonja be folyóiratát az archivumba. Információt nyújt a LOCKSS kezdeményezésről és a kapcsolódási lehetőségekről.',
  'emails.submissionAck.subject' => 'Cikk beküldésének visszaigazolása',
  'emails.submissionAck.body' => 'Tisztelt {$authorName}!<br />
<br />
Köszönjük, hogy benyújtotta a(z) &quot;{$submissionTitle}&quot; című kéziratot a(z) {$contextName} folyóirathoz. Az általunk használt online folyóiratkezelő rendszerrel, lehetősége lesz végigkövetni a cikk szerkesztési folyamatát, amennyiben bejelentkezik a folyóirat oldalára:<br />
<br />
Kézirat URL:  {$submissionUrl}<br />
Felhasználónév: {$authorUsername}<br />
<br />
Ha bármilyen kérdése merülne fel, kérjük vegye fel a szerkesztőséggel a kapcsolatot. Köszönjük, hogy a munkájának megjelentetéséhez folyóiratunkat választotta.<br />
<br />
{$editorialContactSignature}',
  'emails.submissionAck.description' => 'Ez az email, ha be van kapcsolva, akkor automatikusan kiküldésre kerül a Szerzőnek, amikor a folyóirathoz beküldte kéziratát. Információt ad a benyújtási folyamatról és megköszöni a Szerzőnek a benyújtott kéziratot.',
  'emails.submissionAckNotUser.subject' => 'Értesítés cikk beküldéséről',
  'emails.submissionAckNotUser.body' => 'Tisztelt Szerző!<br />
<br />
Ezúton értesítjük, hogy {$submitterName} benyújtotta a(z) {$contextName} folyóirathoz a(z) &quot;{$submissionTitle}&quot; című kéziratot.<br />
<br />
Köszönjük, hogy munkájuk publikálásához folyóiratunkat választották.<br />
<br />
Ha a szerkesztési munkafolyamat során segítségére lehetünk, kérjük forduljon szerkesztőségünkhöz.<br />
<br />
{$editorialContactSignature}',
  'emails.submissionAckNotUser.description' => 'Ha be van kapcsolva ez az email, akkor automatikusan értesítést küld azoknak a Szerzőknek, akik a benyújtás idején nem szerepelnek aktívan ennek a beküldésnek a munkafolyamatában.',
  'emails.editorAssign.subject' => 'Szerkesztői megbízás',
  'emails.editorAssign.body' => 'Tisztelt {$editorialContactName}!<br />
<br />
A(z) {$contextName} folyóirathoz benyújtott &quot;{$submissionTitle},&quot; című kézirat Önhöz lett rendelve, hogy Rovatszerkesztőként kövesse végig a szerkesztési folyamatot.<br />
<br />
Kézirat URL: {$submissionUrl}<br />
Felhasználónév: {$editorUsername}<br />
<br />
Köszönettel,<br />
{$editorialContactSignature}',
  'emails.editorAssign.description' => 'Ez az email értesíti a Rovatszerkesztőt, hogy a Szerkesztő rászignálta a beküldött anyag nyomon követését valamint felügyeletét a teljes szerkesztési fázisban. Információt ad a kéziratról és arról, hogyan férhet hozzá a folyóirat oldalán.',
  'emails.reviewRequest.subject' => 'Cikk lektorálás kérése',
  'emails.reviewRequest.body' => 'Tisztelt {$reviewerName}!<br />
<br />
A(z) {$contextName} szerkesztőbizottsága nevében szeretném felkérni a(z) &quot;{$submissionTitle},&quot; című kézirat szakmai lektorálására, melynek absztraktját levelünk végén olvashatja.<br />
<br />
Kérem, jelezze a folyóirat weboldalán ({$contextUrl}) legkésőbb {$responseDueDate}-ig, hogy vállalja-e a lektorálást. Amennyiben vállalja a bírálatot, ugyanitt rögzítheti véleményét és javaslatait. <br />A szakmai lektorálás határideje: {$reviewDueDate}.<br />
<br />
Amennyiben vállalná a szakmai lektorálást, de a jelzett határidő nem megfelelő, kérjük jelezze emailben.<br />
<br />
Ha nincs felhasználóneve és jelszava a folyóirat weboldalához vagy elfelejtette azt, az alábbi linken emlékeztetőt kérhet. (Jelszavát és felhasználónevét emailben küldjük el.)<br />
{$passwordResetUrl}<br />
<br />
A kézirat elérhető az alábbi URL címen:  {$submissionReviewUrl}<br />
<br />
Köszönettel,<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequest.description' => 'Ez az emailt a Rovatszerkesztő küldi a Lektornak, megkérve, hogy vállalja el, vagy, ha nem alkalmas, akkor utasítsa el a beküldött anyag lektorálási feladatát. Illetve információt ad a beküldött anyagról, úgymint cím, absztrakt, a lektori vélemény határideje, valamint hogyan lehet hozzáférni magához az anyaghoz. Ezt az üzenetet akkor kell használni, ha az általános lektorálási folyamat van kiválasztva a folyóirat menedzselése részben  > Beállítások > Munkafolyamat > Szakmai lektorálás. (Lásd még REVIEW_REQUEST_ATTACHED.)',
  'emails.reviewRequestRemindAuto.subject' => 'Cikk lektorálás kérése',
  'emails.reviewRequestRemindAuto.body' => 'Tisztelt {$reviewerName}!<br />
<br />
Értesítjük, hogy a(z) {$contextName} folyóirathoz benyújtott &quot;{$submissionTitle},&quot; című kézirat lektorálására szóló felkérésünk elfogadásának határideje ({$responseDueDate}) lejárt. <br />
<br />
A benyújtott anyag absztraktja levelünk végén olvasható.<br />
<br />
Kérjük, mielőbb lépjen be a rendszerbe és fogadja el vagy utasítsa vissza felkérésünket. Amennyiben vállalja a bírálatot, ugyanitt töltheti le a cikk szövegét és rögzítheti véleményét és javaslatait. <br />
A weboldal címe: {$contextUrl} <br />
<br />
A szakmai lektorálás határideje: {$reviewDueDate}.<br />
<br />
Ha nincs felhasználóneve és jelszava a folyóirat weboldalához vagy elfelejtette azt, az alábbi linken emlékeztetőt kérhet. Jelszavát és felhasználónevét emailben küldjük el.{$passwordResetUrl}<br />
<br />
Kézirat URL: {$submissionReviewUrl}<br />
<br />
Üdvözlettel,<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestRemindAuto.description' => 'Ezt az emailt a rendszer automatikusan küldi, amikor a szakmai lektorálásra történő felkérésnek elfogadási határideje lejár (lásd Lektorálási beállítások részben a Beállítások > Munkafolyamat > Szakmai lektorálás) és az egykattintásos lektori hozzáférés tiltott. Az ütemezett feladatok futását engedélyezni kell és be kell állítani (lásd az oldal konfigurációs fájlját).',
  'emails.reviewRequestOneclick.subject' => 'Cikk lektorálás kérése',
  'emails.reviewRequestOneclick.body' => 'Tisztelt {$reviewerName}!<br />
<br />
A(z) {$contextName} szerkesztőbizottsága nevében a szeretném felkérni a(z) &quot;{$submissionTitle},&quot; című kézirat szakmai lektorálására, melynek absztraktját levelünk végén olvashatja.<br />
<br />
Kérem, lépjen be és jelezze a folyóirat weboldalán legkésőbb {$responseDueDate}-ig, hogy vállalja-e a lektorálást. Amennyiben vállalja a bírálatot, ugyanitt rögzítheti véleményét és javaslatait.<br />
<br />
A szakmai lektorálás határideje: {$reviewDueDate}.<br />
<br />
Amennyiben vállalná a szakmai lektorálást, de a jelzett határidő nem megfelelő, kérjük jelezze emailben.<br />
<br />
A kézirat elérhető az alábbi URL címen:  {$submissionReviewUrl}<br />
<br />
Üdvözlettel,<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestOneclick.description' => 'Ez az emailt a Rovatszerkesztő küldi a Szakmai Lektornak, megkérve, hogy vállalja el, vagy, ha nem alkalmas, akkor utasítsa el a beküldött anyag lektori feladatát. Információt ad a beküldött anyagról, úgymint cím, absztrakt, a lektorálás határideje, valamint hogyan lehet hozzáférni magához az anyaghoz. Ezt az üzenetet akkor kell használni, ha az általános lektorálási folyamat van kiválasztva a folyóirat menedzselése részben  > Beállítások > Munkafolyamat > Szakmai lektorálás, és az egykattintásos lektori hozzáférés engedélyezett.',
  'emails.reviewRequestRemindAutoOneclick.subject' => 'Cikk lektorálás kérése',
  'emails.reviewRequestRemindAutoOneclick.body' => 'Tisztelt {$reviewerName}!<br />
<br />
Értesítjük, hogy a(z) {$contextName} folyóirathoz benyújtott &quot;{$submissionTitle},&quot; című kézirat lektorálására szóló felkérésünk elfogadásának határideje ({$responseDueDate}) lejárt. <br />
<br />
A benyújtott kézirat absztraktja levelünk végén olvasható.<br />
<br />
Kérjük, mielőbb lépjen be a rendszerbe és fogadja el vagy utasítsa vissza felkérésünket. Amennyiben vállalja a bírálatot, ugyanitt töltheti le a cikk szövegét és rögzítheti véleményét és javaslatait. <br />
<br />
A szakmai lektorálás határideje: {$reviewDueDate}.<br />
<br />
Kézirat URL: {$submissionReviewUrl}<br />
<br />
Köszönettel,<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestRemindAutoOneclick.description' => 'Ezt az emailt a rendszer automatikusan küldi, amikor a szakmai lektorálásra történő felkérésnek elfogadási határideje lejár (lásd Lektori beállítások részben a Beállítások > Munkafolyamat > Szakmai lektorálás) és az egykattintásos lektori hozzáférés tiltott. Az ütemezett feladatok futását engedélyezni kell és be kell állítani (lásd az oldal konfigurációs fájlját).',
  'emails.reviewRequestAttached.subject' => 'Cikk lektorálás kérése',
  'emails.reviewRequestAttached.body' => 'Tisztelt {$reviewerName}!<br />
<br />
Szeretném felkérni a(z) &quot;{$submissionTitle},&quot; című kézirat szakmai lektorálására.<br />
A lektorálási útmutatót levelünk végén, a kéziratot pedig csatoltan találja. A kézirattal kapcsolatos szakértői véleményét és javaslatait, kérem emailben küldje meg részemre {$reviewDueDate}-ig.<br />
<br />
Kérem, jelezze válasz emailben legkésőbb {$responseDueDate}-ig, hogy vállalja-e a lektorálást.<br />
<br />
Együttműködését előre is köszönjük.<br />
<br />
Köszönettel,<br />
{$editorialContactSignature}<br />
<br />
<br />
Lektorálási útmutató:<br />
<br />
{$reviewGuidelines}<br />
',
  'emails.reviewRequestAttached.description' => 'Ezt az emailt a Rovatszerkesztő küldi a Lektornak, megkérve, hogy vállalja el, vagy, ha nem alkalmas, akkor utasítsa el a beküldött anyag lektori feladatát. A levél csatoltan tartalmazza a kéziratot. Ez az üzenet akkor kerül használatra, ha az email csatolmány lektorálási folyamat van kiválasztva a folyóirat menedzselése részben > Beállítások > Munkafolyamat > Szakmai lektorálás. (Máskülönben lásd a REVIEW_REQUEST-et.)',
  'emails.reviewRequestSubsequent.subject' => 'Cikk lektorálás kérése',
  'emails.reviewRequestSubsequent.body' => 'Tisztelt {$reviewerName}!<br />
<br />
A(z) {$contextName} szerkesztőbizottsága nevében szeretném felkérni a(z) &quot;{$submissionTitle},&quot; című kézirat szakmai lektorálására, melyet a szerző(k) átdolgozást követően ismét benyújtottak publikálásra.<br />
A cikk absztraktját levelünk végén olvashatja.<br />
<br />
Kérjük, jelentkezzen be a folyóirat weboldalára {$responseDueDate}-ig és jelezze, hogy vállalja-e a lektorálást! Amennyiben vállalja a bírálatot, ugyanitt töltheti le a cikk szövegét és rögzítheti véleményét és javaslatait.<br />
A weboldal elérhetősége: {$contextUrl}<br />
<br />
A lektorálás határideje: {$reviewDueDate}.<br />
<br />
Ha nincs felhasználóneve és jelszava a folyóirat oldalához vagy elfelejtette azt, akkor az alábbi linken emlékeztetőt kérhet. Jelszavát és felhasználónevét emailben fogjuk elküldeni. {$passwordResetUrl}<br />
<br />
Kézirat URL: {$submissionReviewUrl}<br />
<br />
Köszönettel,<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestSubsequent.description' => 'Ezt az emailt a Rovatszerkesztő küldi a Szakmai Lektornak, megkérve, hogy vállalja el, vagy, ha nem alkalmas, akkor utasítsa el a beküldött anyag lektorálási feladatát a második vagy további lektorálási körökben. Ez információt ad a beküldött anyagról, úgymint cím, absztrakt, a lektorálási határideje, valamint hogyan lehet hozzáférni magához az anyaghoz. Ezt az üzenetet akkor kell használni, ha az általános lektorálási folyamat van kiválasztva a folyóirat menedzselése részben > Beállítások > Munkafolyamat > Szakmai lektorálás. (Lásd még REVIEW_REQUEST_ATTACHED_SUBSEQUENT.)>',
  'emails.reviewRequestOneclickSubsequent.subject' => 'Cikk lektorálás kérése',
  'emails.reviewRequestOneclickSubsequent.body' => 'Tisztelt {$reviewerName}!<br />
<br />
A(z) {$contextName} szerkesztőbizottsága nevében szeretném felkérni a(z) &quot;{$submissionTitle},&quot; című kézirat szakmai lektorálására, melyet a szerző(k) átdolgozást követően ismét benyújtottak publikálásra.<br />
A cikk absztraktját levelünk végén olvashatja. <br />
<br />
Kérjük, jelentkezzen be a folyóirat weboldalára {$responseDueDate}-ig és jelezze, hogy vállalja-e a lektorálást! Amennyiben vállalja a bírálatot, ugyanitt töltheti le a cikk szövegét és rögzítheti véleményét és javaslatait.<br />
<br />
A lektorálás határideje: {$reviewDueDate}.<br />
<br />
Kézirat URL: {$submissionReviewUrl}<br />
<br />
Köszönettel,<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestOneclickSubsequent.description' => 'Ezt az emailt a Rovatszerkesztő küldi a Szakmai Lektornak, megkérve, hogy vállalja el, vagy, ha nem alkalmas, akkor utasítsa el a beküldött anyag lektorálási feladatát a második vagy további lektorálási körökben. Ez információt ad a beküldött anyagról, úgymint cím, absztrakt, a lektorálás határideje, valamint hogyan lehet hozzáférni magához az anyaghoz. Ezt az üzenetet akkor kell használni, ha az általános lektorálási folyamat van kiválasztva a folyóirat menedzselése részben > Beállítások > Munkafolyamat > Szakmai lektorálás, és az egykattintásos lektorálás engedélyezett.',
  'emails.reviewRequestAttachedSubsequent.subject' => 'Cikk lektorálás kérése',
  'emails.reviewRequestAttachedSubsequent.body' => 'Tisztelt {$reviewerName}!<br />
<br />
A(z) {$contextName} folyóirathoz érkezett &quot;{$submissionTitle},&quot; című kézirat módosított változatának lektorálására szeretném felkérni. <br />
<br />
Folyóiratunk lektorálási irányelveit megtekintheti a levél végén, a benyújtott cikket pedig csatoltan küldjük. A kézirattal kapcsolatos szakértői véleményét és javaslatait kérem emailben küldje meg részemre {$reviewDueDate}-ig.<br />
<br />
Kérem, jelezze válasz emailben legkésőbb {$responseDueDate}-ig, hogy vállalja-e a lektorálást.<br />
<br />
Üdvözlettel,<br />
{$editorialContactSignature}<br />
<br />
<br />
Lektorálási irányelvek:<br />
<br />
{$reviewGuidelines}<br />
',
  'emails.reviewRequestAttachedSubsequent.description' => 'Ez az emailt a Rovatszerkesztő küldi a Lektornak, megkérve, hogy vállalja el, vagy, ha nem alkalmas, akkor utasítsa el a beküldött anyag lektorálási feladatát a második vagy további lektorálási körökben. Ez csatoltan tartalmazza a kéziratot is. Ezt az üzenetet akkor kell használni, ha az email csatolásos lektorálási folyamat van engedélyezve a folyóirat menedzselése részben > Beállítások > Munkafolyamat > Szakmai lektorálás. (Lásd még REVIEW_REQUEST_SUBSEQUENT.)',
  'emails.reviewCancel.subject' => 'Lektori felkérés visszavonása',
  'emails.reviewCancel.body' => 'Tisztelt {$reviewerName}!<br />
<br />
Ezúton visszavonjuk felkérésünket a(z) {$contextName} folyóirathoz beküldött &quot;{$submissionTitle},&quot; című kézirat cikk lektorálására. Elnézést kérünk az esetleges kellemetlenségért és bízunk benne, hogy a folyóirat lektorálási feladatai kapcsán még dolgozhatunk együtt.<br />
<br />
Üdvözlettel,<br />
{$editorialContactSignature}',
  'emails.reviewCancel.description' => 'Ez az emailt a Rovatszerkesztő küldi a Lektornak, akihez lektorálás lett rendelve, jelezve neki, hogy a feladatot mégsem kell végrehajtania.',
  'emails.reviewConfirm.subject' => 'Lektori felkérés elfogadása',
  'emails.reviewConfirm.body' => 'Tisztelt Szerkesztők!<br />
<br />
Vállalom a(z) {$contextName} folyóirathoz beküldött &quot;{$submissionTitle},&quot; című kézirat lektorálását. Köszönöm a felkérést, a bírálatot a megadott határidőig ({$reviewDueDate}) elvégzem.<br />
<br />
Üdvözlettel,<br />
{$reviewerName}',
  'emails.reviewConfirm.description' => 'Ezt az emailt a Szakmai Lektor küldi a Rovatszerkesztőnek a lektori felkérésre válaszolva és jelezve, hogy a szakmai lektorálási munkát elvállalja és a megadott határidőig elvégzi.',
  'emails.reviewDecline.subject' => 'Lektorálási felkérés elutasítása',
  'emails.reviewDecline.body' => 'Tisztelt Szerkesztők!<br />
<br />
Sajnálom, de nem tudom elvállalni a(z) {$contextName} folyóirathoz beküldött &quot;{$submissionTitle},&quot; című kézirat lektorálását.  Köszönöm a megtisztelő felkérést, kérem keressenek más alkalommal.<br />
<br />
Üdvözlettel,<br />
{$reviewerName}',
  'emails.reviewDecline.description' => 'Ezt az emailt a Szakmai Lektor küldi a Rovatszerkesztőnek a lektori felkérésre válaszolva és jelezve, hogy a lektorálási munkát nem tudja elvállalni.',
  'emails.reviewAck.subject' => 'Szakmai lektorálás elfogadása',
  'emails.reviewAck.body' => 'Tisztelt {$reviewerName}!<br />
<br />
Köszönjük, hogy elkészítette a(z) {$contextName} folyóirathoz beküldött &quot;{$submissionTitle},&quot; című kézirat szakmai bírálatát.<br />
<br />
Üdvözlettel,<br />
{$editorialContactSignature}',
  'emails.reviewAck.description' => 'Ezt az emailt a Rovatszerkesztő küldi válaszul a kész szakértői véleményre és megköszöni a Szakmai Lektornak az együttműködést.',
  'emails.reviewRemind.subject' => 'Emlékeztető cikk szakmai lektorálásáról',
  'emails.reviewRemind.body' => 'Tisztelt {$reviewerName}!<br />
<br />
Értesítjük, hogy a(z) {$contextName} folyóirat &quot;{$submissionTitle},&quot; című cikkének lektorálási határideje ({$reviewDueDate}) lejárt.<br />
Kérjük mielőbb készítse el szakmai bírálatát.<br />
<br />
Kézirat URL: {$submissionReviewUrl}<br />
<br />
Ha elfelejtette felhasználónevét vagy jelszavát, az alábbi linken emlékeztetőt kérhet. (Jelszavát és felhasználónevét emailben küldjük el.)<br />
{$passwordResetUrl}<br />
<br />
Kérjük, határidő módosításának ügyében vegye fel a kapcsolatot a szerkesztőséggel!<br />
<br />
Üdvözlettel,<br />
{$editorialContactSignature}',
  'emails.reviewRemind.description' => 'Ezt az emailt a Rovatszerkesztő küldi a Szakmai Lektornak, hogy emlékeztesse a lektorálási határidőre.',
  'emails.reviewRemindOneclick.subject' => 'Emlékeztető cikk szakmai lektorálásáról',
  'emails.reviewRemindOneclick.body' => 'Tisztelt {$reviewerName}!<br />
<br />
Értesítjük, hogy a(z) {$contextName} folyóirat &quot;{$submissionTitle},&quot; című cikkének lektorálási határideje ({$reviewDueDate}) lejárt.<br />
Kérjük mielőbb készítse el szakmai bírálatát.<br />
<br />
Kézirat URL: {$submissionReviewUrl}<br />
<br />
Kérjük, határidő módosításának ügyében vegye fel a kapcsolatot a szerkesztőséggel!<br />
<br />
Üdvözlettel,<br />
{$editorialContactSignature}',
  'emails.reviewRemindOneclick.description' => 'Ezt az emailt a Rovatszerkesztő küldi a Szakmai Lektornak, hogy emlékeztesse a lektorálási határidőre.',
  'emails.reviewRemindAuto.subject' => 'Automatikus emlékeztető cikk szakmai lektorálásáról',
  'emails.reviewRemindAuto.body' => 'Tisztelt {$reviewerName}!<br />
<br />
Értesítjük, hogy a(z) {$contextName} folyóirat &quot;{$submissionTitle},&quot; című cikkének lektorálási határideje ({$reviewDueDate}) lejárt.<br />
Kérjük mielőbb készítse el szakmai bírálatát.<br />
<br />
Ha elfelejtette felhasználónevét vagy jelszavát, az alábbi linken emlékeztetőt kérhet. (Jelszavát és felhasználónevét emailben küldjük el.)<br />
{$passwordResetUrl}<br />
<br />
Kézirat URL: {$submissionReviewUrl}<br />
<br />
Kérjük, határidő módosításának ügyében vegye fel a kapcsolatot a szerkesztőséggel!<br />
<br />
Üdvözlettel,<br />
{$editorialContactSignature}',
  'emails.reviewRemindAuto.description' => 'Ez az email automatikusan generált, amikor a lektorálási határidő lejár (lásd a Lektorálási beállításokat a Beállítások > Munkafolyamat > Szakmai lektorálás résznél) és az egykattintásos lektorálási hozzáférés nincs engedélyezve. Az ütemezett feladatokat engedélyezni és konfigurálni kell (lásd az oldal konfigurálást).',
  'emails.reviewRemindAutoOneclick.subject' => 'Automatikus emlékeztető cikk szakmai lektorálásáról',
  'emails.reviewRemindAutoOneclick.body' => 'Tisztelt {$reviewerName}!<br />
<br />
Értesítjük, hogy a(z) {$contextName} folyóirat &quot;{$submissionTitle},&quot; című cikkének lektorálási határideje ({$reviewDueDate}) lejárt.<br />
Kérjük mielőbb készítse el szakmai bírálatát.<br />
<br />
Kézirat URL: {$submissionReviewUrl}<br />
<br />
Kérjük, határidő módosításának ügyében vegye fel a kapcsolatot a szerkesztőséggel!<br />
<br />
Üdvözlettel,<br />
{$editorialContactSignature}',
  'emails.reviewRemindAutoOneclick.description' => 'Ez az email automatikusan kerül kiküldésre, amikor a lektorálási határidő lejárt (lásd a Lektorálási beállításokat a Beállítások > Munkafolyamat > Szakmai lektorálás résznél) és az egykattintásos lektorálási hozzáférés engedélyezett. Az ütemezett feladatokat engedélyezni és konfigurálni kell (lásd az oldal konfigurálást).',
  'emails.editorDecisionAccept.subject' => 'Szerkesztői döntés',
  'emails.editorDecisionAccept.body' => 'Tisztelt {$authorName}!<br />
<br />
Értesítjük, hogy a(z) {$contextName} folyóirathoz beküldött &quot;{$submissionTitle}&quot; című kézirata elfogadásra került.<br />
<br />
Üdvözlettel,<br />
{$editorialContactSignature}<br />',
  'emails.editorDecisionAccept.description' => 'Ezt az emailt a Szerkesztő vagy Rovatszerkesztő küldi a Szerzőnek jelezve, hogy a kézirattal kapcsolatos döntés "Kézirat elfogadva" megszületett.',
  'emails.editorDecisionSendToExternal.subject' => 'Szerkesztői döntés',
  'emails.editorDecisionSendToExternal.body' => 'Tisztelt {$authorName}!<br />
<br />
Értesítjük, hogy a(z) {$contextName} folyóirathoz beküldött &quot;{$submissionTitle}&quot; című cikkét szakmai lektorálásra elküldtük.<br />
<br />
A cikk URL: {$submissionUrl}<br />
<br />
Üdvözlettel,<br />
{$editorialContactSignature}<br />',
  'emails.editorDecisionSendToExternal.description' => 'Ez az email a Szerkesztőtől vagy a Rovatszerkesztőtől érkezik a Szerzőnek, hogy a cikkét a szerkesztőség külső szakmai lektorálásra küldte.',
  'emails.editorDecisionSendToProduction.subject' => 'Szerkesztői döntés',
  'emails.editorDecisionSendToProduction.body' => 'Tisztelt {$authorName}!<br />
<br />
A(z) &quot;{$submissionTitle},&quot; című kéziratának lektorálása befejeződött, megjelentetésre küldjük.<br />
<br />
A kézirat URL címe: {$submissionUrl}<br />
<br />
Üdvözlettel,<br />
{$editorialContactSignature}<br />',
  'emails.editorDecisionSendToProduction.description' => 'Ez az email a Szerkesztőtől vagy a Rovatszerkesztőtől érkezik a Szerzőnek, hogy a cikkét a szerkesztőség megjelentetésre továbbította.',
  'emails.editorDecisionRevisions.subject' => 'Szerkesztői döntés',
  'emails.editorDecisionRevisions.body' => 'Tisztelt {$authorName}!<br />
<br />
Értesítjük, hogy a(z) {$contextName} folyóirathoz beküldött &quot;{$submissionTitle}&quot; című cikkének átdolgozása szükséges.<br />
<br /> 
Üdvözlettel,<br />
{$editorialContactSignature}<br />',
  'emails.editorDecisionRevisions.description' => 'Ez az email a Szerkesztőtől vagy a Rovatszerkesztőtől érkezik a Szerzőnek, hogy a cikkével kapcsolatos döntés az "Átdolgozás szükséges".',
  'emails.editorDecisionResubmit.subject' => 'Szerkesztői döntés',
  'emails.editorDecisionResubmit.body' => 'Tisztelt {$authorName}!<br />
<br />
Értesítjük, hogy a(z) {$contextName} folyóirathoz beküldött &quot;{$submissionTitle}&quot; című cikkének új változatát szükséges benyújtani szakmai lektorálásra.<br />
<br /> 
Üdvözlettel,<br />
{$editorialContactSignature}<br />',
  'emails.editorDecisionResubmit.description' => 'Ez az email a Szerkesztőtől vagy a Rovatszerkesztőtől érkezik a Szerzőnek, hogy a cikkével kapcsolatos döntés az "Újrabenyújtás".',
  'emails.editorDecisionDecline.subject' => 'Szerkesztői döntés',
  'emails.editorDecisionDecline.body' => 'Tisztelt {$authorName}!<br />
<br />
Értesítjük, hogy a(z) {$contextName} folyóirathoz beküldött &quot;{$submissionTitle}&quot; című kézirata elutasításra került.<br />
<br /> 
Üdvözlettel,<br />
{$editorialContactSignature}<br />',
  'emails.editorDecisionDecline.description' => 'Ez az email a Szerkesztőtől vagy a Rovatszerkesztőtől érkezik a Szerzőnek, hogy a cikkével kapcsolatos döntés az "Elutasítás".',
  'emails.editorRecommendation.subject' => 'Szerkesztői javaslat',
  'emails.editorRecommendation.body' => 'Tisztelt {$editors}!<br />
<br />
A(z) {$contextName} folyóirathoz beküldött &quot;{$submissionTitle}&quot; című cikkel kapcsolatban javaslatunk: {$recommendation}<br />   
<br />
Üdvözlettel,<br />  
{$editorialContactSignature}<br />',
  'emails.editorRecommendation.description' => 'Ez az e-mail az ajánlatot tevő Szerkesztőtől vagy Rovatszerkesztőtől megy a döntést meghozó Szerkesztőkhöz vagy Rovatszerkesztőkhöz, értesítve őket a  kézirattal kapcsolatos végső javaslatról.',
  'emails.copyeditRequest.subject' => 'Technikai szerkesztés kérése',
  'emails.copyeditRequest.body' => 'Tisztelt {$participantName}!<br />
<br />
Kérjük, hogy végezze el a(z) &quot;{$submissionTitle}&quot; című cikk alábbi lépésekből álló technikai szerkesztési folyamatát a(z) {$contextName} folyóiratnál.<br />
1. Kattintson a kézirat URL címére alább.<br />
2. Nyissa meg a fájlt vagy fájlokat a Vázlatok között és végezze el a technikai szerkesztést. Ha szükséges, kezdeményezzen technikai szerkesztői párbeszédet.<br />
3. Mentse el a szerkesztett fájl(okat), és töltse fel a Szerkesztett részhez.<br />
4. Értesítse a Szerkesztőt, hogy elkészült minden fájllal és megkezdhető a megjelentetési fázis.<br />
<br />
{$contextName} URL: {$contextUrl}<br />
Kézirat URL címe: {$submissionUrl}<br />
Felhasználónév: {$participantUsername}<br />
<br />
Üdvözlettel,<br />
{$editorialContactSignature}',
  'emails.copyeditRequest.description' => 'Ezt az emailt a Rovatszerkesztő küldi a kézirat technikai szerkesztőjének, hogy felkérje a technikai szerkesztés munkájára. A levél információkat tartalmaz a kézirattal, illetve elérésével kapcsolatban.',
  'emails.layoutRequest.subject' => 'Tördelés kérése',
  'emails.layoutRequest.body' => 'Tisztelt {$participantName}!<br />
<br />
A(z) {$contextName} folyóirat &quot;{$submissionTitle}&quot; című kézirata tördelési munkára vár, mely a következő lépésekkel végezhető el.<br />
1. Kattintson a kézirat URL címére alább.<br />
2. Lépjen be a folyóirathoz és használja a megjelentetésre kész fájlokat a folyóirat szabályai szerinti tördelés elkészítéséhez.<br />
3. Töltse fel a megjelentetési formátumokat a Tördelési szakaszhoz.<br />
4. Értesítse a Szerkesztőt, hogy kész a tördelés, ehhez használja a Megjelentetési párbeszéd funkciót.<br />
<br />
{$contextName} URL: {$contextUrl}<br />
Kézirat URL címe: {$submissionLayoutUrl}<br />
Felhasználói név: {$participantUsername}<br />
<br />
Ha kérdése merülne fel, kérem keressen meg. Köszönöm a folyóiratnál végzett munkáját.<br />
<br />
Üdvözlettel,<br />
{$editorialContactSignature}',
  'emails.layoutRequest.description' => 'Ez az email a Rovatszerkesztőtől érkezik a Tördelőszerkesztőnek, jelezve, hogy a cikk tördelési munkájára őt jelölték ki. A levél információkat tartalmaz a kézirat elérésével kapcsolatban.',
  'emails.layoutComplete.subject' => 'A tördelt változat elkészült',
  'emails.layoutComplete.body' => 'Tisztelt {$editorialContactName}!<br />
<br />
A(z) &quot;{$submissionTitle},&quot; című kézirat tördelt változata elkészült a(z) {$contextName} folyóiratnál, és készen áll a korrektúrázásra.<br />
<br />
Ha kérdése merül fel, kérem, keressen meg.<br />
<br />
Üdvözlettel,<br />
{$participantName}',
  'emails.layoutComplete.description' => 'Ezt az emailt a Tördelőszerkesztő küldi a Rovatszerkesztőnek, értesítve, hogy a tördelési munka befejeződött.',
  'emails.emailLink.subject' => 'Cikkajánló',
  'emails.emailLink.body' => 'Engedje meg, hogy figyelmébe ajánljuk {$authorName} ({$year}): &quot;{$submissionTitle}&quot; cikkét, mely a(z) {$contextName} című folyóirat {$volume} kötetének {$number} számában jelent meg. Elérhető a &quot;{$articleUrl}&quot; címen.',
  'emails.emailLink.description' => 'Ez az email sablon a regisztrált olvasóknak kínál lehetőséget arra, hogy ajánlhassák másoknak az érdekesnek talált cikkeket. Ez az Olvasói eszközöknél érhető el és a Folyóirat menedzser engedélyezheti az Olvasói eszközök adminisztrációs oldalán.',
  'emails.subscriptionNotify.subject' => 'Előfizetési értesítő',
  'emails.subscriptionNotify.body' => 'Tisztelt {$subscriberName}!<br />
<br />
Ezúton tájékoztatjuk, hogy előfizetése aktiválásra került a(z) {$contextName} című folyóiratnál, a következő adatokkal:<br />
<br />
{$subscriptionType}<br />
<br />
Az előfizetőink számára hozzáférhető tartalmak eléréséhez, kérjük, jelentkezzen be felhasználónevével: &quot;{$username}&quot;<br />
<br />
Bejelentkezés után profil adatait és jelszavát bármikor megváltoztathatja.<br />
<br />
Ha intézményi előfizetése van, az intézmény felhasználóinak nem szükséges egyenként bejelentkezniük, mivel az előfizetéses tartalmakhoz közvetlenül hozzáférhetnek automatikus hitelesítés után.<br />
<br />
Ha kérdése merülne fel, kérjük forduljon szerkesztőségünkhöz.<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionNotify.description' => 'Ez az email értesíti a regisztrált olvasót, hogy a Menedzser előfizetési fiókot hozott létre számára. A levél tartalmazza  a folyóirat URL címét és instrukciókat a hozzáféréshez.',
  'emails.openAccessNotify.subject' => 'Új folyóiratszám szabadon hozzáférhető',
  'emails.openAccessNotify.body' => 'Tisztelt Olvasó!<br />
<br />
A(z) {$contextName} folyóirat nemrég új számot tett szabadon hozzáférhetővé, melyet a következő linken tekinthet meg: {$contextUrl}<br />
<br />
Üdvözlettel,<br />
{$editorialContactSignature}',
  'emails.openAccessNotify.description' => 'Ez az email azoknak a regisztrált olvasóknak szól, akik értesítést kértek korábban a nyilvánossá tett számokról.',
  'emails.subscriptionBeforeExpiry.subject' => 'Értesítés előfizetés lejáratáról',
  'emails.subscriptionBeforeExpiry.body' => 'Tisztelt {$subscriberName}!<br />
<br />
Előfizetése a(z) {$contextName} folyóiratnál hamarosan lejár.<br />
<br />
{$subscriptionType}<br />
A lejárat dátuma: {$expiryDate}<br />
<br />
Előfizetésének meghosszabításához, kérjük látogasson el folyóiratunk weboldalára. A rendszerbe felhasználónevével tud bejelentkezni: &quot;{$username}&quot;<br />
<br />
Ha kérdése merülne fel, kérjük forduljon szerkesztőségünkhöz.<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionBeforeExpiry.description' => 'Ezt az email értesítést azok az előfizetők kapják, akiknek hamarosan lejár előfizetésük. A levél tartalmazza a folyóirat URL címét és a hozzáféréshez instrukciókat.',
  'emails.subscriptionAfterExpiry.subject' => 'Előfizetése lejárt',
  'emails.subscriptionAfterExpiry.body' => 'Tisztelt {$subscriberName}!<br />
<br />
Előfizetése a(z) {$contextName} folyóiratnál lejárt.<br />
<br />
{$subscriptionType}<br />
Lejárat dátuma: {$expiryDate}<br />
<br />
Előfizetése megújításához, kérjük keresse fel folyóiratunk weboldalát. A rendszerbe felhasználónevével tud bejelentkezni: &quot;{$username}&quot;<br />
<br />
Ha kérdése merülne fel, kérjük forduljon szerkesztőségünkhöz.<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionAfterExpiry.description' => 'Ez az email azoknak az előfizetőknek megy, akiknek lejárt az előfizetésük. A levél tartalmazza a folyóirat URL címét és a hozzáféréshez instrukciókat.',
  'emails.subscriptionAfterExpiryLast.subject' => 'Előfizetése lejárt',
  'emails.subscriptionAfterExpiryLast.body' => 'Tisztelt {$subscriberName}!<br />
<br />
Előfizetése a(z) {$contextName} folyóiratnál lejárt.<br />
<br />
{$subscriptionType}<br />
Lejárat dátuma: {$expiryDate}<br />
<br />
Előfizetése megújításához, kérjük, keresse fel folyóiratunk weboldalát. A  rendszerbe felhasználónevével tud bejelentkezni: &quot;{$username}&quot;<br />
<br />
Ha kérdése merülne fel, kérjük forduljon szerkesztőségünkhöz.<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionAfterExpiryLast.description' => 'Ez az email értesíti az előfizetőt, hogy lejárt az előfizetése. A levél tartalmazza a folyóirat URL címét és a hozzáféréshez instrukciókat.',
  'emails.subscriptionPurchaseIndl.subject' => 'Előfizetés vásárlás: Egyéni',
  'emails.subscriptionPurchaseIndl.body' => 'Egyéni előfizetést vásároltak online a(z) {$contextName} folyóirathoz, a következő adatokkal.<br />
<br />
Előfizetés típusa:<br />
{$subscriptionType}<br />
<br />
Felhasználó:<br />
{$userDetails}<br />
<br />
Tagsági információ (ha élérhető):<br />
{$membership}<br />
<br />
Az előfizetés megtekintéséhez vagy szerkesztéséhez, kérjük, keresse fel a következő címet.<br />
<br />
Előfizetési URL cím: {$subscriptionUrl}<br />
',
  'emails.subscriptionPurchaseIndl.description' => 'Ez az email az előfizetés menedzsert értesíti online vásárolt egyéni előfizetésekről. Összefoglaló információt és gyorslinket biztosít a megvásárolt előfizetéshez.',
  'emails.subscriptionPurchaseInstl.subject' => 'Előfizetés vásárlás: Intézményi',
  'emails.subscriptionPurchaseInstl.body' => 'Intézményi előfizetést vásároltak online a(z) {$contextName} folyóirathoz, a következő adatokkal. Az előfizetés aktiválásához, kérjük, keresse fel a megadott Előfizetési URL-t, és állítsa \'Aktív\' állapotba az előfizetés státuszát.<br />
<br />
Előfizetés típus:<br />
{$subscriptionType}<br />
<br />
Intézmény:<br />
{$institutionName}<br />
{$institutionMailingAddress}<br />
<br />
Domain (ha elérhető):<br />
{$domain}<br />
<br />
IP tartomány (ha elérhető):<br />
{$ipRanges}<br />
<br />
Kapcsolattartó:<br />
{$userDetails}<br />
<br />
Tagsági információ (ha elérhető):<br />
{$membership}<br />
<br />
Az előfizetés megtekintéséhez vagy szerkesztéséhez, kérjük, keresse fel a következő címet.<br />
<br />
Előfizetési URL cím: {$subscriptionUrl}<br />
',
  'emails.subscriptionPurchaseInstl.description' => 'Az email az előfizetés menedzsert értesíti online vásárolt intézményi előfizetésekről. Összefoglaló információt és gyorslinket biztosít a megvásárolt előfizetéshez.',
  'emails.subscriptionRenewIndl.subject' => 'Előfizetés megújítása: Egyéni',
  'emails.subscriptionRenewIndl.body' => 'Egyéni előfizetést újítottak meg a(z) {$contextName} folyóiratnál, a következő adatokkal.<br />
<br />
Előfizetés típus:<br />
{$subscriptionType}<br />
<br />
Felhasználó:<br />
{$userDetails}<br />
<br />
Tagsági információ (ha elérhető):<br />
{$membership}<br />
<br />
Az előfizetés megtekintéséhez vagy szerkesztéséhez, kérjük keresse fel a következő címet.<br />
<br />
Előfizetés URL címe: {$subscriptionUrl}<br />
',
  'emails.subscriptionRenewIndl.description' => 'Ez az email az előfizetés menedzsert értesíti az online megújított egyéni előfizetésekről. Összefoglaló információt és gyorslinket biztosít a megvásárolt előfizetéshez.',
  'emails.subscriptionRenewInstl.subject' => 'Előfizetés megújítása: Intézményi',
  'emails.subscriptionRenewInstl.body' => 'Intézményi előfizetést újítottak meg a(z) {$contextName} folyóiratnál, a következő adatokkal.<br />
<br />
Előfizetés típus:<br />
{$subscriptionType}<br />
<br />
Intézmény:<br />
{$institutionName}<br />
{$institutionMailingAddress}<br />
<br />
Domain (ha elérhető):<br />
{$domain}<br />
<br />
IP tartomány (ha elérhető):<br />
{$ipRanges}<br />
<br />
Kapcsolattartó:<br />
{$userDetails}<br />
<br />
Tagsági információ (ha elérhető):<br />
{$membership}<br />
<br />
Az előfizetés megtekintéséhez vagy szerkesztéséhez, kérjük, keresse fel a következő címet.<br />
<br />
Előfizetés URL címe: {$subscriptionUrl}<br />
',
  'emails.subscriptionRenewInstl.description' => 'Az email az Előfizetés Menedzsert értesíti az online megújított intézményi előfizetésekről. Összefoglaló információt és gyorslinket biztosít a megvásárolt előfizetéshez.',
  'emails.citationEditorAuthorQuery.subject' => 'Idézettség szerkesztés',
  'emails.citationEditorAuthorQuery.body' => 'Tisztelt {$authorFirstName}!<br />
<br />
Kérjük, adja meg a megfelelő idézettség információt, vagy igazolja annak helyességét a(z) {$submissionTitle} cikkben szereplő hivatkozásához:<br />
<br />
{$rawCitation}<br />
<br />
Köszönettel,<br />
{$userFirstName}<br />
Technikai szerkesztő, {$contextName}<br />
',
  'emails.citationEditorAuthorQuery.description' => 'Ez az email lehetővé teszi, hogy a technikai szerkesztők további információkat kérjenek a szerzőktől.',
  'emails.revisedVersionNotify.subject' => 'Átdolgozott változat feltöltve',
  'emails.revisedVersionNotify.body' => 'Tisztelt Szerkesztő!<br />
<br />
A szerző, {$authorName} által feltöltésre került a(z) &quot;{$submissionTitle}&quot; átdolgozott változata.<br />
<br />
Kézirat URL: {$submissionUrl}<br />
<br />
Üdvözlettel,<br />
{$editorialContactSignature}',
  'emails.revisedVersionNotify.description' => 'Ez az email automatikus értesítést küld a kijelölt szerkesztőnek, amikor a szerző a cikk átdolgozott változatát feltöltötte.',
  'emails.notificationCenterDefault.subject' => 'Üzenet a(z) {$contextName} folyóirattól',
  'emails.notificationCenterDefault.body' => 'Kérjük, adja meg itt üzenete tartalmát.',
  'emails.notificationCenterDefault.description' => 'Alapértelmezett (üres) üzenet sablon.',
  'emails.editorDecisionInitialDecline.subject' => 'Szerkesztői döntés',
  'emails.editorDecisionInitialDecline.body' => '
			Tisztelt {$authorName}!<br />
<br />
Értesítjük, hogy a(z) {$contextName} folyóirathoz beküldött &quot;{$submissionTitle}&quot; című kézirata elutasításra került.<br />
<br /> 
Üdvözlettel,<br />
{$editorialContactSignature}<br />',
  'emails.editorDecisionInitialDecline.description' => 'Ez az e-mail a Szerzőnek lesz küldve akkor, amikor a Szerkesztő egyből visszautasítja a benyújtott kéziratot, még a lektorálási szakasz előtt.',
  'emails.statisticsReportNotification.subject' => 'Cikk és lektorálási riport',
  'emails.statisticsReportNotification.body' => '
Tisztelt {$name}! <br />
<br />
A folyóiratával kapcsolatos összesítő riport elérhető az <a href="{$editorialReportLink}">OJS rendszerben</a>. A főbb mutatók {$year} {$month} hónapra az alábbiak:<br />
<ul>
	<li>Új beküldések ebben a hónapban: {$newSubmissions}</li>
	<li>Elutasított beküldések ebben a hónapban: {$declinedSubmissions}</li>
	<li>Elfogadott beküldések ebben a hónapban: {$acceptedSubmissions}</li>
	<li>Összes belüldés a rendszerben: {$totalSubmissions}</li>
</ul>
Az alábbi összesítők tölthetők le áttekintésre:<br />
<ul>
	<li><a href="{$articlesReportLink}">Cikkek riportja</a></li>
	<li><a href="{$editorialReportLink}">Lektorálási riport</a></li>
</ul>
Üdvözlettel,<br />
{$principalContactSignature}',
  'emails.statisticsReportNotification.description' => 'Ez az email automatikusan kerül kiküldésre a szerkesztőknek és folyóirat menedzsereknek a folyóiratukkal kapcsolatos tájékoztatásul.',
  'emails.reviewReinstate.description' => 'Ezt az  emailt a Rovatvezető küldi a Szerkesztőnek, aki egy cikk szakmai lektorálásán dolgozik és tájékoztatja, hogy a megszakított lektorálási kérésre most ismételten felkéri.',
  'emails.reviewReinstate.body' => 'Tisztelt {$reviewerName}!<br />
<br />
Ezúton szeretnénk ismételten felkérni a(z) {$contextName} &quot;{$submissionTitle},&quot; című cikkének szakmai lektorálására. <br />
<br />
Felmerülő kérdés esetén, kérem, keressen.',
  'emails.reviewReinstate.subject' => 'Ismételt felkérés lektorálásra',
);