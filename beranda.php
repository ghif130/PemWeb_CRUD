<?php
session_start();
include "koneksi.php";
if(isset($_SESSION['Username']) && !empty($_SESSION['Username'])){
	$username = $_SESSION['Username'];
	}else{
		header("location: index.php");
	}
?>
welcome <?= $username ?>
<br><br>
<a href="keluar.php">keluar</a>
<br><br>
<table>
    <thead>
    <tr>
      <th scope="col">Id Video</th>
      <th scope="col">Nama</th>
      <th scope="col">Kategori</th>
      <th scope="col">Thumbnail</th>
	  <th scope="col">Pilihan</th>
    </tr>
    </thead>
    <tbody>
            <?php
                $query = "SELECT * FROM video";
                $result = $conn->query($query);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?= $row["idvideo"]; ?></td>
                        <td><?= $row["titlevideo"]; ?></td>
                        <td><?= $row["description"]; ?></td>
                        <td><?= $row["thumbnail"]; ?></td>
                        <td>
                            <!--<a href="hapus.php?id=<?= $row['idvideo']; ?>">hapus</a>-->
                            <a href="edit.php?id=<?= $row['idvideo']; ?>">Edit</a>
							<a href="clear.php?idvideo=<?= $row['idvideo'];?>">Hapus</a>
                        </td>
                    </tr>
                    <?php
                    }
                }
            ?>
    </tbody>
</table>
