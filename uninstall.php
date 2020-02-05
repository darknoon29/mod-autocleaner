<?php
/**
 * Autocleaner uninstall script
 * @package [Mod] Autocleaner
 * @subpackage main
 * @author DarkNoon <darknoon@darkcity.fr>
 * @copyright Copyright &copy; 2020, http://ogsteam.fr/
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

if (!defined('IN_SPYOGAME')) {
    die("Hacking attempt");
}

$mod_uninstall_name = "autocleaner";
uninstall_mod($mod_unistall_name, $mod_uninstall_table);


mod_del_all_option();

