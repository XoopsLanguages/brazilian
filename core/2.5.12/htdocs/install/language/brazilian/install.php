<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', 'Mostrar/ocultar texto de ajuda');
// Licença
//define('LICENSE_NOT_WRITEABLE', 'O arquivo de licença "%s" NÃO é gravável!');
//define('LICENSE_IS_WRITEABLE', 'O arquivo de licença "%s" é gravável.');
// Página de verificação de configuração
define('SERVER_API', 'API do Servidor');
define('PHP_EXTENSION', 'Extensão %s');
define('CHAR_ENCODING', 'Codificação de caracteres');
define('XML_PARSING', 'Análise XML');
define('REQUIREMENTS', 'Requisitos');
define('_PHP_VERSION', 'Versão do PHP');
define('RECOMMENDED_SETTINGS', 'Configurações recomendadas');
define('RECOMMENDED_EXTENSIONS', 'Extensões recomendadas');
define('SETTING_NAME', 'Nome da configuração');
define('RECOMMENDED', 'Recomendado');
define('CURRENT', 'Atual');
define('RECOMMENDED_EXTENSIONS_MSG', 'Essas extensões não são necessárias para o uso normal, mas podem ser necessárias para explorar
    alguns recursos específicos (como suporte multilíngue ou RSS). Portanto, recomenda-se instalá-las.');
define('NONE', 'Nenhum');
define('SUCCESS', 'Sucesso');
define('WARNING', 'Aviso');
define('FAILED', 'Falha');
// Títulos (principal e páginas)
define('XOOPS_INSTALL_WIZARD', 'Assistente de Instalação do XOOPS');
define('LANGUAGE_SELECTION', 'Seleção de idioma');
define('LANGUAGE_SELECTION_TITLE', 'Selecione o seu idioma');
define('INTRODUCTION', 'Introdução');
define('INTRODUCTION_TITLE', 'Bem-vindo ao Assistente de Instalação do XOOPS');
define('CONFIGURATION_CHECK', 'Verificação de configuração');
define('CONFIGURATION_CHECK_TITLE', 'Verificando a configuração do servidor');
define('PATHS_SETTINGS', 'Configurações de caminhos');
define('PATHS_SETTINGS_TITLE', 'Configurações de caminhos');
define('DATABASE_CONNECTION', 'Conexão com banco de dados');
define('DATABASE_CONNECTION_TITLE', 'Conexão com banco de dados');
define('DATABASE_CONFIG', 'Configuração do banco de dados');
define('DATABASE_CONFIG_TITLE', 'Configuração do banco de dados');
define('CONFIG_SAVE', 'Salvar configuração');
define('CONFIG_SAVE_TITLE', 'Salvando a configuração do sistema');
define('TABLES_CREATION', 'Criação de tabelas');
define('TABLES_CREATION_TITLE', 'Criação das tabelas do banco de dados');
define('INITIAL_SETTINGS', 'Configurações iniciais');
define('INITIAL_SETTINGS_TITLE', 'Informe suas configurações iniciais');
define('DATA_INSERTION', 'Inserção de dados');
define('DATA_INSERTION_TITLE', 'Salvando suas configurações no banco de dados');
define('WELCOME', 'Bem-vindo');
define('WELCOME_TITLE', 'Bem-vindo ao seu site XOOPS');
// Configurações (rótulos e ajuda)
define('XOOPS_PATHS', 'Caminhos físicos do XOOPS');
define('XOOPS_URLS', 'Localizações web');
define('XOOPS_ROOT_PATH_LABEL', 'Caminho físico da raiz de documentos do XOOPS');
define('XOOPS_ROOT_PATH_HELP', 'Caminho físico para o diretório de documentos (servido) do XOOPS, SEM a barra no final');
define('XOOPS_LIB_PATH_LABEL', 'Diretório da biblioteca do XOOPS');
define('XOOPS_LIB_PATH_HELP', 'Caminho físico para o diretório de bibliotecas do XOOPS SEM barra final, para compatibilidade futura. Localize fora do ' . XOOPS_ROOT_PATH_LABEL . ' para maior segurança.');
define('XOOPS_DATA_PATH_LABEL', 'Diretório de arquivos de dados do XOOPS');
define('XOOPS_DATA_PATH_HELP', 'Caminho físico para o diretório de dados (gravável) do XOOPS SEM barra no final, para compatibilidade futura. Localize fora do ' . XOOPS_ROOT_PATH_LABEL . ' para maior segurança.');
define('XOOPS_URL_LABEL', 'Localização do site (URL)');
define('XOOPS_URL_HELP', 'URL principal usada para acessar sua instalação do XOOPS');
define('LEGEND_CONNECTION', 'Conexão do servidor');
define('LEGEND_DATABASE', 'Banco de dados');
define('DB_HOST_LABEL', 'Nome do host do servidor');
define('DB_HOST_HELP', 'Nome do host do servidor de banco de dados. Se tiver dúvidas, use <em>localhost</em>');
define('DB_USER_LABEL', 'Nome de usuário');
define('DB_USER_HELP', 'Nome da conta de usuário que será usada para se conectar ao servidor de banco de dados');
define('DB_PASS_LABEL', 'Senha');
define('DB_PASS_HELP', 'Senha da conta de usuário do banco de dados');
define('DB_NAME_LABEL', 'Nome do banco de dados');
define('DB_NAME_HELP', 'Nome do banco de dados no servidor. O instalador tentará criar o banco se ele não existir');
define('DB_CHARSET_LABEL', 'Conjunto de caracteres do banco de dados');
define('DB_CHARSET_HELP', 'O MySQL inclui suporte a conjuntos de caracteres, permitindo armazenar dados usando várias codificações.');
define('DB_COLLATION_LABEL', 'Colação do banco de dados');
define('DB_COLLATION_HELP', 'Uma colação é um conjunto de regras para comparação de caracteres.');
define('DB_PREFIX_LABEL', 'Prefixo das tabelas');
define('DB_PREFIX_HELP', 'Este prefixo será adicionado a todas as novas tabelas criadas para evitar conflitos. Se tiver dúvidas, mantenha o padrão');
define('DB_PCONNECT_LABEL', 'Usar conexão persistente');
define('DB_PCONNECT_HELP', "O padrão é 'Não'. Deixe em branco se tiver dúvidas");
define('DB_DATABASE_LABEL', 'Banco de dados');
define('LEGEND_ADMIN_ACCOUNT', 'Conta do administrador');
define('ADMIN_LOGIN_LABEL', 'Login do administrador');
define('ADMIN_EMAIL_LABEL', 'E-mail do administrador');
define('ADMIN_PASS_LABEL', 'Senha do administrador');
define('ADMIN_CONFIRMPASS_LABEL', 'Confirmar senha');
// Botões
define('BUTTON_PREVIOUS', 'Anterior');
define('BUTTON_NEXT', 'Continuar');
// Mensagens
define('XOOPS_FOUND', '%s encontrado');
define('CHECKING_PERMISSIONS', 'Verificando permissões de arquivos e diretórios...');
define('IS_NOT_WRITABLE', '%s NÃO é gravável.');
define('IS_WRITABLE', '%s é gravável.');
define('XOOPS_PATH_FOUND', 'Caminho encontrado.');
define('XOOPS_TABLES_FOUND', 'As tabelas do sistema XOOPS já existem no banco de dados.');
define('XOOPS_TABLES_CREATED', 'As tabelas do sistema XOOPS foram criadas.');
define('SAVED_MAINFILE', 'Configurações salvas');
define('SAVED_MAINFILE_MSG', 'O instalador salvou as configurações especificadas em <em>mainfile.php</em> e <em>secure.php</em>.');
define('DATA_ALREADY_INSERTED', 'Dados do XOOPS encontrados no banco de dados.');
define('DATA_INSERTED', 'Os dados iniciais foram inseridos no banco de dados.');
define('DATABASE_CREATED', 'Banco de dados %s criado!');
define('TABLE_NOT_CREATED', 'Não foi possível criar a tabela %s');
define('TABLE_CREATED', 'Tabela %s criada.');
define('ROWS_INSERTED', '%d registros inseridos na tabela %s.');
define('ROWS_FAILED', 'Falha ao inserir %d registros na tabela %s.');
define('TABLE_ALTERED', 'Tabela %s atualizada.');
define('TABLE_NOT_ALTERED', 'Falha ao atualizar a tabela %s.');
define('TABLE_DROPPED', 'Tabela %s excluída.');
define('TABLE_NOT_DROPPED', 'Falha ao excluir a tabela %s.');
// Mensagens de erro
define('ERR_COULD_NOT_ACCESS', 'Não foi possível acessar o diretório especificado. Verifique se ele existe e é legível pelo servidor.');
define('ERR_NO_XOOPS_FOUND', 'Nenhuma instalação do XOOPS foi encontrada na pasta especificada.');
define('ERR_INVALID_EMAIL', 'E-mail inválido');
define('ERR_REQUIRED', 'Informação obrigatória.');
define('ERR_PASSWORD_MATCH', 'As senhas não coincidem');
define('ERR_NEED_WRITE_ACCESS', 'O servidor deve ter permissão de gravação para os seguintes arquivos e pastas<br>(ex.: <em>chmod 775 nome_do_diretorio</em> em servidores UNIX/LINUX)<br>Se não existirem, crie-os manualmente e ajuste as permissões.');
define('ERR_NO_DATABASE', 'Não foi possível criar o banco de dados. Contate o administrador do servidor.');
define('ERR_NO_DBCONNECTION', 'Não foi possível conectar ao servidor de banco de dados.');
define('ERR_WRITING_CONSTANT', 'Falha ao gravar a constante %s.');
define('ERR_COPY_MAINFILE', 'Não foi possível copiar o arquivo de distribuição para %s');
define('ERR_WRITE_MAINFILE', 'Não foi possível escrever em %s. Verifique as permissões do arquivo e tente novamente.');
define('ERR_READ_MAINFILE', 'Não foi possível abrir %s para leitura');
define('ERR_INVALID_DBCHARSET', "O conjunto de caracteres '%s' não é suportado.");
define('ERR_INVALID_DBCOLLATION', "A colação '%s' não é suportada.");
define('ERR_CHARSET_NOT_SET', 'O conjunto de caracteres padrão do banco de dados do XOOPS não está definido.');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', 'Suporte');
define('LOGIN', 'Autenticação');
define('LOGIN_TITLE', 'Autenticação');
define('USER_LOGIN', 'Login do Administrador');
define('USERNAME', 'Nome de usuário:');
define('PASSWORD', 'Senha:');
define('ICONV_CONVERSION', 'Conversão de conjunto de caracteres');
define('ZLIB_COMPRESSION', 'Compressão Zlib');
define('IMAGE_FUNCTIONS', 'Funções de imagem');
define('IMAGE_METAS', 'Metadados de imagem (exif)');
define('FILTER_FUNCTIONS', 'Funções de filtro');
define('ADMIN_EXIST', 'A conta de administrador já existe.');
define('CONFIG_SITE', 'Configuração do site');
define('CONFIG_SITE_TITLE', 'Configuração do site');
define('MODULES', 'Instalação de módulos');
define('MODULES_TITLE', 'Instalação de módulos');
define('THEME', 'Selecionar tema');
define('THEME_TITLE', 'Selecionar o tema padrão');
define('INSTALLED_MODULES', 'Os seguintes módulos foram instalados.');
define('NO_MODULES_FOUND', 'Nenhum módulo encontrado.');
define('NO_INSTALLED_MODULES', 'Nenhum módulo instalado.');
define('THEME_NO_SCREENSHOT', 'Nenhuma captura de tela encontrada');
define('IS_VALOR', ' => ');
// Senhas
define('PASSWORD_LABEL', 'Força da senha');
define('PASSWORD_DESC', 'Senha não inserida');
define('PASSWORD_GENERATOR', 'Gerador de senhas');
define('PASSWORD_GENERATE', 'Gerar');
define('PASSWORD_COPY', 'Copiar');
define('PASSWORD_VERY_WEAK', 'Muito fraca');
define('PASSWORD_WEAK', 'Fraca');
define('PASSWORD_BETTER', 'Melhor');
define('PASSWORD_MEDIUM', 'Média');
define('PASSWORD_STRONG', 'Forte');
define('PASSWORD_STRONGEST', 'Muito forte');
//2.5.7
define('WRITTEN_LICENSE', 'Chave de licença do XOOPS %s gravada: <strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', 'Tentar novamente');
define('CHMOD_CHGRP_IGNORE', 'Usar mesmo assim');
define('CHMOD_CHGRP_ERROR', 'O instalador pode não conseguir gravar o arquivo de configuração %1$s.<p>O PHP está escrevendo arquivos como usuário %2$s e grupo %3$s.<p>O diretório %4$s/ pertence ao usuário %5$s e grupo %6$s.');
//2.5.9
define("CURL_HTTP", "Biblioteca de Cliente HTTP (cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', 'Domínio de cookie do site');
define('XOOPS_COOKIE_DOMAIN_HELP', 'Domínio para definir cookies. Pode ser vazio, o host completo da URL (www.exemplo.com) ou o domínio registrado sem subdomínios (exemplo.com) para compartilhamento entre subdomínios.');
define('INTL_SUPPORT', 'Funções de internacionalização');
define('XOOPS_SOURCE_CODE', "XOOPS no GitHub");
define('XOOPS_INSTALLING', 'Instalando');
define('XOOPS_ERROR_ENCOUNTERED', 'Erro');
define('XOOPS_ERROR_SEE_BELOW', 'Veja as mensagens abaixo.');
define('MODULES_AVAILABLE', 'Módulos disponíveis');
define('INSTALL_THIS_MODULE', 'Adicionar %s');
//2.5.11
define('ERR_COPY_CONFIG_FILE', 'Não foi possível copiar o arquivo de configuração %s');
