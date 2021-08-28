<?php

use Illuminate\Support\Str;

/**
 * @param $value
 * @return string
 */
function numericFormat($value){
    
    $value = Str::replace(',', '.', $value);
    $value = Str::remove(' ', $value);
 
   $value = floatval($value) ;
    
    return $value  ;
}

/**
 * @param $value
 * @return string
 */
function currencyFormat($value){
    
    $value *=  1;
    
    return number_format($value, 3,","," " ) ;
}


/**
 * @param $value
 * @return string
 */
function remise($value){

    // conversion 
    $value = Str::replace(',', '.', $value);
    $value = Str::remove(' ', $value);
    $value = floatval($value) ;
  
    // calcul
    $value *= 0.05;
     
    // retour
    return  number_format($value, 3,","," " )  ;
}


/**
 * @param $value
 * @return string
 */
function fraisLivraison($value){

    $value = Str::replace(',', '.', $value);
    $value = Str::remove(' ', $value);
    $value = floatval($value) ;
    
    $value *=  0.01;

    return  number_format($value, 3,","," " )  ;
}
/**
 * @param $value
 * @return string
 */
function totalApresRemise($value){

    $value = Str::replace(',', '.', $value);
    $value = Str::remove(' ', $value);
    
    $value = floatval($value) ;
  
   $value *=  0.95;
    
   $value += $value * 0.01;
    
    return  number_format(round($value,2), 3,","," " )  ;
}