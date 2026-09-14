<?php
/**
 * Two-factor management strings.
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             core
 * @since               2.7.4
 */

define('_US_2FAM_TITLE', 'Autenticação de dois fatores');
define('_US_2FAM_PASSWORD', 'Sua senha atual');
define('_US_2FAM_ENABLE', 'Configurar um autenticador');
define('_US_2FAM_CONFIRM', 'Confirmar autenticador');
define('_US_2FAM_CHOOSE', 'Escolha como deseja receber sua segunda etapa: um aplicativo autenticador ou um código por e-mail.');
define('_US_2FAM_ENABLE_EMAIL', 'Usar códigos por e-mail');
define('_US_2FAM_EMAIL_HELP', 'Códigos por e-mail: um código de seis dígitos é enviado para %s toda vez que você faz login. Menos seguro do que um aplicativo autenticador, pois qualquer pessoa que possa ler seu e-mail pode passar por esta etapa.');
define('_US_2FAM_EMAIL_STEP', 'Enviamos um código de seis dígitos para %s. Digite-o abaixo para confirmar. Ele é válido por dez minutos.');
define('_US_2FAM_CONFIRM_EMAIL', 'Confirmar códigos por e-mail');
define('_US_2FAM_CODE_HELP_EMAIL', 'O código de seis dígitos do e-mail que acabamos de enviar.');
define('_US_2FAM_ENABLED_EMAIL', 'Os códigos por e-mail estão ativados. Para fazer uma alteração, digite sua senha atual e o código enviado por e-mail, ou um código de recuperação. Use o botão abaixo para solicitar um código.');
define('_US_2FAM_SEND', 'Enviar um código para mim');
define('_US_2FAM_MANUAL', 'Chave de configuração manual');
define('_US_2FAM_SCAN', 'Código QR para seu aplicativo autenticador');
define('_US_2FAM_STEP_APP', 'Você precisa de um autenticador: qualquer aplicativo ou gerenciador de senhas que gere códigos de uso único baseados em tempo (TOTP) funciona, no celular ou no computador. Se ainda não tiver um, instale primeiro o de sua preferência (por exemplo, Google Authenticator, Microsoft Authenticator, Aegis ou FreeOTP).');
define('_US_2FAM_STEP_ADD', 'No aplicativo, adicione uma conta: escaneie este código QR, ou escolha a entrada manual e digite a chave de configuração mostrada abaixo.');
define('_US_2FAM_STEP_CODE', 'O aplicativo agora mostra um código de seis dígitos que muda a cada 30 segundos. Digite o código exibido no momento no campo abaixo e confirme.');
define('_US_2FAM_CODE_HELP', 'O código de seis dígitos que seu aplicativo autenticador está mostrando agora.');
define('_US_2FAM_HTTP', 'Esta conexão usa HTTP simples. Sua senha, sessão, chave de configuração do autenticador e códigos de recuperação podem ser interceptados. Use HTTPS sempre que possível.');
define('_US_2FAM_CODES', 'Salve estes códigos de recuperação agora');
define('_US_2FAM_CODES_HELP', 'Cada código funciona uma única vez. Esses códigos não serão exibidos novamente. Guarde-os em um local seguro, separado desta conta.');
define('_US_2FAM_DISABLE', 'Desativar a autenticação de dois fatores');
define('_US_2FAM_REGENERATE', 'Substituir códigos de recuperação');
define('_US_2FAM_ENABLED', 'Há um autenticador configurado. Digite sua senha atual e um código de autenticação ou de recuperação para fazer uma alteração.');
define('_US_2FAM_DISABLED', 'A autenticação de dois fatores está desativada.');
define('_US_2FAM_PAUSED', 'O site pausou os desafios de dois fatores. Seu fator é mantido, e a opção "lembrar-me" continua indisponível para contas configuradas.');
define('_US_2FAM_UNAVAILABLE', 'A configuração ou o gerenciamento da autenticação de dois fatores não está disponível. Entre em contato com o administrador do site.');
define('_US_2FAM_STARTAGAIN', 'A configuração expirou ou a conta foi alterada. Digite sua senha para começar a configuração novamente.');
define('_US_2FAM_BADPASSWORD', 'Sua senha atual não foi aceita.');
define('_US_2FAM_RESET', 'Redefinir a autenticação de dois fatores deste usuário');
define('_US_2FAM_STATUS_NONE', 'Não configurada');
define('_US_2FAM_STATUS_TOTP', 'Aplicativo autenticador configurado');
define('_US_2FAM_STATUS_EMAIL', 'Códigos por e-mail configurados');
define('_US_2FAM_STATUS_UNAVAILABLE', 'Status indisponível');
define('_US_2FAM_RESET_HELP', 'Isso desativa o segundo fator do usuário, qualquer que seja o método configurado, e revoga seus códigos de recuperação e cookies de "lembrar-me". As sessões já conectadas permanecem ativas. Digite sua própria senha de administrador para confirmar.');
define('_US_2FAM_RESET_DONE', 'A autenticação de dois fatores do usuário foi redefinida.');
define('_US_2FAM_BACK', 'Voltar à conta');
define('_US_2FAM_DONE', 'A autenticação de dois fatores está ativada.');
define('_US_2FAM_REPLACED', 'Os códigos de recuperação anteriores foram revogados.');
define('_US_2FAM_NOTICE_SUBJECT', '%s: autenticação de dois fatores alterada');
define('_US_2FAM_NOTICE_BODY', 'A autenticação de dois fatores ou os códigos de recuperação da sua conta em %s foram alterados a partir de %s. Se não foi você, entre em contato com o administrador do site.');
define('_US_2FAM_RESET_SUBJECT', '%s: um administrador redefiniu sua autenticação de dois fatores');
define('_US_2FAM_RESET_BODY', 'Um administrador desativou seu segundo fator e revogou seus códigos de recuperação em %s a partir de %s. As sessões já conectadas permanecem ativas. Faça login e configure a autenticação de dois fatores novamente. Entre em contato com o administrador do site se isso foi inesperado.');
