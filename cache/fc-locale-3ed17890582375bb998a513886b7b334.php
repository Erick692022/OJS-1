<?php return array (
  'emails.paypalInvestigatePayment.subject' => 'Atividade incomum na conta PayPal',
  'emails.paypalInvestigatePayment.body' => 'O sistema OJS encontrou atividade incomum relacionada ao suporte a pagamentos via PayPal, para a revista {$contextName}. Esta atividade pode exigir investigação mais profunda ou intervenção manual.<br />
                       <br />
Esta mensagem foi gerada pelo Plugin PayPal do OJS.<br />
<br />
Informações detalhadas da notificação:<br />
{$postInfo}<br />
<br />
Informações adicionais (se disponível):<br />
{$additionalInfo}<br />
<br />
Variáveis do Servidor:<br />
{$serverVars}<br />
',
  'emails.paypalInvestigatePayment.description' => 'Este e-mail notifica o contacto principal da revista sobre atividades suspeitas, ou atividades que exijam intervenção manual, detetadas pelo Plugin de Pagamento via PayPal.',
);