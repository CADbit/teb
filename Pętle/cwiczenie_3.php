<table>
    <tr>
        <th></th>
<?php
        $liczbaWierszy = 10;
        $liczbaKolumn = 10;

        for ($i = 1; $i <= $liczbaKolumn; $i++) 
        {
            echo "<th>$i</th>";
        }
?>
    </tr>

<?php
    for ($i = 1; $i <= $liczbaWierszy; $i++) 
    {
        echo '<tr>';
        echo "<th>$i</th>";
    for ($j = 1; $j <= $liczbaKolumn; $j++) 
    {
        echo '<td>';
        echo $j *$i;
        echo'</td>';
    }
        echo"</tr>";
    }
?>
</table>
