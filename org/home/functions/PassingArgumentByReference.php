<?php
/**
 * preparation-php-certification
 * User: user
 * Date: 21/04/13
 * Time: 21:48
 */

namespace org\home\functions;


class PassingArgumentByReference {

}
function countAll(&$count)
{
    if (func_num_args() == 0) {
    die("You need to specify at least one argument");
} else {
    $args = func_get_args();
    // Returns an array of arguments
// Remove the defined argument from the beginning
        array_shift($args);
foreach ($args as $arg) {
    $count += strlen($arg);
}
}
}
$count = 0;
countAll($count, "foo", "bar", "baz"); // $count now equals 9
echo $count.PHP_EOL;


print("optional parameters");
function cmdExists($cmd, &$output = null) {
    $output = 'whereis $cmd';
if (strpos($output, DIRECTORY_SEPARATOR) !== false) {
        return true;
    } else {
        return false;
    }
}
cmdExists("cmd");