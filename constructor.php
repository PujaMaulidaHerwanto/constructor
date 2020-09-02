<?php


class makanan {

    public $nama;
    public $jenis;
    public $rasa;
    public $harga;

    public function getLabel(){
        return "$this->nama, $this->jenis, $this->rasa, $this->harga ";
    }
    public function __construct($nama = "Tiramisu" , $jenis = "Kue" , $rasa = "Kopi" , $harga = 25000){
        $this->nama = $nama; 
        $this->jenis = $jenis;
        $this->rasa = $rasa;
        $this->harga = $harga;
    }

}
//membuat object instance dari class

$roti = new makanan("Black Choco Almond","Donat","Coklat",5000);

$roti2 = new makanan("Roti Bakar","Roti","Stroberi",3000);
// $roti2 ->nama = "Roti Bakar";
// $roti2 ->jenis = "Roti";
// $roti2 ->rasa = "Sroberi";
// $roti2 ->harga = 3000;

$roti3 = new makanan("Black Forest", "Kue", "Coklat");
// $roti3 ->nama = "Black Forest";
// $roti3 ->rasa = "Coklat";

echo "Kue : " .$roti->getLabel();
echo "<br>";
echo "Roti : " .$roti2->getLabel();
echo "<br>";
echo "Kue : " .$roti3->getLabel();

?>
