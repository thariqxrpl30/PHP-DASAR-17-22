UPDATE DATA

<?php 

    require_once "../function.php";

    echo $id;

    $sql = "SELECT * FROM tblkategori WHERE idkategori = $id";
    $result = mysqli_query($koneksi,$sql);

    $row=mysqli_fetch_assoc($result);

    $kategori = 'Es Jus';
    id = 21;
    $sql= "UPDATE tblkategori SET kategori='$kategori' WHERE idkategori= $id";

    $result = mysqli_query($koneksi, $sql);

    echo $sql;

?>
<form action="" method="post">
    Kategori :
    <input type="text" name="kategori" value="<?php echo $row['kategori'] ?>">
    <br>
    <input type="text" name="simpan" value="simpan">
</form> 

<?php 

    if (isset($_GET['simpan'])) {
        $kategori = $_POST['kategori']

        $sql= "UPDATE tblkategori SET kategori='$kategori' WHERE idkategori= $id";

        $result = mysqli_query($koneksi, $sql);

        header("location:http://localhost/phpsmk/restoran/kategori/select.php");
    }

?>