<table border = "1" rules ="all">

<?php
    $n = 'ABRAKADABRA';
    $dl = strlen($n);
    
    for ($i = 0; $i< $dl; $i++)
    {
        if ($i % 2 )
        {
            echo '<tr class="np" style="background-color: black; color: white">';
        } 
        else 
        {
            echo '<tr>';
        }
            echo "<td>{$n[$i]}</td></tr>";
    }
?>

</table>

