<!DOCTYPE html>
  <?php
include"config.php";
   //session_start();

    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>plants</title>
     <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link rel="shortcut icon" href="../logolar/LOGO.ico" type="image/x-icon">
</head>
<body>
     <script type="text/javascript" src="../js/java.js"></script>
     <div id="thebigone">
    <?php include 'header.php';?>
      
       
        
         
              <hr class="line"> 
    
<section class="başlık">
            <ul align="center">
                <li><img class="im" src="../logolar/flower2.png" width="50px"></li>
                <li>
                    <p id="bas"><?php echo $lang['mumluk2'] ?></p>
                </li>
            </ul>
             <nav class="cizgi">
            <hr width="230px">
        </nav>
        </section>

       




        <div class="table">
           
            <div class="plant">
                <a >
                    <div>
                        <img class="ilk"  id="ilk" src="../images/mumluk/AdeleMumluk.png" width="370px" >
                         <div class="favo"><button onclick="adele()"id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                         
                    </div>
                    
                    <div>
                        <h4 id="f"><?php echo $lang['adele'] ?></h4>
                    </div>
                    <div class="price" id="b">465₺</div>
                </a>
            </div>

            <div class="plant" id="top">
                <a id="ak"  >
                    <div>
                        <img class="ilk" id="si" src="../images/mumluk/renkli.png" width="250px" height="276px">
                         <div class="favo"><button onclick="renk()"id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                    </div>
                    <div>
                        <h4 id="f"><?php echo $lang['renkli'] ?></h4>
                    </div>
                    <div class="price" id="d">230₺</div>
                </a>
            </div>

            <div class="plant">
                <a >
                    <div>
                        <img class="ilk"  id="ilk" src="../images/mumluk/kus.png" width="370px" height="276px">
                        <div class="favo"><button onclick="kus()"id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                    </div>
                    <div>
                        <h4 id="f"><?php echo $lang['kus'] ?></h4>
                    </div>
                    <div class="price" id="b">155₺</div>
                </a>
            </div>
            <div class="plant">
                <a  >
                    <div>
                        <img class="ilk"  id="ilk" src="../images/mumluk/Led%20fener%20.png" width="370px"height="276px" >
                         <div class="favo"><button onclick="led()"id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                    </div>
                    <div>
                        <h4 id="f"><?php echo $lang['led'] ?></h4>
                    </div>
                    <div class="price" id="b">412₺</div>
                </a>
            </div>
            
            <div class="plant" id="top">
                <a id="ak" >
                    <div>
                        <img class="ilk" id="thir" src="../images/mumluk/yaz%C4%B1l%C4%B1.png" width="270px" height="276px">
                         <div class="favo"><button onclick="yazi()"id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                    </div>
                    <div>
                        <h4 id="f"><?php echo $lang['yazi'] ?></h4>
                    </div>
                    <div class="price" id="d">250₺</div>
                </a>
            </div>
            <div class="plant" id="top">
                <a id="ak"  >
                    <div>
                        <img class="ilk" id="si" src="../images/mumluk/resimli.png" width="250px" height="276px">
                         <div class="favo"><button onclick="resim()"id="favo1" class="favoden"><?php echo $lang['icerik'] ?></button></div>
                    </div>
                    <div>
                        <h4 id="f"><?php echo $lang['resimli'] ?>k</h4>
                    </div>
                    <div class="price" id="d">520₺</div>
                </a>
            </div>

        </div>    
           <hr>
 <section class="alttt">
            <div class="fo">

                <div class="footer">
                    <div class="contact">
                        <div>
                            <h3>Bizimle iletisime gecin</h3>
                        </div>
                        <div class="m"><img class="phone" src="../logolar/phone.png" width="15px" style="padding: 5px">0 212 456 78 91</div>
                        <div class="co"><img class="gmail" src="../logolar/apple-mail.png" width="25px" style="padding: 2px"><a class="mail" href="#">nihose@gmail.com</a></div>
                    </div>
                </div>

                <div class="footer">
                    <div class="Socialmedia">
                        <div>
                            <h3>Bizi sosyal media hesaplarimizdan takip edebilirsiniz</h3>
                        </div>
                        <a href="https://www.instagram.com/nihalkeslerr/">
                            <div class="social"><img src="../logolar/instagram-new--v1.png" width="35px"></div>
                        </a>
                        <a href="https://www.facebook.com/">
                            <div class="social"><img src="../logolar/facebook-new.png" width="35px"></div>
                        </a>
                        <a href="https://twitter.com/home">
                            <div class="social"><img src="../logolar/twitter--v1.png" width="35px"></div>
                        </a>
                    </div>
                </div>

                <div class="footer">
                    <div class="Socialmedia">
                        <div>
                            <h3>Satis noktamiz</h3><img src="../logolar/worldwide-location.png" width="40px" style="padding: 0px">
                        </div>
                        <div>Yesilyurt mah. Erik cad. No: 86A Balat/Istanbul</div>

                    </div>
                </div>
            </div>
<div class="language">
        <a href="candels.php?lang=tr"><?php echo $lang['lang_tr'] ?></a>
        | <a href="candels.php?lang=en"><?php echo $lang['lang_en'] ?></a>
    </div>
        </section>
        
        
        </div>
        
        <div id="co" class="content">
 <div><button id="close" class="close" onclick="close()"><img src="../logolar/closee.png"  width="30px"></button></div>
<div><img src="" alt=""></div>
        <div class="contentimg">
            <img id="conim" src="">
        </div>
        <div class="wordpart">
            <div class="explain">
                <p id="namecon">
                    Parizyen Duvar Saati
                    <br>
                    Fiyat= 120₺
                </p>
               
                <p id="explainp">
                    TEKNİK ÖZELLİKLER
                    <br>
                     Ürün Tipi: MDF Üzerine UV Baskı
                     <br>
                     Ölçü: 44 cm
                     <br>
                     Üretim Yeri:: Türkiye
                     <br>
           ÜRÜN AÇIKLAMASI
                     <br>
                     Zamanın dijital dünyada aktığı bir günlerde parizyen bir şıklık isteyenler için, birçok mobilya ve dekorla kullanabileceğiniz rakamlı bir saattir.
                </p>
            </div>

           
        </div>



    </div>
    
</body>
</html>