<!doctype html>
<html lang="tr">
  <head>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="ism/css/my-slider.css"/>
    <meta name="description" content="Bahçeşehir Üniversitesi'nin sosyal sorumluluk kulübü Bi'Soluk hakkında haberler, duyurular, görselleri içerir.">
    <meta name="keywords" content="Sosyal, Sorumluluk, Kulüp, Bahçeşehir, Bi'Soluk, bisoluk, bau,">
    <meta name="author" content="Kemal Çaymaz">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Bi'Soluk Anasayfa</title>
    <link rel="icon" href="resources/icons/favicon.ico" type="image/x-icon">
   	<script src="ism/js/ism-2.2.min.js"></script>
    <script type="text/javascript" src="js/button-js.js"></script>
    
  </head>

  <body>
    <div id="container">
      <header> <!-- Header Başlangıcı (Logo - Menü - Logo) -->
        <div class="logo"><a href="index.html"><img src="resources/images/bisoluklogo.png"
         alt="Bi'Soluk Logo"/></a></div>
        <nav> <!-- Menü -->
        <ul>
            <li><a href="index.php">ANASAYFA</a></li>
            <li><a href="yakinda.html">PROJELER</a></li>
            <li><a href="yakinda.html">GALERİ</a></li>
            <li><a href="yakinda.html">KAFE</a></li>
            <li><a href="yakinda.html">HAKKIMIZDA</a></li>
            <li><a href="iletisim.html">İLETİŞİM</a></li>
        </ul>
        </nav>
        <div class="logo"><a href="https://bau.edu.tr" target="_blank"><img src="resources/images/baulogo.png" alt="BAU Logo"/></a></div>
      </header> <!-- Header Bitişi-->
      <?php include 'php/index-sql.php';?>
      <div id="merkez-sayfa">
        <div id="slider">  <!-- Slider Başlangıcı -->
            <!--"ism" folder is taken from online tool that in https://imageslidermaker.com/v2 to use with slider-->
          <div class="ism-slider" data-play_type="loop" id="my-slider">
            <ol>
            <?php while($row = $slider->fetch_assoc()){?>
             <li><img src="<?= $row["gorsel"] ?>" alt="<?= $row["alternatif"]?>"></li>
            <?php }?>
            </ol>
          </div>
        </div> <!-- Slider  Bitişi-->
        <div id="pages">
          <div id="left-page">
            <section>  <!-- Duyurular Başlangıcı -->
              <h1>Duyurular</h1>
              <article>
                <figure><img src="<?=$duyuru[0]["gorsel"]?>" alt="Tanıtım-duyuru"/></figure>
                <h2><?=$duyuru[0]["baslik"]?></h2>
                <p><?=$duyuru[0]["kisametin"]?></p>
              </article>
              <article>
                <figure><img src="<?=$duyuru[1]["gorsel"]?>" alt="Artvin-duyuru"/></figure>
                <h2><?=$duyuru[1]["baslik"]?></h2>
                <p><?=$duyuru[1]["kisametin"]?></p>
              </article>
              <article>
                <figure><img src="<?=$duyuru[2]["gorsel"]?>" alt="Muğla-duyuru"/></figure>
                <h2><?=$duyuru[2]["baslik"]?></h2>
                <p><?=$duyuru[2]["kisametin"]?></p>
              </article>
            </section> <!-- Duyurular Bitişi-->
    
            <section>  <!-- Haberler Başlangıcı -->
              <h1>Haberler</h1>
              <article>
                <figure><img src="<?=$haber[0]["gorsel"]?>" alt="23 Nisan Kutlama"/></figure>
                <h2><?=$haber[0]["baslik"]?></h2>
                <p><?=$haber[0]["kisametin"]?></p>
              </article>
              <article>
                <figure><img src="<?=$haber[1]["gorsel"]?>" alt="23 Nisan Kermesi"/>
                </figure>
                <h2><?=$haber[1]["baslik"]?></h2>
                <p><?=$haber[1]["kisametin"]?></p>
              </article>
              <article>
                <figure><img src="<?=$haber[2]["gorsel"]?>" alt="Konya Projesi"/> </figure>
                <h2><?=$haber[2]["baslik"]?></h2>
                <p><?=$haber[2]["kisametin"]?></p>
              </article>              
            </section> <!-- Haberler Bitişi -->
          </div>
    
          <right-page>
            <h1>Bi'Tıkla Destek Ol</h1>
            <talep>  <!-- Destek Bekleyenler Başlangıcı-->
              <h2>Destek Bekleyenler</h2>
              <table>
                <tbody>
                  <tr>
                    <th scope="col">Ürün</th>
                    <th scope="col">Adet</th>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">Ürün</th>
                    <th scope="col">Adet</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                  <tr>
                    <td>Kitap</td>
                    <td>2000</td>
                    <td><a href="#" onClick="destek_ol_buton(this)"><img src="resources/icons/destekol.png"
                      alt="Destek Ol" title="Destek Ol"/></a></td>
                    <td>Bilgisayar Masası</td>
                    <td>15</td>
                    <td><a href="#" onClick="destek_ol_buton(this)"><img src="resources/icons/destekol.png"
                      alt="Destek Ol" title="Destek Ol"/></a></td>
                  </tr>
                  <tr>
                    <td>Projeksiyon</td>
                    <td>1</td>
                    <td><a href="#" onClick="destek_ol_buton(this)"><img src="resources/icons/destekol.png"
                    alt="Destek Ol" title="Destek Ol"/></a></td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>

                </tbody>
              </table>

            </talep> <!-- Destek Bekleyenler Bitişi -->
            <talep>  <!-- Destek Sürecindekiler Başlangıcı -->
            <h2>Destek Sürecindekiler</h2>
              <table>
                <tbody>
                  <tr>
                    <th scope="col">Ürün</th>
                    <th scope="col">Adet</th>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">Ürün</th>
                    <th scope="col">Adet</th>
                    <th scope="col">&nbsp;</th>
                  </tr>

                </tbody>
              </table>
            </talep>  <!-- Destek Sürecindekiler Bitişi -->
            <talep>  <!--Tamamlananlar Başlangıcı -->
            <h2>Tamamlananlar</h2>
              <table>
                <tbody>
                  <tr>
                    <th scope="col">Ürün</th>
                    <th scope="col">Adet</th>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">Ürün</th>
                    <th scope="col">Adet</th>
                    <th scope="col">&nbsp;</th>
                  </tr>

                </tbody>
              </table>
            </talep>     <!-- Tamamlananlar bitişi -->           
          </right-page>
        </div>      
        <galeri>			<!-- Galeri Başlangıcı -->
          <h1>Galeri</h1>
          <div class="galeri-icerik"><img src="resources/home-page-images/galeri/23nisan.jpg"
            alt="23 Nisan Kutlama"/>
          </div>
          <div class="galeri-icerik"><img src="resources/home-page-images/galeri/kayseriproje.jpg" alt="Kayseri Proje"/>
          </div>
          <div class="galeri-icerik"><img src="resources/home-page-images/galeri/corba_dagitim.jpg" alt="Çorbada Tuzun Olsun"/>
          </div>
          <div class="galeri-icerik"><img src="resources/home-page-images/galeri/29ekim.jpg" 
            alt="29 Ekim Kutlaması"/>
          </div>
        </galeri>		<!-- Galeri Bitişi -->
      </div>
        
      <footer>
        <ust-footer>
          <div class="bisoluk-logo"><a href="index.html"><img src=
          "resources/icons/tanitim_duyuru.jpg" alt="Bi'Soluk Logo"/></a>
          </div>  <!-- Form Başlangıcı -->
          <div class="form"><h1 class="form-header">Bize Ulaşın</h1>
            <form action="php/footerform.php" method="post">  
              <table>
                <tbody>
                  <tr>
                    <td><input type="text" name="name" 
                      placeholder="İsim ve Soyisminiz"></td>
                    <td><input type="email" name="email" placeholder="Mail adresiniz"></td>
                    <td><input type="submit" value="Gönder" class="footer-form-button"></td>
                  </tr>
                  <tr>
                    <td><textarea placeholder="Mesajınız" name="comment" required></textarea></td>
                    <td>Konu:<select name="subject">
                      <option value="oneri">Öneri</option>
                      <option value="istek">İstek</option>
                      <option value="talep">Destek Talep</option>
                      <option value="sikayet">Şikayet</option>
                      <option value="bilgi-edinme">Bilgi Edinme</option>
                      <option value="sponsor">Sponsorluk</option>
                      <option value="diger">Diğer</option>
                    &nbsp;</select></td>
                    <td><input type="reset" value="Sıfırla" class="footer-form-button"></td>
                  </tr>                 
                </tbody>
              </table>

            </form>
          </div>  <!-- Form Bitişi -->
          <div class="icons">
            <div class="icon-content"><a href=
              "https://www.facebook.com/BiSoluk/" title="@BiSoluk" target=
              "_blank"><img src="resources/icons/facebooklogo.png" 
              alt="Facebook icon"/>Facebook</a>
            </div>
            <div class="icon-content"><a href="https://twitter.com/bisoluk" 
              title="@BiSoluk" target="_blank"><img src=
              "resources/icons/twitterlogo.png" 
              alt="Twitter icon"/> Twitter</a>
            </div>
            <div class="icon-content"><a href=
              "https://www.instagram.com/bisoluk/" title="BiSoluk" target=
              "_blank"><img src="resources/icons/instagramlogo.jpg" alt=
              "Instagram icon"/>Instagram</a>
            </div>
            <div class="icon-content"><a href="https://www.youtube.com" title=
              "BiSoluk" target="_blank"><img src=
             "resources/icons/youtubelogo.png" alt="Youtube icon"/>Youtube</a>
            </div>
            <div class="icon-content"><a href="mailto:iletisim@baubisoluk.org"
              target="_top" title="iletisim@baubisoluk.org" 
              style="margin-left:6vw;"><img src="resources/icons/Mail.ico" 
              alt="Mail icon"/>Mail</a>
            </div>
          </div>
        </ust-footer>
        <alt-footer>
          <div class="alt-footer-1">Bahçeşehir Üniversitesi Sosyal Sorumluluk
          Kulübü Bi'Soluk © 2018. Tüm hakları saklıdır.</div>
          <div class="alt-footer-1"><a href="https://bau.edu.tr" target=
          "_blank">Bahçeşehir Üniversitesi Resmi Web Sitesi</a>
          </div>
        </alt-footer>
      </footer>
    </div>
    <div class="destek-ol-pencere">
      <div class="destek-ol-form">
        <div class="close-button"><span title="Kapat" onClick="destek_ol_kapat()">&times</span></div>
        <form action="php/doform.php" method="post">
          <table>
            <caption>
              İletişim Formu
            </caption>
            <tbody>
              <tr>
                <td><input type="text" name="name" 
                placeholder="İsim ve Soyisminiz" required></td>
                <td><input type="text" name="product" id="do-urun" readonly></td>
              </tr>
              <tr>
                <td><input type="email" placeholder="Mail adresiniz" name="email" 
                required></td>
                <td><input type="number" placeholder="Miktar" name="amount"
                required></td>
              </tr>
              <tr>
                <td><input type="tel" placeholder="Tel no:" name="phone" required>
                </td>
                <td><p>Tercih Ettiğiniz İletişim Şekli<br/>
                  <label >
                    <input type="radio" name="preference" value="tel" id="iletisimtercihi_0" style="width:auto; height:auto;">
                    Telefon</label>
                  
                  <label>
                    <input type="radio" name="preference" value="mail" id="iletisimtercihi_1" style="width:auto; height:auto;">
                    Mail</label>
                  <br>
                </p></td>
              </tr>
              <tr>
                <td><input type="submit" value="Gönder" class="footer-form-button" style="background-color:white; color:green; width:auto; height:auto; padding:0.3vw;
                margin-left:8vw"></td>
                <td><input type="reset" value="Sıfırla" class="footer-form-button" style="background-color:white; color:green; width:auto; height:auto; padding:0.3vw;
                margin-left:8vw"></td>
              </tr>
            </tbody>
          </table>
  		</form>
      </div>
    </div>
  </body>
</html>
