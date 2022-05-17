<?php
function cekPola(int $n)

{

    for ($i=$n; $i >= 1; $i--) {

        if ($i == $n || $i == 1) {

            echo str_repeat('X', $n). "\n";

        }elseif($i - 3 >= 0) {

            echo "X" . str_repeat('O', $i - 2). "XX" ."\n";

            if ($i - 2 < $i-1 ) {

                echo "X" . str_repeat('O', $i - 2). "X" . str_repeat('O', $i-($i-4) ) ."\n";

            }

        }else{

            echo str_repeat('X', $n). "\n";

        }

    }

}

cekPola(5);