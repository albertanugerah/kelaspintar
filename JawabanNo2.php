<?php


fscanf(STDIN, "%s", $input);
function searchAnimal($input):void
{

    $hasil = [];
    $search  = ['sang gajah','serigala', 'harimau'];

    $total = str_word_count(strtolower($input),1," ");


    foreach ($total as  $kalimat){
        foreach ($search as $word){
            if (str_contains($kalimat,$word)){
                $hasil[] = $word;
            }
        }

    }
    echo implode(' - ',$hasil);
}
searchAnimal($input);