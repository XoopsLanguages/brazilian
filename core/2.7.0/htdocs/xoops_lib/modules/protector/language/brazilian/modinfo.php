<?php

if (defined('FOR_XOOPS_LANG_CHECKER')) {
    $mydirname = 'protector';
}
$constpref = '_MI_' . strtoupper($mydirname);

if (defined('FOR_XOOPS_LANG_CHECKER') || !defined($constpref . '_LOADED')) {
    define($constpref . '_LOADED', 1);

    // Nome deste módulo
    define($constpref . '_NAME', 'Protetor');

    // Breve descrição deste módulo
    define($constpref . '_DESC', 'Este módulo protege seu site XOOPS contra vários ataques como DoS, Injeção SQL e contaminação de variáveis.');

    // Menu
    define($constpref . '_ADMININDEX', 'Centro do Protetor');
    define($constpref . '_ADVISORY', 'Aviso de Segurança');
    define($constpref . '_PREFIXMANAGER', 'Gerenciador de Prefixos');
    define($constpref . '_ADMENU_MYBLOCKSADMIN', 'Permissões');

    // Configurações
    define($constpref . '_GLOBAL_DISBL', 'Desativado temporariamente');
    define($constpref . '_GLOBAL_DISBLDSC', 'Todas as proteções estão temporariamente desativadas.<br>Não se esqueça de reativar isso após resolver o problema');

    define($constpref . '_DEFAULT_LANG', 'Idioma padrão');
    define($constpref . '_DEFAULT_LANGDSC', 'Especifique o conjunto de idiomas para exibir mensagens antes de processar common.php');

    define($constpref . '_RELIABLE_IPS', 'IPs confiáveis');
    define($constpref . '_RELIABLE_IPSDSC', 'Defina os IPs confiáveis separados por |. ^ corresponde ao início da string, $ corresponde ao final da string.');

    define($constpref . '_LOG_LEVEL', 'Nível de registro');
    define($constpref . '_LOG_LEVELDSC', '');

    define($constpref . '_BANIP_TIME0', 'Tempo de suspensão para IP banido (segundos)');

    define($constpref . '_LOGLEVEL0', 'Nenhum');
    define($constpref . '_LOGLEVEL15', 'Silencioso');
    define($constpref . '_LOGLEVEL63', 'Silencioso');
    define($constpref . '_LOGLEVEL255', 'Completo');

    define($constpref . '_HIJACK_TOPBIT', 'Bits de IP protegidos para a sessão');
    define($constpref . '_HIJACK_TOPBITDSC', 'Proteção contra Sequestro de Sessão:<br>Padrão 24/56 (máscara de rede para IPV4/IPV6). (Todos os bits são protegidos)<br>Quando seu IP não é estável, defina o intervalo de IP pelo número de bits.<br>(ex.) Se seu IP pode variar na faixa de 192.168.0.0-192.168.0.255, defina 24(bits) aqui');
    define($constpref . '_HIJACK_DENYGP', 'Grupos com movimentação de IP proibida em uma sessão');
    define($constpref . '_HIJACK_DENYGPDSC', 'Proteção contra Sequestro de Sessão:<br>Selecione os grupos que não podem mudar de IP durante uma sessão.<br>(Recomendo ativar para Administrador.)');
    define($constpref . '_SAN_NULLBYTE', 'Sanitização de bytes nulos');
    define($constpref . '_SAN_NULLBYTEDSC', 'O caractere de terminação "\\0" é frequentemente usado em ataques maliciosos.<br>Um byte nulo será convertido em espaço.<br>(Altamente recomendado como Ativado)');
    define($constpref . '_DIE_NULLBYTE', 'Encerrar se bytes nulos forem encontrados');
    define($constpref . '_DIE_NULLBYTEDSC', 'O caractere de terminação "\\0" é frequentemente usado em ataques maliciosos.<br>(Altamente recomendado como Ativado)');
    define($constpref . '_DIE_BADEXT', 'Encerrar se arquivos maliciosos forem enviados');
    define($constpref . '_DIE_BADEXTDSC', 'Se alguém tentar enviar arquivos com extensões perigosas como .php, este módulo encerrará o XOOPS.<br>Se você frequentemente anexa arquivos PHP no B-Wiki ou PukiWikiMod, desative isso.');
    define($constpref . '_CONTAMI_ACTION', 'Ação se uma contaminação for encontrada');
    define($constpref . '_CONTAMI_ACTIONDS', 'Selecione a ação quando alguém tentar contaminar variáveis globais do sistema no XOOPS.<br>(Opção recomendada é tela em branco)');
    define($constpref . '_ISOCOM_ACTION', 'Ação se um comentário isolado for encontrado');
    define($constpref . '_ISOCOM_ACTIONDSC', 'Proteção contra Injeção SQL:<br>Selecione a ação quando um "/*" isolado for encontrado.<br>"Sanitização" significa adicionar outro "*/" no final.<br>(Opção recomendada é Sanitização)');
    define($constpref . '_UNION_ACTION', 'Ação se um UNION for encontrado');
    define($constpref . '_UNION_ACTIONDSC', 'Proteção contra Injeção SQL:<br>Selecione a ação quando uma sintaxe como UNION do SQL for encontrada.<br>"Sanitização" significa mudar "union" para "uni-on".<br>(Opção recomendada é Sanitização)');
    define($constpref . '_ID_INTVAL', 'Forçar intval para variáveis como id');
    define($constpref . '_ID_INTVALDSC', 'Todas as requisições chamadas "*id" serão tratadas como inteiros.<br>Essa opção protege contra alguns tipos de XSS e Injeções SQL.<br>Embora eu recomende ativar essa opção, ela pode causar problemas com alguns módulos.');
    define($constpref . '_FILE_DOTDOT', 'Proteção contra Travessias de Diretórios');
    define($constpref . '_FILE_DOTDOTDSC', 'Elimina ".." de todas as requisições que parecem Travessias de Diretórios');

    define($constpref . '_BF_COUNT', 'Anti Força Bruta');
    define($constpref . '_BF_COUNTDSC', 'Defina o número máximo de tentativas de login permitidas para um visitante em 10 minutos. Se as tentativas falhas excederem esse número, o endereço IP do visitante será banido.');

    define($constpref . '_BWLIMIT_COUNT', 'Limitação de largura de banda');
    define($constpref . '_BWLIMIT_COUNTDSC', 'Especifique o acesso máximo ao mainfile.php durante o tempo de observação. Este valor deve ser 0 para ambientes normais com largura de banda de CPU suficiente. Números menores que 10 serão ignorados.');

    define($constpref . '_DOS_SKIPMODS', 'Módulos fora do verificador de DoS/Crawler');
    define($constpref . '_DOS_SKIPMODSDSC', 'Defina os nomes dos diretórios dos módulos separados por |. Essa opção será útil para módulos de bate-papo, etc.');

    define($constpref . '_DOS_EXPIRE', 'Tempo de observação para altas cargas (segundos)');
    define($constpref . '_DOS_EXPIREDSC', 'Este valor especifica o tempo de observação para recarregamentos frequentes (ataque F5) e crawlers com alta carga.');

    define($constpref . '_DOS_F5COUNT', 'Contagem de ataques F5');
    define($constpref . '_DOS_F5COUNTDSC', 'Prevenção contra ataques DoS.<br>Este valor especifica a contagem de recarregamentos considerada como um ataque malicioso.');
    define($constpref . '_DOS_F5ACTION', 'Ação contra Ataque F5');

    define($constpref . '_DOS_CRCOUNT', 'Contagem de Crawlers Maliciosos');
    define($constpref . '_DOS_CRCOUNTDSC', 'Prevenção contra crawlers de alta carga.<br>Este valor especifica a contagem de acessos considerada como um crawler de má conduta.');
    define($constpref . '_DOS_CRACTION', 'Ação contra Crawlers de Alta Carga');

    define($constpref . '_DOS_CRSAFE', 'User-Agent Permitido');
    define($constpref . '_DOS_CRSAFEDSC', 'Um padrão de regex perl para User-Agent.<br>Se corresponder, o crawler nunca será considerado como de alta carga.<br>ex.) /(bingbot|Googlebot|Yahoo! Slurp)/i');

    define($constpref . '_OPT_NONE', 'Nenhum (apenas registro)');
    define($constpref . '_OPT_SAN', 'Sanitização');
    define($constpref . '_OPT_EXIT', 'Tela em Branco');
    define($constpref . '_OPT_BIP', 'Banir o IP (Sem limite)');
    define($constpref . '_OPT_BIPTIME0', 'Banir o IP (moratória)');

    define($constpref . '_DOSOPT_NONE', 'Nenhum (apenas registro)');
    define($constpref . '_DOSOPT_SLEEP', 'Dormir');
    define($constpref . '_DOSOPT_EXIT', 'Tela em Branco');
    define($constpref . '_DOSOPT_BIP', 'Banir o IP (Sem limite)');
    define($constpref . '_DOSOPT_BIPTIME0', 'Banir o IP (moratória)');
    define($constpref . '_DOSOPT_HTA', 'NEGAR por .htaccess (Experimental)');

    define($constpref . '_BIP_EXCEPT', 'Grupos nunca registrados como IP Malicioso');
    define($constpref . '_BIP_EXCEPTDSC', 'Um usuário que pertence ao grupo especificado aqui nunca será banido.<br>(Recomendo ativar para Administrador.)');

    define($constpref . '_DISABLES', 'Desativar recursos perigosos no XOOPS');

    define($constpref . '_DBLAYERTRAP', 'Ativar proteção contra Injeção SQL no DB Layer');
    define($constpref . '_DBLAYERTRAPDSC', 'Quase todos os ataques de Injeção SQL serão cancelados por este recurso. Este recurso requer suporte do databasefactory. Você pode verificá-lo na página de Aviso de Segurança. Esta configuração deve estar ativada. Nunca a desative sem motivo.');
    define($constpref . '_DBTRAPWOSRV', 'Nunca verificar _SERVER para proteção contra Injeção SQL');
    define($constpref . '_DBTRAPWOSRVDSC', 'Alguns servidores sempre ativam a proteção no DB Layer. Isso causa detecções erradas como ataque de Injeção SQL. Se você receber esses erros, ative esta opção. Saiba que esta opção enfraquece a segurança da proteção contra Injeção SQL no DB Layer.');

    define($constpref . '_BIGUMBRELLA', 'Ativar proteção contra XSS (BigUmbrella)');
    define($constpref . '_BIGUMBRELLADSC', 'Isso protege contra quase todos os ataques via vulnerabilidades XSS. Mas não é 100%');

    define($constpref . '_SPAMURI4U', 'Anti-SPAM: URLs para usuários normais');
    define($constpref . '_SPAMURI4UDSC', 'Se este número de URLs for encontrado nos dados POST de usuários que não sejam administradores, o POST será considerado SPAM. 0 desativa este recurso.');
    define($constpref . '_SPAMURI4G', 'Anti-SPAM: URLs para visitantes');
    define($constpref . '_SPAMURI4GDSC', 'Se este número de URLs for encontrado nos dados POST de visitantes, o POST será considerado SPAM. 0 desativa este recurso.');

    //3.40b
    define($constpref . '_ADMINHOME', 'Início');
    define($constpref . '_ADMINABOUT', 'Sobre');
    //3.50
    define($constpref . '_STOPFORUMSPAM_ACTION', 'Parar Spam de Fórum');
    define($constpref . '_STOPFORUMSPAM_ACTIONDSC', 'Verifica dados POST contra spammers registrados no banco de dados www.stopforumspam.com. Requer a biblioteca CURL do PHP.');
    // 3.60
    define($constpref . '_ADMINSTATS', 'Visão Geral');
    define($constpref . '_BANIP_TIME0DSC', 'Tempo de suspensão em segundos para banimentos automáticos de IP');
}
