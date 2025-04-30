<?php
//
// _LANGCODE: en
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> é um sistema de publicação web orientado a objetos e de código aberto, escrito em PHP. É uma ferramenta ideal para
    o desenvolvimento de sites dinâmicos de comunidades pequenas ou grandes, portais internos de empresas, portais corporativos, blogs e muito mais.
</p>
<p>
    O XOOPS é distribuído sob os termos da
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">Licença Pública Geral GNU (GPL)</a>
    versão 2 ou superior, e é gratuito para usar e modificar.
    Também é gratuito para redistribuir, desde que você respeite os termos de distribuição da GPL.
</p>
<h3>Requisitos</h3>
<ul>
    <li>Servidor WWW (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS, etc.)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 7.4 ou superior, recomendado 7.3+</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.5 ou superior, recomendado 5.7+ </li>
</ul>
<h3>Antes de instalar</h3>
<ol>
    <li>Configure corretamente o servidor WWW, o PHP e o servidor de banco de dados.</li>
    <li>Prepare um banco de dados para o seu site XOOPS.</li>
    <li>Crie uma conta de usuário e conceda a ela o acesso ao banco de dados.</li>
    <li>Deixe graváveis estes diretórios e arquivos: %s</li>
    <li>Por questões de segurança, recomenda-se fortemente mover os dois diretórios abaixo para fora do <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">document root</a> e alterar os nomes das pastas: %s</li>
    <li>Crie (se ainda não existirem) e deixe graváveis estes diretórios: %s</li>
    <li>Ative o uso de cookies e JavaScript no seu navegador.</li>
</ol>
<h3>Notas Especiais</h3>
<p>Algumas combinações específicas de softwares de sistema podem exigir configurações adicionais para funcionar
 corretamente com o XOOPS. Se algum desses tópicos se aplicar ao seu ambiente, consulte o
 <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">manual completo de instalação do XOOPS</a> para mais informações.
</p>
<p>O MySQL 8.0 não é suportado em todas as versões do PHP. Mesmo nas versões compatíveis, problemas com a
 biblioteca <em>mysqlnd</em> do PHP podem exigir que o <em>default-authentication-plugin</em>
 do servidor MySQL seja configurado como <em>mysql_native_password</em> para funcionar corretamente.
</p>
<p>Em sistemas com SELinux habilitado (como CentOS e RHEL), pode ser necessário alterar o contexto de segurança
 dos diretórios do XOOPS, além de ajustar as permissões normais dos arquivos, para que os diretórios sejam graváveis.
 Consulte a documentação do seu sistema e/ou o administrador de sistemas.
</p>
';

return $content;

