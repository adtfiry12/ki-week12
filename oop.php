<?php


// nama class
class SuperHero{

    // property dalam sebuah class
    var $nama;
    var $kekuatan;
    var $kelemahan;

    // method setNama
    function setNama($nama){
        $this->nama = $nama;
    }

    //method setKekuatan
    function setKekuatan($kekuatan){
        $this->kekuatan = $kekuatan;
    }

    // method setKelemahan
    function setKelemahan($kelemahan){
        $this->kelemahan = $kelemahan;
    }
}

//penggunaan class atau mengisi data
$king = new SuperHero();
$king->setNama('ultramaannn ');
$king->setKekuatan('cahaya ');
$king->setKelemahan('cuma tiga menit ');

echo 'superhero '. $king->nama .'memiliki kekuatan '.$king->kekuatan. 'dan kelemahan nya ' .$king->kelemahan;


//cara lain mengisi property
class PowerRanger
{
    var $nama;
    var $kekuatan;
    var $kelemahan;

    function __construct($nama, $kekuatan, $kelemahan)
    {
        $this->nama = $nama;
        $this->kekuatan = $kekuatan;
        $this->kelemahan = $kelemahan;
    }

    function display()
    {
        return "PowerRanger " . $this->nama . " memiliki kekuatan " . $this->kekuatan . " dan kelemahan " . $this->kelemahan;
    }
}

$ranger = new PowerRanger("Merah", "Pedang Sakti", "Kurang Fokus");
echo $ranger->display();
