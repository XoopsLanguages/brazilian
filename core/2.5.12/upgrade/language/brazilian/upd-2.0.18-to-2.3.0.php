<?php
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'Caminhos Físicos do XOOPS');
define('LEGEND_DATABASE', 'Conjunto de Caracteres do Banco de Dados');

define('XOOPS_LIB_PATH_LABEL', 'Diretório da biblioteca XOOPS');
define('XOOPS_LIB_PATH_HELP', 'Caminho físico para o diretório da biblioteca XOOPS SEM a barra final, para compatibilidade futura. Localize a pasta fora de ' . XOOPS_ROOT_PATH . ' para torná-la segura.');
define('XOOPS_DATA_PATH_LABEL', 'Diretório de arquivos de dados XOOPS');
define('XOOPS_DATA_PATH_HELP', 'Caminho físico para o diretório de arquivos de dados (gravável) XOOPS SEM a barra final, para compatibilidade futura. Localize a pasta fora de ' . XOOPS_ROOT_PATH . ' para torná-la segura.');

define('DB_COLLATION_LABEL', 'Conjunto de caracteres e colação do banco de dados');
define('DB_COLLATION_HELP', "A partir da versão 4.12, o MySQL suporta conjuntos de caracteres e colações personalizados. No entanto, é mais complexo do que o esperado, então NÃO faça alterações a menos que esteja seguro de sua escolha.");
define('DB_COLLATION_NOCHANGE', 'Não alterar');

define('XOOPS_PATH_FOUND', 'Caminho encontrado.');
define('ERR_COULD_NOT_ACCESS', 'Não foi possível acessar a pasta especificada. Verifique se ela existe e é legível pelo servidor.');
define('CHECKING_PERMISSIONS', 'Verificando permissões de arquivos e diretórios...');
define('ERR_NEED_WRITE_ACCESS', 'O servidor precisa de permissão de escrita para os seguintes arquivos e pastas<br>(ou seja, <em>chmod 777 nome_da_pasta</em> em um servidor UNIX/LINUX)');
define('IS_NOT_WRITABLE', '%s NÃO é gravável.');
define('IS_WRITABLE', '%s é gravável.');
define('ERR_COULD_NOT_WRITE_MAINFILE', 'Erro ao escrever conteúdo no mainfile.php, escreva o conteúdo manualmente no mainfile.php.');
