<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>

  <body>
  

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Pengembangan Pemrogaman Web</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
			<li><a href="index.php">Home</a></li>            
			<li ><a href="luasPersegi.php">Luas Persegi Panjang</a></li>
            <li><a href="volumeBalok.php">Volume Balok</a></li>
            <li><a href="luasLingkaran.php">Luas Lingkaran</a></li>
            <li><a href="volumeBola.php">Volume Bola</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
		  <li class="active"><a href="index.php">Home</a></li>
            <li ><a href="luasPersegi.php">Luas Persegi Panjang</a></li>
            <li><a href="volumeBalok.php">Volume Balok</a></li>
            <li><a href="luasLingkaran.php">Luas Lingkaran</a></li>
            <li><a href="volumeBola.php">Volume Bola</a></li>
          </ul>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
		  
<h3 align="center">Hitung Volume Balok</h3>
<form action="" method="POST">
	<?php
		if(isset($_POST['input'])){
			include_once("rumus_form.php");
			$rumus = new rumus_form;
			$rumus -> panjang = $_POST['panjang'];
			$rumus -> lebar = $_POST['lebar'];
			$rumus -> tinggi = $_POST['tinggi'];
	?>
	<table align="center">
		<tr>
			<td>&nbsp&nbsp Input Panjang</td>
			<td>&nbsp&nbsp&nbsp&nbsp Input Lebar</td>
			<td>&nbsp&nbsp&nbsp&nbsp Input Tinggi</td>
			<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Hasil</td>
		</tr>
		<tr>
			<td>&nbsp&nbsp<input type="text" name="panjang" size="10" value="<?php echo $_POST['panjang'];?>"></td>
			<td>&nbsp&nbsp<input type="text" name="lebar" size="10" value="<?php echo $_POST['lebar']; ?>"></td>
			<td>&nbsp&nbsp<input type="text" name="tinggi" size="10" value="<?php echo $_POST['tinggi']; ?>"></td>
			<td align="center">&nbsp&nbsp<input type="text" size="10" readonly value="<?php echo $rumus -> show_volume_balok(); ?>"></td>
			<td>&nbsp&nbsp<input type="submit" name="input" size="10" value="Proses"></td>
		</tr>
		<tr>
			<td></td>
		</tr>
		<tr>
			<td></td>
		</tr>

	</table>
	<?php
		} else {
	?>
		<table align="center">
			<tr>
				<td>&nbsp&nbsp Input Panjang</td>
				<td>&nbsp&nbsp&nbsp&nbsp Input Lebar</td>
				<td>&nbsp&nbsp&nbsp&nbsp Input Tinggi</td>
				
			</tr>
			<tr>
				<td>&nbsp&nbsp <input type="text" name="panjang" size="10"></td>
				<td>&nbsp&nbsp <input type="text" name="lebar" size="10"></td>
				<td>&nbsp&nbsp <input type="text" name="tinggi" size="10"></td>
					
				<td>&nbsp&nbsp <input type="submit" name="input" size="10" value="Proses"></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>
		</table>
	<?php
		}
	?>
</form>
          <h2 class="sub-header"></h2>

        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.1.10.2.js"></script>
    <script src="js/jquery.1.11.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
  </body>
</html>
