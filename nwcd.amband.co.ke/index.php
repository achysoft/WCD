<?php

/*
 *---------------------------------------------------------------
 * CHECK PHP VERSION
 *---------------------------------------------------------------
 */
$minPhpVersion = '8.1';
if (version_compare(PHP_VERSION, $minPhpVersion, '<')) {
    $message = sprintf(
        'Your PHP version must be %s or higher to run CodeIgniter. Current version: %s',
        $minPhpVersion,
        PHP_VERSION,
    );

    header('HTTP/1.1 503 Service Unavailable.', true, 503);
    echo $message;
    exit(1);
}

/*
 *---------------------------------------------------------------
 * SET THE CURRENT DIRECTORY
 *---------------------------------------------------------------
 */
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

if (getcwd() . DIRECTORY_SEPARATOR !== FCPATH) {
    chdir(FCPATH);
}

/*
 *---------------------------------------------------------------
 * BOOTSTRAP THE APPLICATION (CI 4.5+)
 *---------------------------------------------------------------
 */
$pathsPath = realpath(FCPATH . 'nwcd/app/Config/Paths.php');
if (!is_file($pathsPath)) {
    header('HTTP/1.1 503 Service Unavailable.', true, 503);
    echo 'Paths file not found: ' . $pathsPath;
    exit(1);
}

require $pathsPath;
require FCPATH . 'nwcd/vendor/autoload.php';

$paths = new Config\Paths();

require rtrim($paths->systemDirectory, '/ ') . '/Boot.php';

exit(CodeIgniter\Boot::bootWeb($paths));
