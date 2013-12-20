<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 17/12/13
 * Time: 13:57
 * To change this template use File | Settings | File Templates.
 */

////-----
$str = <<<EOF
<p>me & you
EOF;
echo htmlSpecialChars($str);
////----
