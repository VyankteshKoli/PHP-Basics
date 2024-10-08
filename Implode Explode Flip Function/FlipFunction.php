<?php
    // FLIP FUNCTION
       $a = array("RollNO" => 1, "Name" => "Vyanktesh", "Age" => 19);
       echo "<pre>";
       echo "BEFORE FLIP:-<br>";
       print_r ($a);

       echo "<br>AFTER FLIP:-<br>";
       $b = array_flip ($a);
       print_r ($b);
?> 