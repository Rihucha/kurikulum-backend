<?php

class Register
{
    private $student = [
      [
        'name' => "Arief",
        'nik'  => "TOO1"
      ]
    ];
    
    public function __construct() {
        echo "|===============================================|\n";
        echo "|               HAI MAMANK :V                   |\n";
        echo "|          Registrasi Santri ya (-_-)           |\n";
        echo "|===============================================|\n";
        echo " 1.update data                                   \n";
        echo " 2.delete data                                   \n";
        echo " 3.tambah data                                   \n";
    }

    public function mamank(array $array) {
        array_push($this->student, $array);
    }


    public static function insertStudent(array $santri): void
    {
        self::mamank();
        print_r($student);
    }
    public function delData() 
    {
        echo "Masukkan nama satri yang akan di hapus : ";
        $name = trim(fgets(STDIN));
        echo "Masukkan NIK santri yang akan di hapus : ";
        $nik = trim(fgets(STDIN));
        foreach ($this->student as $key => $value) {
            if ($name == $this->student[$key]['name'] && $nik == $this->student[$key]['nik']) {
                unset($this->student[$key]);
            }
        }
        print_r($this->student);
    }

    public function updateData()
    {
        echo "Masukkan nama santri yang akan di update : ";
        $name = trim(fgets(STDIN));
        echo "Masukkan NIK santri yang akan di update : ";
        $nik = trim(fgets(STDIN));
        echo "Masukkan nama baru : ";
        $name = trim(fgets(STDIN));
        echo "Masukkan NIK baru : ";
        $nik = trim(fgets(STDIN));
        foreach ($this->student as $key => $value) {
            if ($name == $this->student[$key]['name'] && $nik == $this->student[$key]['nik']) {
                $this->student[$key]['name'] = $name;
                $this->student[$key]['nik'] = $nik;
            }
        }
        print_r($this->student);
    }


    
}
class tambahData{
    
    public $santriii = ['name' => '', 'nik' => ''];
    
    public function tambahSantri() {
        echo "Masukkan nama santri yang akan di tambah : ";
        $name = trim(fgets(STDIN));
        echo "Masukkan NIK santri yang akan di tambah : ";
        $nik = trim(fgets(STDIN));
        $this->santriii['name'] = $name;
        $this->santriii['nik'] = $nik;
    }
}
$register = new Register;
$tambah = new tambahData;
$tambah->tambahSantri();

print_r($tambah->santriii);

// switch $register
// case

echo "\n";
$register->mamank($tambah->santriii);
echo "\n";
$register->updateData();
echo "\n";
$register->delData();
