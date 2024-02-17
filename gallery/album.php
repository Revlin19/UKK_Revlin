<?php
include "navbar.php";
?>
<title>Album | Gallery</title>
<h1>Laman Album</h1>
    <form action="tambah-album.php" method="post">
        <table>
            <tr>
                <td>Nama Album</td>
                <td><input type="text" name="NamaAlbum" required></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="Deskripsi" required></td>
            </tr>
            <tr>
                <td><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
    <center>
    <table border="1" cellpadding=5 cellspacing=1>
        <tr>
            <th>ID</th>
            <th>Nama Album</th>
            <th>Deskripsi</th>
            <th>Tanggal Dibuat</th>
            <th>Aksi</th>
        </tr>
        <?php
include "koneksi.php";
$UserID=$_SESSION['UserID'];

$sql=mysqli_query($conn,"SELECT * FROM album WHERE UserID='$UserID'");
while($data=mysqli_fetch_array($sql)){
        ?>
        <tr>
            <td><?=$data['AlbumID']?></td>
            <td><?=$data['NamaAlbum']?></td>
            <td><?=$data['Deskripsi']?></td>
            <td><?=$data['TanggalDibuat']?></td>
            <td>
                <a href="edit-album.php?AlbumID=<?=$data['AlbumID']?>">- EDIT</a>
                <br>
                <a href="hapus-album.php?AlbumID=<?=$data['AlbumID']?>">- HAPUS</a>
            </td>
        </tr>
        <?php
}
        ?>
    </table>
    </center>
</body>
</html>