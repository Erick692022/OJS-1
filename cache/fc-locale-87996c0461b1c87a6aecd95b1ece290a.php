<?php return array (
  'emails.orcidCollectAuthorId.subject' => 'Le chiediamo di inserire l\'ORCID',
  'emails.orcidCollectAuthorId.body' => 'Gentile {$authorName},<br/>
<br/>
Lei è stato indicato come co-autore di un manoscritto sottoposto per la pubblicazione a {$contextName}.<br/>
Per confermare la sua responsabilità come autore, le chiediamo di aggiungere il suo ORCID iD alla sottomissione, utilizzando il link sottostante. <br/>
<br/>
<a href="{$authorOrcidUrl}"><img id="orcid-id-logo" src="https://orcid.org/sites/default/files/images/orcid_16x16.png" width=\'16\' height=\'16\' alt="ORCID iD icon" style="display: block; margin: 0 .5em 0 0; padding: 0; float: left;"/>Register or connect your ORCID iD</a><br/>
<br/>
<br>
<a href="{$orcidAboutUrl}">Maggiori informazioni in merito ad ORCID sono disponibili a {$contextName}</a><br/>
<br/>
Per qualsiasi ulteriore chiarimento, la prego di contattarmi.<br/>
<br/>
{$principalContactSignature}<br/>
',
  'emails.orcidCollectAuthorId.description' => 'Questa mail è utilizzata per ottenere  l\'ORCID dai coautori.',
  'emails.orcidRequestAuthorAuthorization.description' => 'Questa mail è utilizzata per richiedere agli autori accesso al proprio ORCID iD.',
  'emails.orcidRequestAuthorAuthorization.body' => 'Gentile {$authorName},<br>
<br>
Il suo nominativo è stato aggiunto come autore nel manoscritto "{$submissionTitle}" sottoposto per la pubblicazione a {$contextName}.
<br>
<br>
Le chiediamo il permesso di aggiungere il suo ORCID a questa sottomissione e di poter aggiungere questa sottomissione al suo profilo ORCID<br>
Le chiediamo di andare al suo profilo ufficiale ORCID e di autorizzare l\'accesso seguendo le  indicazioni che verranno fornite. <br>
<a href="{$authorOrcidUrl}"><img id="orcid-id-logo" src="https://orcid.org/sites/default/files/images/orcid_16x16.png" width=\'16\' height=\'16\' alt="ORCID iD icon" style="display: block; margin: 0 .5em 0 0; padding: 0; float: left;"/>Collega il tuo ORCID iD o registrati adesso </a><br/>
<br>
<br>
<a href="{$orcidAboutUrl}">Maggiori informazioni su ORCID sono disponibili a questo indirizzo: {$contextName}</a><br/>
<br>
Se ha qualsiasi domanda o dubbio, la prego di contattarmi.<br>
<br>
{$principalContactSignature}<br>
',
  'emails.orcidRequestAuthorAuthorization.subject' => 'Richiesta di accesso al record ORCID',
);