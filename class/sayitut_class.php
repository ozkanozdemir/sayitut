<?php

namespace sayibulmaca;

/**
*  @ author Özkan Özdemir
*/

class sayitut 
{

    public $sonsayi;
    private $tumsayilar     = [];
    
    function __construct( $sonsayi = 100 )
    {
        if( is_int($sonsayi) )
        {
            $this->sonsayi   = $sonsayi;
        }        
    }

    private function sayilari_hesapla()
    {
        
        for ( $i = 1; $i <= $this->sonsayi ; $i *= 2 ) { 
            
            $this->tumsayilar[$i]   = [];
            
            $ust_limit  = $i;
            $sayac      = 0;
            $sayac2     = 1;

            for ( $ii = $i; $ii <= $this->sonsayi ; $ii++ ) {

                if ( $sayac < $ust_limit  and $sayac2 == 1 ) {
                    array_push($this->tumsayilar[$i], $ii);
                    $sayac++;
                }// if
                else{
                    $sayac2     = 0;
                    $sayac--;
                    
                    if($sayac==0)
                    {
                        $sayac2 = 1;
                    }// if
                }// else
                

            }//for

        }// for

    }// function sayilari_hesapla

    public function sayilari_getir()
    {
        $this->sayilari_hesapla();
        return $this->tumsayilar;
    }// function sayilari_getir

}// class
