s<?php

$students = array(
                array(12,"ali","cs","smiu"),
                array(12,"ali","cs","smiu"),
                array(12,"ali","cs","smiu"),
                array(12,"ali","cs","smiu"),
                array(12,"ali","cs","smiu"),
                array(12,"ali","cs","smiu"),
                array(12,"ali","cs","smiu"),
                array(12,"ali","cs","smiu"),
                array(12,"ali","cs","smiu")                                
);



for ($i=0; $i < 9 ; $i++) { 
    
    for ($j=0; $j < 4; $j++) { 
        
        echo $students[$i][$j]."<br>";
    }
}

?>