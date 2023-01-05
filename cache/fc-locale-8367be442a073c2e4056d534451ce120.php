<?php return array (
  'emails.orcidCollectAuthorId.subject' => 'Submissão ao ORCID',
  'emails.orcidCollectAuthorId.body' => 'Caro(a) {$authorName},<br/>
<br/>
O seu nome foi indicado como autor de um manuscrito submetido à revista {$contextName}. <br/>
<br/>
Para confirmar a sua autoria, por favor adicione o seu identificador ORCID à submissão visitando a página indicada abaixo.<br/>
<br/>

<a href="{$authorOrcidUrl}"><img id="orcid-id-logo" src="https://orcid.org/sites/default/files/images/orcid_16x16.png" width=\'16\' height=\'16\' alt="ORCID iD icon" style="display: block; margin: 0 .5em 0 0; padding: 0; float: left;"/>Registe ou entre no seu ORCID</a><br/>
<br/>
<br/>
<a href="{$orcidAboutUrl}">Mais informação sobre o ORCID em {$contextName}</a><br/>
<br/>
Não hesite em contactar-nos para qualquer  questão.<br/>
<br/>
{$principalContactSignature}<br/>
',
  'emails.orcidCollectAuthorId.description' => 'Este e-mail é usado para recolher os identificadores ORCID dos autores.',
  'emails.orcidRequestAuthorAuthorization.description' => 'Este template de email é utilizado para solicitar o acesso ao ORCID dos autores.',
  'emails.orcidRequestAuthorAuthorization.subject' => 'Pedido de Associação de Identificador ORCID',
  'emails.orcidRequestAuthorAuthorization.body' => 'Caro(a) {$authorName},<br>
<br>
Foi adicionado como autor do manuscrito da submissão "{$submissionTitle}" feita a {$contextName}.
<br>
<br>
Por favor, conceda-nos permissão para adicionar o seu ORCID a esta submissão e também para adicionar a submissão ao seu perfil do ORCID como publicação. <br>
Consulte o site oficial do ORCID, entre na sua conta e autorize o acesso seguindo as instruções que lhe fornecemos.<br>
<a href="{$authorOrcidUrl}"><img id="orcid-id-logo" src="https://orcid.org/sites/default/files/images/orcid_16x16.png" width=\'16\' height=\'16\' alt="ORCID iD icon" style="display: block; margin: 0 .5em 0 0; padding: 0; float: left;"/>Registar ou Entrar no seu ORCID iD</a><br/>
<br>
<br>
<a href="{$orcidAboutUrl}">Saiba mais sobre o ORCID em {$contextName}</a><br/>
<br>
Se tiver alguma questão adicional, entre em contacto connosco.<br>
<br>
{$principalContactSignature}<br>
',
);