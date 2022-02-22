<?php 
$threads = 1;

for($i = 0; $i <= $threads-1; $i++){

    passthru("(php -f thread.php ". $i ." & ) >> /dev/null 2>&1");

    
}
echo 'запустил потоки';

/*
sudo chmod -R 0777 log && cd log && cd pagination &&  rm -rf *.txt && cd .. && cd ..
sudo chmod -R 0777 log && cd log && cd pagination &&  rm -rf *.txt && rm -rf *.csv && cd .. && cd .. 

*/
?>