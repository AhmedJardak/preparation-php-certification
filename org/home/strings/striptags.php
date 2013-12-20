<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ajar
 * Date: 17/12/13
 * Time: 09:25
 * To change this template use File | Settings | File Templates.
 */
$string = "<a ddd='errr'>rrfrr</a>";
echo strip_tags($string);

echo PHP_EOL;
//--
$html = '<p>line1<br />line2</p>';
echo strip_tags($html, 'br');
