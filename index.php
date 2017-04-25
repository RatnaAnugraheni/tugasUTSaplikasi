<!DOCTYPE html>
<html>
<title>AppCu</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<div class="w3-container">
  <h1 align="center">AppCu</h1>
  <p align="center">Sedia AppCu Sebelum Keluar Rumah</p>

  <div class="w3-bar w3-light-grey">
    <a href="?menu=home" class="w3-bar-item w3-button w3-green">Home</a>   
	<a href="?menu=GetWeather" class="w3-bar-item w3-button w3-dark-grey">Cuaca Hari Ini</a>
    <div class="w3-dropdown-hover">
      <button class="w3-button w3-dark-grey">Pilih Wilayah</button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="?menu=demak" class="w3-bar-item w3-button">Demak</a>
		<a href="?menu=kudus" class="w3-bar-item w3-button">Kudus</a>
        <a href="?menu=mugassari" class="w3-bar-item w3-button">Mugassari</a>
		<a href="?menu=ungaran" class="w3-bar-item w3-button">Ungaran</a>
      </div>
    </div>
  </div>
  <?php
				error_reporting(0);
				if($_GET[menu]=='')
					{
					include('home.php');
					}
				else
					{
					include($_GET[menu].'.php');
					}
	?>
</div>
<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-large"> 
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p>Created by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">A.rtn</a></p>
</footer>
</body>
</html>
