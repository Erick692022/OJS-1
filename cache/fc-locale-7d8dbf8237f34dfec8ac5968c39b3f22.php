<?php return array (
  'emails.reviewerRegister.subject' => 'ユーザー名『{$contextName}』で査読者として登録されました',
  'emails.passwordResetConfirm.description' => 'このメールは、登録ユーザーからパスワードを忘れた、または、ログインできない旨の連絡を受けた場合に、登録ユーザーに送信されるものです。このメールではパスワードをリセットするためのURLを提供します。',
  'emails.userValidate.description' => 'このメールは、新規登録したユーザーに送付され、ユーザー名とパスワードを通知します。',
  'emails.userValidate.body' => '{$userFullName}様<br />
<br />
雑誌『{$contextName}』用のアカウントを作成しました。このアカウントを有効にするには、メールアドレスの確認が必要です。以下のリンクをクリックして確認してください。<br />
<br />
{$activateUrl}<br />
<br />
ありがとうございました。<br />
{$principalContactSignature}',
  'emails.userValidate.subject' => 'アカウントの確認',
  'emails.userRegister.description' => 'このメールは、新規に登録したユーザーに送信されるもので、システムへの登録を歓迎し、ユーザー名とパスワードの記録を提供します。',
  'emails.userRegister.body' => '{$userFullName}様<br />
<br />
雑誌『{$contextName}』への登録ありがとうございました。ユーザー名とパスワードは、この雑誌のすべての処理で必要となりますので、大切に保管してください。どの時点でも、私に連絡することで、雑誌のユーザーリストからの削除を依頼することができます。<br />
<br />
ユーザー名: {$username}<br />
パスワード:  {$password}<br />
<br />
よろしくお願いいたします。<br />
{$principalContactSignature}',
  'emails.userRegister.subject' => '新規ユーザーの登録',
  'emails.passwordReset.description' => 'このメールは、PASSWORD_RESET_CONFIRMメールで説明されている処理を受けてパスワードのリセットが成功した場合に、登録ユーザーに送信されるものです。',
  'emails.passwordReset.body' => 'ご利用の{$siteTitle}のWebサイトのパスワードのリセットが終了しました。このユーザー名とパスワードは、雑誌のすべての処理で必要となりますので、大切に保管してください。<br />
<br />
あなたのユーザー名: {$username}<br />
あなたのパスワード: {$password}<br />
<br />
よろしくお願いいたします。<br />
<br />
{$principalContactSignature}',
  'emails.passwordReset.subject' => 'パスワードのリセット',
  'emails.passwordResetConfirm.body' => '{$siteTitle}のWebサイトにログインするパスワードのリセット依頼を受け取りました。<br />
<br />
リセット依頼をした覚えがない場合は、申し訳ありませんが、このメールを無理し、パスワードは変更しないでください。パスワードのリセットを希望される場合は、下のURLをクリックしてください。<br />
<br />
パスワードのリセット: {$url}<br />
<br />
よろしくお願いいたします。<br />
<br />
{$principalContactSignature}',
  'emails.passwordResetConfirm.subject' => 'パスワードリセットの確認',
  'emails.notification.description' => 'このメールは新規に登録された査読者に送付され、ユーザー名とパスワードが通知されます。',
  'emails.notification.body' => '{$siteTitle}からの新しいお知らせです。<br />
<br />
{$notificationContents}<br />
<br />
Link: {$url}<br />
<br />
{$principalContactSignature}',
  'emails.notification.subject' => '{$siteTitle}からの新しいお知らせ',
  'emails.submissionAckNotUser.description' => 'このメールは（設定で有効になっていれば）OJSに登録していない著者がこの雑誌への投稿プロセスを終了した時に、自動的に送信されるものです。',
  'emails.submissionAckNotUser.body' => '拝啓<br />
<br />
{$submitterName}が雑誌『{$journalName}』に原稿「{$contextName}」をご投稿されました。 <br />
<br />
何かご不明な点がございましたら、ご連絡ください。研究成果の発表の場として、本雑誌をご検討いただき、誠にありがとうございました。<br />
<br />
{$editorialContactSignature}',
  'emails.submissionAckNotUser.subject' => '投稿のお礼',
  'emails.submissionAck.description' => 'このメールは（設定で有効になっていれば）著者がこの雑誌への投稿プロセスを終了した時に、自動的に送信されるものです。メールでは、投稿物の処理状況を追跡できることを伝える同時に、著者に投稿に対するお礼をしています。',
  'emails.submissionAck.body' => '{$authorName}様<br />
<br />
雑誌『{$contextName}』に原稿「{$submissionTitle}」をご投稿いただき、ありがとうございました。本誌が使用しているオンライン雑誌管理システムでは、雑誌のWebサイトにログインすることにより、編集過程の進捗状況を確認することができます。<br />
<br />
原稿のURL: {$submissionUrl}<br />
ユーザー名: {$authorUsername}<br />
<br />
何かご不明な点がございましたら、ご連絡ください。研究成果の発表の場として、本雑誌をご検討いただき、誠にありがとうございました。<br />
<br />
{$editorialContactSignature}',
  'emails.submissionAck.subject' => '投稿のお礼',
  'emails.lockssNewArchive.description' => 'このメールは、受信者がLOCKSSイニシアティブに参加し、この雑誌をアーカイブに追加することを薦めるものです。メールでは、LOCKSSイニシアティブに関する情報と参加方法を提供します。',
  'emails.lockssNewArchive.body' => '[大学図書館長] 御中<br />
<br />
本誌『{$contextName}』 &amp;lt;{$contextUrl}&amp;gt;は、貴学の教官 [教官名]殿に[役職名]をお願いしているものです。本誌は、貴館およびその他の大学図書館との間でLOCKSS（Lots of Copies Keep Stuff Safe）準拠のアーカイブを構築したいと考えております。<br />
<br />
[雑誌の簡単な説明]<br />
<br />
図書館と出版者による国際的なイニシアティブであるLOCKSS Program &amp;lt;http://lockss.org/&amp;gt;は、分散型保存の運用例としてリポジトリのアーカイブを行うものです。詳細について、以下でご説明します。普通のパソコンで利用できる無料のソフトウェアが存在します。このシステムは容易にオンライン化することができ、保守作業もほとんど必要としません。<br />
<br />
私たちの雑誌のアーカイブを支援するために、貴館がLOCKSSコミュニティの一員となり、貴学の教官や世界中の研究者が作成する論文の収集･保存にご協力いただけるようお願いする次第です。そのために、貴館の職員にLOCKSSのサイトにアクセスして、このシステムの運用方法に関する情報を調査するようお願いいたします。貴学が、本誌のためにこのアーカイブサポートを提供していただけるという良い知らせを期待しております。
<br />
<br />
よろしくご検討くださるよう、お願いいたします。<br />
{$principalContactSignature}',
  'emails.lockssNewArchive.subject' => '『{$contextName}』保存のお願い',
  'emails.lockssExistingArchive.description' => 'このメールは、LOCKSSアーカイブの管理者にこの雑誌をアーカイブに追加することを検討してもらうことを依頼するものです。メールでは、雑誌のLOCKSS出版者宣言書のURLを提供します。',
  'emails.lockssExistingArchive.body' => '大学図書館長] 御中<br />
<br />
本誌『{$contextName} 』&amp;lt;{$contextUrl}&amp;gt;は、貴学の教官 [教官名]殿に[役職名]をお願いしているものです。本誌は、貴館およびその他の大学図書館との間でLOCKSS（Lots of Copies Keep Stuff Safe）準拠のアーカイブを構築したいと考えております。<br />
<br />
[雑誌の簡単な説明]<br />
<br />
本誌のLOCKSS出版者宣言書のURLは {$contextUrl}/gateway/lockss です。<br />
<br />
貴館は既にLOCKSSに参加していると伺っております。私たちの雑誌を貴館のLOCKSSに登録するためにメタデータを提供できるなら、喜んで提供したいと考えております。
<br />
<br />
よろしくご検討くださるよう、お願いいたします。<br />
{$principalContactSignature}',
  'emails.lockssExistingArchive.subject' => '『{$contextName}』保存のお願い',
  'emails.publishNotify.description' => 'このメールは、編集者のユーザーページにある「利用者への通知」リンクにより、登録ユーザーに送信されるものです。このメールは、最新号の発行を読者に通知し、URLを示して雑誌にアクセスするよう案内します。',
  'emails.publishNotify.body' => '読者各位:<br />
<br />
いつもご利用ありがとうございます。<br />
<br />
雑誌『{$contextName} 』は、今日、最新号を発行しました。目次を送付いたしますので、興味のある論文や記事について、実際に雑誌のWebサイトにアクセスしてチェックしていただくようご案内いたします。雑誌WebサイトのURLは、{$contextUrl}です。<br />
<br />
引き続きよろしくお願いいたします。<br />
{$editorialContactSignature}',
  'emails.publishNotify.subject' => '最新号の発行案内',
  'emails.reviewerRegister.description' => 'このメールは新規に登録された査読者に送付され、ユーザー名とパスワードが通知されます。',
  'emails.reviewerRegister.body' => '突然のメールをお許しください。<br />
<br />
貴殿の専門性に鑑み、失礼ですが私どもの雑誌『{$contextName}』の査読者データベースにあなたの名前を登録させていただきました。これによりあなたに何らかの義務が発生することはありません。ただ、できたら査読をお願いできるようにしておきたかっただけです。査読をお願いする場合は、対象となる論文のタイトルと要旨を見る機会を持っていただきます。もちろん、査読の依頼に応じるか否かの判断は常に貴殿に委ねられます。また、任意の時点で、この査読者リストから貴殿の名前を削除することもできます。<br />
<br />
以下に、貴殿のユーザー名とパスワードをご報告いたします。これを使用することにより、雑誌のWebサイトであらゆる処理（例えば、査読対象分野の変更など、貴殿のプロフィールの更新）を行うことができます。<br />
<br />
ユーザー名: {$username}<br />
パスワード: {$password}<br />
<br />
ご協力よろしくお願いいたします。<br />
{$principalContactSignature}',
  'emails.reviewRequestRemindAuto.description' => 'このメールは、査読者の確認期限が過ぎた場合（「設定」>「ワークフロー」>「査読」の「査読オプション」を参照）、査読者のワンクリックアクセスが無効になっている場合に自動的に送信されます。スケジュールされたタスクを有効にして設定する必要があります（サイト設定ファイルを参照）。',
  'emails.reviewRequestRemindAuto.body' => '{$reviewerName}様<br />
<br />
雑誌『{$contextName}』への投稿原稿「{$submissionTitle}」の査読をお願いいたしたくメールを差し上げました。このメールは、{$responseDueDate}までにご返信をいただければと思っていたのですが、その日を過ぎた時点で自動リマインダーを送信させていただきます。<br />
<br />
投稿物の要旨を以下に添付しました。貴殿がこの重要な仕事を引き受けてくださることを希望いたしております。<br />
<br />
雑誌のWebサイトにログインして、査読を引き受けていただけるかどうかを示していただけるようお願いいたします。引き受けていただける場合は、このサイトで投稿物にアクセスし、査読結果と答申を記録することができます。雑誌のWebサイトのURLは、{$contextUrl} です。<br />
<br />
査読作業自体の期限日は、{$reviewDueDate}です。<br />
<br />
雑誌のWebサイトにアクセスするユーザー名とパスワードをお持ちでない場合は、次のリンクを使ってパスワードをリセットしてください（パスワードはユーザー名と共にメールで送信されます）: {$passwordResetUrl}<br />
<br />
投稿物のURL: {$submissionReviewUrl}<br />
<br />
よろしくご検討くださるよう、お願いいたします。<br />
<br />
{$editorialContactSignature}<br />
<br />
「{$submissionTitle}」<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestRemindAuto.subject' => 'リマインダー：論文査読のお願い',
  'emails.reviewRequest.description' => 'このメールは、セクションエディタから査読者に投稿物の査読を依頼するものです。メールには、タイトルや要旨などの投稿物に関する情報、査読期限日、投稿物へのアクセス方法を示しています。このメールは、雑誌設定のステップ2で標準的査読プロセスが選択された場合に使用されます（そうでない場合は、REVIEW_REQUEST_ATTACHEDを参照してください）。',
  'emails.reviewRequest.body' => '{$reviewerName}様<br />
<br />
雑誌『{$contextName}』への投稿原稿「{$submissionTitle}」の査読をお願いいたしたくメールを差し上げました。投稿物の要旨を以下に添付しました。貴殿がこの重要な仕事を引き受けてくださることを希望いたしております。<br />
<br />
{$responseDueDate}までに、雑誌のWebサイトにログインして、査読を引き受けていただけるかどうかを示していただけるようお願いいたします。引き受けていただける場合は、このサイトで投稿物にアクセスし、査読結果と答申を記録することができます。雑誌のWebサイトのURLは、{$contextUrl} です。<br />
<br />
査読作業自体の期限日は、{$reviewDueDate}です。<br />
<br />
雑誌のWebサイトにアクセスするユーザー名とパスワードをお持ちでない場合は、次のリンクを使ってパスワードをリセットしてください（パスワードはユーザー名と共にメールで送信されます）: {$passwordResetUrl}<br />
<br />
投稿物のURL: {$submissionReviewUrl}<br />
<br />
よろしくご検討くださるよう、お願いいたします。<br />
<br />
{$editorialContactSignature}<br />
<br />
「{$submissionTitle}」<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequest.subject' => '論文査読のお願い',
  'emails.editorAssign.description' => 'このメールは、編集者からセクションエディタに投稿物の編集プロセスを監督する作業を任命したことを通知するものです。メールには投稿物に関する情報と雑誌サイトへのアクセス法を示しています。',
  'emails.editorAssign.body' => '{$editorialContactName}様<br />
<br />
この度、雑誌『{$contextName}』への投稿論文「{$submissionTitle}」のセクションエディタとして、編集プロセス全般の管理をお願いすることになりました。<br />
<br />
投稿物のURL: {$submissionUrl}<br />
ユーザー名: {$editorUsername}<br />
<br />
よろしくお願いいたします。',
  'emails.editorAssign.subject' => 'セクションエディタ任命のお知らせ',
  'emails.reviewRemindAuto.description' => 'このメールは、査読者の査読期限日が過ぎ（雑誌設定ステップ2の査読オプションを参照）、査読者ワンクリックアクセスが無効な場合に、自動的に送信されるものです。定期タスク機能が有効かつ設定されている必要があります（サイト設定ファイルを参照）。',
  'emails.reviewRemindAuto.body' => '{$reviewerName} 様:<br />
<br />
雑誌『{$contextName}』への投稿原稿「{$submissionTitle}」の査読は進んでいるでしょうか。査読期限日は、{$reviewDueDate}となっております。このメールは、期限日が過ぎた査読者に対し、システムにより自動的に作成され送信されるものです。準備ができ次第できるだけ早く査読結果をいただきたいと考えております。<br />
<br />
雑誌のWebサイトにログインするユーザー名とパスワードをお持ちでない場合は、次のリンクを使ってパスワードをリセットしてください（パスワードはユーザー名と共にメールで送信されます）： {$passwordResetUrl}<br />
<br />
投稿物のURL: {$submissionReviewUrl}<br />
<br />
本誌の投稿物にとって極めて重要なこの貢献を貴殿が遂行できることを確認してください。お返事をお待ちしております。<br />
<br />
よろしくお願いいたします。<br />
<br />
{$editorialContactSignature}',
  'emails.reviewRemindAuto.subject' => '論文査読の督促（自動送信）',
  'emails.reviewRemindOneclick.subject' => '論文査読の督促',
  'emails.reviewRemindOneclick.description' => 'このメールは、セクションエディタから査読者に査読期限日が過ぎたことを督促するものです。',
  'emails.reviewRemind.description' => 'このメールは、セクションエディタから査読者に査読期限日が過ぎたことを督促するものです。',
  'emails.reviewRemindOneclick.body' => '{$reviewerName} 様:<br />
<br />
雑誌『{$contextName}』への投稿原稿「{$submissionTitle}」の査読は進んでいるでしょうか。査読期限日は、{$reviewDueDate}となっております。準備ができ次第できるだけ早く査読結果をいただきたいと考えております。<br />
<br />
雑誌のWebサイトにログインするユーザー名とパスワードをお持ちでない場合は、次のリンクを使ってパスワードをリセットしてください（パスワードはユーザー名と共にメールで送信されます）： {$passwordResetUrl}<br />
<br />
投稿物のURL: {$submissionReviewUrl}<br />
<br />
本誌の投稿物にとって極めて重要なこの貢献を貴殿が遂行できることを確認してください。お返事をお待ちしております。<br />
<br />
よろしくお願いいたします。<br />
<br />
{$editorialContactSignature}',
  'emails.reviewRemind.body' => '{$reviewerName} 様:<br />
<br />
雑誌『{$contextName}』への投稿原稿「{$submissionTitle}」の査読は進んでいるでしょうか。査読期限日は、{$reviewDueDate}となっております。準備ができ次第できるだけ早く査読結果をいただきたいと考えております。<br />
<br />
雑誌のWebサイトにログインするユーザー名とパスワードをお持ちでない場合は、次のリンクを使ってパスワードをリセットしてください（パスワードはユーザー名と共にメールで送信されます）： {$passwordResetUrl}<br />
<br />
投稿物のURL: {$submissionReviewUrl}<br />
<br />
本誌の投稿物にとって極めて重要なこの貢献を貴殿が遂行できることを確認してください。お返事をお待ちしております。<br />
<br />
よろしくお願いいたします。<br />
<br />
{$editorialContactSignature}',
  'emails.reviewRemind.subject' => '論文査読の督促',
  'emails.reviewAck.description' => 'このメールは、セクションエディタから査読者に査読が完了したことを確認し、その貢献に感謝するものです。',
  'emails.reviewAck.body' => '{$reviewerName}様:<br />
<br />
雑誌『{$contextName}』への投稿原稿「{$submissionTitle}」の査読をしていただき、ありがとうございました。本誌が発行する論文の品質向上に対する貴殿の貢献に対し感謝いたします。',
  'emails.reviewAck.subject' => '論文査読のお礼',
  'emails.reviewDecline.description' => 'このメールは、査読者からセクションエディタに査読依頼を受けることができない旨を通知するものです。',
  'emails.reviewDecline.body' => '編集部 御中:<br />
<br />
申し訳ありませんが、今回は、雑誌『{$contextName}』への投稿原稿「{$submissionTitle}」の査読をお受けすることはできません。査読者に選んでいただきありがとうございました。また、機会がございましたら、ご連絡ください。<br />
<br />
よろしくお願いいたします。<br />
{$reviewerName}',
  'emails.reviewDecline.subject' => '査読依頼の謝絶',
  'emails.reviewConfirm.description' => 'このメールは、査読者からセクションエディタに査読依頼を受諾し、指定された期日までに査読を終了させる意思を伝えるものです。',
  'emails.reviewConfirm.body' => '編集部 御中:<br />
<br />
雑誌『{$contextName}』への投稿物「{$submissionTitle}」の査読の件ですが、喜んでやらせていただきます。査読者に選んでいただき、ありがとうございました。ご指定の査読期限、{$reviewDueDate}までには査読を終わらせるつもりです。<br />
<br />
よろしくお願いします。<br />
{$reviewerName}',
  'emails.reviewConfirm.subject' => '査読依頼の受諾',
  'emails.reviewCancel.description' => 'このメールは、セクションエディタから査読者に既に開始している査読が取りやめになったことを通知するものです。',
  'emails.reviewCancel.body' => '{$reviewerName} 様:<br />
<br />
以前お願いしておりました、雑誌『{$contextName}』への投稿物「{$submissionTitle}」の査読の件ですが、誠に勝手ながら事情により取り消させていただくことになりました。ご迷惑をおかけして、誠に申し訳ありませんでした。今後また査読をお願いすることがあろうかと思いますが、その節はよろしくお願いいたします。<br />
<br />
何かご不明な点がございましたら、ご連絡ください。<br />
<br />
よろしくお願いいたします。',
  'emails.reviewCancel.subject' => '査読依頼取消のお願い',
  'emails.reviewRequestAttachedSubsequent.description' => 'このメールは、セクションエディタから査読者に投稿物の査読の次回目を依頼するものです。メールには、査読物をファイルで添付します。このメールは、雑誌設定のステップ2でメール添付による査読プロセスが選択された場合に使用されます（そうでない場合は、REVIEW_REQUEST_SUBSEQUENTを参照してください）。',
  'emails.reviewRequestAttachedSubsequent.body' => '{$reviewerName}様<br />
<br />
雑誌『{$contextName}』への投稿原稿「{$submissionTitle}」に関して連絡いたします。<br />
<br />
この度、前回の原稿の査読を経て、改訂版が提出されました。評価にご協力いただければ幸いです。<br />
<br />
この雑誌の査読の手引きを以下に添付しました。また、投稿物はメールの添付ファイルとしてお送りいたしました。投稿物の査読結果と答申は、{$reviewDueDate}までに私宛にメールでいただきたいと考えております。<br />
<br />
査読をしていただけるか否かを、{$responseDueDate}までにメールでご返事いただけるようお願いいたします。
<br />
よろしくご検討くださるよう、お願いいたします。<br />
<br />
{$editorialContactSignature}<br />
<br />
<br />
査読の手引き<br />
<br />
{$reviewGuidelines}<br />
',
  'emails.reviewRequestAttachedSubsequent.subject' => '論文査読のお願い',
  'emails.reviewRequestOneclickSubsequent.description' => 'このメールは、セクションエディタから査読者に投稿物の査読の次回目を依頼するものです。メールには、タイトルや要旨などの投稿物に関する情報、査読期限日、投稿物へのアクセス方法を示しています。このメールは、雑誌設定のステップ2で標準的査読プロセスが選択され、査読者ワンクリックアクセスが有効な場合に使用されます。',
  'emails.reviewRequestOneclickSubsequent.body' => '{$reviewerName}様<br />
<br />
雑誌『{$contextName}』への投稿原稿「{$submissionTitle}」に関して連絡いたします。<br />
<br />
この度、前回の原稿の査読を経て、改訂版が提出されました。評価にご協力いただければ幸いです。<br />
<br />
{$responseDueDate}までに、雑誌のWebサイトにログインして、査読を引き受けていただけるかどうかを示していただけるようお願いいたします。引き受けていただける場合は、このサイトで投稿物にアクセスし、査読結果と答申を記録することができます。雑誌のWebサイトのURLは、{$contextUrl} です。<br />
<br />
査読作業自体の期限日は、{$reviewDueDate}です。<br />
<br />
雑誌のWebサイトにアクセスするユーザー名とパスワードをお持ちでない場合は、次のリンクを使ってパスワードをリセットしてください（パスワードはユーザー名と共にメールで送信されます）: {$passwordResetUrl}<br />
<br />
投稿物のURL: {$submissionReviewUrl}<br />
<br />
よろしくご検討くださるよう、お願いいたします。<br />
<br />
{$editorialContactSignature}<br />
<br />
「{$submissionTitle}」<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestOneclickSubsequent.subject' => '論文査読のお願い',
  'emails.reviewRequestSubsequent.description' => 'このメールは、セクションエディタから査読者に投稿物の査読の次回目を依頼するものです。メールには、タイトルや要旨などの投稿物に関する情報、査読期限日、投稿物へのアクセス方法を示しています。このメールは、雑誌設定のステップ2で標準的査読プロセスが選択された場合に使用されます（そうでない場合は、REVIEW_REQUEST_ATTACHED_SUBSEQUENTを参照してください）。',
  'emails.reviewRequestSubsequent.body' => '{$reviewerName}様<br />
<br />
雑誌『{$contextName}』への投稿原稿「{$submissionTitle}」に関して連絡いたします。<br />
<br />
この度、前回の原稿の査読を経て、改訂版が提出されました。評価にご協力いただければ幸いです。<br />
<br />
{$responseDueDate}までに、雑誌のWebサイトにログインして、査読を引き受けていただけるかどうかを示していただけるようお願いいたします。引き受けていただける場合は、このサイトで投稿物にアクセスし、査読結果と答申を記録することができます。雑誌のWebサイトのURLは、{$contextUrl} です。<br />
<br />
査読作業自体の期限日は、{$reviewDueDate}です。<br />
<br />
雑誌のWebサイトにアクセスするユーザー名とパスワードをお持ちでない場合は、次のリンクを使ってパスワードをリセットしてください（パスワードはユーザー名と共にメールで送信されます）: {$passwordResetUrl}<br />
<br />
投稿物のURL: {$submissionReviewUrl}<br />
<br />
よろしくご検討くださるよう、お願いいたします。<br />
<br />
{$editorialContactSignature}<br />
<br />
「{$submissionTitle}」<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestSubsequent.subject' => '論文査読のお願い',
  'emails.reviewRequestAttached.description' => 'このメールは、セクションエディタから査読者に投稿物の査読を依頼するものです。メールには、査読物をファイルで添付します。このメールは、雑誌設定のステップ2でメール添付による査読プロセスが選択された場合に使用されます（そうでない場合は、REVIEW_REQUESTを参照してください）。',
  'emails.reviewRequestAttached.body' => '{$reviewerName}様<br />
<br />
雑誌『{$contextName}』への投稿原稿「{$submissionTitle}」の査読をお願いいたしたくメールを差し上げました。貴殿がこの重要な仕事を引き受けてくださることをお願いいたしております。この雑誌の査読の手引きを以下に添付しました。また、投稿物はメールの添付ファイルとしてお送りいたしました。投稿物の査読結果と答申は、{$reviewDueDate}までに私宛にメールでいただきたいと考えております。<br />
<br />
査読をしていただけるか否かを、{$responseDueDate}までにメールでご返事いただけるようお願いいたします。
<br />
よろしくご検討くださるよう、お願いいたします。<br />
<br />
{$editorialContactSignature}<br />
<br />
<br />
査読の手引き<br />
<br />
{$reviewGuidelines}<br />
',
  'emails.reviewRequestAttached.subject' => '論文査読のお願い',
  'emails.reviewRequestRemindAutoOneclick.description' => 'このメールは、査読者の確認期限が過ぎた場合（「設定」>「ワークフロー」>「査読」の「査読オプション」を参照）、査読者のワンクリックアクセスが無効になっている場合に自動的に送信されます。スケジュールされたタスクを有効にして設定する必要があります（サイト設定ファイルを参照）。',
  'emails.reviewRequestRemindAutoOneclick.body' => '{$reviewerName}様<br />
<br />
雑誌『{$contextName}』への投稿原稿「{$submissionTitle}」の査読をお願いいたしたくメールを差し上げました。このメールは、{$responseDueDate}までにご返信をいただければと思っていたのですが、その日を過ぎた時点で自動リマインダーを送信させていただきます。<br />
<br />
投稿物の要旨を以下に添付しました。貴殿がこの重要な仕事を引き受けてくださることを希望いたしております。<br />
<br />
雑誌のWebサイトにログインして、査読を引き受けていただけるかどうかを示していただけるようお願いいたします。引き受けていただける場合は、このサイトで投稿物にアクセスし、査読結果と答申を記録することができます。雑誌のWebサイトのURLは、{$contextUrl} です。<br />
<br />
査読作業自体の期限日は、{$reviewDueDate}です。<br />
<br />
雑誌のWebサイトにアクセスするユーザー名とパスワードをお持ちでない場合は、次のリンクを使ってパスワードをリセットしてください（パスワードはユーザー名と共にメールで送信されます）: {$passwordResetUrl}<br />
<br />
投稿物のURL: {$submissionReviewUrl}<br />
<br />
よろしくご検討くださるよう、お願いいたします。<br />
<br />
{$editorialContactSignature}<br />
<br />
「{$submissionTitle}」<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestRemindAutoOneclick.subject' => 'リマインダー：論文査読のお願い',
  'emails.reviewRequestOneclick.description' => 'このメールは、セクションエディタから査読者に投稿物の査読を依頼するものです。メールには、タイトルや要旨などの投稿物に関する情報、査読期限日、投稿物へのアクセス方法を示しています。このメールは、雑誌設定のステップ2で標準的査読プロセスが選択された上、査読者ワンクリックアクセスを有効にした場合に使用されます。',
  'emails.reviewRequestOneclick.body' => '{$reviewerName}様<br />
<br />
雑誌『{$contextName}』への投稿原稿「{$submissionTitle}」の査読をお願いいたしたくメールを差し上げました。投稿物の要旨を以下に添付しました。貴殿がこの重要な仕事を引き受けてくださることを希望いたしております。<br />
<br />
{$responseDueDate}までに、雑誌のWebサイトにログインして、査読を引き受けていただけるかどうかを示していただけるようお願いいたします。引き受けていただける場合は、このサイトで投稿物にアクセスし、査読結果と答申を記録することができます。雑誌のWebサイトのURLは、{$contextUrl} です。<br />
<br />
査読作業自体の期限日は、{$reviewDueDate}です。<br />
<br />
雑誌のWebサイトにアクセスするユーザー名とパスワードをお持ちでない場合は、次のリンクを使ってパスワードをリセットしてください（パスワードはユーザー名と共にメールで送信されます）: {$passwordResetUrl}<br />
<br />
投稿物のURL: {$submissionReviewUrl}<br />
<br />
よろしくご検討くださるよう、お願いいたします。<br />
<br />
{$editorialContactSignature}<br />
<br />
「{$submissionTitle}」<br />
<br />
{$submissionAbstract}',
  'emails.reviewRequestOneclick.subject' => '論文査読のお願い',
  'emails.layoutRequest.description' => 'このメールは、セクションエディタからレイアウトエディタに投稿物に対するレイアウト作業を任命したことを通知するものです。メールでは、投稿物に関する情報とアクセス方法を提供しています。',
  'emails.layoutRequest.body' => '{$participantName}:<br />
<br />
雑誌『{$contextName}』への投稿原稿「{$submissionTitle}」のゲラの作成をお願いいたしたくメールを差し上げました。下記の手順に従って作成してください。<br />
1. 下記の投稿URLをクリックしてください。<br />
2. 雑誌サイトにログインし、「制作準備完了ファイル」を使用して、雑誌の基準に従ってゲラを作成します。<br />
3. 「ゲラファイル」セクションにゲラをアップロードしてください。<br />
4. 「制作ディスカッション」を使用して、編集者にゲラがアップロードされ、準備ができたことを通知します。<br />
<br />
{$contextName} URL: {$contextUrl}<br />
投稿URL: {$submissionUrl}<br />
ユーザー名: {$participantUsername}<br />
<br />
今回、この作業を引き受けていただけない場合、あるいは、何かご不明な点がございましたら、ご連絡ください。この作業を引き受けていただくよう、よろしくお願いいたします。',
  'emails.layoutRequest.subject' => 'ゲラ作成のお願い',
  'emails.copyeditRequest.description' => 'このメールは、セクションエディタからコピーエディタに原稿整理作業を開始するよう依頼するものです。メールでは、投稿物に関する情報とアクセス方法を提供しています。',
  'emails.copyeditRequest.body' => '{$participantName}様:<br />
<br />
誌『{$contextName}』への投稿原稿「{$submissionTitle}」の原稿整理作業をお願いいたしたくメールを差し上げました。以下の手順に従って作業してください。<br />
1. 下記の投稿URLをクリックしてください。<br />
2. 「原稿ファイル」で利用可能なファイルを開き、必要に応じて「原稿整理 ディスカッション」を追加しながら、原稿整理作業を行います。<br />
3. 整理したファイルを保存し、原稿整理 パネルにアップロードします。<br />
4. 全てのファイルの準備が完了したことを編集者に通知し、制作プロセスの開始が可能になります。<br />
<br />
{$contextName} URL: {$contextUrl}<br />
投稿URL: {$submissionUrl}<br />
ユーザー名: {$participantUsername}',
  'emails.copyeditRequest.subject' => '原稿整理のお願い',
  'emails.editorRecommendation.description' => '推薦編集者またはセクションエディターから意思決定を行う編集者またはセクションエディターへのこのメールは、投稿に関する最終的な推薦を通知します。',
  'emails.editorRecommendation.body' => '{$editors}:<br />
<br />
『$contextName}』への投稿「{$submissionTitle}」に関する推薦は {$recommendation} です。',
  'emails.editorRecommendation.subject' => '編集推薦',
  'emails.editorDecisionDecline.description' => '編集者またはセクションエディターから著者へのこのメールは、投稿に関する最終的な「不採用」の決定を著者に通知するものです。',
  'emails.editorDecisionDecline.body' => '{$authorName}様:<br />
<br />
下記の投稿について結論に達しましたので、連絡いたします。
『{$contextName}』「{$submissionTitle}」<br />
<br />
結果は: 不採用',
  'emails.editorDecisionDecline.subject' => '編集者の判断',
  'emails.editorDecisionResubmit.description' => '編集者またはセクションエディターから著者へのこのメールは、投稿に関する最終的な「再投稿」の決定を著者に通知するものです。',
  'emails.editorDecisionResubmit.body' => '{$authorName}様:<br />
<br />
下記の投稿について結論に達しましたので、連絡いたします。
『{$contextName}』「{$submissionTitle}」<br />
<br />
結果は: 査読に再投稿',
  'emails.editorDecisionResubmit.subject' => '編集者の判断',
  'emails.editorDecisionRevisions.description' => '編集者またはセクションエディターから著者へのこのメールは、投稿に関する最終的な「改訂を要求」の決定を著者に通知するものです。',
  'emails.editorDecisionRevisions.body' => '{$authorName}様:<br />
<br />
下記の投稿について結論に達しましたので、連絡いたします。
『{$contextName}』「{$submissionTitle}」<br />
<br />
結果は: 改訂を要求',
  'emails.editorDecisionRevisions.subject' => '編集者の判断',
  'emails.editorDecisionSendToProduction.description' => '編集者やセクションエディターから著者へのこのメールは、投稿が制作プロセスに入ることを通知します。',
  'emails.editorDecisionSendToProduction.body' => '{$authorName}様:<br />
<br />
投稿「{$submissionTitle}」の編集が完了しました。 これから制作プロセスに入ります。<br />
<br />
投稿物のURL: {$submissionUrl}',
  'emails.editorDecisionSendToProduction.subject' => '編集者の判断',
  'emails.editorDecisionSendToExternal.description' => '編集者またはセクションエディターから著者へのこのメールは、投稿が外部査読に回されることを著者に通知します。',
  'emails.editorDecisionSendToExternal.body' => '{$authorName}様:<br />
<br />
下記の投稿について結論に達しましたので、連絡いたします。
『{$contextName}』「{$submissionTitle}」<br />
<br />
結果は: 査読に回す<br />
<br />
投稿物のURL: {$submissionUrl}',
  'emails.editorDecisionSendToExternal.subject' => '編集者の判断',
  'emails.editorDecisionAccept.description' => '編集者またはセクションエディターから著者へのこのメールは、投稿に関する最終的な「投稿の受理」の決定を著者に通知するものです。',
  'emails.editorDecisionAccept.body' => '{$authorName}様:<br />
<br />
下記の投稿について結論に達しましたので、連絡いたします。
『{$contextName}』「{$submissionTitle}」<br />
<br />
結果は: 投稿の受理',
  'emails.editorDecisionAccept.subject' => '編集者の判断',
  'emails.reviewRemindAutoOneclick.description' => 'このメールは、査読者の査読期限日が過ぎ（雑誌設定ステップ2の査読オプションを参照）、査読者ワンクリックアクセスが無効な場合に、自動的に送信されるものです。定期タスク機能が有効かつ設定されている必要があります（サイト設定ファイルを参照）。',
  'emails.reviewRemindAutoOneclick.body' => '{$reviewerName} 様:<br />
<br />
雑誌『{$contextName}』への投稿原稿「{$submissionTitle}」の査読は進んでいるでしょうか。査読期限日は、{$reviewDueDate}となっております。このメールは、期限日が過ぎた査読者に対し、システムにより自動的に作成され送信されるものです。準備ができ次第できるだけ早く査読結果をいただきたいと考えております。<br />
<br />
雑誌のWebサイトにログインするユーザー名とパスワードをお持ちでない場合は、次のリンクを使ってパスワードをリセットしてください（パスワードはユーザー名と共にメールで送信されます）： {$passwordResetUrl}<br />
<br />
投稿物のURL: {$submissionReviewUrl}<br />
<br />
本誌の投稿物にとって極めて重要なこの貢献を貴殿が遂行できることを確認してください。お返事をお待ちしております。<br />
<br />
よろしくお願いいたします。<br />
<br />
{$editorialContactSignature}',
  'emails.reviewRemindAutoOneclick.subject' => '論文査読の督促（自動送信）',
  'emails.reviewReinstate.description' => 'このメールは、セクションエディターから投稿査読中の査読者に、キャンセルされた審査が復活したことを通知するために送信されます。',
  'emails.reviewReinstate.body' => '{$reviewerName}様:<br />
<br />
雑誌『{$contextName}』への投稿原稿「{$submissionTitle}」の査読のお願いを復活させたいと思います。本誌の査読作業のお手伝いをしていただければ幸いです。<br />
<br />
何かご不明な点がございましたら、ご連絡ください。',
  'emails.reviewReinstate.subject' => '論文査読のお願いの復活',
  'emails.announcement.description' => 'このメールは、新しいお知らせが作成された際に送信されます。',
  'emails.announcement.body' => '<b>{$title}</b><br />
<br />
{$summary}<br />
<br />
詳しいお知らせを読むためにウェブサイト<a href="{$url}">をご覧ください。</a>.',
  'emails.announcement.subject' => '{$title}',
  'emails.statisticsReportNotification.description' => 'このメールは、編集者や雑誌管理者に毎月自動的に送信され、システムの健全性の概要を提供します。',
  'emails.statisticsReportNotification.body' => '
{$name}様 <br />
<br />
あなたの雑誌の{$month}月{$year}年のヘルスレポートが公開されました。今月の主な統計情報は以下の通りです。<br />
<ul>
	<li>今月の新規投稿: {$newSubmissions}</li>
	<li>今月の拒否投稿: {$declinedSubmissions}</li>
	<li>今月の受理投稿: {$acceptedSubmissions}</li>
	<li>システム内の総投稿数: {$totalSubmissions}</li>
</ul>
雑誌ににログインすると、<a href="{$editorialStatsLink}">編集トレンド</a>と<a href="{$publicationStatsLink}">掲載論文の統計</a>の詳細を見ることができます。今月の編集トレンドの全文が添付されています。<br />
<br />
よろしくお願いします。<br />
{$principalContactSignature}',
  'emails.statisticsReportNotification.subject' => '{$month}月{$year}年の編集活動',
  'emails.editorDecisionInitialDecline.description' => 'このメールは、査読段階に入る前に編集者が最初から投稿を断った場合、著者に送信されます。',
  'emails.editorDecisionInitialDecline.body' => '
			{$authorName}様:<br />
<br />
下記の投稿について結論に達しましたので、連絡いたします。
『{$contextName}』「{$submissionTitle}」<br />
<br />
結果は: 不採用',
  'emails.editorDecisionInitialDecline.subject' => '編集者の判断',
  'emails.notificationCenterDefault.description' => '通知センター メッセージ リストビルダで使用されるデフォルトの (空白の) メッセージです。',
  'emails.notificationCenterDefault.body' => 'メッセージを入力してください。',
  'emails.notificationCenterDefault.subject' => '{$contextName}に関するメッセージ',
  'emails.revisedVersionNotify.description' => 'このメールは、著者が投稿の改訂版をアップロードした際に、指定された編集者に自動的に送信されます。',
  'emails.revisedVersionNotify.body' => '編集部 御中:<br />
<br />
筆者{$authorName}が「{$submissionTitle}」の改訂版をアップロードしました。<br />
<br />
投稿URL: {$submissionUrl}<br />
<br />
{$editorialContactSignature}',
  'emails.revisedVersionNotify.subject' => '改訂版アップロード',
  'emails.citationEditorAuthorQuery.description' => 'このメールでは、コピーエディターが著者に参考文献に関する追加情報を要求することができます。',
  'emails.citationEditorAuthorQuery.body' => '{$authorFirstName}様<br />
<br />
あなたの下記の論文に含まれる参考文献についてご確認いただき，正確な引用情報をご提供ください。<br />
<br />
 {$submissionTitle}:<br />
<br />
{$rawCitation}<br />
<br />
どうぞよろしくお願い致します。<br />
<br />
{$userFirstName}<br />
『{$contextName}』コピーエディタ<br />
',
  'emails.citationEditorAuthorQuery.subject' => '引用の編集',
  'emails.subscriptionRenewInstl.description' => 'このメールは機関購読の更新がオンラインで申し込まれた場合に購読管理者に通知されます。メールには購読情報の概要と購読内容へのクイックリンクが含まれています。',
  'emails.subscriptionRenewInstl.body' => 'オンラインで {$contextName} に対する機関購読の更新申込がおこなわれました。詳細は下記の通りです。<br />
<br />
購読種別:<br />
{$subscriptionType}<br />
<br />
機関名:<br />
{$institutionName}<br />
{$institutionMailingAddress}<br />
<br />
ドメイン名 (ある場合):<br />
{$domain}<br />
<br />
IPアドレス範囲 (ある場合):<br />
{$ipRanges}<br />
<br />
連絡担当者:<br />
{$userDetails}<br />
<br />
会員情報 (ある場合):<br />
{$membership}<br />
<br />
この購読を閲覧および編集するためには，下記のURLにアクセスしてください。<br />
<br />
購読URL: {$subscriptionUrl}<br />
',
  'emails.subscriptionRenewInstl.subject' => '購読更新: 機関',
  'emails.subscriptionRenewIndl.description' => 'このメールは個人購読の更新がオンラインで申し込まれた場合に購読管理者に通知されます。メールには購読情報の概要と購読内容へのクイックリンクが含まれています。',
  'emails.subscriptionRenewIndl.body' => 'オンラインで {$contextName} に対する個人購読の更新申込がされました。詳細は下記の通りです。<br />
<br />
購読種別::<br />
{$subscriptionType}<br />
<br />
ユーザー:<br />
{$userDetails}<br />
<br />
会員情報 (ある場合):<br />
{$membership}<br />
<br />
この購読を閲覧および編集するためには，下記のURLにアクセスしてください。<br />
<br />
購読URL: {$subscriptionUrl}<br />
',
  'emails.subscriptionRenewIndl.subject' => '購読更新: 個人',
  'emails.subscriptionPurchaseInstl.description' => 'このメールは機関購読がオンラインで申し込まれた場合に購読管理者に通知されます。メールには購読情報の概要と購読内容へのクイックリンクが含まれています。',
  'emails.subscriptionPurchaseInstl.body' => 'オンラインで {$contextName} に対する機関購読申し込みがされました。詳細は下記の通りです。この購読を有効にするためには，下記の購読リンクから購読状態を「有効」に設定してください。<br />
<br />
購読種別:<br />
{$subscriptionType}<br />
<br />
機関名:<br />
{$institutionName}<br />
{$institutionMailingAddress}<br />
<br />
ドメイン名 (ある場合):<br />
{$domain}<br />
<br />
IPアドレス範囲 (ある場合):<br />
{$ipRanges}<br />
<br />
連絡担当者:<br />
{$userDetails}<br />
<br />
会員情報 (ある場合):<br />
{$membership}<br />
<br />
この購読を閲覧および編集するためには，下記のURLにアクセスしてください。<br />
<br />
購読URL: {$subscriptionUrl}<br />
',
  'emails.subscriptionPurchaseInstl.subject' => '購読申込: 機関',
  'emails.subscriptionPurchaseIndl.description' => 'このメールは個人購読がオンラインで申し込まれた場合に購読管理者に通知されます。メールには購読情報の概要と購読内容へのクイックリンクが含まれています。',
  'emails.subscriptionPurchaseIndl.body' => 'オンラインで {$contextName}  に対する個人購読が申し込まれました。詳細は下記の通りです。<br />
<br />
購読種別:<br />
{$subscriptionType}<br />
<br />
ユーザー:<br />
{$userDetails}<br />
<br />
会員情報 (ある場合):<br />
{$membership}<br />
<br />
この購読を閲覧あるいは編集するには，下記のURLにアクセスしてください。<br />
<br />
購読URL: {$subscriptionUrl}<br />
',
  'emails.subscriptionPurchaseIndl.subject' => '購読申込: 個人',
  'emails.subscriptionAfterExpiryLast.description' => 'このメールは、購読者に購読期間が終了したことを通知するものです。メールでは雑誌のURLとアクセス方法を提供しています。',
  'emails.subscriptionAfterExpiryLast.body' => '{$subscriberName}様:<br />
<br />
いつもご利用ありがとうございます。<br />
<br />
雑誌『{$contextName}』の購読期間が終了しました。<br />
本メールは、最終のご案内であることにご注意ください。<br />
<br />
{$subscriptionType}<br />
購読期限日: {$expiryDate}<br />
<br />
雑誌のWebサイトで更新の手続きをするようお願いいたします。システムにはユーザー名「{$username}」でログインすることができます。<br />
<br />
何かご不明な点がございましたら、ご連絡ください。<br />
<br />
よろしくお願いいたします。<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionAfterExpiryLast.subject' => '読期間終了（最終案内）',
  'emails.subscriptionAfterExpiry.description' => 'このメールは、購読者に購読期間が終了したことを通知するものです。メールでは雑誌のURLとアクセス方法を提供しています。',
  'emails.subscriptionAfterExpiry.body' => '{$subscriberName}様:<br />
<br />
いつもご利用ありがとうございます。<br />
<br />
雑誌『{$contextName}』の購読期間が終了しました。<br />
<br />
{$subscriptionType}<br />
購読期限日: {$expiryDate}<br />
<br />
雑誌のWebサイトで更新の手続きをするようお願いいたします。システムにはユーザー名「{$username}」でログインすることができます。<br />
<br />
何かご不明な点がございましたら、ご連絡ください。<br />
<br />
よろしくお願いいたします。<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionAfterExpiry.subject' => '購読期間終了',
  'emails.subscriptionBeforeExpiry.description' => 'このメールは、購読者に購読期間がまもなく終了することを通知するものです。メールでは雑誌のURLとアクセス方法を提供しています。',
  'emails.subscriptionBeforeExpiry.body' => '{$subscriberName}様:<br />
<br />
いつもご利用ありがとうございます。<br />
<br />
まもなく、雑誌『{$contextName}』の購読期間が終了します<br />
<br />
{$subscriptionType}<br />
購読期限日: {$expiryDate}<br />
<br />
本誌へのアクセスを継続するために、雑誌のWebサイトで再購読の手続きをするようお願いいたします。システムにはユーザー名「{$username}」でログインすることができます。<br />
<br />
何かご不明な点がございましたら、ご連絡ください。<br />
<br />
よろしくお願いいたします。<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionBeforeExpiry.subject' => '購読期間終了のお知らせ',
  'emails.openAccessNotify.description' => 'このメールは、巻号がオープンアクセスになった時に通知を受け取るよう登録している読者に送信されるものです。',
  'emails.openAccessNotify.body' => '読者各位:<br />
<br />
いつもご利用ありがとうございます。<br />
<br />
雑誌『{$contextName}』の以下の巻号がオープンアクセスにより利用できるようになりましたのでご案内いたします。雑誌のWebサイト({$contextUrl})にアクセスし、目次をチェックし興味のある論文や記事をご利用ください。<br />
<br />
よろしくお願いいたします。<br />
{$editorialContactSignature}',
  'emails.openAccessNotify.subject' => 'オープンアクセスのお知らせ',
  'emails.subscriptionNotify.description' => 'このメールは、管理者から登録読者に購読者として登録したことを通知するものです。メールでは、雑誌のURLとアクセス方法を提供しています。',
  'emails.subscriptionNotify.body' => '{$subscriberName}様:<br />
<br />
貴殿は雑誌『{$contextName}』のオンラインジャーナル管理システムに、以下の条件の購読者として登録されました。<br />
<br />
{$subscriptionType}<br />
<br />
購読者のみが利用できるコンテンツにアクセスするには、ユーザー名「{$username}」でシステムにログインしていただくだけです。<br />
<br />
ユーザー情報とパスワードをいつでも変更することができます<br />
<br />
機関購読者の場合は、機関構成員の方はログインする必要はありませんので、ご注意ください。購読コンテンツへのアクセスの際に、システムにより自動的に認証が行われます。<br />
<br />
何かご不明な点がございましたら、ご連絡ください。<br />
<br />
ありがとうございました。<br />
<br />
{$subscriptionContactSignature}',
  'emails.subscriptionNotify.subject' => '購読に関する通知',
  'emails.emailLink.description' => 'このメールテンプレートは、登録ユーザーに、興味を持ちそうな研究者に論文を紹介する機会を提供するものです。このメールは、読書ツールから利用することができますが、あらかじめ雑誌管理者が読書ツール管理ページで有効にしておく必要があります。',
  'emails.emailLink.body' => '{$contextName}の第{$volume}巻{$number}号（{$year}）で公開された{$authorName}による「{$submissionTitle}」を見て興味を持つかもしれないと思いました。この論文のURL: {$articleUrl}。',
  'emails.emailLink.subject' => '論文の紹介',
  'emails.layoutComplete.description' => 'このメールは、レイアウトエディタからセクションエディタにレイアウト処理が終了したことを通知するものです。',
  'emails.layoutComplete.body' => '{$editorialContactName}様:<br />
<br />
雑誌『{$contextName}』への投稿原稿「{$submissionTitle}」のゲラを作成し、校正作業の準備ができたことをご報告いたします。<br />
<br />
何かご不明な点がございましたら、ご連絡ください。よろしくお願いいたします。<br />
<br />
{$participantName}',
  'emails.layoutComplete.subject' => 'ゲラ作成の完了',
);