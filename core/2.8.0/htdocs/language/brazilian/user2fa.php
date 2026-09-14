<?php
/**
 * Second-factor challenge strings.
 *
 * A file of their own, apart from user.php: xoops_loadLanguage() falls back
 * to English for a missing file but never fills gaps in a present one, so
 * a language pack that predates the challenge renders it in English rather
 * than failing on an undefined constant.
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

// XOOPS 2.7.4: two-factor challenge
define('_US_2FA_TITLE', 'Segunda etapa');
define('_US_2FA_PROMPT', 'Digite o código do seu aplicativo autenticador');
define('_US_2FA_CODE', 'Código de autenticação');
define('_US_2FA_PROMPT_EMAIL', 'Enviamos um código de seis dígitos para %s. Digite-o abaixo.');
define('_US_2FA_CODE_EMAIL', 'Código recebido por e-mail');
define('_US_2FA_SEND', 'Enviar um novo código');
define('_US_2FA_SENT', 'Um novo código foi enviado para %s. Ele é válido por dez minutos.');
define('_US_2FA_SEND_WAIT', 'Um código foi enviado há menos de um minuto. Verifique sua caixa de entrada e a pasta de spam antes de solicitar outro.');
define('_US_2FA_SEND_FAILED', 'Não foi possível enviar o código agora. Tente novamente em instantes, ou use um código de recuperação.');
define('_US_2FA_EMAIL_SUBJECT', '%s: seu código de login');
define('_US_2FA_EMAIL_BODY', 'Seu código de login para %s é:

%s

Ele é válido por %d minutos e funciona uma única vez. Se você não solicitou isso, ignore esta mensagem e considere alterar sua senha.');
define('_US_2FA_RECOVERY', 'Usar um código de recuperação em vez disso');
define('_US_2FA_RECOVERY_HINT', 'Cada código de recuperação funciona uma única vez. Usar um deles envia um e-mail para você.');
define('_US_2FA_SUBMIT', 'Continuar');
define('_US_2FA_STARTAGAIN', 'Este login expirou ou foi interrompido. Comece novamente.');
define('_US_2FA_BACKTOLOGIN', 'Voltar ao formulário de login');
define('_US_2FA_BADCODE', 'Esse código não foi aceito.');
define('_US_2FA_LOCKED', 'Muitas tentativas. A segunda etapa está bloqueada por quinze minutos; um código de recuperação ainda funciona.');
define('_US_2FA_UNAVAILABLE', 'A segunda etapa não está disponível no momento. Um código de recuperação ainda funciona, ou entre em contato com o administrador do site.');
define('_US_2FA_REQUIRED', 'Esta conta tem a autenticação de dois fatores ativada. Faça login pela página de login do site.');
define('_US_2FA_HTTP_LOGIN', 'Esta janela não pode concluir um login de dois fatores via HTTP porque sua senha seria enviada sem criptografia. Use o login do site, ou peça ao administrador para ativar o HTTPS no site.');
define('_US_2FA_LOCKED_MAIL_SUBJECT', '%s: segunda etapa bloqueada');
define('_US_2FA_LOCKED_MAIL_BODY', 'Cinco códigos incorretos da segunda etapa foram inseridos para sua conta em %s a partir de %s. A segunda etapa está bloqueada por quinze minutos. Se não foi você, altere sua senha.');
define('_US_2FA_RECOVERY_MAIL_SUBJECT', '%s: um código de recuperação foi usado');
define('_US_2FA_RECOVERY_MAIL_BODY', 'Um código de recuperação foi usado para fazer login na sua conta em %s a partir de %s. Esse código não funciona mais. Se não foi você, altere sua senha e redefina seus códigos de recuperação.');
