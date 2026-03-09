<?php

// =============================
// CLASS PARENT : User
// =============================
class User {

    // Property dibuat private (Encapsulation)
    private $nama;
    private $email;

    // Constructor
    public function __construct($nama, $email) {
        $this->nama = $nama;
        $this->email = $email;
    }

    // Setter Nama
    public function setNama($nama){
        $this->nama = $nama;
    }

    // Getter Nama
    public function getNama(){
        return $this->nama;
    }

    // Setter Email
    public function setEmail($email){
        $this->email = $email;
    }

    // Getter Email
    public function getEmail(){
        return $this->email;
    }
}


// =============================
// CLASS CHILD : Mahasiswa
// =============================
class Mahasiswa extends User {

    private $nim;

    public function __construct($nama, $email, $nim){

        // memanggil constructor parent
        parent::__construct($nama,$email);

        $this->nim = $nim;
    }

    public function getNim(){
        return $this->nim;
    }
}


// =============================
// CLASS CHILD : Dosen
// =============================
class Dosen extends User {

    private $nidn;

    public function __construct($nama,$email,$nidn){

        parent::__construct($nama,$email);

        $this->nidn = $nidn;
    }

    public function getNidn(){
        return $this->nidn;
    }
}


// =============================
// MEMBUAT OBJECT
// =============================

$mahasiswa1 = new Mahasiswa("Elly", "elly@email.com", "22001");

$dosen1 = new Dosen("Mr. Erza", "erza@email.com", "11022");


// =============================
// MENAMPILKAN DATA
// =============================

echo "Data Mahasiswa <br>";
echo "Nama : " . $mahasiswa1->getNama() . "<br>";
echo "Email : " . $mahasiswa1->getEmail() . "<br>";
echo "NIM : " . $mahasiswa1->getNim() . "<br>";

echo "<br>";

echo "Data Dosen <br>";
echo "Nama : " . $dosen1->getNama() . "<br>";
echo "Email : " . $dosen1->getEmail() . "<br>";
echo "NIDN : " . $dosen1->getNidn() . "<br>";

?>