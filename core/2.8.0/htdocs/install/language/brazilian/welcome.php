<?php
//
// _LANGCODE: pt_BR
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> é um código aberto
    Sistema de publicação na Web orientado a objetos escrito em PHP. É uma ferramenta ideal para
    desenvolvendo sites comunitários dinâmicos de pequeno a grande porte, portais intraempresas, portais corporativos, weblogs e muito mais.
</p>
<p>
    XOOPS é liberado sob os termos do
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU Licença Pública Geral (GPL)</a>
    versão 2 ou superior e é gratuito para usar e modificar.
    A redistribuição é gratuita, desde que você cumpra os termos de distribuição do GPL.
</p>
<h3>Requisitos</h3>
<ul>
    <li>WWW Servidor (<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>, IIS, etc.)</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 8.2 ou superior, 8.4+ recomendado</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.7.8 ou superior, 8.4.5+ recomendado </li>
</ul>
<h3>Antes de você install</h3>
<ol>
    <li>Configure o servidor WWW, PHP e o servidor de banco de dados corretamente.</li>
    <li>Prepare um banco de dados para seu site XOOPS.</li>
    <li>Prepare a conta do usuário e conceda ao usuário acesso ao banco de dados.</li>
    <li>Torne esses diretórios e arquivos graváveis: %s</li>
    <li>Por questões de segurança, é altamente recomendável mover os dois diretórios abaixo para fora do <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">raiz do documento</a> e altere os nomes das pastas: %s</li>
    <li>Crie (se ainda não estiver presente) e torne estes diretórios graváveis: %s</li>
    <li>Ative o cookie e o JavaScript do seu navegador.</li>
</ol>
<h3>Notas Especiais</h3>
<ol>
    <li>Algumas combinações específicas de software de sistema podem exigir algumas configurações adicionais para funcionar
    com XOOPS. Se algum desses tópicos se aplicar ao seu ambiente, consulte o documento completo
    <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPS
    manual de instalação</a> para mais informações.<br><br>

    <li><strong>SELinux</strong> sistemas habilitados (como <strong>CentOS</strong>  e <strong>RHEL</strong>) pode exigir alterações no contexto de segurança
    para diretórios XOOPS além das permissões normais de arquivo para tornar os diretórios graváveis.
    Consulte a documentação do sistema e/ou administrador de sistemas.
</ol>
';

return $content;

