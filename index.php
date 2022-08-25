<?php
$num=1;
while ($num<11){
    echo"Vinicius <br>";
    $num++;
}  
//while
for( $i = 0; $i < 10 ; $i++){
    echo "numero da linha $i <br>";
}
// for
do{
    echo "numero de linha $i <br>";
    $i ++;
}while($i < 10);
/*==============================*/
if (5>10){
    echo "é";
} else{
    echo "não é <br>";
}    
/*=============================*/
$diaSemana = 0;
switch($diaSemana){
    case 0:
        echo "domingo ";
        
    case 1:
        echo "segunda ";
        
    case 2:
        echo "terça ";
        
    case 3:
         echo "quarta ";
        break;
    case 4:
        echo "quinta ";
        break;
    case 5:
        echo "sexta ";
        break;
    case 6:
        echo "sabado ";
        break;
        
}
?>