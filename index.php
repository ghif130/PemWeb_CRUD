<html>
	<head>
	<meta charset="utf-8">
    <title>Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<center>
		<p style="margin-top:150 "></p>
        <div class="col-md-7" style="background-color:magenta">
        <form class="form-horizontal" method="POST" action="validasi.php" name="form">
			<br><BR>
            <h1 style="text-align:center">LOGIN</h1>
            <div class="form-group">
              <label class="control-label" for="nama">USERNAME : </label>
              <input type="text" class="form-control col-md-4" id="nama" placeholder="Masukkan Nama" name="Username">
              <span id="error_nama"></span>
            </div>
            <div class="form-group">
              <label class="control-label" for="pwd">PASSSWORD:</label>
              <input type="password" class="form-control col-md-4" id="nim" placeholder="Masukkan NIM" name="Password">
              <span id="error_nim"></span>
            </div>
			<input type="submit" name="submit" value="kirim">
			<br><br>
        </form>
		</div>
		</center>
		
	</body>
</html>