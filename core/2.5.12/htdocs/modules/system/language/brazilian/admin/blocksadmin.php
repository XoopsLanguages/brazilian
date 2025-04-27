<?php
/**
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license         GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * _LANGCODE    en
 * _CHARSET     UTF-8
 */
// Navegação
define('_AM_SYSTEM_BLOCKS_ADMIN', 'Administração de Blocos');
define('_AM_SYSTEM_BLOCKS_MANAGMENT', 'Gerenciar');
define('_AM_SYSTEM_BLOCKS_ADDBLOCK', 'Adicionar um novo bloco');
define('_AM_SYSTEM_BLOCKS_EDITBLOCK', 'Editar um bloco');
define('_AM_SYSTEM_BLOCKS_CLONEBLOCK', 'Clonar um bloco');

// Formulários
define('_AM_SYSTEM_BLOCKS_CUSTOM', 'Bloco personalizado');
define('_AM_SYSTEM_BLOCKS_TYPES', 'Todos os tipos');
define('_AM_SYSTEM_BLOCKS_GENERATOR', 'Módulos');
define('_AM_SYSTEM_BLOCKS_GROUP', 'Grupos');
define('_AM_SYSTEM_BLOCKS_SVISIBLEIN', 'Página');
define('_AM_SYSTEM_BLOCKS_DISPLAY', 'Exibir bloco ');
define('_AM_SYSTEM_BLOCKS_HIDE', 'Ocultar bloco ');
define('_AM_SYSTEM_BLOCKS_CLONE', 'Clonar');
define('_AM_SYSTEM_BLOCKS_SIDELEFT', 'Esquerda');
define('_AM_SYSTEM_BLOCKS_SIDETOPLEFT', 'Topo Esquerdo');
define('_AM_SYSTEM_BLOCKS_SIDETOPCENTER', 'Topo Central');
define('_AM_SYSTEM_BLOCKS_SIDETOPRIGHT', 'Topo Direito');
define('_AM_SYSTEM_BLOCKS_SIDERIGHT', 'Direita');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMLEFT', 'Inferior Esquerdo');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMCENTER', 'Inferior Central');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMRIGHT', 'Inferior Direito');

define('_AM_SYSTEM_BLOCKS_SIDEFOOTERLEFT', 'Rodapé Esquerdo');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERCENTER', 'Rodapé Central');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERRIGHT', 'Rodapé Direito');

define('_AM_SYSTEM_BLOCKS_ADD', 'Adicionar Bloco');
define('_AM_SYSTEM_BLOCKS_MANAGE', 'Gerenciar Bloco');
define('_AM_SYSTEM_BLOCKS_NAME', 'Nome');
define('_AM_SYSTEM_BLOCKS_TYPE', 'Tipo de Bloco');
define('_AM_SYSTEM_BLOCKS_SBLEFT', 'Bloco Lateral - Esquerda');
define('_AM_SYSTEM_BLOCKS_SBRIGHT', 'Bloco Lateral - Direita');
define('_AM_SYSTEM_BLOCKS_CBLEFT', 'Bloco Central - Esquerda');
define('_AM_SYSTEM_BLOCKS_CBRIGHT', 'Bloco Central - Direita');
define('_AM_SYSTEM_BLOCKS_CBCENTER', 'Bloco Central - Centro');
define('_AM_SYSTEM_BLOCKS_CBBOTTOMLEFT', 'Bloco Central - Inferior Esquerdo');
define('_AM_SYSTEM_BLOCKS_CBBOTTOMRIGHT', 'Bloco Central - Inferior Direito');

define('_AM_SYSTEM_BLOCKS_CBFOOTERLEFT', 'Bloco do Rodapé - Esquerda');
define('_AM_SYSTEM_BLOCKS_CBFOOTERCENTER', 'Bloco do Rodapé - Central');
define('_AM_SYSTEM_BLOCKS_CBFOOTERRIGHT', 'Bloco do Rodapé - Direita');

define('_AM_SYSTEM_BLOCKS_CBBOTTOM', 'Bloco Central - Inferior');
define('_AM_SYSTEM_BLOCKS_WEIGHT', 'Peso');
define('_AM_SYSTEM_BLOCKS_VISIBLE', 'Visível');
define('_AM_SYSTEM_BLOCKS_VISIBLEIN', 'Visível em');
define('_AM_SYSTEM_BLOCKS_TOPPAGE', 'Topo da Página');
define('_AM_SYSTEM_BLOCKS_ALLPAGES', 'Todas as Páginas');
define('_AM_SYSTEM_BLOCKS_UNASSIGNED', 'Não Atribuído');
define('_AM_SYSTEM_BLOCKS_TITLE', 'Título');
define('_AM_SYSTEM_BLOCKS_CONTENT', 'Conteúdo');
define('_AM_SYSTEM_BLOCKS_USEFULTAGS', 'Tags úteis:');
define('_AM_SYSTEM_BLOCKS_BLOCKTAG', '%s irá imprimir %s');
define('_AM_SYSTEM_BLOCKS_CTYPE', 'Tipo de Conteúdo');
define('_AM_SYSTEM_BLOCKS_HTML', 'HTML');
define('_AM_SYSTEM_BLOCKS_PHP', 'Script PHP');
define('_AM_SYSTEM_BLOCKS_AFWSMILE', 'Formato automático (emoticons habilitados)');
define('_AM_SYSTEM_BLOCKS_AFNOSMILE', 'Formato automático (emoticons desabilitados)');
define('_AM_SYSTEM_BLOCKS_BCACHETIME', 'Tempo de vida do cache');
define('_AM_SYSTEM_BLOCKS_CUSTOMHTML', 'Bloco Personalizado (HTML)');
define('_AM_SYSTEM_BLOCKS_CUSTOMPHP', 'Bloco Personalizado (PHP)');
define('_AM_SYSTEM_BLOCKS_CUSTOMSMILE', 'Bloco Personalizado (Formato automático + emoticons)');
define('_AM_SYSTEM_BLOCKS_CUSTOMNOSMILE', 'Bloco Personalizado (Formato automático)');
define('_AM_SYSTEM_BLOCKS_EDITTPL', 'Editar Template');
define('_AM_SYSTEM_BLOCKS_OPTIONS', 'Opções');
define('_AM_SYSTEM_BLOCKS_DRAG', 'Arraste ou organize o bloco');

// Mensagens
define('_AM_SYSTEM_BLOCKS_DBUPDATED', _AM_SYSTEM_DBUPDATED);
define('_AM_SYSTEM_BLOCKS_RUSUREDEL', 'Tem certeza de que deseja excluir este bloco? <div class="bold">%s</div>');
define('_AM_SYSTEM_BLOCKS_SYSTEMCANT', 'Blocos do sistema não podem ser excluídos!');
define('_AM_SYSTEM_BLOCKS_MODULECANT', 'Este bloco não pode ser excluído diretamente! Se desejar desativá-lo, desative o módulo.');

// Dicas
define('_AM_SYSTEM_BLOCKS_TIPS', '<ul>
<li>Você pode facilmente mudar a posição lateral ou a ordem com o arraste e soltura, clique na <img class="tooltip" src="%s" alt="' . _AM_SYSTEM_BLOCKS_DRAG . '" title="' . _AM_SYSTEM_BLOCKS_DRAG . '" /> esta imagem e ajuste seu site como quiser</li>
<li>Adicione um novo bloco personalizado</li>
<li>Defina o bloco online ou offline clicando em <img class="tooltip" width="16" src="%s" alt="' . _AM_SYSTEM_BLOCKS_DISPLAY . '" title="' . _AM_SYSTEM_BLOCKS_DISPLAY . '"/> ou <img class="tooltip" width="16" src="%s" alt="' . _AM_SYSTEM_BLOCKS_HIDE . '" title="' . _AM_SYSTEM_BLOCKS_HIDE . '" /></li>
</ul>');

define('_AM_SYSTEM_BLOCKS_FOOTER_LEFT', 'Rodapé Esquerdo');
define('_AM_SYSTEM_BLOCKS_FOOTER_CENTER', 'Rodapé Central');
define('_AM_SYSTEM_BLOCKS_FOOTER_RIGHT', 'Rodapé Direito');
