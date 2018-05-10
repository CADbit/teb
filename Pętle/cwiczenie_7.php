<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    
</head>
<body>

<table border="1" rules = "all" width="250">
    
    <tr>
        <th>litera</th>
        <th>dec</th>
        <th>hex</th>
    </tr>

<?php
    $ogonki = "ąćęłńóśźżĄĆĘŁŃÓŚŹŻ";
    $liczbaLiter = strlen($ogonki);
    
    for ($i = 0 ; $i <$liczbaLiter; $i++)
    {
        echo "<tr>\n";
        echo "<td>{$ogonki[$i]}</td>";
        echo '<td>' . ord($ogonki[$i]).'</td>';
        echo '<td>' . bin2hex($ogonki[$i]) . '</td>';
        echo "</tr>\n";
    }
?>
</table>  

</body>
</html>

