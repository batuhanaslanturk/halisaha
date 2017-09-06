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
	<div class="logo"><img src="image/logo.jpg" 
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
    	 	<button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large" style="margin-left:20px; margin-top:15px; float:left; border-radius:5px; width:140px; height:50px;">Giriş</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:400px;">

      <div class="w3-center	"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        <img src="image/girisavatar.png" style="width:30%" class="w3-circle w3-margin-top">
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
  
  <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-green w3-large" style="margin-left:20px; margin-top:10px; float:left; border-radius:5px; width:140px; height:50px;">Kayıt Ol</button>

  <div id="id02" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:400px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
        
      </div>

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
                    	<img src="image/shelter.png"></div>
                        <div class="baryazı">AnaSayfa</div>
                    </div>
                    </a>
					<a href="iletisim.html" style="text-decoration:none;"> 
                    <div class="barkutucuk">
                    	<div class="barimage">
                    	<img src="image/telephone.png"></div>
                        <div class="baryazı">İletişim</div>
                    </div></a>
					<a href="hakkimizda.html" style="text-decoration:none;">
                    <div class="barkutucuk">
                    	<div class="barimage">
                    	<img src="image/book.png"></div>
                        <div class="baryazı">Hakkımızda</div>
                    </div></a>
					<a href="sahabul.html" style="text-decoration:none;">
                    <div class="barkutucuk">
                    	<div class="barimage">
                    	<img src="image/soccer-field-.png"></div>
                        <div class="baryazı">Saha Bul</div>
                    </div></a>
                    <a href="rakipbul.html" style="text-decoration:none;"> 
                    <div class="barkutucuk">
                    	<div class="barimage">
                    	<img src="image/football.png"></div>
                        <div class="baryazı">Rakip Bul</div>
                    </div></a>
                  	<a href="takimarkadasiara.html" style="text-decoration:none;">
                     <div class="barkutucuk">
                    	<div class="barimage">
                    	<img src="image/user-shape.png"></div>
                        <div class="baryazı" align="center" style="margin-top:3px;">Takım <br/>Arkadaşı Ara</div>
                    </div>
                    </a>
                    <a href="takimlarim.html" style="text-decoration:none;">
                     <div class="barkutucuk">
                    	<div class="barimage">
                    	<img src="image/group-profile-users.png"></div>
                        <div class="baryazı">Takımlarım</div>
                    </div>
                    </a>
		   
    </div>
    <div style="float:left; margin-left:300px; margin-top:15px; border-radius:5px; height:55px; width:500px; background-color:#6F3; color:#FFF;">
    <font style="text-align:center; font-size:30px; float:left; margin-left:20px; margin-top:2px;">Osmangazi Yıldırım Halısahası</font>
    </div>
  	<div style="float:left; margin-left:115px; margin-top:20px;">
    <ul class="slides">
    <input type="radio" name="radio-btn" id="img-1" checked />
    <li class="slide-container">
		<div class="slide">
			<img src="http://farm9.staticflickr.com/8072/8346734966_f9cd7d0941_z.jpg" />
        </div>
		<div class="nav">
			<label for="img-6" class="prev">&#x2039;</label>
			<label for="img-2" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-2" />
    <li class="slide-container">
        <div class="slide">
          <img src="http://farm9.staticflickr.com/8504/8365873811_d32571df3d_z.jpg" />
        </div>
		<div class="nav">
			<label for="img-1" class="prev">&#x2039;</label>
			<label for="img-3" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-3" />
    <li class="slide-container">
        <div class="slide">
          <img src="http://farm9.staticflickr.com/8068/8250438572_d1a5917072_z.jpg" />
        </div>
		<div class="nav">
			<label for="img-2" class="prev">&#x2039;</label>
			<label for="img-4" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-4" />
    <li class="slide-container">
        <div class="slide">
          <img src="http://farm9.staticflickr.com/8061/8237246833_54d8fa37f0_z.jpg" />
        </div>
		<div class="nav">
			<label for="img-3" class="prev">&#x2039;</label>
			<label for="img-5" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-5" />
    <li class="slide-container">
        <div class="slide">
          <img src="http://farm9.staticflickr.com/8055/8098750623_66292a35c0_z.jpg" />
        </div>
		<div class="nav">
			<label for="img-4" class="prev">&#x2039;</label>
			<label for="img-6" class="next">&#x203a;</label>
		</div>
    </li>

    <input type="radio" name="radio-btn" id="img-6" />
    <li class="slide-container">
        <div class="slide">
          <img src="http://farm9.staticflickr.com/8195/8098750703_797e102da2_z.jpg" />
        </div>
		<div class="nav">
			<label for="img-5" class="prev">&#x2039;</label>
			<label for="img-1" class="next">&#x203a;</label>
		</div>
    </li>

    <li class="nav-dots">
      <label for="img-1" class="nav-dot" id="img-dot-1"></label>
      <label for="img-2" class="nav-dot" id="img-dot-2"></label>
      <label for="img-3" class="nav-dot" id="img-dot-3"></label>
      <label for="img-4" class="nav-dot" id="img-dot-4"></label>
      <label for="img-5" class="nav-dot" id="img-dot-5"></label>
      <label for="img-6" class="nav-dot" id="img-dot-6"></label>
    </li>
</ul>
    </div>
    <div style="float:left; margin-left:20px; margin-top:10px; background-color:#76871F; width:600px; height:400px; border-radius:5px;">
    <font style="margin-top:5px; margin-left:225px; font-size:25px; float:left;">Hakkımızda</font>
    <font style="margin-top:15px; margin-left:10px; font-size:20px; float:left;">Halısahamız Klimalıdır.</br>Kalitemiz deger hizmetimizden Gelir. </font>
    </div>
  	<div style="float:left; margin-left:15px; margin-top:10px; background-color:#76871F; width:450px; height:400px; border-radius:5px;">
    <font style="margin-top:5px; margin-left:150px; font-size:25px; float:left;">Google Maps</font>
    </div>
  
		
</div>

</body>
</html>
