<!DOCTYPE html>


<body>
<h1>Display Radio Buttons</h1>

<form action="/main.php">

    <p>Please Select Your Animal:</p>
    <input type="radio" id="Elang" name="selection" value="Elang">
    <label for="Elang">Elang</label><br>
    <input type="radio" onclick="window.location='/Tugas/Harimau.php';"/>
    <label for="Harimau">Harimau</label><br>


    

  



</body>


</html>


<!-- 

<php






$getSelection=$request->selection;

if($selection == "Elang"){

    $Elang= new Elang();
    $Elang->jumlahKaki=2;
    $Elang->keahlian="terbang tinggi";
    $Elang->attackPower=10;
    $Elang->defencePower=5;
}
else{

    $Harimau = new Harimau();
    $Harimau->jumlahKaki=4;
    $Harimau->keahlian="lari cepat";
    $Harimau->attackPower=7;
    $Harimau->defencePower=8;
}



require 'Hewan.php';
require 'Fight.php';
require 'Main.php;';
require 'Elang.php';
require 'Harimau.php';
?> -->