<?php
function isBitten(){
    $num = rand(0, 1);
    if($num==1){
        return TRUE;
    }
       else{
        return FALSE;
    }
}
isBitten();
if(isBitten()==TRUE){
    echo"Bob bit your finger";
    }
    else{
    echo"Bob did not bit your finger";
    }

?>

