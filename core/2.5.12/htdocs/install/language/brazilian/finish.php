<?php
//
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .= "<h3>Seu site</h3>
<p>Você agora pode acessar a <a href='../index.php'>página inicial do seu site</a>.</p>
<h3>Suporte</h3>
<p>Visite <a href='https://xoops.org/' rel='external'>O Projeto XOOPS</a></p>
<p><strong>ATENÇÃO:</strong> Seu site atualmente contém a funcionalidade mínima. 
Por favor, visite <a href='https://xoops.org/' rel='external' title='Sistema de Aplicação Web XOOPS'>xoops.org</a> 
para saber mais sobre como estender o XOOPS para apresentar páginas de texto, galerias de fotos, fóruns e muito mais, 
com <em>módulos</em>, além de personalizar a aparência do seu XOOPS com <em>temas</em>.</p>
";

$content .= "<h3>Configuração de segurança</h3>
<p>O instalador tentará configurar seu site considerando aspectos de segurança. Por favor, verifique novamente para garantir:
<div class='confirmMsg'>
O arquivo <em>mainfile.php</em> está configurado como somente leitura.<br>
Remova a pasta <em>{$installer_modified}</em> (ou <em>install</em>, caso não tenha sido renomeada automaticamente pelo instalador) do seu servidor.
</div>
</p>
";
