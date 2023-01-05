<?php return array (
  'emails.manualPaymentNotification.subject' => 'Notificação de pagamento manual',
  'emails.manualPaymentNotification.body' => 'É necessário realizar o processamento de um pagamento manual de assinatura da revista {$contextName} do utilizador {$userFullName} (username &quot;{$userName}&quot;).<br />
<br />
O item adquirido é &quot;{$itemName}&quot;.<br />
O custo é {$itemCost} ({$itemCurrencyCode}).<br />
<br />
Esta mensagem foi gerada pelo Plugin de Pagamento Manual do OJS.',
  'emails.manualPaymentNotification.description' => 'Este e-mail notifica o editor-gestor que um pagamento manual foi realizado e exige processamento.',
);