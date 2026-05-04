<?php

// _LANGCODE: pt_BR
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
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', 'Pode ser corrigido automaticamente: a variável de item foreach será renomeada anexando "_item" (por exemplo, "foo" se torna "foo_item").');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', 'Não Gravável');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', 'Opções de Revarredura');

define('_XOOPS_SMARTY4_FIX_BUTTON', 'Marque a caixa "Sim" abaixo e, em seguida, clique no botão Executar Varredura para tentar corrigir automaticamente quaisquer problemas encontrados.');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', 'Marcar como Concluído');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', 'Diretório de Modelos (opcional)');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', 'Extensão de Modelo (opcional)');

define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.7.0 introduz uma mudança significativa: Smarty 4</h3>

<p>Infelizmente, esta mudança pode potencialmente perturbar alguns temas mais antigos. Portanto, antes de prosseguir com a atualização, certifique-se de seguir estas etapas:

<li>Execute preflight.php para verificar se há temas ou modelos de módulo desatualizados.</li>
<li>Se algum problema for identificado, consulte este documento para entender as modificações necessárias antes de prosseguir com a atualização.</li>
<li>Depois de fazer as alterações necessárias, execute preflight.php novamente.</li>
<li>Se não houver mais problemas, você poderá iniciar o processo de atualização.</li>
</p>
EOT,
);
