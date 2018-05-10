<table>
<tr>
    <th rowspan="2" bgcolor="black"><font color="white">mała litera</th>
    <th colspan="2" bgcolor="black"><font color="white">windows - 1250</th>
    <th colspan="2" bgcolor="black"><font color="white">iso - 8859 - 2</th>
</tr>

<tr bgcolor="black">
    <th><font color="white">dec</th>
    <th><font color="white">hex</th>
    <th><font color="white">dec</th>
    <th><font color="white">hex</th>
</tr>

<?php
    $polskie_win = "\xb9\xe6\xea\xb3\xf1\xf3\x9c\x9f\xbf\xa5\xc6\xca\xa3\xd1\xd3\x8c\x8f\xaf";
    $polskie_iso = "\xb1\xe6\xea\xb3\xf1\xf3\xb6\xbc\xbf\xa1\xc6\xca\xa3\xd1\xd3\xa6\xac\xaf";

    $liczbaLiter = strlen($polskie_win);
    
        for ($i = 0; $i < $liczbaLiter; $i++) 
        {
            $kodWin = ord($polskie_win[$i]);
            $kodIso = ord($polskie_iso[$i]);
            $kodWinHex = bin2hex($polskie_win[$i]);
            $kodIsoHex = bin2hex($polskie_iso[$i]);

            if ($polskie_win[$i] != $polskie_iso[$i])
            {
                echo '<tr bgcolor="#ff1493">';
            } 
            else 
            {
                echo '<tr>';
            }
                echo "<td>{$polskie_iso[$i]}</td>";
                echo "<td>$kodWin</td>";
                echo "<td>$kodWinHex</td>";
                echo "<td>$kodIso</td>";
                echo "<td>$kodIsoHex</td>";
                echo "</tr>\n\n";
        }

?>
</table>
