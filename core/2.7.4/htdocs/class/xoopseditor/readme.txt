xoopseditor fornece um coletivo de editores para XOOPS

guia do usuário:

1 verifique os arquivos xoops_version.php em /xoopseditor/ para ter certeza de que é mais recente que os atuais

2 carregue /xoopseditor/ para /XOOPS/class/ => /XOOPS/class/xoopseditor/:
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/class/xoopseditor/fckeditor
  XOOPS/class/xoopseditor/koivi
  XOOPS/class/xoopseditor/textarea
  XOOPS/class/xoopseditor/tinymce

3 configure preferências quando aplicável
3.1 ./dhtmlext(todos os editores)/idioma/: crie seu arquivo de idioma local baseado em english.php
3.3 ./dhtmlext(todos os editores)/editor_registry.php: definir configurações para o editor: order - ordem de exibição caso a seleção do editor seja usada, 0 para desabilitado; nohtml – funciona para sintaxe não-html
3.3 ./FCKeditor/module/: copie os arquivos para as pastas dos módulos caso sejam necessárias permissões de upload específicas do módulo, opções de armazenamento e editor
3.3.1 ./FCKeditor/module/fckeditor.config.js: para opções do editor, geralmente você não precisa alterá-lo
3.3.2 ./FCKeditor/module/fckeditor.connector.php: para especificar a pasta para navegação de arquivos (e upload de armazenamento) => XOOPS/uploads/XOOPS_FCK_FOLDER/, a pasta é necessária para criar manualmente
3.3.3 ./FCKeditor/module/fckeditor.upload.php: especifique permissão de upload e armazenamento de upload
3.4 XOOPS/uploads/fckeditor/: para criar a pasta se o FCKeditor estiver habilitado, usado para uploads de onde a pasta de upload não é especificada
3.5 ./tinymce/tinymce/jscripts/: baixe seus arquivos de idioma local em http://tinymce.moxiecode.com/language.php

4 verifique os nomes dos arquivos: para sistemas que diferenciam maiúsculas de minúsculas de nomes de arquivos, certifique-se de ter os nomes dos arquivos literalmente corretos, ou seja, "FCKeditor" não é idêntico a "fckeditor"

5 verifique /xoopseditor/sampleform.inc.php para obter o guia de desenvolvimento
