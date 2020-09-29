<?php
require_once 'Hewan.php';
require_once 'Fight.php';

//instance

class Elang extends Hewan{

    private $Fight;

    public function __construct(){

        $this->Fight= new Fight;
    }



}
    $Elang = new Elang();
    $Elang->nama="Elang";
    $Elang->jumlahKaki=2;
    $Elang->keahlian="terbang tinggi";
    $Elang->attackPower=10;
    $Elang->deffencePower=5;


    // print
    echo "<html>"; 
    echo "Nama : ".$Elang->nama;
    echo "<br>";
    echo "Darah : ".$Elang->darah;
    echo "<br>";
    echo "Jumlah Kaki : ".$Elang->jumlahKaki;
    echo "<br>";
    echo "Keahlian :".$Elang->keahlian; 
    echo "<br>";
    echo "Attack Power :".$Elang->attackPower;
    echo "<br>";
    echo "Deffece Power :".$Elang->deffencePower;
    echo "<br>";





?>