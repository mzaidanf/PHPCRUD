<?php include './conn.php';

$nama= $_POST['nama'];
$alamat= $_POST['alamat'];

$sql = "insert into siswa (nama, alamat) 
        values ('".$nama."','".$alamat."')";

$result = mysqli_query($conn,$sql);
if($result){
    echo 'Berhasil menambah data';

}else{
    printf('Gagal Menambah'.mysqli_error($conn));
    exit();
}

?>

