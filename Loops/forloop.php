<?php
      for($i=0; $i<=10; $i++)
      {
        if($i%2==0)
        {
            echo $i."<br>";
        }
        for($j=1; $j<$i; $j++)
        {
            if($j%2==1)
            {
                echo $j."<br>";
            }
        }
      }
?>