<?php



require_once 'Harimau.php';
require_once 'Elang.php';


class Hewan{

    public $nama,
            $darah=50,
            $jumlahKaki,
            $keahlian;

        

    public function atraksi(){

        return $this->nama."Sedang".$this->keahlian;
    }

   
    

    

}

echo $Harimau->atraksi();
echo "<br>";
echo $Elang->atraksi();









// $laricepat=$Harimau->nama.'sedang menyerang'.$Elang->nama;





//  echo $laricepat;






?>