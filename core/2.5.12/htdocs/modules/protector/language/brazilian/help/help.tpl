<div id="help-template" class="outer">
    <h1 class="head">Ajuda: <a class="ui-corner-all tooltip" href="<{$xoops_url}>/modules/protector/admin/index.php" title="Voltar à administração do Protector"> Protector <img src="<{xoAdminIcons 'home.png'}>" alt="Voltar à administração do Protector"/></a></h1>
    <h4 class="odd">Descrição</h4>

    <p class="even">Protector é um módulo para defender seu XOOPS CMS de vários ataques maliciosos.</p>
    <h4 class="odd">Instalar/desinstalar</h4>

    <p>Primeiro, defina XOOPS_TRUST_PATH em mainfile.php se você ainda não o fez.</p>
    <br>

    <p>Copie html/modules/protector no arquivo para XOOPS_ROOT_PATH/modules/</p>

    <p>Copie xoops_trust_path/modules/protector no arquivo para XOOPS_TRUST_PATH/modules/</p>
    <br>

    <p>Ative a permissão de escrita para XOOPS_TRUST_PATH/modules/protector/configs</p>
    <h4 class="odd">= Como resgatar =</h4>

    <p class="even">Se você foi banido pelo Protector, basta excluir os arquivos em XOOPS_TRUST_PATH/modules/protector/configs/</p>
    <h4 class="odd">Introdução para os plugins de filtro neste arquivo.</h4>

    <p class="even">- postcommon_post_deny_by_rbl.php
        <br>
        um plugin anti-SPAM.
        <br>
        Todas as postagens de IPs registrados em RBL serão rejeitadas.
        <br>
        Este plugin pode diminuir o desempenho das postagens, especialmente em módulos de bate-papo.
    </p>

    <p>- postcommon_post_deny_by_httpbl.php
        <br>
        um plugin anti-SPAM.
        <br>
        Todas as postagens de IPs registrados em http:BL serão rejeitadas.
        <br>
        Antes de usá-lo, obtenha HTTPBL_KEY em http://www.projecthoneypot.org/ e defina-o no arquivo de filtro.
        <br>
        define( 'PROTECTOR_HTTPBL_KEY' , '............' ) ;
    </p>

    <p class="even">- postcommon_post_need_multibyte.php
        <br>
        um plugin anti-SPAM.
        <br>
        Postagens sem caracteres multibyte serão rejeitadas.
        <br>
        Este plugin é apenas para sites em japonês, chinês tradicional, chinês simplificado e coreano.
    </p>

    <p>- postcommon_post_htmlpurify4guest.php
        <br>
        Todos os dados de postagem enviados por visitantes serão purificados pelo HTMLPurifier.
        <br>
        Se você permite que visitantes postem HTML, recomendo fortemente que você o habilite.
    </p>

    <p class="even">-postcommon_register_insert_js_check.php
        <br>
        Este plugin impede o registro de usuários por robôs em seu site.
        <br>
        Requer que o JavaScript funcione no navegador dos visitantes.
    </p>

    <p>- bruteforce_overrun_message.php
        <br>
        Especifique uma mensagem para visitantes que tentaram senhas incorretas mais vezes do que o especificado.
        <br>
        Todos os plugins nomeados *_message.php especificam a mensagem para acessos rejeitados.
    </p>

    <p class="even">- precommon_bwlimit_errorlog.php
        <br>
        Quando a limitação de largura de banda funcionar inesperadamente, este plugin a registra no error_log do Apache.
    </p>

    <p>Todos os plugins nomeados *_errorlog.php registram algumas informações no error_log do Apache.</p>
    <h4 class="odd">Tutorial</h4>

    <p class="even">Tutorial em breve.</p>
</div>
