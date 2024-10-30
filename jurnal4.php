<?php
$barang= [
    ["id" => 1,"nama_barang" => "buku", "kategori_barang" => "alat tulis", "harga_barang" => 20000],
    ["id" => 2,"nama_barang" => "pulpen", "kategori_barang" => "alat tulis", "harga_barang" => 5000],
];

if(isset($_POST['kirim'])) {
    $id = count($barang)+1;
    $nama = $_POST['nama_barang'];
    $kategori = $_POST['kategori_barang'];
    $harga =$_POST['harga_barang'];
    $barang[ ] = ["id" => $id, "nama_barang" => $nama, "kategori_barang" => $kategori, "harga_barang" => $harga];
}

if(isset($_POST['delete'])) {
    $index = $_POST['delete'];
    unset($barang[$index]);
    $barang = array_values($barang);
}

?>

<!DOCTYPE html>
<html lang="en">
<body>
    <form>
    <h1>Tambah Barang</h1>
    <form action="" method="POST">
    <label for="nama_barang">Nama Barang:</label>
    <input type="text" id="nama_barang" name="nama_barang" required> <br><br>

    <label for="kategori_barang">Kategori Barang:</label>
    <input type="text" id="kategori_barang" name="kategori_barang" required> <br><br>

    <label for="harga_harang">Harga Barang:</label>
    <input type="text" id="harga_barang" name="harga_barang" required> <br><br>
        
    <input type="submit" name="kirim" value="tambah barang">
    </form>
    <section>
        <table border = "1">
        <h2> daftar barang </h2>
        <tr> 
            <th> id </th>
            <th> nama barang </th>
            <th> kategori </th>
            <th> harga </th>
            <th> aksi </th>
        </tr>
        <?php
             foreach($barang as $brg):
        ?>
        <tr>
            <td><?php echo $brg["id"]?></td>
            <td><?php echo $brg["nama_barang"]?></td>
            <td><?php echo $brg["kategori_barang"]?></td>
            <td><?php echo $brg["harga_barang"]?></td>
            <td><a href="jurnal4.php">Edit</a> | <a href="jurnal4.php">Hapus</a></td>
        </tr>
        <?php endforeach?>
        </table>
    </section>
    
</body>



