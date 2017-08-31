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

<div class="modal">
<div class="modal_close close"></div>
<div class="modal_main">
<font style="font-size:50px; margin-left:110px; margin-top:10px; float:left; color:#FFF">Giriş Yap</font>

<font style="font-size:25px; margin-top:10px; margin-left:20px; float:left; color:#FFF;">Kullanıcı Adı</font>
<input type="text" name="kadi" style="width:250px; height:35px; margin-right:135px;  float:right; background-color:#FFF; color:#000; ">
<font style="font-size:25px; margin-top:10px; margin-left:20px; float:left; color:#FFF;">Şifre</font>
<input type="password" name="sifre" style="width:250px; height:35px; margin-right:135px;  float:right; background-color:#FFF; color:#000;">

<input type="button" name="girisyap" value="Giriş" style="margin-top:10px; font-size:25px; float:left; margin-left:20px; width:75px; height:50px; background-color:#3C0;">
<img src="i783wQYjrKQ.png" class="close" style="margin-top:13px;left:96%;position:fixed;">
</div>
</div>
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
    	 	<button class="call_modal">Giriş Yap</button>
            <button class="call_modal">Kayıt Bul</button>
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
