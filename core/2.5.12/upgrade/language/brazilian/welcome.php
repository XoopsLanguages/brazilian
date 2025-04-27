<?php

// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>Atualizador do XOOPS</h2>

<p>
<em>Upgrade</em> irá examinar esta instalação do XOOPS e aplicar quaisquer correções necessárias para torná-la compatível 
com o novo código do XOOPS. As correções podem incluir alterações no banco de dados, adição de configurações padrão para novos
itens de configuração, atualizações de arquivos e dados, e mais.
<p>
Após cada correção, o atualizador informará o status e aguardará sua confirmação para continuar. No final da atualização,
o controle será passado para a função de atualização do módulo do sistema.

<div class="alert alert-warning">
Após a conclusão da atualização, não se esqueça de:
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> excluir a pasta de atualização</li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> atualizar quaisquer módulos que tenham sido alterados</li>
</ul>
</div>

EOT,
);
