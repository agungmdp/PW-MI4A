<?php
//file helper php

    function salam() {
        return "I am the Night, I am Vengeance";
    }

    function getprodi($kode){
        $array=[
            11=>"manajemen informatika",
            25=>"Informatika",
            24=>"Sistem Informasi"
        ];
        return $array[$kode];
    }

    function getusia($tahun){
        return date('Y')-$tahun;
    }

    function getMasaStudi($tgl_masuk){
        $diff = abs(strtotime(date('y-m-d')) - strtotime($tgl_masuk));

$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

printf("%d years, %d months, %d days\n", $years, $months, $days);
    }
?>