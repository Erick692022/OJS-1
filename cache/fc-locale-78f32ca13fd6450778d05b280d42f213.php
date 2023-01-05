<?php return array (
  'emails.passwordResetConfirm.subject' => 'Confirmar atualização de senha',
  'emails.passwordResetConfirm.body' => 'Recebemos um pedido para atualizar a sua senha de acesso à revista {$siteTitle}.<br />
<br />
Caso não tenha feito este pedido, ignore este e-mail e a sua senha não será alterada. Se deseja atualizar a sua senha, clique no seguinte link.<br/>
<br />
Atualizar senha: {$url}<br />
<br />
{$principalContactSignature}',
  'emails.passwordResetConfirm.description' => 'Este e-mail é enviado ao utilizador registado quando o mesmo solicita a atualização da senha, quando esqueceu a senha ou encontra problemas para aceder à revista. O link fornecido permite ao utilizador concluir a atualização da senha.',
  'emails.passwordReset.subject' => 'Senha atualizada',
  'emails.passwordReset.body' => 'A sua senha de acesso ao site {$siteTitle} foi atualizada com sucesso. Guarde os seus dados de acesso (nome de utilizador e senha), uma vez que serão necessários para todas as interações com a revista.<br />
<br />
O seu nome de utilizador: {$username}<br />
A sua senha: {$password}<br />
<br />
{$principalContactSignature}',
  'emails.passwordReset.description' => 'Este e-mail é enviado a um utilizador registado quando este atualizou com sucesso a senha seguindo o processo descrito no e-mail PASSWORD_RESET_CONFIRM.',
  'emails.userRegister.subject' => 'Novo utilizador registado',
  'emails.userRegister.body' => '{$userFullName}<br />
<br />
Encontra-se registado como utilizador da revista {$contextName}. Guarde o nome de utilizador e a senha, pois serão necessários para todos os contactos mantidos com a revista. Caso pretenda ser removido do portal, entre em contacto connosco.<br />
<br />
Nome de utilizador: {$username}<br />
Senha: {$password}<br />
<br />
Agradecendo desde já a atenção dispensada,<br />
{$principalContactSignature}',
  'emails.userRegister.description' => 'Mensagem enviada aos utilizadores recém-registados no sistema, para dar-lhes as boas vindas e fornecer o nome de utilizador e senha.',
  'emails.publishNotify.subject' => 'Nova edição publicada',
  'emails.publishNotify.body' => 'Caros leitores,<br />
<br />
A {$contextName} acaba de publicar o seu número mais recente, disponível em {$contextUrl}. Convidamo-lo a consultar o sumário e aceder à revista para visualizar os artigos.<br />
<br />
Agradecemos o seu interesse pelas nossas publicações,<br />
{$editorialContactSignature}',
  'emails.publishNotify.description' => 'Este e-mail é enviado a leitores registados através do botão "Notificar utilizadores" na página do Editor. Notifica os leitores da publicação de um novo número e convida-os a aceder à revista, através do URL fornecido.',
  'emails.subscriptionNotify.subject' => 'Confirmação de subscrição',
  'emails.subscriptionNotify.body' => 'Cara(o) {$subscriberName},<br />
<br />
Você está registado como assinante da revista {$contextName}, que possui um sistema de gestão online, com os seguintes dados:<br />
<br />
{$subscriptionType}<br />
<br />
Para aceder ao conteúdo exclusivo a assinantes basta entrar no portal com o seu nome de utilizador &quot;{$username}&quot;.<br />
<br />
Uma vez ligado ao portal é possível modificar os dados do seu perfil e a sua senha a qualquer momento.<br />
<br />
Em caso de subscrição institucional, não há necessidade de utilizadores que acedam a partir da instituição se ligarem ao sistema, já que o acesso ao conteúdo para assinantes é autenticado automaticamente pelo sistema.<br />
<br />
Em caso de dúvidas, entre em contacto connosco.<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionNotify.description' => 'Este e-mail notifica o leitor registado que o Gestor criou a sua Subscrição. Proporciona todas as informações necessárias para acesso ao conteúdo.',
  'emails.openAccessNotify.subject' => 'Nova edição de Acesso Aberto',
  'emails.openAccessNotify.body' => 'Caros leitores,<br />
<br />
A {$contextName} acaba de disponibilizar em Acesso Aberto uma nova edição. Convidamo-lo a consultar o Sumário e aceder à revista ({$contextUrl}), para ler os artigos disponíveis e outros itens do seu interesse.<br />
<br />
Agradecemos o interesse pelas nossas publicações,<br />
{$editorialContactSignature}',
  'emails.openAccessNotify.description' => 'Esta mensagem é enviada a leitores registados que solicitam a receção de notificações da publicação de novas edições em Acesso Aberto.',
  'emails.subscriptionBeforeExpiry.subject' => 'Aviso de expiração de subscrição',
  'emails.subscriptionBeforeExpiry.body' => '{$subscriberName},<br />
<br />
A sua subscrição a {$contextName} está prestes a expirar.<br />
<br />
{$subscriptionType}<br />
Data de expiração: {$expiryDate}<br />
<br />
Para garantir a continuidade de acesso à revista, aceda ao sistema com o seu nome de utilizador &quot;{$username}&quot; e renove a sua subscrição.<br />
<br />
Em caso de dúvidas, entre em contacto connosco.<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionBeforeExpiry.description' => 'Esta mensagem avisa o assinante da proximidade do término da subscrição. Informa sobre o URL da revista e instruções de acesso.',
  'emails.subscriptionAfterExpiry.subject' => 'Subscrição Expirada',
  'emails.subscriptionAfterExpiry.body' => '{$subscriberName},<br />
<br />
A sua subscrição da revista {$contextName} expirou.<br />
<br />
{$subscriptionType}<br />
Data de expiração: {$expiryDate}<br />
<br />
Para renovar a sua subscrição, aceda ao portal da revista, com o seu nome de utilizador &quot;{$username}&quot;.<br />
<br />
Em caso de dúvidas, entre em contacto connosco.<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionAfterExpiry.description' => 'Esta mensagem avisa o assinante que a subscrição. expirou. Informa o URL da revista e instruções de acesso.',
  'emails.subscriptionAfterExpiryLast.subject' => 'Expiração de subscrição - Lembrete final',
  'emails.subscriptionAfterExpiryLast.body' => '{$subscriberName},<br />
<br />
A sua subscrição da revista {$contextName} expirou.<br />
Este é o lembrete final a ser enviado pelo portal.<br />
<br />
{$subscriptionType}<br />
Data de expiração: {$expiryDate}<br />
<br />
Para renovar a sua subscrição, aceda ao portal da revista, com o seu nome de utilizador &quot;{$username}&quot;.<br />
<br />
Em caso de dúvidas, entre em contacto connosco.<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionAfterExpiryLast.description' => 'Esta mensagem é o último aviso ao assinante relativo à expiração da subscrição. Informa sobre o URL da revista e instruções de acesso.',
  'emails.lockssExistingArchive.subject' => 'Pedido para adicionar para arquivo a revista {$contextName}',
  'emails.lockssExistingArchive.body' => 'Cara(o) [Bibliotecária(o) da Universidade]<br />
<br />
{$contextName} &amp;lt;{$contextUrl}&amp;gt;, é uma revista na qual um docente da sua instituição, [nome da pessoa], possui o papel editorial de [título da função editorial]. Esta revista deseja obter arquivo através do LOCKSS (Lots of Copies Keep Stuff Safe - Muitas Cópias Mantém as Coisas Seguras) compatível com esta e outras bibliotecas de instituições de ensino superior.<br />
<br />
[Breve descrição da revista]<br />
<br />
O URL do Manifesto LOCKSS da Editora da nossa revista é: {$contextUrl}/gateway/lockss<br />
<br />
Consta do nosso registo que esta biblioteca faz parte do sistema LOCKSS. Estamos à disposição caso necessite de metadados adicionais para o registo da revista na sua versão do LOCKSS, os quais serão fornecidos o mais rápido possível.<br />
<br />
Agradecendo desde já a sua atenção,<br />
{$principalContactSignature}',
  'emails.lockssExistingArchive.description' => 'Este e-mail solicita ao administrador de um arquivo LOCKSS que considere armazenar a revista no seu arquivo, fornecendo o URL para o Manifesto LOCKSS da Editora da revista.',
  'emails.lockssNewArchive.subject' => 'Pedido de inclusão para arquivo da revista {$contextName}',
  'emails.lockssNewArchive.body' => 'Caro(a) [Bibliotecária(o) da Universidade]<br />
<br />
{$contextName} &amp;lt;{$contextUrl}&amp;gt; é uma revista na qual um membro da sua instituição, [nome da pessoa], possui o papel editorial de [título da função editorial]. Esta revista deseja obter arquivo através de LOCKSS (Lots of Copies Keep Stuff Safe - Muitas Cópias Mantém as Coisas Seguras) compatível com esta e outras bibliotecas de instituições de ensino superior.<br />
<br />
[Breve descrição da revista]<br />
<br />
O sistema LOCKSS &amp;lt;http://lockss.org/&amp;gt;, uma iniciativa internacional de bibliotecas/editoras, é um exemplo funcional de um repositório digital de preservação e arquivo distribuído. O software, que corre num computador pessoal comum, é gratuito; o sistema permite a sua implementação e disponibilização online de forma rápida, e a sua manutenção é mínima.<br />
<br />
Para auxiliar no arquivo da nossa revista, convidamos a sua biblioteca a tornar-se membro da comunidade LOCKSS, e ajudar a recolher e preservar títulos produzidos mundialmente. Para isso, visite o site do LOCKSS para saber como funciona o sistema e como fazer parte da comunidade.<br />
<br />
Agradecendo desde já a sua atenção,<br />
{$principalContactSignature}',
  'emails.lockssNewArchive.description' => 'Este e-mail encoraja o destinatário a participar da iniciativa LOCKSS e incluir esta revista no seu repositório, oferecendo informações iniciais e sobre como participar na iniciativa LOCKSS.',
  'emails.submissionAck.subject' => 'Agradecimento pela submissão',
  'emails.submissionAck.body' => '{$authorName},<br />
<br />
Agradecemos a submissão do seu manuscrito &quot;{$submissionTitle}&quot; à revista {$contextName}. Através do sistema de gestão editorial online que estamos a utilizar, conseguirá acompanhar o progresso no processo editorial, bastando entrar no sistema disponível em:<br />
<br />
URL do Manuscrito: {$submissionUrl}<br />
Nome de utilizador: {$authorUsername}<br />
<br />
Em caso de dúvidas,  entre em contacto connosco.
Agradecemos mais uma vez considerar a nossa revista como meio de transmitir ao público o seu trabalho científico.<br />
<br />
{$editorialContactSignature}',
  'emails.submissionAck.description' => 'Este e-mail,  quando ativo, é enviado automaticamente pelo portal ao autor ao ser concluído o processo de submissão de um trabalho à revista. Oferece informações sobre como acompanhar o trabalho pelo processo editorial e serve como registo e confirmação da submissão.',
  'emails.submissionComment.subject' => 'Comentário sobre a submissão',
  'emails.submissionComment.body' => '{$name},<br />
<br />
{$commentName} enviou um comentário sobre a submissão &quot;{$submissionTitle}&quot; em {$contextName}:<br />
<br />
{$comments}',
  'emails.submissionComment.description' => 'Mensagem notifica várias pessoas envolvidas no processo de edição de uma submissão que um comentário foi enviado.',
  'emails.submissionDecisionReviewers.subject' => 'Decisão sobre "{$submissionTitle}"',
  'emails.submissionDecisionReviewers.body' => 'Como revisor designado para a revisão da submissão &quot;{$submissionTitle}&quot; a {$contextName}, encaminho aqui as revisões e a decisão editorial enviados ao autor deste trabalho.<br />
<br />
Agradecemos a sua contribuição, a qual é fundamental para garantir a qualidade deste processo.<br />
<br />
{$editorialContactSignature}<br />
<br />
{$comments}',
  'emails.submissionDecisionReviewers.description' => 'Mensagem notifica os revisores de uma submissão que o processo de revisão foi concluído. Inclui informações sobre o artigo e a decisão tomada, além de agradecer pela sua contribuição.',
  'emails.editorAssign.subject' => 'Tarefa editorial',
  'emails.editorAssign.body' => '{$editorialContactName},<br />
<br />
A submissão &quot;{$submissionTitle}&quot; a {$contextName} foi-lhe atribuída para acompanhar o processo editorial, como parte das suas funções como Editor de Secção.<br />
<br />
URL da Submissão: {$submissionUrl}<br />
Nome de utilizador: {$editorUsername}<br />
<br />
Agradecendo desde já a sua atenção.',
  'emails.editorAssign.description' => 'Este e-mail notifica o Editor de Secção de que uma nova tarefa editorial lhe foi designada pelo Editor. Fornece informações sobre a submissão e como aceder ao sistema.',
  'emails.reviewRequest.subject' => 'Pedido de revisão de artigo',
  'emails.reviewRequest.body' => '{$reviewerName},<br />
<br />
Acreditamos que o seu conhecimento será fundamental para realizar a revisão do manuscrito, &quot;{$submissionTitle}&quot; submetido à {$contextName}. O resumo da submissão encontra-se abaixo, esperamos que considere assumir esta importante tarefa para o nosso trabalho.<br />
<br />
Aceda ao sistema até {$responseDueDate} para confirmar a sua disponibilidade ou não para realizar a revisão, bem como para ter acesso aos dados completos do artigo e registar a sua revisão e recomendações, através do URL {$contextUrl}<br />
<br />
O prazo para a entrega da revisão é {$reviewDueDate}.<br />
<br />
Caso ainda não possua o seu nome de utilizador e senha de acesso para aceder à revista, use o link a seguir para que o sistema crie uma nova senha que lhe será enviada via email, junto com os seus dados de acesso.{$passwordResetUrl}<br />
<br />
URL da submissão: {$submissionReviewUrl}<br />
<br />
Agradecemos a resposta a este pedido.<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequest.description' => 'Este e-mail é enviado pelo Editor de Secção para o Revisor a solicitar que aceite ou recuse a tarefa de rever um artigo. Fornece informações sobre a submissão, como o título e resumo, prazo de revisão e como aceder à submissão. Esta mensagem é usada quando o Processo de revisão padrão é selecionado em Configurações > Fluxo de trabalho > Revisão. (Caso contrário, veja REVIEW_REQUEST_ATTACHED.)',
  'emails.reviewRequestOneclick.subject' => 'Pedido de revisão de artigo',
  'emails.reviewRequestOneclick.body' => '{$reviewerName},<br />
<br />
Acreditamos que o seu conhecimento será fundamental para realizar a revisão do manuscrito &quot;{$submissionTitle}&quot; submetido a {$contextName}. Informações sobre a submissão encontram-se abaixo, e espero que considere assumir esta importante tarefa para o nosso trabalho.<br />
<br />
Aceda ao sistema até {$responseDueDate} para confirmar a sua disponibilidade ou não para realizar a revisão, bem como aceder aos dados completos da submissão e registar a sua revisão e recomendações.<br />
<br />
O prazo para a entrega da revisão é {$reviewDueDate}.<br />
<br />
URL da submissão: {$submissionReviewUrl}<br />
<br />
Agradecemos a sua resposta a este pedido<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestOneclick.description' => 'Este e-mail é enviado pelo Editor de Secção para o Revisor a solicitar que aceite ou recuse a tarefa de rever o artigo. Fornece informações sobre a submissão, como o título e resumo, prazo de revisão e como aceder à própria submissão. Esta mensagem é usada quando o Processo de Revisão Padrão é selecionado em Configurações > Fluxo de Trabalho > Revisão e o acesso um clique está ativo.',
  'emails.reviewRequestAttached.subject' => 'Pedido de revisão de artigo',
  'emails.reviewRequestAttached.body' => '{$reviewerName},<br />
<br />
Acreditamos que o seu conhecimento será valioso para realizar a revisão do manuscrito, &quot;{$submissionTitle}&quot; e esperamos que considere assumir esta importante tarefa. As Instruções para Revisão encontram-se no final desta mensagem, e o manuscrito encontra-se em anexo. O prazo para entrega da revisão e as suas recomendações é {$reviewDueDate}.<br />
<br />
Responda se está disponível para efetuar ou não esta revisão até {$responseDueDate} .<br />
<br />
Agradecemos desde já a resposta a este pedido.<br />
<br />
{$editorialContactSignature}<br />
<br />
<br />
Instruções para Revisão<br />
<br />
{$reviewGuidelines}<br />
',
  'emails.reviewRequestAttached.description' => 'Este e-mail é enviado pelo Editor de Secção para o Revisor a solicitar que aceite ou recuse a tarefa de rever um artigo. Inclui a submissão como anexo. Esta mensagem é usada quando o Processo de revisão de anexos de e-mail está selecionado em Configurações > Fluxo de trabalho > Revisão. (Caso contrário, veja REVIEW_REQUEST.)',
  'emails.reviewCancel.subject' => 'Pedido de revisão cancelado',
  'emails.reviewCancel.body' => '{$reviewerName}:<br />
<br />
Foi cancelado o pedido de revisão da submissão &quot;{$submissionTitle}&quot; a {$contextName}. Lamentamos qualquer inconveniente causado e esperamos poder contar com a sua colaboração numa oportunidade futura.<br />
<br />
Em caso de dúvidas, entre em contacto connosco.',
  'emails.reviewCancel.description' => 'Este e-mail é enviado pelo Editor de Secção com um processo de revisão em andamento, notificando que a revisão foi cancelada.',
  'emails.reviewConfirm.subject' => 'Disponível para realizar a revisão',
  'emails.reviewConfirm.body' => 'Cara(o) Editor:<br />
<br />
Estou disponível e interessado em rever a submissão &quot;{$submissionTitle}&quot; a {$contextName}. Agradeço a consideração e estimo concluir a revisão até à data definida, {$reviewDueDate}, ou antes do prazo.<br />
<br />
{$reviewerName}',
  'emails.reviewConfirm.description' => 'Este e-mail é enviado pelo Revisor ao Editor de Secção, em resposta ao pedido de revisão, para notificar a disponibilidade para realizar a tarefa e de que a mesma será concluída no prazo especificado.',
  'emails.reviewDecline.subject' => 'Indisponível para realizar a revisão',
  'emails.reviewDecline.body' => 'Cara(o) Editor:<br />
<br />
Lamento informar que não estou disponível de momento para realizar a revisão da sumissão &quot;{$submissionTitle}&quot; à revista {$contextName}. Agradeço a consideração e espero poder ser convidado e estar disponível noutra oportunidade.<br />
<br />
{$reviewerName}',
  'emails.reviewDecline.description' => 'Este e-mail é enviado pelo Revisor ao Editor de Secção, em resposta ao pedido de revisão, para notificar da sua inisponibilidade para realizar a tarefa, rejeitando a revisão.',
  'emails.reviewAck.subject' => 'Agradecimento pela revisão',
  'emails.reviewAck.body' => '{$reviewerName}:<br />
<br />
Agradecemos ter concluído a revisão da submissão &quot;{$submissionTitle}&quot; à revista {$contextName}. A sua contribuição é fundamental para a qualidade dos trabalhos publicados.',
  'emails.reviewAck.description' => 'Este e-mail é enviado pelo Editor de Secção ao Revisor para confirmar a receção e agradecer ao revisor pela conclusão da revisão.',
  'emails.reviewRemind.subject' => 'Lembrete de pedido de revisão',
  'emails.reviewRemind.body' => '{$reviewerName}:<br />
<br />
Esta mensagem é apenas um lembrete relativamente ao pedido de revisão da submissão &quot;{$submissionTitle}&quot; à revista {$contextName}. Esperávamos receber a sua revisão até {$reviewDueDate} e aguardamos a receção assim que for possível.<br />
<br />
Caso não possua o nome de utilizador e a senha para aceder ao sistema da revista, use o link a seguir para criar uma nova senha, que lhe será enviada via email junto com os seus dados de acesso. {$passwordResetUrl}<br />
<br />
URL da Submissão: {$submissionReviewUrl}<br />
<br />
Confirme a sua disponibilidade para concluir a revisão, contribuição vital para a qualidade desta publicação.
Aguardando o seu contacto,<br />
<br />
{$editorialContactSignature}',
  'emails.reviewRemind.description' => 'Este e-mail é enviado pelo Editor de Secção ao Revisor como lembrete da tarefa de revisão em curso.',
  'emails.reviewRemindOneclick.subject' => 'Lembrete de pedido de revisão',
  'emails.reviewRemindOneclick.body' => '{$reviewerName},<br />
<br />
Esta mensagem é apenas um lembrete relativamente ao pedido de revisão da submissão &quot;{$submissionTitle}&quot; a {$contextName}. Esperávamos receber a revisão até {$reviewDueDate}, e aguardamos a sua receção assim que for possível.<br />
<br />
URL da submissão: {$submissionReviewUrl}<br />
<br />
Confirme a sua disponibilidade para concluir esta tarefa e agradecemos o contributo para a qualidade desta revista. Aguardamos notícias suas!<br />
<br />
{$editorialContactSignature}',
  'emails.reviewRemindOneclick.description' => 'Este e-mail é enviado por um Editor de Secção para lembrar o revisor sobre o prazo de revisão.',
  'emails.reviewRemindAuto.subject' => 'Lembrete automático de pedido de revisão',
  'emails.reviewRemindAuto.body' => '{$reviewerName},<br />
<br />
Este é apenas um lembrete automático, referente ao pedido de revisão da submissão &quot;{$submissionTitle}&quot; a {$contextName}. Esperávamos receber a revisão até {$reviewDueDate} e este email foi enviado automaticamente pois o prazo para entrega foi ultrapassado.
Aguardamos a receção da revisão assim que for possível concluí-la.<br />
<br />
Caso não possua o nome de utilizador e a senha para aceder ao sistema da revista, use o link a seguir para criar uma nova senha, que lhe será enviada via email junto com os seus dados de acesso. {$passwordResetUrl}<br />
<br />
URL da Submissão: {$submissionReviewUrl}<br />
<br />
Confirme a sua disponibilidade para concluir a revisão, contribuição vital para a qualidade desta publicação.
Aguardando o seu contacto,<br />
<br />
{$editorialContactSignature}',
  'emails.reviewRemindAuto.description' => 'Este e-mail é enviado automaticamente ao revisor quando a data de conclusão de revisão for ultrapassada (veja as Opções de Revisão em Configurações > Fluxo de Trabalho > Revisão). Tarefas agendadas devem ser ativadas e configuradas (veja o ficheiro de configuração do sistema).',
  'emails.reviewRemindAutoOneclick.subject' => 'Lembrete automático de pedido de revisão',
  'emails.reviewRemindAutoOneclick.body' => '{$reviewerName},<br />
<br />
Este é apenas um lembrete automático, referente ao pedido de revisão da submissão &quot;{$submissionTitle}&quot; a {$contextName}. Esperávamos receber a revisão até {$reviewDueDate} e este email foi enviado automaticamente pois o prazo expirou. Aguardamos a receção da revisão assim que for possível concluí-la.<br />
<br />
URL da submissão: {$submissionReviewUrl}<br />
<br />
Confirme a sua disponibilidade para concluir esta tarefa fundamental para a qualidade da revista. 
Aguardando o seu contacto,<br />
<br />
{$editorialContactSignature}',
  'emails.reviewRemindAutoOneclick.description' => 'Este e-mail é enviado automaticamente quando o prazo de revisão expirou (consulte Opções de revisão em Configurações > Fluxo de trabalho > Revisão) e o acesso em um clique está ativo. As tarefas agendadas devem ser ativadas e configuradas (consulte o ficheiro de configuração do portal).',
  'emails.copyeditRequest.subject' => 'Pedido de edição de texto',
  'emails.copyeditRequest.body' => '{$participantName},<br />
<br />
Solicito a revisão do texto do manuscrito &quot;{$submissionTitle}&quot;, submetido à revista {$contextName}, conforme os seguintes passos:<br />
1. Clique no URL da submissão, indicado mais adiante nesta mensagem.<br />
2. Abra quaisquer ficheiros disponíveis nos Ficheiros de Rascunho e reveja o texto; pode adicionar Discussões de Edição de texto conforme for necessário.<br />
3. Guarde o(s) ficheiro(s) revisto(s) e envie o ficheiro para o Painel de Edição de Texto.<br />
4. Notifique o Editor que todos os ficheiros estão pronto, e o processo de Produção pode ser iniciado.<br />
<br />
URL da {$contextName}: {$contextUrl}<br />
URL da Submissão: {$submissionUrl}<br />
Nome de utilizador: {$participantUsername}',
  'emails.copyeditRequest.description' => 'Este e-mail é enviado pelo Editor de Secção a solicitar a realização de uma tarefa de edição ao Editor de Texto, com informações sobre e como aceder ao documento.',
  'emails.copyeditComplete.subject' => 'Edição de texto concluída',
  'emails.copyeditComplete.body' => '{$editorialContactName},<br />
<br />
A edição do texto do artigo &quot;{$submissionTitle}&quot;, submetido à revista {$contextName} foi concluída. Para verificar as sugestões e responder às Perguntas ao Autor, siga os passos a seguir:<br />
<br />
1. Aceda ao sistema da revista através da URL indicada nesta mensagem, com o nome de utilizador e a senha criadas no acto do registo (use a opção Esqueci a senha, caso necessário).<br />
2. Clique no ficheiro disponível no passo 1 &quot;Edição de Texto inicial&quot; e abra a versão editada.<br />
3. Avalie as sugestões, usando o Controlo de Alterações do Word, e responda às perguntas.<br />
4. Guarde o ficheiro no seu computador e envie no passo 2 &quot;Edição de Texto do autor&quot;.<br />
5. Clique no ícone de email sob CONCLUÍDO e envie a mensagem ao editor.<br />
<br />
Esta é a última oportunidade para realizar alterações substanciais no documento. Em etapa posterior, lhe será solicitada a leitura de prova das composições finais, onde será possível solicitar apenas pequenas correcções de redacção e visual.<br />
<br />
URL da submissão: <a href="{$submissionEditingUrl}">{$submissionEditingUrl}</a><br />
<br />
Caso não esteja disponível para realizar esta tarefa ou em caso de dúvidas, entre em contacto através deste email.<br />
<br />
Agradecendo a atenção dispensada,<br />
{$participantName}',
  'emails.copyeditComplete.description' => 'Mensagem enviada pelo Editor de Texto ao Editor de Secção, informando da conclusão da tarefa editorial.',
  'emails.copyeditAuthorRequest.subject' => 'Pedido de avaliação da edição de texto',
  'emails.copyeditAuthorRequest.body' => '{$authorName},<br />
<br />
Concluímos a Edição de Texto inicial do seu manuscrito &quot;{$submissionTitle}&quot;, submetido à revista {$contextName}. Avalie o trabalho realizado conforme os passos a seguir:<br />
<br />
1. Clique no URL da submissão, informado mais adiante nesta mensagem.<br />
2. Aceda ao sistema e clique no ficheiro que aparece no Passo 1.<br />
3. Abra o ficheiro transferido.<br />
4. Avalie o texto, incluindo as propostas de alteração e as Perguntas ao Autor.<br />
5. Realize as alterações necessárias para melhor ainda mais a qualidade do trabalho.<br />
6. Após concluída a revisão, envie o ficheiro no Passo 2.<br />
7. Clique em METADADOS para verificar a qualidade da indexação do documento.<br />
8. Envie o e-mail de CONCLUÍDO ao editor e ao editor de texto.<br />
<br />
URL da submissão: <a href="{$submissionUrl}">{$submissionUrl}</a><br />
<br />
Esta é a última oportunidade para realizar alterações substanciais no documento. Em etapa posterior, lhe será solicitada a leitura de prova das composições finais, onde será possível solicitar apenas pequenas correcções de redacção e visual.<br />
<br />
Caso não esteja disponível para assumir esta responsabilidade no momento, ou em caso de dúvidas, entre em contacto através deste email.<br />
<br />
Agradecemos desde já a sua colaboração, fundamental para a qualidade da revista.<br />
<br />
{$editorialContactSignature}',
  'emails.copyeditAuthorRequest.description' => 'Mensagem enviada pelo Editor de Secção ao autor, solicitando que verifique o trabalho realizado pelo Editor de Texto, com informações sobre acesso e avisando que é a última chance de realizar modificações no texto.',
  'emails.copyeditAuthorComplete.subject' => 'Avaliação da edição de texto concluída',
  'emails.copyeditAuthorComplete.body' => '{$editorialContactName},<br />
<br />
Concluí a avaliação da edição do texto do manuscrito &quot;{$submissionTitle}&quot;, submetido à revista {$contextName}, a qual está pronta para a edição de texto final e preparação das composições.<br />
<br />
Agradeço as contribuições para a melhoria do manuscrito.<br />
<br />
Obrigado,<br />
<br />
{$authorName}',
  'emails.copyeditAuthorComplete.description' => 'Mensagem enviada pelo Autor ao Editor de Secção, informando da conclusão da avaliação da edição de texto e que o documento está pronto para composição e layout.',
  'emails.copyeditAuthorAck.subject' => 'Agradecimento pela avaliação da edição de texto',
  'emails.copyeditAuthorAck.body' => '{$authorName},<br />
<br />
Agradecemos a sua avaliação da edição do texto do manuscrito &quot;{$submissionTitle}&quot;, submetido à revista {$contextName}. Em breve o seu trabalho estará pronto para publicação.<br />
<br />
{$editorialContactSignature}',
  'emails.copyeditAuthorAck.description' => 'Mensagem enviada pelo Editor de Secção ao autor, agradecendo pela avaliação da Edição de Texto.',
  'emails.copyeditFinalRequest.subject' => 'Avaliação da edição de texto final',
  'emails.copyeditFinalRequest.body' => '{$participantName},<br />
<br />
O autor e o editor concluíram a avaliação da edição do texto do manuscrito &quot;{$submissionTitle}&quot;, submetido à revista {$contextName}. A versão final deeverá ser preparada para envio ao Layout, conforme os passos a seguir:<br />
<br />
1. Clique no link da submissão, indicado mais adiante nesta mensagem.<br />
2. Aceda ao sistema da revista e clique no ficheiro disponível no Passo 2.<br />
3. Abra o ficheiro transferido e incorpore todas as alterações e respostas a questionamentos necessárias.<br />
4. Salve como versão vinal e envie para o Passo 3 da Edição.<br />
5. Clique em METADADOS para avaliar a qualidade da indexação do documento (salvando quaisquer alterações).<br />
6. Envie o email CONCLUÍDO ao editor.<br />
<br />
URL da revista {$contextName}: <a href="{$contextUrl}">{$contextUrl}</a><br />
URL da submissão: <a href="{$submissionUrl}">{$submissionUrl}</a><br />
Nome de utilizador: {$participantUsername}<br />
<br />
Em nome da Equipe Editorial, agradeço a sua colaboração para a qualidade desta publicação,<br />
<br />
{$editorialContactSignature}',
  'emails.copyeditFinalRequest.description' => 'Mensagem enviada pelo Editor de Secção ao Editor de Texto, solicitando que realize a última Edição de Texto, com informações sobre acesso.',
  'emails.copyeditFinalComplete.subject' => 'Avaliação final da edição de texto concluída',
  'emails.copyeditFinalComplete.body' => '{$editorialContactName},<br />
<br />
Concluí a edição da versão final do manuscrito &quot;{$submissionTitle}&quot;, submetido a {$contextName}, a qual está pronta para preparação das composições.<br />
<br />
{$participantName}',
  'emails.copyeditFinalComplete.description' => 'Mensagem enviada pelo Editor de Texto ao Editor de Secção, solicitando que verifique o trabalho realizado pelo Editor de Texto, com informações sobre acesso e avisando que é a última chance de realizar modificações no texto.',
  'emails.copyeditFinalAck.subject' => 'Agradecimento pela avaliação final da edição de texto',
  'emails.copyeditFinalAck.body' => '{$participantName},<br />
<br />
Agradecemos a conclusão da edição do texto do manuscrito &quot;{$submissionTitle}&quot;, submetido à revista {$contextName}.<br />
<br />
A preparação da versão final para composição é uma etapa fundamental do processo editorial.<br />
<br />
Agradecendo mais uma vez pela sua contribuição,<br />
<br />
{$editorialContactSignature}',
  'emails.copyeditFinalAck.description' => 'Mensagem enviada pelo Editor de Secção ao Editor de Texto, agradecendo pela conclusão da última Edição de Texto solicitada.',
  'emails.layoutRequest.subject' => 'Pedido de composições finais',
  'emails.layoutRequest.body' => '{$participantName},<br />
<br />
Solicito a preparação dos ficheiros finais de publicação da submissão &quot;{$submissionTitle}&quot;, à {$contextName}, conforme as seguintes instruções:<br />
1. Clique no URL da submissão, indicado mais adiante nesta mensagem.<br />
2. Aceda ao sistema e use os ficheiros Prontos para Produção para produzir os ficheiros de publicação, de acordo com os padrões da revista.<br />
3. Envie para o sistema os ficheiros prontos para publicação.<br />
4. Notifique o Editor através das Discussões de Produção que os ficheiros estão prontos.<br />
<br />
URL da revista {$contextName}: {$contextUrl}<br />
URL da Submissão:  {$submissionUrl}<br />
Nome de utilizador: {$participantUsername}<br />
<br />
Caso não esteja disponível para assumir esta responsabilidade no momento, ou em caso de dúvidas, entre em contacto connosco.',
  'emails.layoutRequest.description' => 'Este e-mail é enviado pelo Editor de Secção ao Editor de Layout, solicitando que sejam preparadas os Ficheiros de Publicação do texto final, com informações de acesso.',
  'emails.layoutComplete.subject' => 'Composições concluídas',
  'emails.layoutComplete.body' => '{$editorialContactName},<br />
<br />
As composições do manuscrito &quot;{$submissionTitle}&quot;, submetido à revista {$contextName}, estão prontas para leitura de provas.<br />
<br />
Em caso de dúvidas, entre em contacto.<br />
<br />
{$participantName}',
  'emails.layoutComplete.description' => 'Este e-mail é enviado pelo Editor de Layout ao Editor de Secção, informando sobre a conclusão das composições.',
  'emails.layoutAck.subject' => 'Agradecimento pelas composições',
  'emails.layoutAck.body' => '{$participantName},<br />
<br />
Agradecemos a preparação das composições do manuscrito &quot;{$submissionTitle}&quot;, submetido à revista {$contextName}.<br />
<br />
A sua contribuição é fundamental para o processo editorial e a qualidade desta publicação.<br />
<br />
{$editorialContactSignature}',
  'emails.layoutAck.description' => 'Mensagem enviada pelo Editor de Secção ao Editor de Layout, agradecendo pela conclusão das composições.',
  'emails.proofreadAuthorRequest.subject' => 'Pedido de leitura de provas ao autor',
  'emails.proofreadAuthorRequest.body' => '{$authorName},<br />
<br />
Solicitamos a leitura de provas do manuscrito &quot;{$submissionTitle}&quot;, submetido à revista {$contextName}, conforme as instruções a seguir:<br />
<br />
1. Clique no URL da submissão, indicada mais adiante nesta mensagem.<br />
2. Aceda ao sistema da revista e leia as INSTRUÇÕES PARA LEITURA DE PROVAS<br />
3. Clique em LER PROVA na secção Layout e revise a composição nos formatos disponíveis.<br />
4. Informe as solicitações de correcções (tipográficos e de formatação) em Correcções da Prova<br />
5. Salve e envie o email com as correcções ao Editor de Layout e ao Leitor de Prova.<br />
6. Envie o email CONCLUÍDO ao editor.<br />
<br />
URL da Submissão: {$submissionUrl}<br />
<br />
Em caso de dúvidas, entre em contacto através deste email.<br />
<br />
Agradecemos desde já a sua colaboração, fundamental para a qualidade da revista.<br />
<br />
{$editorialContactSignature}',
  'emails.proofreadAuthorRequest.description' => 'Mensagem enviada pelo Editor de Secção ao autor, solicitando que verifique o trabalho realizado pelo Editor de Layout, com informações sobre acesso e avisando que somente é possível corrigir erros tipográficos de de layout.',
  'emails.proofreadAuthorComplete.subject' => 'Conclusão da leitura de provas pelo autor',
  'emails.proofreadAuthorComplete.body' => '{$editorialContactName},<br />
<br />
Concluí a leitura de provas do manuscrito &quot;{$submissionTitle}&quot;, submetido à revista {$contextName}. As correcções às composições estão disponíveis para serem incorporadas pelo Editor de Layout e verificadas pelo Leitor de Prova.<br />
<br />
{$authorName}',
  'emails.proofreadAuthorComplete.description' => 'Mensagem enviada pelo Autor ao Editor de Secção, informando a conclusão da Leitura de Provas.',
  'emails.proofreadAuthorAck.subject' => 'Agradecimento pela leitura de provas pelo autor',
  'emails.proofreadAuthorAck.body' => '{$authorName},<br />
<br />
Agradecemos a conclusão da leitura de provas do seu manuscrito, &quot;{$submissionTitle}&quot; submetido à revista {$contextName}.<br />
<br />
Em breve o seu trabalho estará pronto para publicação.<br />
<br />
Caso tenha activado o serviço de notificação, você receberá via email o Sumário assim que a revista for publicada.<br />
<br />
Em caso de dúvidas, entre em contacto através deste email.<br />
<br />
{$editorialContactSignature}',
  'emails.proofreadAuthorAck.description' => 'Mensagem enviada pelo Editor de Secção ao autor, agradecendo a conclusão da Leitura de Provas.',
  'emails.proofreadRequest.subject' => 'Pedido de leitura de provas',
  'emails.proofreadRequest.body' => '{$proofreaderName},<br />
<br />
Solicito a leitura de provas do manuscrito &quot;{$submissionTitle}&quot;, submetido à revista {$contextName}, conforme instruções a seguir:<br />
<br />
1. Clique no URL da submissão, indicada mais adiante nesta mensagem.<br />
2. Aceda ao sistema da revista e leia as INSTRUÇÕES PARA LEITURA DE PROVAS.<br />
3. Clique em VER PROVA na secção Layout e verifique as composições nos formatos disponíveis.<br />
4. Informe correcções (tipográficas e de formatação) em Correcções da Prova.<br />
5. Salve e envie as correcções via email ao Editor de Layout.<br />
6. Envie o email CONCLUÍDO ao editor.<br />
<br />
URL da Submissão: {$submissionUrl}<br />
Nome de utilizador: {$proofreaderUsername}<br />
<br />
Caso não esteja disponível para assumir esta responsabilidade no momento, ou em caso de dúvidas, entre em contacto através deste email.<br />
<br />
Agradecemos desde já a sua colaboração, fundamental para a qualidade da revista.<br />
<br />
{$editorialContactSignature}',
  'emails.proofreadRequest.description' => 'Mensagem enviada pelo Editor de Secção ao Leitor de Provas, solicitando que verifique o trabalho realizado pelo Editor de Layout e o autor, verificando os comentários e alterações solicitadas. É o último momento para verificar a qualidade do documento e evitar possíveis erros antes da publicação.',
  'emails.proofreadComplete.subject' => 'Leitura de provas concluída',
  'emails.proofreadComplete.body' => '{$editorialContactName},<br />
<br />
Concluí a leitura de provas do manuscrito &quot;{$submissionTitle}&quot;, submetido à revista {$contextName}. As correcções das composições estão disponíveis para serem incorporadas pelo Editor de Layout.<br />
<br />
{$proofreaderName}',
  'emails.proofreadComplete.description' => 'Mensagem enviada pelo Leitor de Provas ao Editor de Secção, informando a conclusão da Leitura de Provas.',
  'emails.proofreadAck.subject' => 'Agradecimento pela leitura de provas',
  'emails.proofreadAck.body' => '{$proofreaderName},<br />
<br />
Agradecemos a leitura de provas do manuscrito &quot;{$submissionTitle}&quot;, submetido à revista {$contextName}.<br />
<br />
A sua contribuição é fundamental para a qualidade desta publicação.<br />
<br />
{$editorialContactSignature}',
  'emails.proofreadAck.description' => 'Mensagem enviada pelo Editor de Secção ao Leitor de Provas, agradecendo pelo trabalho concluído de Leitura de Provas.',
  'emails.proofreadLayoutComplete.subject' => 'Leitura de provas concluída pelo Editor de Layout',
  'emails.proofreadLayoutComplete.body' => '{$editorialContactName},<br />
<br />
As composições do manuscrito &quot;{$submissionTitle}&quot;, submetido à revista  {$contextName}, foram corrigidas, segundo as solicitações da Leitura de Provas, e estão prontas para publicação.<br />
<br />
{$participantName}',
  'emails.proofreadLayoutComplete.description' => 'Mensagem enviada pelo Editor de Layout ao Editor de Secção, informando a conclusão das novas composições, após Leitura de Provas',
  'emails.proofreadLayoutAck.subject' => 'Agradecimento pela leitura de provas pelo Editor de Layout',
  'emails.proofreadLayoutAck.body' => '{$participantName},<br />
<br />
Agradecemos a conclusão da leitura de provas e correcções realizadas às composições do manuscrito &quot;{$submissionTitle}&quot;, submetido à revista {$contextName}.<br />
<br />
A sua contribuição é fundamental para a qualidade desta publicação.<br />
<br />
{$editorialContactSignature}',
  'emails.proofreadLayoutAck.description' => 'Mensagem enviada pelo Editor de Secção ao Editor de Layout, agradecendo pela conclusão das composições, após a Leitura de Provas',
  'emails.emailLink.subject' => 'Artigo interessante para a sua leitura',
  'emails.emailLink.body' => 'Acredito que lhe irá interessar o artigo &quot;{$submissionTitle}&quot;, de {$authorName}, publicado na revista {$contextName}, V. {$volume}, N. {$number}, Ano {$year}, disponível em &quot;<a href="{$articleUrl}">{$articleUrl}</a>&quot;.',
  'emails.emailLink.description' => 'Este e-mail é enviado por um leitor a um colega, sobre um artigo considerado de seu interesse, com link para acesso e informações sobre a revista e a edição onde o documento foi publicado. Está disponível através das Ferramentas de Leitura e deve ser ativado na página de configuração das Ferramentas de Leitura.',
  'emails.userValidate.subject' => 'Valide a sua Conta',
  'emails.userValidate.body' => '{$userFullName},<br />
<br />
O seu registo foi criado na revista {$contextName}, porém é necessário validar o endereço de e-mail para finalizar o processo. Para validar o seu registo, aceda ao URL a seguir:<br />
<br />
{$activateUrl}<br />
<br />
Agradecendo desde já a sua atenção,<br />
{$principalContactSignature}',
  'emails.userValidate.description' => 'Mensagem de boas-vindas enviada a novo utilizador registado, para validação de e-mail.',
  'emails.reviewerRegister.subject' => 'Registo como Revisor na revista {$contextName}',
  'emails.reviewerRegister.body' => 'Tendo em consideração o conhecimento excecional na sua área de investigação/intervenção, tomamos a liberdade de registá-lo na base de dados de revisores da nossa revista, {$contextName}. Esta ação não implica nenhum compromisso da sua parte, mas simplesmente nos permite abordá-lo para uma possível revisão de uma submissão. Ao ser convidado para efetuar uma revisão, terá acesso ao título e resumo do artigo em questão, e pode sempre aceitar ou recusar o convite. A qualquer momento pode pedir-nos para remover o seu nome da lista de revisores.<br /><br />
Os seus dados de acesso, nome de utilizador e senha, utilizados para interagir com o website desta revista, estão incluídos nesta mensagem. Pode por exemplo atualizar o seu perfil, incluindo os seus interesses de revisão.<br />
<br />
Nome de utilizador: {$username}<br />
Senha: {$password}<br />
<br />
Agradecendo desde já a atenção dispensada,<br />
{$principalContactSignature}',
  'emails.reviewerRegister.description' => 'Mensagem de boas-vindas enviada a novo revisor registado no sistema, com nome de utilizador e senha para acesso.',
  'emails.notification.subject' => 'Nova notificação de {$siteTitle}',
  'emails.notification.body' => 'Você possui uma nova notificação de {$siteTitle}:<br />
<br />
{$notificationContents}<br />
<br />
Link: {$url}<br />
<br />
{$principalContactSignature}',
  'emails.notification.description' => 'Esta mensagem é enviada a utilizadores registados que escolheram ativar este tipo de notificação via email.',
  'emails.editorDecisionAccept.subject' => 'Decisão editorial',
  'emails.editorDecisionAccept.body' => '{$authorName},<br />
<br />
Foi tomada uma decisão sobre o artigo submetido à revista {$contextName}, &quot;{$submissionTitle}&quot;.<br />
<br />
A decisão é: Aceitar Submissão',
  'emails.editorDecisionAccept.description' => 'Esta é uma mensagem do Editor/Editor de Secção ao Autor para notificá-lo da decisão editorial final de "aceitar a submissão".',
  'emails.editorDecisionRevisions.subject' => 'Decisão editorial',
  'emails.editorDecisionRevisions.body' => '{$authorName}:<br />
<br />
Foi tomada uma decisão sobre o artigo submetido à {$contextName}, &quot;{$submissionTitle}&quot;.<br />
<br />
A decisão é: Revisões Requeridas',
  'emails.editorDecisionRevisions.description' => 'Esta mensagem é enviada pelo do Editor/Editor de Secção ao autor, notificando-o da decisão final de Revisões Requeridas.',
  'emails.editorDecisionResubmit.subject' => 'Decisão editorial',
  'emails.editorDecisionResubmit.body' => '{$authorName}:<br />
<br />
Foi tomada uma decisão sobre o artigo enviado à revista {$contextName}, &quot;{$submissionTitle}&quot;.<br />
<br />
A decisão é: Submeter Novamente Para Revisão',
  'emails.editorDecisionResubmit.description' => 'Esta mensagem enviada pelo Editor/Editor de Secção ao Autor notifica sobre a decisão editorial final de Submeter novamente para revisão.',
  'emails.editorDecisionDecline.subject' => 'Decisão editorial',
  'emails.editorDecisionDecline.body' => '{$authorName}:<br />
<br />
Foi tomada uma decisão sobre o artigo submetido à revista {$contextName}, &quot;{$submissionTitle}&quot;.<br />
<br />
A decisão é: Rejeitar',
  'emails.editorDecisionDecline.description' => 'Este e-mail enviado pelo Editor/Editor de Secção ao Autor notifica sobre a decisão final da submissão de rejeitar.',
  'emails.subscriptionPurchaseIndl.subject' => 'Aquisição de Subscrição: Individual',
  'emails.subscriptionPurchaseIndl.body' => 'Uma subscrição individual foi adquirida online para a revista {$contextName}, cujos dados são detalhados a seguir.<br />
<br />
Tipo de Subscrição:<br />
{$subscriptionType}<br />
<br />
Utilizador:<br />
{$userDetails}<br />
<br />
Informação sobre o membro (caso indicado):<br />
{$membership}<br />
<br />
Para visualizar ou editar esta subscrição, aceda ao URL a seguir.<br />
<br />
URL da Subscrição: {$subscriptionUrl}<br />
',
  'emails.subscriptionPurchaseIndl.description' => 'Esta mensagem notifica o Gestor de Subscrições que uma subscrição individual foi adquirida online. Oferece informações sobre a subscrição e um link para acesso rápido à mesma.',
  'emails.subscriptionPurchaseInstl.subject' => 'Aquisição de Subscrição: Institucional',
  'emails.subscriptionPurchaseInstl.body' => 'Uma subscrição institucional foi adquirida online para {$contextName} com as informações detalhadas a seguir. Para ativar esta subscrição, clique no URL da Subscrição fornecida e define a situação para \'Ativo\'.<br />
<br />
Tipo de Subscrição:<br />
{$subscriptionType}<br />
<br />
Instituição:<br />
{$institutionName}<br />
{$institutionMailingAddress}<br />
<br />
Domínio (caso informado):<br />
{$domain}<br />
<br />
Faixas de IP (caso informado):<br />
{$ipRanges}<br />
<br />
Contacto:<br />
{$userDetails}<br />
<br />
Informações de membro (caso informado):<br />
{$membership}<br />
<br />
Para visualizar ou editar esta subscrição, aceda ao URL a seguir.<br />
<br />
URL da Subscrição: {$subscriptionUrl}<br />
',
  'emails.subscriptionPurchaseInstl.description' => 'Esta mensagem notifica o Gestor de Subscrições que uma subscrição institucional foi adquirida online. Oferece informações sobre a subscrição e um link para acesso rápido à mesma.',
  'emails.subscriptionRenewIndl.subject' => 'Renovação de Subscrição: Individual',
  'emails.subscriptionRenewIndl.body' => 'Uma subscrição individual foi renovada online para a revista {$contextName} com as informações a seguir.<br />
<br />
Tipo de Subscrição:<br />
{$subscriptionType}<br />
<br />
Utilizador:<br />
{$userDetails}<br />
<br />
Informação de Membro (caso indicado):<br />
{$membership}<br />
<br />
Para visualizar ou editar esta subscrição, aceda ao URL a seguir.<br />
<br />
URL: {$subscriptionUrl}<br />
',
  'emails.subscriptionRenewIndl.description' => 'Esta mensagem notifica o Gestor de Subscrições que uma subscrição individual foi renovada online. Oferece informações sobre a subscrição e um link para acesso rápido à mesma.',
  'emails.subscriptionRenewInstl.subject' => 'Renovação de Subscrição: Institucional',
  'emails.subscriptionRenewInstl.body' => 'Uma subscrição institucional foi renovada online para a revista {$contextName} com os dados a seguir.<br />
<br />
Tipo de subscrição:<br />
{$subscriptionType}<br />
<br />
Instituição:<br />
{$institutionName}<br />
{$institutionMailingAddress}<br />
<br />
Domínio (caso informado):<br />
{$domain}<br />
<br />
Faixas de IP (caso indicado):<br />
{$ipRanges}<br />
<br />
Contacto:<br />
{$userDetails}<br />
<br />
Registo em Entidade de Classe (caso indicado):<br />
{$membership}<br />
<br />
Para visualizar ou editar esta subscrição, aceda à URL a seguir.<br />
<br />
URL: {$subscriptionUrl}<br />
',
  'emails.subscriptionRenewInstl.description' => 'Esta mensagem notifica o Gestor de Subscrição que uma subscrição institucional foi renovada online. Oferece informações sobre a subscrição e um link para acesso rápido à mesma.',
  'emails.citationEditorAuthorQuery.subject' => 'Edição da Citação',
  'emails.citationEditorAuthorQuery.body' => '{$authorFirstName},<br />
<br />
Por favor, verifique ou indique as citações adequadas para o seu artigo, {$submissionTitle}:<br />
<br />
{$rawCitation}<br />
<br />
Obrigado!<br />
<br />
{$userFirstName}<br />
Editor de Texto, {$contextName}<br />
',
  'emails.citationEditorAuthorQuery.description' => 'Este e-mail permite aos editores de texto que solicitem aos autores informação adicional sobre as referências.',
  'emails.editorDecisionSendToExternal.subject' => 'Decisão editorial',
  'emails.editorDecisionSendToExternal.body' => '{$authorName}:<br />
<br />
Foi tomada uma decisão sobre o artigo submetido a {$contextName}, &quot;{$submissionTitle}&quot;.<br />
<br />
A decisão é: Enviar para Revisão<br />
<br />
URL da submissão: {$submissionUrl}',
  'emails.editorDecisionSendToExternal.description' => 'Este email é enviado pelo Editor/Editor de Secção ao Autor serve para o notificar que a submissão foi enviada para uma revisão externa.',
  'emails.editorDecisionSendToProduction.subject' => 'Decisão editorial',
  'emails.editorDecisionSendToProduction.body' => '{$authorName}:<br />
<br />
A edição da sua submissão, &quot;{$submissionTitle},&quot; está concluída.  O artigo foi enviado para a produção.<br />
<br />
URL da submissão : {$submissionUrl}',
  'emails.editorDecisionSendToProduction.description' => 'Este e-mail é enviado pelo Editor/Editor de Secção ao Autor a notificá-lo que a sua submissão foi enviada para produção.',
  'emails.notificationCenterDefault.subject' => 'Uma mensagem relativa {$contextName}',
  'emails.notificationCenterDefault.body' => 'Escreva a sua mensagem.',
  'emails.notificationCenterDefault.description' => 'A mensagem padrão (em branco) usada no Construtor de Listas de Mensagens do Centro de Notificações.',
  'emails.reviewRequestAttachedSubsequent.subject' => 'Pedido de revisão de artigo',
  'emails.reviewRequestAttachedSubsequent.body' => '{$reviewerName}:<br />
<br />
Esta mensagem é relativa ao manuscrito &quot;{$submissionTitle},&quot; submetido a {$contextName}.<br />
<br />
Na sequência do processo de revisão, os autores submeteram a versão revista do artigo. Gostaríamos que considerasse a sua revisão.<br />
<br />
As Instruções de Revisão desta revista são apresentadas abaixo, e a submissão foi anexada a este e-mail. A sua revisão do artigo, conjuntamente com as suas recomendações, devem ser enviadas até {$reviewDueDate}.<br />
<br />
Indique até {$responseDueDate} se está disponível para fazer a revisão. <br />
<br />
Agradecemos a sua resposta a este pedido.<br />
<br />
{$editorialContactSignature}<br />
<br />
<br />
Instruções de Revisão<br />
<br />
{$reviewGuidelines}<br />
',
  'emails.reviewRequestAttachedSubsequent.description' => 'Este e-mail é enviado pelo Editor de Secção para o Revisor a solicitar que aceite ou recuse a tarefa de rever um artigo na segunda ronda de revisão. Inclui a submissão como anexo. Esta mensagem é usada quando o Processo de revisão como anexo de e-mail está selecionado em Configurações > Fluxo de trabalho > Revisão. (Caso contrário, veja REVIEW_REQUEST_SUBSEQUENT.)',
  'emails.reviewRequestOneclickSubsequent.subject' => 'Pedido de revisão de artigo',
  'emails.reviewRequestOneclickSubsequent.body' => '{$reviewerName}:<br />
<br />
Este pedido é relativo ao manuscrito &quot;{$submissionTitle},&quot; submetido a {$contextName}.<br />
<br />
Na sequência da revisão, os autores submeteram uma versão revista do artigo. Gostaríamos que considerasse a sua revisão.<br />
<br />
Por favor, aceda à revista até {$responseDueDate} para informar sobre a sua disponibilidade ou não de realizar a revisão, assim como para aceder ao artigo e registar a sua revisão e recomendações.<br />
<br />
O prazo de entrega da revisão é {$reviewDueDate}.<br />
<br />
URL da submissão: {$submissionReviewUrl}<br />
<br />
Agradecemos a resposta a este pedido.<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestOneclickSubsequent.description' => 'Este e-mail é enviado pelo Editor de Secção ao Revisor a solicitar que aceite ou recuse a tarefa de rever um artigo submetido para uma segunda ronda de revisão. Fornece informações sobre a submissão, como o título e resumo, o prazo de revisão e como aceder à própria submissão. Esta mensagem é usada quando o Processo de Revisão Padrão é selecionado em Configurações > Fluxo de Trabalho > Revisão e o acesso com um clique está ativo.',
  'emails.reviewRequestRemindAuto.subject' => 'Lembrete de pedido de revisão de artigo',
  'emails.reviewRequestRemindAuto.body' => '{$reviewerName}:<br />
Esta mensagem serve como lembrete do pedido de revisão do artigo, & quot; {$submissionTitle}, & quot; submetido a {$contextName}. Esperávamos obter a sua resposta até {$responseDueDate}, e este e-mail foi gerado automaticamente e enviado quando passou essa data.
<br />
Acreditamos que poderá ser um excelente revisor do manuscrito. O resumo da submissão está inserido abaixo, e esperamos que considere realizar esta importante tarefa.<br />
<br />
Aceda ao site da revista para indicar se está disponível para realizar a revisão ou não, bem como aceder à submissão e registar a sua revisão e recomendações. O site é {$contextUrl}<br />
<br />
O prazo da entrega da revisão é {$reviewDueDate}.<br />
<br />
Se não tem nome de utilizador e senha para aceder à revista, pode usar este link para gerar a sua senha (que será enviada por e-mail junto com o seu nome de utilizador). {$passwordResetUrl}<br />
<br />
URL da submissão: {$submissionReviewUrl}<br />
<br />
Agradecemos a resposta a este pedido.<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestRemindAuto.description' => 'Este e-mail é enviado automaticamente quando o prazo de confirmação de um revisor expira (consulte Opções de revisão em Configurações > Fluxo de trabalho > Revisão) e o acesso com um clique como revisor está desativado. As tarefas agendadas devem ser ativadas e configuradas (consulte o ficheiro de configuração do site).',
  'emails.reviewRequestRemindAutoOneclick.subject' => 'Pedido de revisão de artigo',
  'emails.reviewRequestRemindAutoOneclick.body' => '{$reviewerName}:<br />
Esta mensagem é um lembrete relativo ao pedido de revisão da submissão, & quot; {$submissionTitle}, & quot; à {$contextName}. Esperávamos obter a sua resposta até {$responseDueDate}, e este e-mail foi gerado automaticamente e enviado com a passagem dessa data.
<br />
Acreditamos que poderá ser um excelente revisor para o manuscrito. O resumo da submissão está inserido abaixo, e esperamos que considere realizar esta importante tarefa.<br />
<br />
Aceda ao site da revista para indicar se está disponível para realizar a revisão ou não, bem como aceder à submissão e registar a sua revisão e recomendações. <br />
<br />
O prazo da entrega da revisão é {$reviewDueDate}.<br />
<br />
URL da submissão: {$submissionReviewUrl}<br />
<br />
Agradecemos a resposta a este pedido.<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestRemindAutoOneclick.description' => 'Este e-mail é enviado automaticamente quando o prazo de confirmação de um revisor expirou (consulte Opções de revisão em Configurações> Fluxo de trabalho> Revisão) e o acesso com um clique como revisor está ativado. As tarefas agendadas devem ser ativadas e configuradas (consulte o ficheiro de configuração do site).',
  'emails.reviewRequestSubsequent.subject' => 'Pedido de revisão de artigo',
  'emails.reviewRequestSubsequent.body' => '{$reviewerName}:<br />
<br />
Esta mensagem é relativa ao manuscrito &quot;{$submissionTitle},&quot; submetido a {$contextName}.<br />
<br />
Na sequência da sua revisão, os autores submeteram uma versão revista do artigo. Gostaríamos que considerasse a sua revisão.<br />
<br />
Por favor, aceda ao site da revista até {$responseDueDate} para indicar se está disponível ou não para realizar a revisão, assim como aceder à submissão e registar a sua revisão e recomendações. O site da revista é {$contextUrl}<br />
<br />
O prazo de revisão é {$reviewDueDate}.<br />
<br />
Se não tem nome de utilizador e senha para aceder ao site da revista, poderá usar este link para gerar a sua senha (que será enviada por e-mail juntamente com o seu nome de utilizador). {$passwordResetUrl}<br />
<br />
URL da submissão: {$submissionReviewUrl}</a><br />
<br />
Agradecemos a resposta a este pedido.<br />
<br />
{$editorialContactSignature}<br />
<br />
&quot;{$submissionTitle}&quot;<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestSubsequent.description' => 'Este e-mail é enviado pelo Editor de Secção ao Revisor a solicitar que aceite ou recuse a tarefa de rever um artigo numa segunda ronda de revisão. Fornece informações sobre a submissão, como o título e resumo, prazo de revisão e como aceder à própria submissão. Esta mensagem é usada quando o Processo de revisão padrão é selecionado em Configurações > Fluxo de trabalho > Revisão. (Caso contrário, consulte REVIEW_REQUEST_ATTACHED_SUBSEQUENT.)',
  'emails.revisedVersionNotify.subject' => 'Versão revista enviada',
  'emails.revisedVersionNotify.body' => 'Cara(o) Editor:<br />
<br />
A versão revista do &quot;{$submissionTitle}&quot; foi enviada pelo autor {$authorName}.<br />
<br />
URL da submissão: {$submissionUrl}<br />
<br />
{$editorialContactSignature}',
  'emails.revisedVersionNotify.description' => 'Este e-mail é enviado automaticamente ao Editor designado quando o autor envia uma versão revista de um artigo.',
  'emails.submissionAckNotUser.subject' => 'Agradecimento pela submissão',
  'emails.submissionAckNotUser.body' => 'Olá,<br />
<br />
{$submitterName} submeteu o manuscrito, &quot;{$submissionTitle}&quot; à {$contextName}. <br />
<br />
Se tiver questões, por favor contacte-nos. Obrigado por considerar esta revisão como meio de difusão do seu trabalho.<br />
<br />
{$editorialContactSignature}',
  'emails.submissionAckNotUser.description' => 'Este e-mail, quando ativo, é enviado automaticamente para os outros autores que não são utilizadores do Portal especificados durante o processo de envio.',
  'emails.editorDecisionInitialDecline.subject' => 'Decisão Editorial',
  'emails.editorDecisionInitialDecline.body' => '
			{$authorName}:<br />
<br />
Em relação à sua submissão à revista {$contextName}, &quot;{$submissionTitle}&quot; foi tomada uma decisão.<br />
<br />
A decisão é: Rejeitar a Submissão',
  'emails.editorDecisionInitialDecline.description' => 'Este e-mail é enviado ao autor se o editor decidir rejeitar a submissão numa fase inicial, antes do processo de revisão',
  'emails.editorRecommendation.subject' => 'Recomendação Editorial',
  'emails.editorRecommendation.body' => '{$editors}:<br />
<br />
A recomendação relativamente à submissão para  {$contextName}, &quot;{$submissionTitle}&quot; é: {$recommendation}',
  'emails.editorRecommendation.description' => 'Este e-mail é enviado pelo Editor ou Editor de Secção ao Editor que emite a decisão editorial a notificar da recomendação final relativa à submissão.',
  'emails.reviewReinstate.description' => 'Este email é enviado pelo Editor de Secção ao Revisor que possui uma revisão em curso para o notificar de que uma revisão cancelada, foi restabelecida.',
  'emails.reviewReinstate.body' => '{$reviewerName}:<br />
<br />
Gostaríamos de restabelecer o nosso pedido para que reveja esta submissão, &quot;{$submissionTitle},&quot; para a {$contextName}. Esperamos que esteja disponível para ajudar no processo de revisão a esta revista.<br />
<br />
Se tiver alguma questão, não hesite em contactar.',
  'emails.reviewReinstate.subject' => 'Pedido de revisão restabelecida',
  'emails.statisticsReportNotification.description' => 'Este email é enviado automaticamente todos os meses aos editores e editores-gestores para os informar do estado da revista.',
  'emails.statisticsReportNotification.body' => '
{$name}, <br />
<br />
O relatório da revista para {$month}, {$year} já se encontra disponível. Os principais indicadores para estes mês são: <br />
<ul>
	<li>Novas submissões feitas este mês: {$newSubmissions}</li>
	<li>Submissões rejeitadas este mês: {$declinedSubmissions}</li>
	<li>Submissões aceites este mês: {$acceptedSubmissions}</li>
	<li>Total de submissões no sistema: {$totalSubmissions}</li>
</ul>
Inicie sessão na revista para aceder a mais detalhes dos <a href="{$editorialStatsLink}">indicadores editoriais</a> e <a href="{$publicationStatsLink}">estatísticas de trabalhos publicados</a>. Segue em anexo uma cópia dos indicadores editoriais deste mês.<br />
<br />
Cumprimentos,<br />
{$principalContactSignature}',
  'emails.statisticsReportNotification.subject' => 'Atividade Editorial para {$month}, {$year}',
  'emails.announcement.description' => 'Este email é enviado quando uma nova notícia é criada.',
  'emails.announcement.body' => '<b>{$title}</b><br />
<br />
{$summary}<br />
<br />
Visite o nosso site para ler a <a href="{$url}">notícia completa</a>.',
  'emails.announcement.subject' => '{$title}',
);