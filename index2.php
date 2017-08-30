<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="anansayfadesign2.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<title>Başlıksız Belge</title>
</head>

<body>
<?php

include "baglan.php";

## mysql_query();
## mysql_fetch_array();

$vericek = mysql_fetch_array(mysql_query("select * from proje_sahalar"));
$sahaadi = $vericek['adi'];
if($sahaadi=="Şimşek Halısaha") {
echo <<<EOF
<html>
<head>
<script type="text/javascript">
<!--
function yonlendir(){
	window.location="index.php"
}
//-->
</script>
</head>
<body onLoad="setTimeout('yonlendir()',2000)">

</body>

</html>
EOF;
}
?>
<div class="sablon">
	<div class="logo"><img src="../image/logo.jpg" 
    style="-webkit-border-radius: 20px 20px 20px 20px;
			-moz-border-radius: 20px 20px 20px 20px;
			border-radius: 20px 20px 20px 20px; -webkit-box-shadow: #B3B3B3 10px 10px 10px;
			-moz-box-shadow: #B3B3B3 10px 10px 10px; 
			box-shadow: #B3B3B3 10px 10px 10px;" height="140" width="175">
    </div>
    <div class="banner">
    	<font style="float:left; font-size:75px; font-family:XBAND Rough; margin-left:150px; color:#FFF;">Maçımız Var</font>
        <font style="float:left; font-size:20px; font-family:XBAND Rough;margin-left:220px;color:#FFF;">"Rakibin Burada Seni Bekliyor"</font>
    </div>
    <div class="kullanıcı">
    		
    	 	<img src="../image/user.png" style="margin-left:8px; margin-top:18px;  float:left;"></img>
            <font style="float:left; font-size:25px; margin-top:13px; margin-left:4px; color:#FFF;">mehmet15</font>
            <img src="../image/coins-money-stack.png" style="margin-left:9px; margin-top:25px; float:left;"></img>
            <font style="float:left; font-size:20px; margin-top:25px; margin-left:3px; color:#FFF;">Bakiyeniz:1000</font>
            
    </div>
    <div class="bar">
        			<a href="anasaya.html" style="text-decoration:none;" >
                    <div class="barkutucuk">
                    	<div class="barimage">
                    	<img src="../image/shelter.png"></div>
                        <div class="baryazı">AnaSayfa</div>
                    </div>
                    </a>
					<a href="iletisim.html" style="text-decoration:none;"> 
                    <div class="barkutucuk">
                    	<div class="barimage">
                    	<img src="../image/telephone.png"></div>
                        <div class="baryazı">İletişim</div>
                    </div></a>
					<a href="hakkimizda.html" style="text-decoration:none;">
                    <div class="barkutucuk">
                    	<div class="barimage">
                    	<img src="../image/book.png"></div>
                        <div class="baryazı">Hakkımızda</div>
                    </div></a>
					<a href="sahabul.html" style="text-decoration:none;">
                    <div class="barkutucuk">
                    	<div class="barimage">
                    	<img src="../image/soccer-field-.png"></div>
                        <div class="baryazı">Saha Bul</div>
                    </div></a>
                    <a href="rakipbul.html" style="text-decoration:none;"> 
                    <div class="barkutucuk">
                    	<div class="barimage">
                    	<img src="../image/football.png"></div>
                        <div class="baryazı">Rakip Bul</div>
                    </div></a>
                  	<a href="takimarkadasiara.html" style="text-decoration:none;">
                     <div class="barkutucuk">
                    	<div class="barimage">
                    	<img src="../image/user-shape.png"></div>
                        <div class="baryazı" align="center" style="margin-top:3px;">Takım <br/>Arkadaşı Ara</div>
                    </div>
                    </a>
                    <a href="takimlarim.html" style="text-decoration:none;">
                     <div class="barkutucuk">
                    	<div class="barimage">
                    	<img src="../image/group-profile-users.png"></div>
                        <div class="baryazı">Takımlarım</div>
                    </div>
                    </a>
		   
    </div>
    </div>
    </div>
	<section class="awSlider">
  <div  class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target=".carousel" data-slide-to="0" class="active"></li>
      <li data-target=".carousel" data-slide-to="1"></li>
      <li data-target=".carousel" data-slide-to="2"></li>
      <li data-target=".carousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="http://www.adobewordpress.com/wp-content/uploads/2014/02/wallpaper-thumb-941.jpg">
        <div class="carousel-caption">Görsel #1</div>
      </div>
      <div class="item">
        <img src="http://www.adobewordpress.com/wp-content/uploads/2014/02/wallpaper-thumb-101.jpg">
        <div class="carousel-caption">Görsel #2</div>
      </div>
      <div class="item">
        <img src="http://www.adobewordpress.com/wp-content/uploads/2014/02/wallpaper-thumb-1051.jpg">
        <div class="carousel-caption">Görsel #3</div>
      </div>
      <div class="item">
        <img src="http://www.adobewordpress.com/wp-content/uploads/2013/07/wallpaper-thumb-74.jpg">
        <div class="carousel-caption">Görsel #4</div>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Geri</span>
    </a>
    <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">İleri</span>
    </a>
  </div>
</section>
</div>
</body>
</html>
