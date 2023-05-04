<?php
echo "SELAMAT DATANG DI KELAS PHP MI4AA";
//KOMENTAR GAK AKAN TAMPIL PADA BROWSER

//VARIABLE (MENYIMPAN DATA)
$NPM = 2124110010;
$NAMA = "AGUNG PRAYOGA";
$PROGRAM_STUDI = "MANAJEMEN INFORMATIKA";
$TEMPATLAHIR = "Palembang";
//Huruf besar kecil gak berpengaruh saat mengisi variable


echo "<br>";
echo "NAMA :".$NAMA;
echo "<br>";
echo "NPM : ".$NPM;

    echo "<br>";
//BISA JUGA DALAM 1 ECHO MENAMPILKAN 2 ATAU LEBIH VARIABLE

echo "<br>TEMPATLAHIR".$TEMPATLAHIR."mengambil program studi $PROGRAM_STUDI";

//  MEMBUAT ARRAY
    $MAHASISWA = [
        "RIZKY","AGUNG","OKTA","RINDI","RIBKA"
    ];

    //MENAMPILKAN ARRAY
echo "<h2>MAHASISWA</h2>";
    foreach ($MAHASISWA as $item) {
        echo $item;
        echo "<br>";
    }


    //ARRAY
    $mahasiswa_mi4a = [
        [
        "npm" => 2124110010,
        "nama" => "Agung",
        "Asal" => "Sekayu",
        ],

        [
        "npm" => 2124110009,
        "nama" => "Mahmud",
        "Asal" => "Lumpatan",
        ],
    ];

    echo "<h2>Mahasiswa mi4a</h2>";
    //menampilkan array mahasiswa_mi4a
    echo"<table border=1> 
    <tr>
        <th>NPM</th><th>NAMA</th>
    </tr>";
    foreach($mahasiswa_mi4a as $item){
        //echo $item['npm']."".$item['nama']."<br>";
        
        echo "<tr>
                    <td>".$item['npm']."</td>
                      <td>".$item['nama']."</td>
                        <td>".$item['Asal']."</td>
        </tr>";
    }
    echo "</table>";