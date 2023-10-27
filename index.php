<?php
include("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">

    <!-- Bootstrap offline -->

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> 
	<link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap Online -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">   
    
    <title>Poliklinik</title>   <!--Judul Halaman-->
</head>
<body>
<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        Sistem Informasi Poliklinik
        </a>
        <button class="navbar-toggler"
        type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false"
        aria-label="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">
                Home
            </a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
                Data Master
            </a>
            <ul class="dropdown-menu">
                <li>
                <a class="dropdown-item" href="index.php?page=dokter">
                    Dokter
                </a>
                </li>
                <li>
                <a class="dropdown-item" href="index.php?page=pasien">
                    Pasien
                </a>
                </li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link" 
            href="index.php?page=periksa">
                Periksa
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="login.php">
                Login
            </a>
            </li>
        </ul>
        </div>
    </div>
</nav>
    
    <main role="main" class="container">
        <?php
        if (isset($_GET['page'])) {
        ?>
            <h2><?php echo ucwords($_GET['page']) ?></h2>
        <?php
            include($_GET['page'] . ".php");
        } else {
            echo "Selamat Datang di Sistem Informasi Poliklinik";
        }
        ?>
    </main>
    <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>

	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>

		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">

			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">

			<input type="submit" class="tombol_login" value="LOGIN">

			<br/>
			<br/>
			<center>
				<a class="link" href="index.php">kembali</a>
			</center>
		</form>
		
	</div>
 

</body>
</html>