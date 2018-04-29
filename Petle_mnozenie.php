<table>
<tr>
    <th></th>
    
<?php
$liczba_wierszy = 10;
$liczba_kolumn = 10;

for ($i = 1; $i <= $liczba_kolumn; $i++)
{
    echo "<th>$i</th>";
}
?>
</tr>

<?php

for ($i = 1; $i <= $liczba_wierszy; $i++)
{
echo '<tr>';
echo "<th>$i</th>";
for ($j = 1; $j <= $liczba_kolumn; $j++)
{
    echo '<td>';
    echo $j * $i;
    echo '</td>';
}
echo "</tr>";
}
?>

</table>