<?php

class ShowTable {
    static function show($array) {
        if (!empty($array)) {
            $head = '';
            foreach($array[0] as $key => $value) {
                $head .= '<th>'.$key.'</th>';
            }

            $tr = '';
            foreach ($array as $row) {
                $tr .= '<tr>';
                foreach($row as $key => $value) {
                    $tr .= '<td>'.$value.'</td>';
                }
                $tr .= '</tr>';
            }

            $table = '
            <table>
                <thead>
                    <tr>'.
                    $head
                    .'</tr>
                </thead>
                <tbody>'.
                    $tr
                .'</tbody>
            </table>';

            echo $table;
        }
    }
}

?>

