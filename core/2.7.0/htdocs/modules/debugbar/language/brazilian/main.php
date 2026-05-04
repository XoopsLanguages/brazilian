<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: pt_BR

define('_MD_DEBUGBAR_DEBUG', 'Depuração');
define('_MD_DEBUGBAR_INCLUDED_FILES', 'Arquivos incluídos');
define('_MD_DEBUGBAR_PHP_VERSION', 'Versão do PHP');
define('_MD_DEBUGBAR_NONE', 'Nenhum');
define('_MD_DEBUGBAR_ERRORS', 'Erros');
define('_MD_DEBUGBAR_DEPRECATED', 'Obsoleto');
define('_MD_DEBUGBAR_QUERIES', 'Consultas');
define('_MD_DEBUGBAR_BLOCKS', 'Blocos');
define('_MD_DEBUGBAR_EXTRA', 'Adicional');
define('_MD_DEBUGBAR_TIMERS', 'Temporizadores');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s demorou %s segundos para carregar.');
define('_MD_DEBUGBAR_TOTAL', 'Total');
define('_MD_DEBUGBAR_NOT_CACHED', 'Não armazenado em cache');
define('_MD_DEBUGBAR_CACHED', 'Em cache (regenera a cada %s segundos)');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '(string vazia)');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', 'bool VERDADEIRO');
define('_MD_DEBUGBAR_BOOL_FALSE', 'bool FALSO');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', 'Consultas do banco de dados');
define('_MD_DEBUGBAR_MEMORY_USAGE', 'Uso de memória');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d consultas');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '(%d duplicatas)');
define('_MD_DEBUGBAR_BYTES', '%sbytes');
define('_MD_DEBUGBAR_DB_VERSION', '%s versão');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- Número do erro: %s Mensagem de erro: %s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
-- Erro #%s: %s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', 'Exceção');
define('_MD_DEBUGBAR_RAY_QUERY', 'Consulta #%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', 'LENTO');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', 'Bloco (%ds armazenados em cache)');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', 'Bloco (não armazenado em cache)');
define('_MD_DEBUGBAR_RAY_DUMP', 'Exportar');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', 'Contexto do template');
define('_MD_DEBUGBAR_RAY_NO_VARS', '(nenhuma variável de template)');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d variáveis)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', 'O diretório "modules/debugbar/%s" não foi criado');
define('_MD_DEBUGBAR_ERR_DIR_COPY', 'Falha ao criar o diretório "%s" durante a cópia do ativo');
