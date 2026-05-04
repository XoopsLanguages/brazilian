<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: pt_BR

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', 'Relatório de erros e análise de desempenho usando PHP DebugBar');

define('_MI_DEBUGBAR_ENABLE', 'Exibir DebugBar');
define('_MI_DEBUGBAR_SMARTYDEBUG', 'Habilitar Debug do Smarty');
define('_MI_DEBUGBAR_FILESDEBUG', 'Habilitar aba de arquivos incluídos');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', 'Mostrar todos os arquivos PHP carregados durante a requisição');
define('_MI_DEBUGBAR_SLOWQUERY', 'Limite de consulta lenta (segundos)');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', 'Consultas mais lentas que isso são destacadas em vermelho (ex.: 0.05 = 50ms)');

define('_MI_DEBUGBAR_QUERYMODE',      'Registro de consultas');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  'Todas as consultas mostradas, ou apenas consultas lentas e erros');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  'Todas as consultas');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', 'Apenas lentas e erros');

define('_MI_DEBUGBAR_RAY_ENABLE', 'Habilitar integração Ray');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', 'Enviar dados de depuração para o app Ray (requer spatie/ray ou spatie/global-ray)');

define('_MI_DEBUGBAR_ADMENU1', 'Início');
define('_MI_DEBUGBAR_MENU_ABOUT', 'Sobre');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', 'Voltar à administração de ');
\define('_MI_DEBUGBAR_OVERVIEW', 'Visão geral');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', 'Aviso legal');
\define('_MI_DEBUGBAR_LICENSE', 'Licença');
\define('_MI_DEBUGBAR_SUPPORT', 'Suporte');
