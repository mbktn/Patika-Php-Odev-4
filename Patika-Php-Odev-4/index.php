<?php
 class Ucgen{
   
    public $toplam;
    public $alan;
    public function uCevre($kenar1,$kenar2,$kenar3){
        return $this->toplam=$kenar1+$kenar2+$kenar3;
    }

    public function uAlan($yukseklik,$tabankenar){
        return $this->alan=$yukseklik*$tabankenar;
    }
 }

 class Kare{
   
    public $toplam;
    public $alan;
    public function kCevre($kenar1,$kenar2,$kenar3,$kenar4){
        return $this->toplam=$kenar1+$kenar2+$kenar3+$kenar4;
    }

    public function kAlan($kenar1,$kenar2){
        return $this->alan=$kenar1*$kenar2;
    }
 }


 class Dikdortgen{
   
    public $toplam;
    public $alan;
    public function dCevre($kenar1,$kenar2,$kenar3,$kenar4){

        if($kenar1==$kenar2 || $kenar3==$kenar4){
         echo " Doğru bir sonuc icin lütfen uzunkenar,kisakenar,uzunkenar,kisakenar seklinde giriniz!";
        }
        else{
            return $this->toplam=$kenar1+$kenar2+$kenar3+$kenar4;
        }
    }
        

    public function dAlan($uzunkenar,$kisakenar){
        return $this->alan=$uzunkenar*$kisakenar;
    }
 }