<?php
if(isset($_POST['nama'])){

$nama = $_POST['nama'];
$user = array(
    array(
        "Nama"              => "Adeva afshen",
        "NIK"               => "3210",
        "Jenis_kelamin"     => "Perempuan",
        "Tgl_lahir"         => "2007-11-3"
    ),
    array(
        "Nama"              => "Kenan",
        "NIK"               => "9087",
        "Jenis_kelamin"     => "Laki-laki",
        "Tgl_lahir"         => "2009-11-23"
    ),
    array(
        "Nama"              => "Nayla",
        "NIK"               => "6745",
        "Jenis_kelamin"     => "Perempuan",
        "Tgl_lahir"         => "1232-04-13"
    )
);

$a=0;
$b=0;

foreach($user as $y){
if(strtoupper($y["Nama"]) == strtoupper($nama)){
$a=1;
$b=$y;
} 
}

if($b){
echo "Nama              : ".$b["Nama"]."<br>";
echo "NIK               : ".$b["NIK"]."<br>";
echo "Jenis Kelamin     : ".$b["Jenis_kelamin"]."<br>";
echo "Tanggal Lahir     : ".$b["Tgl_lahir"]."<br>";
}

else{
    echo "[".$nama."] Tidak Dapat Ditemukan";
}
}

?>