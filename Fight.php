<?php 



require_once 'Harimau.php';
require_once 'Elang.php';
class Fight{

    public $attackPower,
            $defencePower;
        



        public function serang(){

            // $getCurrentAnimal=$_Post['Serang'];
            // $getCurrentVictim=$_Post['Korban'];

            // $serangan=$getCurrentAnimal.'sedang menyerang'.$getCurrentVictim;

            // echo $serangan;

            // return $serangan;




        }

        public function diserang(){

            $getCurrentAnimal='Harimau';
            $getCurrentVictim='Elang';
            // dd($getCurrentAnimal);   

            $attack=$getCurrentAnimal.'sedang diserang'.$getCurrentVictim;

            // echo $diserang;


            // if($getCurrentVictim == 'Elang'){

            //     $hpPrecentage=$Harimau->darah-$Elang->attackPower/$Harimau->deffencePower;

            // }



            // echo $attack;

            return $attack;








        }
    }


    // echo diserang();





    ?>