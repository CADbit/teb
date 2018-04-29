<table  border = 1 rules = "all" width ="200" textalign="center">
<tr>
    <th>litera</th>
    <th>dec</th>
    <th>hex</th>
</tr>

<?php

$ogonki = "ąćęłńóśźżĄĆĘŁŃÓŚŹŻ";

$liczbaliter = strlen($ogonki);

for ($i = 0; $i < $liczbaliter; $i++)
{
    echo "<tr>\n";
    echo "<td>{$ogonki[$i]}</td>";
    echo '<td>' . ord($ogonki[$i]) . '</td>';
    echo '<td>' . bin2hex($ogonki[$i]) . '</td>';
    echo "</tr>\n";
    
}
?>
</table>