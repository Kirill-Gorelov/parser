<?php 
// http://www.bioinformatics.org/phplabware/internal_utilities/htmLawed/tidy.htm
require 'htmlLawed.php';
$in = '<div>
<div>
<table
border="1"
style="background-color: red;">
<tr>    <td>A    cell</td><td colspan="2" rowspan="2">¬
<table border="1" style="background-color: green;"><tr><td>Cell</td><td colspan="2" rowspan="2"></td></tr><tr><td>Cell</td></tr><tr><td>Cell</td><td>Cell</td><td>Cell</td></tr></table>¬
</td></tr>¬
<tr><td>Cell</td></tr><tr><td>Cell</td><td>Cell</td><td>Cell</td></tr></table></div></div>';


$out = htmLawed($in, array('tidy'=>'some value'));

print_r($out);
?>