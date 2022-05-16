<?php
$input = 'S@nd1w4r3#';
function checkPassword(string $password): void
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
checkPassword($input);