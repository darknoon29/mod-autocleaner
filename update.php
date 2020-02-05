<?php
/**
 * Autocleaner update script
 * @package [Mod] Autocleaner
 * @subpackage main
 * @author DarkNoon <darknoon@darkcity.fr>
 * @copyright Copyright &copy; 2020, http://ogsteam.fr/
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version 2.1.9
 */
if (!defined('IN_SPYOGAME')) {
    die("Hacking attempt");
}

$mod_folder = "autocleaner";
$mod_name = "autocleaner";

update_mod($mod_folder, $mod_name);

mod_del_all_option();


