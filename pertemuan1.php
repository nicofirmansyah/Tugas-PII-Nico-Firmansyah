<?php

class MahlukHidup {

    public $nama;
  
    function __construct($nama) {
      $this->nama = $nama;
    }
    public function ambilNama()
    {
      return $this->nama;
    }
}

class Manusia extends Mahlukhidup{

    public function biodata($umur, $jeniskelamin)
    {
        echo "
        MANUSIA <br>
        # $this->nama <br>
        - $umur Tahun<br>
        - $jeniskelamin <br>
        - Makanan Kesukaan <br>";
        
    }    
    public function makananKesukaan($makanan)
    {
        echo "
        &nbsp;&nbsp; + $makanan
        <br>
        ";
    }    
}
class Hewan extends Mahlukhidup{

    public function biodataHewan($umur, $jenishewan ,$jeniskelamin)
    {
        echo "
        HEWAN <br>
        # $this->nama <br>
        - $umur Tahun <br>
        - $jenishewan <br>
        - $jeniskelamin <br>
        - Makanan Kesukaan Hewan <br>";
        
    }    
    public function makananKesukaanHewan($makanan)
    {
        echo "
        &nbsp;&nbsp; + $makanan
        <br>
        ";
    }    
}



////////////////////////////////


class Bangunan {
    public $nama;
  
    function __construct($nama) {
      $this->nama = $nama;
    }
    public function ambilNama()
    {
      return $this->nama;
    }
}
 
class Pribadi extends Bangunan {
    public function detailRuangan($luas, $harga)
    {
        echo "
        Bangunan Pribadi <br>
        # $this->nama <br>
        - Luas Tanah $luas <br>
        - Harga $harga <br>
        - Jumlah Ruangan <br>";
        
    }    
    public function jumlahRuangan($nama_ruangan, $jumlah)
    {
        echo "
        &nbsp;&nbsp; + $nama_ruangan $jumlah ruangan.
        <br>
        ";
    }    
    
}
class Umum extends Bangunan {
    public function detailBangunan($luas, $harga)
    {
        echo "
        Bangunan Umum <br>
        # $this->nama <br>
        - Luas Tanah $luas <br>
        - Harga $harga <br>
        - Jumlah Bangunan Ruangan <br>";
        
    }    
    public function jumlahBangunan($nama_bangunan, $jumlah)
    {
        echo "
        &nbsp;&nbsp; + $nama_bangunan $jumlah bangunan.
        <br>
        ";
    }   

}

echo "++CLASS PARENT PERTAMA++ <br>";
echo "==CLASS CHILD PERTAMA==<br><br>";
$new = New Manusia("Nico Firmansyah");
$new->biodata(20, "Laki-Laki");
$new->makananKesukaan("Ayam Goreng");
$new->makananKesukaan("Nasi Goreng");
echo "<br>==CLASS CHILD KEDUA==<br><br>";
$hewan = New Hewan("Buaya");
$hewan->biodataHewan(3, "Reptil" ,"Jantan");
$hewan->makananKesukaanHewan("Daging Ayam Segar");
$hewan->makananKesukaanHewan("Daging Sapi");


echo  
"<br><br><br><center>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</center>";


echo "++CLASS PARENT PERTAMA++ <br>";
echo "==CLASS CHILD PERTAMA==<br><br>";

$pribadi = new Pribadi("Rumah Pribadi");
$pribadi->detailRuangan("23 M2", "Rp. 200000");
$pribadi->jumlahRuangan("kamar mandi", 10);
$pribadi->jumlahRuangan("kamar tidur", 2);
$pribadi->jumlahRuangan("Dapur", 10);


echo "==CLASS CHILD KEDUA ==<br><br>";

$pribadi = new Umum("Hotel");
$pribadi->detailBangunan("1 Hektar", "Rp. 100000000");
$pribadi->jumlahBangunan("Kamar Tamu", 200);
$pribadi->jumlahBangunan("Ruang Makan Tamu", 3);
$pribadi->jumlahBangunan("Ruang Meeting", 10    );