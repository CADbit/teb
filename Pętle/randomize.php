<?php
        $tab_ALPHA = ["A", "B", "VC", "D", "U", "P", "A"];
        $tab_NUM = [0, 1, 2, 3, 4, 5, 6, 7, 8];
        $tab_SPEC = ["!", "@", "#", "$", "%", "^", "&", "*", "(", ")"];

        function genCode($chars = [[], [], []], $qty = 4)

         {
            $code = "";

            for ($i = 0; $i < $qty ; $i++) 
                {
                    $tab = $chars[rand(0,count($chars)-1)];
                    $count_chars = count($tab);
                    $code .= $tab[rand(0, $count_chars -1)]; 
                }
                return $code;
        }
            
            echo(genCode([$tab_ALPHA, $tab_NUM, $tab_SPEC]));

?>

