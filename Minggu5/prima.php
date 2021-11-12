<?php
    function prima ($N){
        for($j=2; $j<$N; $j++){
           if($N % $j == 0){
                return 0;
            }
        }
       return 1;
    }
    echo "<b>Bilangan prima 1 - 50</b> <br> <br>";

    for($i=2; $i<=50; $i++){
        $N = prima($i);
        if($N == 1){
            echo "{$i} ";
        }
    }
    
 ?>