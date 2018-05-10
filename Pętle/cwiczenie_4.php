<table>
    <tr>
        <th>a</th>

<?php
        $podstawa = 10;
        $wykladnik = 5;
        for ($i=0; $i <= $wykladnik; $i++) 
        {
            echo "<th>a<sup>$i</sup></th>\n";
        }
?>

    </tr>
<?php
    for ($i = 2; $i <= $podstawa; $i++) 
    {
        echo "<tr>\n";
        echo "<th>$i</th>\n";
    for ($j = 0; $j <= $wykladnik; $j++) 
    {
        echo '<td>';
        echo pow($i, $j);
        echo "</td>\n";
    }
        echo "</tr>\n";
    }
?>

</table>