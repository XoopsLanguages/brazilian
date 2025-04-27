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
 * Xoops locale
 *
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package             kernel
 * @since               2.3.0
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 * @todo                To be handled by i18n/l10n
 */
defined('XOOPS_ROOT_PATH') || exit('Acesso Restrito');

setlocale(LC_ALL, 'pt_BR'); // Define o locale para Português do Brasil

// !!IMPORTANTE!! insira '\' antes de qualquer caractere entre os caracteres reservados: "a","A","B","c","d","D","e","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"
// insira dupla '\' antes de 't','r','n'
define('_TODAY', "\H\o\j\e G:i");
define('_YESTERDAY', "\O\\n\\t\\e\m G:i");
define('_MONTHDAY', 'd/n G:i');
define('_YEARMONTHDAY', 'd/n/Y G:i');
define('_ELAPSE', 'há %s');
define('_TIMEFORMAT_DESC', "Formatos válidos: \"s\" - " . _SHORTDATESTRING . "; \"m\" - " . _MEDIUMDATESTRING . "; \"l\" - " . _DATESTRING . ';<br>' . "\"c\" ou \"custom\" - formato determinado de acordo com o intervalo até o presente; \"e\" - Decorrido; \"mysql\" - Y-m-d H:i:s;<br>" . "string especificada - Consulte o <a href=\"https://php.net/manual/pt_BR/function.date.php\" rel=\"external\">manual do PHP</a>.");

if (!class_exists('XoopsLocalAbstract')) {
    include_once XOOPS_ROOT_PATH . '/class/xoopslocal.php';
}

/**
 * Um Local Xoops
 *
 * @package             kernel
 * @subpackage          Language
 *
 * @author              Taiwen Jiang <phppp@users.sourceforge.net>
 * @copyright       (c) 2000-2016 XOOPS Project (www.xoops.org)
 */
class XoopsLocal extends XoopsLocalAbstract
{
    /**
     * Formatos de Número
     *
     * @param  unknown_type $number
     * @return mixed
     */
    public function number_format($number)
    {
        return number_format($number, 2, ',', '.'); // Inverte vírgula e ponto para o padrão brasileiro
    }

    /**
     * Formato de Moeda
     *
     * @param  string $format
     * @param  string $number
     * @return money  format
     */
    public function money_format($format, $number)
    {
        setlocale(LC_MONETARY, 'pt_BR'); // Define o locale monetário para Português do Brasil

        return money_format($format, $number);
    }
}
