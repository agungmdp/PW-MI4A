<?php

require_once('helper.php');

echo Date('y-m-d');
echo "<br>Selamat datang";
echo "<br>";
echo salam();

$npm= 2124110001;
$nama="Ardhan";
$program_studi="Manajemen Informatika";
$tempat_lahir="Ogan Komering Ilir";
//subtring npm untuk dapat kode prodi
$kode_prodi=substr($npm, 4, 2);

//menampilkan variable

echo "<br><br>";
echo "NPM : ".$npm;
echo "<br> Nama : ".$nama;
echo "<br>Tempat Lahir : ".$tempat_lahir;
// echo "<br>".$kode_prodi;
echo "<br> Program Studi : ".getprodi($kode_prodi);

echo "<br><br><h2>Data Mahasiswa</h2>";
//array
$mahasiswa=[
    "ardhan", "agung", "okta", "rindi", "ribka"
];

foreach($mahasiswa as $item){
    echo $item;
    echo "<br>";

}

$mahasiswa_mi4a=[
    [
        "npm"=>2124110001,
        "nama"=>"ardhan",
        "asal"=>"Mesuji",
        "tgl_lahir"=>"2002-11-08",
        "tgl_masuk"=>"2021-09-01",
    ]
    ,
    [
        "npm"=>2124110004,
        "nama"=>"ribka",
        "asal"=>"palembang",
        "tgl_lahir"=>"2002-08-08",
        "tgl_masuk"=>"2021-09-02",
    ]
    ,
    [
        "npm"=>2124110004,
        "nama"=>"fahyr",
        "asal"=>"Sekayu",
        "tgl_lahir"=>"2003-11-22",
        "tgl_masuk"=>"2021-09-03",
    ],
];

echo "<table border=1>
<tr>
        ,<th>Npm</th><th>nama</th><th>Asal</th><th>nama prodi</th><th>Tanggal Lahir</th><th>Usia</th><th>masuk</th>
</tr>";
foreach($mahasiswa_mi4a as $item){
    echo "<tr>
    <td>".$item['npm']."</td>
    <td>".$item['nama']."</td>
    <td>".$item['asal']."</td>
    <td>".getprodi(substr($item['npm'],4,2))."</td>
    <td>".$item['tgl_lahir']."</td>
    <td>".getusia(substr($item['tgl_lahir'],0,4))."</td>
    <td>".$item['tgl_masuk']."</td>
    </tr>";
    echo "<br>";
}