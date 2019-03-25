<?php
include_once('koneksi.php');
if(isset($_POST['upd']))
{   
    $idvideo = $_POST['idvideo'];
    $titlevideo = $_POST['titlevideo'];
    $description = $_POST['description'];
    $thumbnail = $_POST['thumbnail'];
    $result = mysqli_query($conn, "UPDATE video SET idvideo='$idvideo',titlevideo='$titlevideo',description='$description',thumbnail='$thumbnail' WHERE idvideo=$idvideo");
    header('Location: beranda.php');
}
?>
<?php
$idvideo = $_GET['idvideo'];
$result = mysqli_query($conn, "SELECT * FROM video WHERE idvideo=$idvideo");
if ($videoplayer = mysqli_fetch_array($result))
{
    $idvideo = $videoplayer['idvideo'];
    $titlevideo = $videoplayer['titlevideo'];
    $description = $videoplayer['description'];
    $thumbnail = $videoplayer['thumbnail'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>
<body>
    <a href="beranda.php">Home</a>
    
    <form name="update_video" method="post" action="edit.php">
        <table border="1">
            <tr> 
                <td>Id video</td>
                <td><input type="text" name="idvideo" value=<?php $idvideo;?>></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="titlevideo" value=<?php $titlevideo;?>></td>
            </tr>
            <tr> 
                <td>Kategori</td>
                <td><input type="text" name="description" value=<?php $description;?>></td>
            </tr>
            <tr> 
                <td>Thumbnail</td>
                <td><input type="text" name="thumbnail" value=<?php $thumbnail;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="idvideo" value=<?php $_GET['idvideo'];?>></td>
                <td><input type="submit" name="upd" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>