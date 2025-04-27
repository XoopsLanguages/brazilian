<?php

// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'Migração para Smarty4 no XOOPS');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', 'Resultados do Scanner');
define('_XOOPS_SMARTY4_SCANNER_RUN', 'Executar Varredura');
define('_XOOPS_SMARTY4_SCANNER_END', 'Sair do Scanner');
define('_XOOPS_SMARTY4_SCANNER_RULE', 'Regra');
define('_XOOPS_SMARTY4_SCANNER_MATCH', 'Correspondência');
define('_XOOPS_SMARTY4_SCANNER_FILE', 'Arquivo');
define('_XOOPS_SMARTY4_SCANNER_FIXED', 'Contagem de Correções');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', 'Revisão manual necessária');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'Não Gravável');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'Opções de Revarredura');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'Marque a caixa "Sim" abaixo e, em seguida, clique no botão Executar Varredura para tentar corrigir automaticamente quaisquer problemas encontrados.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'Marcar como Concluído');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'Diretório de Modelos (opcional)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'Extensão de Modelo (opcional)');

define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>O XOOPS 2.5.12 introduz uma mudança significativa: Smarty 4</h3>

<p>Infelizmente, essa mudança pode potencialmente afetar alguns temas mais antigos. Portanto, antes de prosseguir com a atualização, siga estas etapas:

<li>Execute o preflight.php para verificar se há temas ou modelos de módulos desatualizados.</li>
<li>Se forem identificados problemas, consulte este documento para entender as modificações necessárias antes de prosseguir com a atualização.</li>
<li>Após realizar as alterações necessárias, execute o preflight.php novamente.</li>
<li>Se não houver mais problemas, você pode iniciar o processo de atualização.</li>
</p>
EOT,
);
