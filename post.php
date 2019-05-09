<link href="style.css" rel="stylesheet" type="text/css">
<body>
<div class="container">
	<form action="post.php" method="post">
    	<div class="form-group">
        	<label>Nama</label>
            <input type="text" name="nama" class="form-control"/>
            </div>
            <div class="form-group">
        	<label>Alamat</label>
            <input type="text" name="alamat" class="form-control"/>
            </div>
            <div class="form-group">
        	<label>Umur</label>
            <input type="text" name="umur" class="form-control"/>
            </div>
            <input type="submit" name="Submit" value="Add">
		</form>
	</div>
    	<?php
		if(isset($_POST['Submit'])){
			$nama = $_POST['nama'];
			$alamat = $_POST['alamat'];
			$umur = $_POST['umur'];
			
		include_once("connect.php");
		
		$result = mysqli_query($mysqli, "INSERT INTO users(nama, alamat, umur)
										VALUES ('$nama','$alamat','$umur')");
		}
		?>
		</body>
            
            
            