<?php

fscanf(STDIN,"%d %d",$x,$y);
for($i=0; $i<$x; $i++){
    if(2*$i + 4*($x-$i) == $y){
        echo 'Yes';
        exit;
    }
}
echo 'No';

// fscanf
// exit