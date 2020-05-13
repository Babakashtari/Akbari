<?php require 'php/swiper_sport.php' ?>
<?php require 'php/swiper_women.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- swiper --><link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
  <!-- font awesone: --><link rel="stylesheet" href="CSS/fontawesome.min.css">
  <link rel="stylesheet" href="CSS/bootstrap.min.css.map">
  <link rel="stylesheet" href="CSS/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <!-- normalizer: --><link rel="stylesheet" href="CSS/Normalizer.css">
  <link rel="stylesheet" href="CSS/swiper.css">
  <link rel="stylesheet" href="CSS/font_imports.css">
  <link rel="stylesheet" href="CSS/index.css">

  <title>تک ملیکا</title>


<body class="iranSans">
  <main>
          <!-- carousel -->
          <div id="carouselId" class="carousel slide" data-ride="carousel">
            <div class="header m-0">
              <ul class="m-0 p-0 d-flex flex-row-reverse row ">
                <li class="col-2 text-center p-0">      
                  <a class="py-5" href="#">خانه<i class="fa fa-fw fa-home"></i></a>
                </li>
                <li class="col-3 text-center p-0">
                  <a class="py-5" href="#">درباره ما<i class="fa fa-fw fa-info"></i></a>
                </li>
                <li class="col-3 text-center p-0">
                  <a class="py-5" href="#">محصولات<i class="fa fa-fw fa-shopping-cart"></i></a>
                </li>
                <li class="col-4 text-center p-0">
                  <a class="logo-container" href="index.php">
                    <img  class="logo" src="img/logo/صوفی تک.png" alt="logo" width="15%" height="auto">
                  </a>
                </li>
              </ul>
            </div>
            <ol class="carousel-indicators">
              <li data-target="#carouselId" data-slide-to="0" class="active"></li>
              <li data-target="#carouselId" data-slide-to="1"></li>
              <li data-target="#carouselId" data-slide-to="2"></li>
              <li data-target="#carouselId" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="rotate-img" src="img/index/photoslider/photo_slider2.jpg" alt="لباس دخترانه">
                <div class="carousel-caption">
                  <h3 class="p-4" id="first"> تولید و پخش انواع پوشاک دخترانه</h3>
                  <h5 class="col-8 col-sm-12 py-2">روپوش، سارافون، شال و روسری دخترانه در طرح ها و رنگ های متنوع</h5>
                  <!-- لطفا این لینکها را به سایت هایی وصل کنید که در مورد این نوع نقاشی توضیح می دهند. برای سئو خوب است -->
                  <a class="text-light px-5 py-2" href="#">بیشتر بخوانید</a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/index/photoslider/photo_slider5.jpg" alt="لباس زنانه">
                <div class="carousel-caption">
                  <h3 class="p-4" id="second">انواع پوشاک زنانه و مجلسی</h3>
                  <h5 class="col-8 col-sm-12 py-2">انواع روپوش زنانه شیک مناسب برای محافل و مجالس رسمی و غیر رسمی</h5>
                  <!-- لطفا این لینکها را به سایت هایی وصل کنید که در مورد این نوع نقاشی توضیح می دهند. برای سئو خوب است -->
                  <a class="text-light px-5 py-2" href="#">بیشتر بخوانید</a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/index/photoslider/photo_slider7.jpg" alt="یونیفرم و لباس اداری">
                <div class="carousel-caption">
                  <h3 class="p-4" id="third">انواع یونیفرم و لباس اداری</h3>
                  <h5 class="col-8 col-sm-12 py-2">تولید انواع لباس کار و یونیفرم اداری مناسب سازمان ها و مراکز دولتی و غیر دولتی</h5>
                  <!-- لطفا این لینکها را به سایت هایی وصل کنید که در مورد این نوع نقاشی توضیح می دهند. برای سئو خوب است -->
                  <a class="text-light px-5 py-2" href="#">بیشتر بخوانید</a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/index/photoslider/photo_slider4.jpg" alt="چادر و لباس اسلامی">
                <div class="carousel-caption">
                  <h3 class="p-4" id="third">انواع چادر و البسه اسلامی</h3>
                  <h5 class="col-8 col-sm-12 py-2">تولید انواع چادر عربی و ایرانی، شيک و مناسب برای تمامی سنین</h5>
                  <!-- لطفا این لینکها را به سایت هایی وصل کنید که در مورد این نوع نقاشی توضیح می دهند. برای سئو خوب است -->
                  <a class="text-light px-5 py-2" href="#">بیشتر بخوانید</a>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
<div class="container text-justify bgccolor direction py-5">
  <h1 class="text-center">چرا صوفی تک؟</h1>
  <P class="text-justify direction line-height">
        تولیدی صوفی تک و ملیکا قادر است تمامی سفارشات مانتو و لباس زنانه اسپرت، مجلسی و اداری را در رنگ بندی های متنوع و انواع پارچه تولید کند. صوفی تک همچنین قادر است قبل از تولید تیراژ، تا چند مدل به صورت نمونه تولید و در اختیار مدیران و مسئولين محترم قرار دهد تا بعد از تاييد نهائی، مدل مورد نظر را توليد انبوه كند. جهت سفارش مي توانيد با شماره <span>۰۹۱۲۳۳۰۳۰۶۳</span> آقای اکبری تماس بگيريد و جهت پرو لباس فرم مدارس،‌ بيمارستان ها و ساير نهاد ها، كارمندان و دانش آموزان محترم مي توانند به تک فروشی های شرکت واقع در ميدان هفت تير، جنب مترو، مانتو پوشاك صوفی تک مراجعه کنند.
      </P>
</div>
<section class="swiper sport">
  <h1 class="direction text-center py-2">مانتو دخترانه و اسپرت:</h1>
  <?php swiper_sport(); ?>
</section>

<section class="swiper women">
  <h1 class="text-center ">مانتو زنانه مجلسی:</h1>
  <?php swiper_women(); ?>
</section>
<section class="swiper-administrative">
  <h1 class="text-center ">اداری</h1>
</section>

    <h1 class="text-center ">آماده قرارداد با شرکت ها جهت دوخت</h1>
    <div class="container text-justify bgccolor direction">
      <P class="line-height">
        تولیدی مانتو و البسه بانوان صوفی تک و ملیکا با بیش از ۳۰ سال تجربه کار حرفه ای در صنعت پوشاک، پیشرو خدمات و مشاوره در حوزه یونیفرم و لباس فرم مدارس و مراکز دولتی است. صوفی تک ملیکا ۱۰ چرخ خیاطی و بیش از ۵۰ کارمند مزدی دوز دارد که در تولیدی فعالیت می کنند و قادرند  روزانه بیش از ۱۵۰ دست روپوش و لباس فرم جهت مدارس و نهاد های دولتی و خصوصی تولید کنند. صوفی تک ملیکا دو تک فروشی واقع در تهران دارد که یکی در هفت تیر و دیگری خیابان جمهوری واقع شده است. در این راستا صوفی تک آماده همکاری با مدیران مدارس جهت تولید لباس فرم دانش آموزی و یا مسئولین خرید بیمارستان ها جهت تولید یونیفرم کادر پزشکی و خدماتی و همچنین تک فروشی های سراسر ایران جهت عرضه مانتو و شلوار دوخته شده در سایزبندی های متنوع از ۳۸ الی ۶۰ می باشد. 
      </P>
    </div>

  </main>
  <div class="container-fluid m-0 p-0">
    <!----------- Footer ------------>
    <footer class="footer-bs">
      <div class="row">
        <div class="col-md-3 footer-brand animated fadeInLeft text-center">
          <h2>صوفی تک ملیکا</h2>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25903.277425027318!2d51.409972792442375!3d35.753024712700466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e041c1fabc95b%3A0x157a53179ef123b3!2sCentral%20Bank%20of%20the%20Islamic%20Republic%20of%20Iran!5e0!3m2!1sen!2s!4v1588511016846!5m2!1sen!2s"
              width="250" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
              tabindex="0">
            </iframe>
        </div>
        <div class="col-md-3 footer-nav animated fadeInUp">
          <h4>— منو —</h4>
          <div class="col-md-6">
            <ul class="pages">
              <li><a href="#">خرید</a></li>
              <li><a href="#">قرارداد</a></li>
              <li><a href="#">سفارش</a></li>
              <li><a href="#">دوخت</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="list">
              <li><a href="#">خانه</a></li>
              <li><a href="#">درباره ما</a></li>
              <li><a href="#">ورود</a></li>
              <li><a href="#">ثبت نام</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 footer-social animated fadeInDown">
          <h4>مارا دنبال کنید</h4>
          <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#" ><i class="fab fa-facebook-square"></i></a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#" class="fab fa-twitter-square"></a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#" class="fab fa-instagram"></a></li>
            <li><a href="#">telegram</a></li>
            <li><a href="#" class="fab fa-telegram"></a></li>
          </ul>
        </div>
        <div class="col-md-4 footer-ns animated fadeInRight">
          <h4>— قرار داد —</h4>
          <p class="direction line-height">اگر تمایلی برای عقد قرار داد همکاری با ما داربد، آدرس ایمیلتان را وارد کنید تا اطلاعات لازم را در اختیارتان بگذاریم:</p>
          <form class="form-inline justify-content-center align-items-center" action="#" method="GET">
            <label class="sr-only" for="email_address">آدرس ایمیل</label>
            <input type="text" class="form-control mr-sm-2" id="email_address" placeholder="ashtaribabak@rocketmail.com">
            <button type="submit" class="btn p-0">
              <span class="fas fa-envelope text-dark bg-warning border border-dark"></span>
            </button>
          </form>
        </div>
      </div>
    </footer>
    <div class="container-fluid address">
      <i class="fas fa-address-book"></i>
      <p class="centeringpp">سه راه جمهوری چهار راه امیر اکرم خیابان صبای جنوبی ساختمان آراد طبقه ی پنج واحد هفت
      </p>
      <i class="fas fa-phone-alt"></i>
      <p class="centeringpp">66496437</p>
    </div>
  </div>
  <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
  <?php swiper_load_js_sport(); ?>
  <?php swiper_load_js_women(); ?>
  <script src="JS/swiper.js"></script>
  <script src="JS/jquery.min.js"></script>
  <script src="JS/bootstrap.min.js"></script>
</body>

</html>