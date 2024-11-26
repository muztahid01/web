<?php
$karyawan = array(
    array("Nama" => "Budi", "Jabatan" => "Manager", "Gaji" => 5000000),
    array("Nama" => "Andi", "Jabatan" => "Staff", "Gaji" => 3000000)
    );
    echo $karyawan[1]["Jabatan"];
echo "<br/>";
$jadwal = array(
    "Senin" => array("Matematika", "Bahasa Indonesia", "IPA"),
    "Selasa" => array("Bahasa Inggris", "Sejarah", "Pendidikan Agama"),
    "Rabu" => array("Seni", "Olahraga", "Matematika")
    );
    echo $jadwal["Senin"][2];
echo "<br/>";
?>