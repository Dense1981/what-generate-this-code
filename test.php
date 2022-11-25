<?php

 $a = basename(__FILE__);
 $b = '

// Was wird ausgegeben?

// ';
 $c = $a = $b;
foreach(array($c) as $d){
 $x = strpos($c, $c[0]);
 $d = "\$_REQUEST[$d]";

for(; $x < strlen($d); $x++) $e.= $d[$x];
}

echo str_replace(array('$_REQUEST[',']', '// '), '', $e);

?>
