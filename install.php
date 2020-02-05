<?php
/**
 * Autocleaner install script
 * @package [Mod] Autocleaner
 * @subpackage main
 * @author DarkNoon <darknoon@darkcity.fr>
 * @copyright Copyright &copy; 2020, https://ogsteam.fr/
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @version 2.1.9
 */

if (!defined('IN_SPYOGAME')) {
    die("Hacking attempt");
}
// Ajout du module dans la table des mod de OGSpy
$is_ok = false;
$mod_folder = "autocleaner";
$is_ok = install_mod($mod_folder);
if ($is_ok == true) {
    //si besoin de creer des tables, a faire ici
    //Options par défaut.
   // mod_set_option("CYCLEMAJ", "24");
    //mod_set_option("MAJ_ALPHA", "0");
    //mod_set_option("MAJ_BETA", "0");
    //mod_set_option("LAST_REPO_LIST", "0");
} else {
    echo "<script>alert(\"Désolé, un problème a eu lieu pendant l'installation: corrigez les problèmes survenus et réessayez.\");</script>";
}

