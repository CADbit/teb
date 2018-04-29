<table>
<tr>
    <th rowspan="2">mała litera</th>
    <th colspan="2">windows-1250</th>
    <th colspan="2">iso-8859-2</th>
</tr>

<tr>
    <th>dec</th>
    <th>hex</th>
    <th>dec</th>
    <th>hex</th>
</tr>

<?php
$polskie_win = "\xb9\xe6\xea\xb3\xf1\xf3\x9c\x9f\xbf\xa5\xc6\xca\xa3\xd1\xd3\x8c\x8f\xaf";
$polskie_iso = "\xb1\xe6\xea\xb3\xf1\xf3\xb6\xbc\xbf\xa1\xc6\xca\xa3\xd1\xd3\xa6\xac\xaf";     

$liczbaliter = strlen ($polskie_win);

for ($i = 0; $i < $liczbaliter; $i++)
{
$kodwin = ord ($polskie_win[$i]);
$kodiso = ord ($polskie_iso[$i]);
$kodwinHex = bin2hex($polskie_win[$i]);
$kodisoHex = bin2hex($polskie_iso[$i]);
if ($polskie_win[$i] != $polskie_iso[$i])
{
    echo '<tr class="rozne">';
} else
{
    echo '<tr>';
}
echo "<td>{$polskie_iso[$i]}</td>";
echo "<td>$kodwin</td>";
echo "<td>$kodwinHex</td>";
echo "<td>$kodiso</td>";
echo "<td>$kodisoHex</td>";

echo "</tr>\n\n";
}
?>

</table>