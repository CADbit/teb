<pre>
    <?php

    echo "\n";
    $wys = 32;
        for ($i = 1; $i <= $wys; $i++) 
        {
            for ($j = 1; $j <= $wys - $i; $j++) 
            {
                echo ' ';
            } 
            for ($j = 1; $j <= 2 * $i - 1; $j++) 
            {
                echo '*';
            } 
             echo "\n";
        }
    ?> 
    
</pre>