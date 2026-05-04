<?php
//
// _LANGCODE: pt_BR
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .= "<h3>Seu site</h3>
<p>Agora você pode acessar o <a href='../index.php'>página inicial do seu site</a>.</p>
<h3>Apoiar</h3>
<p>Visita <a href='https://xoops.org/' rel='external'>O Projeto XOOPS</a></p>
<p><strong>ATENÇÃO:</strong> Atualmente, seu site contém a funcionalidade mínima. 
Por favor visite <a href='https://xoops.org/' rel='external' title='XOOPS Web Application System'>xoops.org</a> 
para saber mais sobre como estender XOOPS para apresentar páginas de texto, galerias de fotos, fóruns e muito mais, 
com <em>módulos</em> além de personalizar a aparência do seu XOOPS com <em>temas</em>.</p>
";

$content .= "<h3>Configuração de segurança</h3>
<p>O instalador tentará configurar seu site por questões de segurança. Verifique novamente para ter certeza:
<div class='confirmMsg'>
O <em>mainfile.php</em> é somente leitura.<br>
Remova a pasta <em>{$installer_modified}</em> (ou <em>install</em> se não tiver sido renomeado automaticamente pelo instalador) do seu servidor.
</div>
</p>
";
