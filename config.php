<?php
/**
 * Holds constants/variables used in the configuration of the application.
 *
 * @author Kyle Vermeulen <kyle@source-lab.co.za>
 */

/**
 * These are the database connection details, change them as required.
 * Database dumps stored in the "sql" folder of the project root
 *
 */
//localhost
define('DB_HOST',               'localhost');
define('DB_NAME',               'brobev');
define('DB_USERNAME',           'root');
define('DB_PASSWORD',           '');
define('SCHWINN_COMP_LOGS_TBL', 'schwinncomplogs');

//staging
/*
define('DB_HOST',               'dedi130.cpt1.host-h.net');
define('DB_NAME',               'dedi130.cpt1.host-h.net');
define('DB_USERNAME',           'stagidazas_30');
define('DB_PASSWORD',           'Bh4T5DN8');
define('SCHWINN_COMP_LOGS_TBL', 'schwinncomplogs');
*/

//live!
/*
define('DB_HOST',       'sql2.cpt4.host-h.net');
define('DB_NAME',       'frutebsfse_db1');
define('DB_USERNAME',   'frutebsfse_1');
define('DB_PASSWORD',   'uaFsm9Z8');
define('SCHWINN_COMP_LOGS_TBL', 'schwinncomplogs');
*/

/**
 * Contact information of the admin, generaly used as "FROM" headers for email.
 * 
 */
define('ADMIN_EMAIL', 'competition@brothersbeverages.co.za');
define('ADMIN_NAME', 'Brothers Beverages');

/*define('ADMIN_EMAIL', 'tyrone@fishgate.co.za');
define('ADMIN_NAME', 'Brothers Beverages');*/

/**
 * Set the project state here for error handling, saves the end user from 
 * getting exceptions thrown at them, set to true/false.
 * 
 */
define('DEV', false);
define('DEV_EMAIL', 'kyle@fishgate.co.za, tyrone@fishgate.co.za');

/**
 * General pathing constants for including files and other goodness.
 *
 */
$root = pathinfo($_SERVER['SCRIPT_FILENAME']);
define('BASE_FOLDER',   basename($root['dirname']));
define('SITE_ROOT',     realpath(dirname(__FILE__)));
define('SITE_URL',      'http://'.$_SERVER['HTTP_HOST'].'/'.BASE_FOLDER);
define('ERROR_LOG',     SITE_ROOT.'/logs/errors.txt');
define('TEMPLATE_DIR',  SITE_ROOT.'/templates/');

/**
 * Setup autoloader to initiate classes with ease.
 *
 */
function __autoload($className) {
    require_once "./classes/$className.php";
}

?>
