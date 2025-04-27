<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN', '');
define('_MD_A_MYMENU_MYBLOCKSADMIN', 'Permissões');
define('_MD_A_MYMENU_MYPREFERENCES', 'Preferências');
// index.php
define('_AM_TH_DATETIME', 'Data/Hora');
define('_AM_TH_USER', 'Usuário');
define('_AM_TH_IP', 'IP');
define('_AM_TH_AGENT', 'Agente');
define('_AM_TH_TYPE', 'Tipo');
define('_AM_TH_DESCRIPTION', 'Descrição');
define('_AM_TH_BADIPS', 'IPs Bloqueados<br><br><span style="font-weight:normal;">Escreva cada IP em uma linha<br>Em branco significa que todos os IPs são permitidos</span>');
define('_AM_TH_GROUP1IPS', 'IPs Permitidos para Grupo=1<br><br><span style="font-weight:normal;">Escreva cada IP em uma linha.<br>192.168. significa 192.168.*<br>Em branco significa que todos os IPs são permitidos</span>');
define('_AM_LABEL_COMPACTLOG', 'Compactar log');
define('_AM_BUTTON_COMPACTLOG', 'Compactar!');
define('_AM_JS_COMPACTLOGCONFIRM', 'Registros duplicados (IP,Tipo) serão removidos');
define('_AM_LABEL_REMOVEALL', 'Remover todos os registros');
define('_AM_BUTTON_REMOVEALL', 'Remover todos!');
define('_AM_JS_REMOVEALLCONFIRM', 'Todos os logs serão removidos permanentemente. Tem certeza?');
define('_AM_LABEL_REMOVE', 'Remover os registros marcados:');
define('_AM_BUTTON_REMOVE', 'Remover!');
define('_AM_JS_REMOVECONFIRM', 'Remover OK?');
define('_AM_MSG_IPFILESUPDATED', 'Arquivos para IPs foram atualizados');
define('_AM_MSG_BADIPSCANTOPEN', 'O arquivo para IPs bloqueados não pode ser aberto');
define('_AM_MSG_GROUP1IPSCANTOPEN', 'O arquivo para permitir grupo=1 não pode ser aberto');
define('_AM_MSG_REMOVED', 'Registros foram removidos');
define('_AM_FMT_CONFIGSNOTWRITABLE', 'Torne o diretório de configurações gravável: %s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', 'Gerenciador de Prefixos');
define('_AM_MSG_DBUPDATED', 'Banco de Dados Atualizado com Sucesso!');
define('_AM_CONFIRM_DELETE', 'Todos os dados serão excluídos. OK?');
define('_AM_TXT_HOWTOCHANGEDB', "Se você deseja alterar o prefixo,<br> edite %s/data/secure.php manualmente.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', 'Não seguro');
define('_AM_ADV_TRUSTPATHPUBLIC', 'Se você pode ver uma imagem -NG- ou o link retorna uma página normal, seu XOOPS_TRUST_PATH não está configurado corretamente. O melhor lugar para o XOOPS_TRUST_PATH é fora do DocumentRoot. Se você não puder fazer isso, você deve colocar um .htaccess (DENY FROM ALL) logo abaixo do XOOPS_TRUST_PATH como a segunda melhor opção.');
define('_AM_ADV_TRUSTPATHPUBLICLINK', 'Verifique se os arquivos PHP dentro do TRUST_PATH estão configurados como somente leitura (deve retornar erro 404, 403 ou 500)');
define('_AM_ADV_REGISTERGLOBALS', "Se 'ON', essa configuração permite vários tipos de ataques por injeção. Se possível, configure 'register_globals off' no php.ini, ou, se não for possível, crie ou edite o .htaccess no diretório XOOPS:");
define('_AM_ADV_ALLOWURLFOPEN', "Se 'ON', essa configuração permite que atacantes executem scripts arbitrários em servidores remotos.<br>Apenas o administrador pode alterar essa opção.<br>Se você for administrador, edite o php.ini ou httpd.conf.<br><b>Exemplo de httpd.conf:<br>   php_admin_flag   allow_url_fopen   off</b><br>Caso contrário, solicite isso aos seus administradores.");
define('_AM_ADV_USETRANSSID', "Se 'ON', seu ID de Sessão será exibido em tags de âncora, etc.<br>Para evitar o sequestro de sessão, adicione uma linha ao .htaccess no XOOPS_ROOT_PATH.<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX', "Essa configuração facilita 'Injeções SQL'.<br>Não se esqueça de ativar 'Forçar sanitização *' nas preferências deste módulo.");
define('_AM_ADV_LINK_TO_PREFIXMAN', 'Ir para o gerenciador de prefixos');
define('_AM_ADV_MAINUNPATCHED', 'Você deve editar seu mainfile.php conforme descrito no README.');
define('_AM_ADV_DBFACTORYPATCHED', 'Sua databasefactory está pronta para a proteção contra injeção SQL no DBLayer');
define('_AM_ADV_DBFACTORYUNPATCHED', 'Sua databasefactory não está pronta para a proteção contra injeção SQL no DBLayer. Algumas correções são necessárias.');
define('_AM_ADV_SUBTITLECHECK', 'Verificar se o Protector está funcionando corretamente');
define('_AM_ADV_CHECKCONTAMI', 'Contaminação');
define('_AM_ADV_CHECKISOCOM', 'Comentários Isolados');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', 'e coloque a linha abaixo nele:');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', 'Prefixo');
define('_AM_PROTECTOR_TABLES', 'Tabelas');
define('_AM_PROTECTOR_UPDATED', 'Atualizado');
define('_AM_PROTECTOR_COPY', 'Copiar');
define('_AM_PROTECTOR_ACTIONS', 'Ações');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', 'Banir os IPs nos registros marcados:');
define('_AM_BUTTON_BAN_BY_IP', 'Banir IP!');
define('_AM_JS_BANCONFIRM', 'Banir IPs OK?');
define('_AM_MSG_BANNEDIP', 'IPs foram banidos');
define('_AM_ADMINSTATS_TITLE', 'Resumo do Log do Protector');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', 'Último Mês');
define('_AM_ADMINSTATS_LAST_WEEK', 'Última Semana');
define('_AM_ADMINSTATS_LAST_DAY', 'Último Dia');
define('_AM_ADMINSTATS_LAST_HOUR', 'Última Hora');
