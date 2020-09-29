<?php

require_once 'Hewan.php';
require_once 'Fight.php';
    //instance 


    class Harimau extends Hewan{
    
        private $Fight;
       
    //print
    
        public function __construct(){
    
            $this->Fight= new Fight;
        }



        public function setInfoHewan($nama,$darah,$jumlahKaki){

            $this->nama=$nama;
            $this->darah=$darah;
            $this->jumlahKaki=$jumlahKaki;



        }
        public function getInfoHewan(){


        return $this->$nama;
        return $this->$darah;
        return $this->$jumlahKaki;
            
            }
    
    }


    $Harimau = new Harimau();
    $Harimau->nama="Harimau";
    $Harimau->darah=30;

    $Harimau->jumlahKaki=4;
    $Harimau->keahlian="lari cepat";
    $Harimau->attackPower=7;
    $Harimau->deffencePower=8;
        
     

//      function getInfoHewan(){


    echo "<html>";
        echo "Nama : ".$Harimau->nama;
        echo "<br>";
        echo "Darah : ".$Harimau->darah;
        echo "<br>";
        echo "Jumlah Kaki : ".$Harimau->jumlahKaki;
        echo "<br>";
        echo "Keahlian :".$Harimau->keahlian;
        echo "<br>";
        echo "Attack Power :".$Harimau->attackPower;
        echo "<br>";
        echo "Deffece Power :".$Harimau->deffencePower;
        echo "<br>";


// }




?>

