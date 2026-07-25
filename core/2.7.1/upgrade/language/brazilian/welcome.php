<?php

// _LANGCODE: pt_BR
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>XOOPS Atualizador</h2>

<p>
<em>Atualizar</em> examinará esta instalação do XOOPS e aplicará quaisquer patches necessários para torná-la compatível 
com o novo código XOOPS. Os patches podem incluir alterações no banco de dados, adicionando configurações padrão para novos
itens de configuração, atualizações de arquivos e dados e muito mais.
<p>
Após cada patch, o atualizador reportará o status e aguardará sua entrada para continuar. No
Ao final da atualização, o controle passará para a função de atualização do módulo do sistema.

<div class="alert alert-warning">
Assim que a atualização for concluída, não se esqueça de:
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> exclua a pasta de atualização</li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> atualize todos os módulos que foram alterados</li>
</div>

EOT,
);
