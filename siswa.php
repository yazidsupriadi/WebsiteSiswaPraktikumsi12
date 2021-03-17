<?php

class Siswa{

    public $nama;
    public $nisn;
    public $gender;

    public function set_nama($nama){
      
    $this->nama = $nama;  
   }

   function get_nama(){
       return $this->nama;
   }

   function set_nisn($nisn){
       $this->nisn = $nisn;
   }
   function get_nisn(){
       return $this->nisn;
   }

    function hadir(){
        return "siswa ini hadir di kelas";
    }

    function nilaisiswa($nilai_uts,$nilai_uas,$nilai_tugas){
         
        return ($nilai_uts + $nilai_uas+ $nilai_tugas)/3;
    }


}

$siswa1 = new Siswa();
$siswa1->set_nama("yazid");
$siswa1->set_nisn("0110217042");
echo "nama siswa :".$siswa1->get_nama();
echo "<br>";
echo "nisn siswa: ".$siswa1->get_nisn();
echo "<br>";
echo "Nilai akhir siswa : ".$siswa1->nilaisiswa(80,80,90);

echo "<br>";

echo "<br>";

$siswa2 = new Siswa();
$siswa2->set_nama("john");
$siswa2->set_nisn("01928191202");
echo "nama siswa".$siswa2->get_nama();
echo "<br>";
echo "nisn siswa : ".$siswa2->get_nisn();
echo "<br>";
echo "Nilai akhir siswa : ".$siswa2->nilaisiswa(95,80,90);



?>