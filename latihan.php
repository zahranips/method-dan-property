<?php 
class Orang {
	public $nama = "Solehah",
	         $tinggiBadan = "155 cm",
	           $beratBadan = "55 kg",
	             $jenisKelamin= "perempuan";

	public function getCetak(){
		return "$this->nama,$this->tinggiBadan,$this->beratBadan,$this->jenisKelamin";
	}
}

$data1 = new Orang();
$data1->nama = "Zahrani";
$data1->tinggiBadan = "160 cm" ;
$data1->beratBadan = "60 kg" ;
$data1->jenisKelamin = "peremuan";
echo "Data Siswa 1: ". $data1->getCetak();

echo "<br>";

$data2 = new Orang();
$data2->nama = "Putri";
$data2->tinggiBadan = "170 cm";
$data2->beratBadan = "60 kg";
echo "Data Siswa 2: ". $data2->getCetak();

