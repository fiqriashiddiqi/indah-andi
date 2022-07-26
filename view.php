<?php
include "koneksi.php"; // Load file koneksi.php
$draw = isset($_POST["draw"]) ? $_POST["draw"] : 1;
$search = isset($_POST["search"]["value"]) ? $_POST["search"]["value"] : NULL;
$limit = isset($_POST["length"]) ? $_POST["length"] : 10;
$start = isset($_POST["start"]) ? $_POST["start"] : 0;

$sql = mysqli_query($connect, "SELECT * FROM tb_ika"); // Query untuk menghitung seluruh data siswa
$sql_count = mysqli_num_rows($sql); // Hitung data yg ada pada query $sql
$query = "SELECT * FROM tb_ika WHERE (nama LIKE '%".$search."%' OR kehadiran LIKE '%".$search."%') ";
$order_index = isset($_POST['order'][0]['column']) ? $_POST['order'][0]['column'] : 0 ; // Untuk mengambil index yg menjadi acuan untuk sorting
$order_field = isset($_POST['columns'][$order_index]['data']) ? $_POST['columns'][$order_index]['data'] : "id"; // Untuk mengambil nama field yg menjadi acuan untuk sorting
$order_ascdesc = isset($_POST['order'][0]['dir']) ? $_POST['order'][0]['dir'] : "ASC" ; // Untuk menentukan order by "ASC" atau "DESC"
$order = " ORDER BY ".$order_field." ".$order_ascdesc;
$sql_data = mysqli_query($connect, $query.$order." LIMIT ".$limit." OFFSET ".$start); // Query untuk data yang akan di tampilkan
$sql_filter = mysqli_query($connect, $query); // Query untuk count jumlah data sesuai dengan filter pada textbox pencarian
$sql_filter_count = mysqli_num_rows($sql_filter); // Hitung data yg ada pada query $sql_filter
// $data = mysqli_fetch_all($sql_data, MYSQLI_ASSOC); // Untuk mengambil data hasil query menjadi array
$data = array(); // Buat variabel $data dengan tipe array
$result = mysqli_fetch_all($sql_data, MYSQLI_ASSOC); // Untuk mengambil data hasil query menjadi array
$index = 0;
$no = $start + 1; // Kita set Nomor Urutnya dimulai dari $start + 1
foreach($result as $d){ // Looping hasil query dari $result
    array_push($data, $d); // Tambahkan data per baris ke array $data
    $data[$index]['no'] = $no; // Tambahkan data no untuk Nomor Urutnya
    $index++;
    $no++;
}
$callback = array(
    'draw'=>$draw, // Ini dari datatablenya
    'recordsTotal'=>$sql_count,
    'recordsFiltered'=>$sql_filter_count,
    'data'=>$data
);
header('Content-Type: application/json');
echo json_encode($callback); // Convert array $callback ke json


?>
