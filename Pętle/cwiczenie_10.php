<pre>

<?php

$wys = 16;
$szer = 60;

	for ($i = 1; $i <= $wys; $i++) 
		{
    		for ($j = 1; $j <= $wys - $i; $j++) 
    		{
        		echo ' ';
    		}
   		 	for ($j = 1; $j <= $szer; $j++) 
   		 	{
        		echo '*';
    		}
    			echo "\n";
		}	
?>

</pre>
