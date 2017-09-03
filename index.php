<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Başlıksız Belge</title>
<link rel="stylesheet" href="anansayfadesign.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="jquery-1.10.2.min.js"></script>
<link rel="stylesheet" href="modal.css">

<script>
$(document).ready(function(){
  $(".call_modal").click(function(){
	$(".modal").fadeIn();
	$(".modal_main").show();
	  });
});
$(document).ready(function(){
  $(".close").click(function(){
	$(".modal").fadeOut();
	$(".modal_main").fadeOut();
	  });
});
</script>

</head>

<body>
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
    	 	<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large">Giriş</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:400px;">

      <div class="w3-center	"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="../image/girisavatar.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>

      <form class="w3-container" action="/action_page.php">
        <div class="w3-section">
          <label><b>Kullanıcı Adı</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Kullanıcı Adınızı Giriniz" name="usrname" required>
          <label><b>Şifre</b></label>
          <input class="w3-input w3-border" type="password" placeholder="Şifrenizi Giriniz" name="psw" required>
          <button class="w3-button w3-block w3-light-green w3-section w3-padding" type="submit">Giriş Yap</button>
          <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Beni Hatırla
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Kapat</button>
        <span class="w3-right w3-padding w3-hide-small">Şifremi <a href="#">unuttum.</a></span>
      </div>

    </div>
  </div>
  
  <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-green w3-large">Kayıt Ol</button>

  <div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:400px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="../image/girisavatar.png" alt="Avatar" style="width:30%" class="w3-circle w3-margin-top">
      </div>
<?php
echo '
      <form class="w3-container" action="index.php">
        <div class="w3-section">
          <label><b>Kullanıcı adı*</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Kullanıcı Adı" name="usrname" required>
          <label><b>Şifre*</b></label>
          <input class="w3-input w3-border" type="text" placeholder="Şifre" name="psw" required>
          <label style="margin-top:15px;"><b>Ad Soyad*</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ad Soyad" name="usrname" required>
          <label><b>E-Posta*</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text"  placeholder="E-posta" name="usrname" required>
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Kayıt Ol</button>
        </div>
      </form>
	  '
?>
      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id02').style.display='none'" type="button" class="w3-button w3-red">Kapat</button>
        <span class="w3-right w3-padding w3-hide-small">Forgot <a href="#">password?</a></span>
      </div>

    </div>
  </div>
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
   	<div class="filtreleme"><font style="float:left; font-size:40px; margin-top:22px; margin-left:25px; color:#FFF;">Saha Ara</font>
    
    <font style="float:left; margin-top:25px; margin-left:15px; font-size:30px; color:#FFF";>İl Seçiniz</font>
    <select name="iller" style="margin-top:5px; margin-left:15px; width:170px; height:35px; font-size:20px;">
		<option value="Beyaz">Bursa</option>
		<option value="Kırmızı">Ankara</option>
		<option value="Sarı">İstanbul</option>
	</select>
    
    </div>
 
   	
    	
    </div>

		



</div>
</body>
</html>
