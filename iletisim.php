<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RedFlag</title>
    <link rel="icon" type="icon" href="./images/f1-default-share.avif">
    <link rel="stylesheet" href="iletisim.css">
    <link rel="stylesheet" href="style.css">

</head>


<body>
    <nav>
        <ul>
           <a href="index.html"><img src="./images/f1-default-share.avif" width="200px" title="f1.logo"></a> 
            <li><a href="haberler.html">HABERLER</a></li>
            <li><a href="yaristakvimi.html">YARIŞ TAKVİMİ</a></li>
            <li><a href="sonuclar.html">SONUÇLAR</a> </li>
            <li><a href="takımlar.html">TAKIMLAR</a></li>
            <li><a href="sürücüler.html">SÜRÜCÜLER</a></li>
            <li><a href="iletisim.php">İLETİŞİM</a></li>

          
        </ul>


    </nav>

    <section>
      <h1>Bizimle İletişime Geçin.</h1>

        <form action="iletisim.php" method="post">
            <input class="adsoyad" type="text" name="isim" placeholder="Ad Soyad">
            <input class="tel" type="text" name="tel" placeholder="Telefon">
            <input class="mail" type="email" name="mail" placeholder="E-mail">
            <input class="konu" type="text" name="konu" placeholder="Konu">
            <textarea  name="mesaj" id="" cols=50 rows="15"   placeholder="Bir şeyler yaz... "></textarea> 
            <input class="gönder" type="submit" value="Gönder"></input>
        </form>




    </section>

 
    
   

    <footer>
        <hr>
        <h1>© Oğuzhan Karaburç.Tüm hakları saklıdır.</h1>
        <div class="navlist">

          <ol>
            <li class="item1"><a href="haberler.html">Haberler</a></li>
            <li class="item2"><a href="yaristakvimi.html">Yarış Takvimi</a></li>
            <li class="item4"><a href="#">Puan Durumu</a></li>
            <li class="item5"><a href="#">Takımlar</a></li>
            <li class="item6"> <a href="#">Sürücüler</a></li>
            <li class="item6"> <a href="#">İletişim</a></li>

          </ol>

        </div>
        <div>
          <ul>
            <li class="facebook"><a href="#"><img src="./images/facebook (2).png" style="width: 20px;"></a></li>
            <li class="twitter"><a href="#"><img src="./images/twitter.png" style="width: 19px;"></a></li>
            <li class="instagram"><a href="#"><img src="./images/instagram.png" style="width: 21px;"></a></li>
            <li class="youtube" style="position: relative; bottom: 2px;"><a href="#"><img src="./images/youtube.png" style="width: 26px;"></a></li>

          </ul>
        </div>
        <img class="footerlog" src="./images/f1-default-share.avif" style="width: 100px;">
    </footer>







</body>



<?php 
include("baglanti.php");
if(isset($_POST["isim"],$_POST["tel"],$_POST["mail"],$_POST["konu"],$_POST["mesaj"])) 
{
      $adsoyad=$_POST["isim"];
      $telefon=$_POST["tel"];
      $email=$_POST["mail"];
      $konu=$_POST["konu"];
      $mesaj=$_POST["mesaj"];


      $ekle="INSERT INTO iletisim (adsoyad, telefon, email, konu, mesaj) VALUES ('".$adsoyad."','".$telefon."','".$email."','".$konu."','".$mesaj."')";

      if($baglan->query($ekle)===TRUE)
      {
        echo "<script> alert('Mesaj Başarı İle Gönderilmiştir.') </script>";

      }
}

?>

