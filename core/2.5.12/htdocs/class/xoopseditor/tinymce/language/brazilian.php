<?php
/**
 *  TinyMCE adapter for XOOPS
 *
 * @copyright    (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          core
 * @subpackage       xoopseditor
 * @since            2.3.0
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 */
/*
 * Assocated with editor_registry.php
 */
// Nome do editor
define('_XOOPS_EDITOR_TINYMCE', 'TinyMCE');
// O valor deve ser o mesmo que /tinymce/jscripts/langs/seu_código_de_idioma, por exemplo, "en" para Inglês, "fr" para Francês
// Para detalhes, veja http://tinymce.moxiecode.com/download_i18n.php
define('_XOOPS_EDITOR_TINYMCE_LANGUAGE', 'pt_BR');
// LISTA DE FONTES, FORMATO: "Nome=valor1,valor2;Nome=valor"
define('_XOOPS_EDITOR_TINYMCE_FONTS', 'Arial=arial,helvetica,sans-serif;Courier New=courier new,courier,monospace;Georgia=georgia,times new roman,times,serif;Tahoma=tahoma,arial,helvetica,sans-serif;Times New Roman=times new roman,times,serif;Verdana=verdana,arial,helvetica,sans-serif;Impact=impact;WingDings=wingdings');
define('_FAILGETIMG', 'Falha ao obter a imagem %s');
