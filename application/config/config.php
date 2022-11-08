<?php
/*
 * Configuration for: Error reporting
 * Useful to show every little problem during development, but only show hard errors in production
 */
define('ENVIRONMENT', 'development');
if (ENVIRONMENT == 'development' || ENVIRONMENT == 'dev') {
    // error_reporting(0);
    // //ini_set("display_errors", 1);
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
}
/*
 * Configuration for: URL
 * Here we auto-detect your applications URL and the potential sub-folder.
 *
 * URL_PUBLIC_FOLDER:
 * The folder that is visible to public, users will only have access to that folder so nobody can have a look into
 * "/application" or other folder inside your application or call any other .php file than index.php inside "/public".
 *
 * URL_PROTOCOL:
 * This defines the protocol part of the URL. :The
 * protocol-independent '//' is used, which auto-recognized the protocol.
 *
 * URL_DOMAIN:
 * The domain.
 *
 * URL_SUB_FOLDER:
 * The sub-folder. this will be just "/"
 *
 * URL:
 * The final, auto-detected URL (build via the segments above). If you don't want to use auto-detection,
 * then replace this line with full URL (and sub-folder) and a trailing slash.
 */
define('URL_PUBLIC_FOLDER', 'public');
define('URL_PROTOCOL', '//');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);
/*
 * Configuration for: Database
 */   
define('DB_TYPE', 'mysql');
define('DB_HOST', 'db');
define('DB_NAME', 'perigrammata_db');
define('DB_USER', 'perigrammata_db');
define('DB_PASS', '@ad1p_c0urses_29_01_2020');
define("DB_PORT","3306");  
define('DB_CHARSET', 'utf8');   

