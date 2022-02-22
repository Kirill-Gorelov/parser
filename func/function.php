<?php 
 function arrayContext($context)
 {
     $export = '';
     foreach ($context as $key => $value) {
         $export .= "{$key}: ";
         $export .= preg_replace(array(
             '/=>\s+([a-zA-Z])/im',
             '/array\(\s+\)/im',
             '/^  |\G  /m'
         ), array(
             '=> $1',
             'array()',
             '    '
         ), str_replace('array (', 'array(', var_export($value, true)));
         $export .= PHP_EOL;
     }
     return str_replace(array('\\\\', '\\\''), array('\\', '\''), rtrim($export));
 }

?>