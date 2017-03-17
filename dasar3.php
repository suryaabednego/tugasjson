<?php
$json_data=file_get_contents("proses2.json");
$obj = json_decode($json_data);
echo "nim : "; echo $obj->nim;
echo "<br>";
echo "nama : "; echo $obj->nama;
echo "<br>";
echo "email : "; echo $obj->email;
echo "<br>";
echo "no_hp : "; echo $obj->no_hp;
echo "<br>";
echo "Mata_Kuliah1: ";echo $obj->mata_kuliah[0];
echo "<br>";
echo "Mata_Kuliah2: ";echo $obj->mata_kuliah[1];
echo "<br>";
echo "Mata_Kuliah3: ";echo $obj->mata_kuliah[2];
echo "<br>";
echo "Mata_Kuliah4: ";echo $obj->mata_kuliah[3];
?>