<?php
fscanf(STDIN, "%s\n", $input);

function cacah($input): void
{
    $isi = [];
    $i = 1;
    while (count($isi) <= $input - 1){
        if (($i % 3 === 0) && ($i % 7 === 0)) {
            $isi[] = 'x';
        }elseif(($i % 3 === 0) || ($i % 7 === 0)){
            $isi[] = $i;
        }

        $i++;
    }
    echo implode(",",$isi);
    echo "\n";
}
cacah($input);