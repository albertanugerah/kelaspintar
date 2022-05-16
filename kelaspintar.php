<?php

$input = 13;
function cacah(int $input): void
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


/**
 * Output :sang gajah - sang gajah - serigala - serigala - harimau;
 */

$string = "Berikut adalah kisah sang gajah. Sang gajah memiliki teman serigala bernama DoeSang. 
Gajah sering dibela oleh serigala ketika harimau mendekati gajah";



function searchAnimal(string $string):void
{

    $hasil = [];
    $search  = ['sang gajah','serigala', 'harimau'];

    $total = str_word_count(strtolower($string),1," ");


    foreach ($total as  $kalimat){
        foreach ($search as $word){
            if (str_contains($kalimat,$word)){
                $hasil[] = $word;
        }
     }

    }
   echo implode(' - ',$hasil) .PHP_EOL;
}
searchAnimal($string);


function checkPassword($password): void
{
    $threeDigitsNumber = preg_match('/^(.(?!\d\d\d))+$/',$password);
    $twoSpecialChars = preg_match("/(?=(.*[`!@#$%^&*\-_=+'.,]){2,})/", $password);
    $initialNumber = preg_match('/(^\d)/',$password);
    $minLength = preg_match('/(?=^.{8,}$)/', $password);
    $maxLength = preg_match('/(?=^.{8,32}$)/', $password);
    $containNumber = preg_match('/\d/',$password);
    $lowerAndUpper = preg_match('/^(?=.*[A-Z])(?=.*[a-z])/',$password);


    if (!$minLength) {
        echo "Kata sandi minimal 8 karakter";
    }
    elseif (!$maxLength){
        echo "Kata sandi max 32 karakter";
    }
    elseif ($initialNumber){

        echo "Karakter awal tidak boleh angka";
    }
    elseif (!$containNumber){
        echo "harus memiliki angka";
    }
    elseif (!$threeDigitsNumber){

        echo "Tidak boleh memiliki 3 angka berurutan";

    }elseif(!$twoSpecialChars){
        echo "Harus memiliki 2 atau lebih simbol";
    }
    elseif (!$lowerAndUpper){
        echo "Harus memiliki huruf kapital dan huruf kecil ";
    }
   else{
       echo "Kata sandi valid";
   }

}
checkPassword('aL8e@##!');



