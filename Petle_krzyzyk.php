<table>
<?php

$w = 15;
$k = 11;

for ($i = 1; $i <= $w; $i++)
{
    echo '<tr>';
    for ($j = 1; $j <= $k; $j++)
    {
        if (
            ((floor($w/2) + 1) == $i) ||
            ((floor($k/2) + 1) == $j)   
        ) {
            echo '<td class = "cz" style="background:black"></td>';
        } else {
         echo '<td></td>';   
        }
    }
    echo '</tr>';
    echo "\n";
    
}
    ?>
</table>

