<?php

define('TIME_START', microtime());
require_once '../library/bootstrap.php';

echo "\n\n************* miniCMS v3 command line tools *************\n\n";
if (file_exists(str_replace(':', DS, $argv[1]) . '.php')) {
    require_once(str_replace(':', DS, $argv[1]) . '.php');
} else {
    echo "Usage: php index.php module:action_name [cmd1] [cmd2]....[cmdX]\n\n";
}
//new Config_App('fileshare');
//echo Log::get();
//$debug = new Debug();
//$debug->test();

define('TIME_END', microtime());

echo 'Execution time : ' . (TIME_END - TIME_START) . ' microtime' . "\n\n";
echo "************* END COMMAND *******************************\n\n";