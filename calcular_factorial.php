<?php
    function calcular_factorial($num){
        $factorial=1;
        for($i=1; $i<=$num; $i++){
            $factorial=$factorial*$i;
        }
        return $factorial;
    }
?>