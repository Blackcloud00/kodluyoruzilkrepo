<?php
require 'assets/db/content_db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bahceci One Page - DEMO</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
          integrity="undefined" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Quicksand:wght@400;500;700&display=swap"
          rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/lib/owl/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/lib/owl/assets/owl.theme.default.min.css">
    <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <script src="assets/lib/owl/owl.carousel.min.js"></script>
</head>
<body>
<div class="section-1">
    <div class="container">
        <div class="center-items">
            <div class="logo">
                <img src="assets/img/Logo-1.png" alt="">
            </div>
            <div class="text">
                <h1 class="text-h">Bahçeci Tüp Bebek Merkezi Bursa’da Hizmetinizde!</h1>
                <p class="text-p">Kısa süreliğine geçerli olan “Ücretsiz Muayeneler” için telefon numaranızı bırakın,
                    sizi arayalım.</p>
                <a href="#form"> <button type="button" class="btn-sizi">SİZİ ARAYALIM</button></a>

            </div>

        </div>
        <div class="row images">
            <div class="img-1 col-6">
                <img src="assets/img/Page-1.png" alt="" width="100%">
            </div>
            <div class="img-2 col-6">
                <img src="assets/img/Page-1.png" alt="" width="100%">
            </div>
        </div>
    </div>
    <div class="wave">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#e6007e" fill-opacity="1"
                  d="M0,64L80,58.7C160,53,320,43,480,69.3C640,96,800,160,960,165.3C1120,171,1280,117,1360,90.7L1440,64L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path>
        </svg>
    </div>
</div>
<div class="container section-2">
    <div class="prize row">
        <div class="col-xl-4">
            <div class="ic-prize row">
                <div class="col-3">
                    <img src="assets/img/newsweek.png" alt="">
                </div>
                <div class="col-9">
                    <h3 class="prize-baslik">Newsweek</h3>
                    <p class="prize-text">“Dünyanın En İyi 3 Tüp Bebek Merkezinden Biri” Ödülü</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="ic-prize row">
                <div class="col-3">
                    <img src="assets/img/oxford.png" alt="">
                </div>
                <div class="col-9">
                    <h3 class="prize-baslik">Oxford Üniversitesi</h3>
                    <p class="prize-text">ile Bilimsel İş Birliği</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="ic-prize row">
                <div class="col-3">
                    <img src="assets/img/whtc.png" alt="">
                </div>
                <div class="col-9">
                    <h3 class="prize-baslik">WHTC</h3>
                    <p class="prize-text">“Yılın En İyi Tüp Bebek Merkezi” Ödülü</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-3">
    <div class="container">
        <h1 class="neden-baslik">Neden Bahçeci Bursa Tüp Bebek Merkezi?</h1>
        <div class="row">
            <div class="col-xl-8 col-lg-12 col-md-8 col-sm-12 neden">
                <div class="row">
                    <?php foreach ($content as $k => $item): ?>
                    <div class="neden-col col-xl-6 col-lg-6 col-md-12">
                        <img src="assets/img/<?=$item["img"]?>" alt="">
                        <h3 class="neden-baslik-2"><?=$item["h3"]?></h3>
                        <p class="neden-text">1<?=$item["p"]?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div id="form" class="col-xl-4 col-md-4  col-sm-12 iletisim-form">
                <form>
                    <h2>Sizi Arayalım</h2>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ad Soyad</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Telefon Numarası</label>
                        <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="(+90) ___ __ __">
                    </div>
                    <p class="form-text">ya da <a href="tel:4443534">444 35 34</a> numaralı telefondan bize
                        ulaşabiliriniz.</p>
                    <button type="submit" class="btn btn-primary">Gönder</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="section-4">
    <div class="container alan">
        <div class="row">
            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 basari-slider">
                <h2 class="slider_baslik">Başarı Hikayeleri</h2>
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="row">
                            <div class="col-6"><img src="assets/img/slider-1.png" alt=""></div>
                            <div class="col-6 text">
                                <h5>Demet Akalın, 20 Senedir Evlat Hasreti Çeken Çiftimizle Buluştu!</h5>
                                <p>Hacer-Orhan Varlı çifti, 20 yıldır çocuk hasreti çekiyordu. Başka merkezlerdeki başarısız denemelere …</p>
                                <button type="button" class="btn slider_btn">VİDEOYU İZLE</button>
                            </div>
                        </div>
                      </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-6"><img src="assets/img/slider-1.png" alt=""></div>
                            <div class="col-6 text">
                                <h5>Demet Akalın, 20 Senedir Evlat Hasreti Çeken Çiftimizle Buluştu!</h5>
                                <p>Hacer-Orhan Varlı çifti, 20 yıldır çocuk hasreti çekiyordu. Başka merkezlerdeki başarısız denemelere …</p>
                                <button type="button" class="btn slider_btn">VİDEOYU İZLE</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-4 col-md-0  col-sm-0">

            </div>
        </div>
    </div>
</div>
<div class="section-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-md-12 text">
                <h1 style="color: #E6007E;"><span style="color: black;">7 Ülke 13 Merkez</br>  105 Ülkede</span> </br> 70.000’in Üzerinde </br> Bahçeci Bebeği</h1>
                <p>Zor vakalarda Avrupa standartlarının üzerinde başarı oranlarına sahip Bahçeci ile sizin de bebek hayaliniz gerçek olsun.</p>
                <a href="#">HAKKIMIZDA</a>
            </div>
            <div class="col-xl-7 col-md-12 img"><img class="alt_gorsel" src="assets/img/dunya.png" alt=""></div>
        </div>
    </div>
</div>
<div class="section-6">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-md-12 footer-text">
                <h1>Neredeyiz?</h1>
                <p><span style="color: #E6007E">Adres</span>    :   Fethiye Mah. Fatih Sultan Mehmet Bulvarı, Beyaz Sk. No:28/1, 16110 Nilüfer/Bursa</p>
                <p><span style="color: #E6007E">Telefon</span>  :   444 39 49</p>
                <p><span style="color: #E6007E">E-posta</span>  :   info@bahceci.com.tr</p>
            </div>
            <div class="col-xl-6 col-md-12 harita">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3546.06229077919!2d39.613566787837165!3d41.009584785498284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x72485b4bfa307142!2sDoubleTree%20by%20Hilton%20Hotel%20Trabzon!5e0!3m2!1str!2str!4v1623683324990!5m2!1str!2str" width="640" height="346" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>
<div class="section-7">
    <hr>
    <img class="footer_logo" src="assets/img/footer_logo.png"  alt="">
</div>

<script src="assets/js/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="undefined"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="undefined"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.esm.min.js" integrity="undefined"
        crossorigin="anonymous"></script>
</body>
</html>