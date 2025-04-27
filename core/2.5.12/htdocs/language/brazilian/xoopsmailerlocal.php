<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/
/**
 *  Xoops Language
 *
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             kernel
 * @subpackage          Xoops Mailer Local Language
 * @since               2.3.0
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 */
defined('XOOPS_ROOT_PATH') || exit('Acesso Restrito');
/**
 * Localiza as funções de e-mail
 *
 * A localização em inglês é apenas para demonstração
 */
// Não altere o nome da classe
class XoopsMailerLocal extends XoopsMailer
{
    /**
     * Construtor
     */
    public function __construct()
    {
        parent::__construct();
        // Supõe-se que não há necessidade de alterar o conjunto de caracteres
        $this->charSet = strtolower(_CHARSET);
        // Você DEVE especificar o valor do código de idioma para que o arquivo exista: XOOPS_ROOT_PAT/class/mail/phpmailer/language/lang-["seu-código-de-idioma"].php
        $this->multimailer->setLanguage('pt_br');
    }

    /**
     * Linguagens multibyte são encorajadas a criar seu método apropriado para codificar FromName
     *
     * @param $text
     *
     * @return mixed
     */
    public function encodeFromName($text)
    {
        // Ative a linha seguinte se necessário
        // $text = "=?{$this->charSet}?B?".base64_encode($text)."?=";
        return $text;
    }


    /**
     * Linguagens multibyte são encorajadas a criar seu método apropriado para codificar o Assunto
     *
     * @param $text
     *
     * @return mixed
     */
    public function encodeSubject($text)
    {
        // Ative a linha seguinte se necessário
        // $text = "=?{$this->charSet}?B?".base64_encode($text)."?=";
        return $text;
    }
}
