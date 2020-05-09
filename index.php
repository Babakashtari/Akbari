<?php require 'php/swiper_sport.php' ?>
<?php require 'php/swiper_women.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- swiper --><link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
  <!-- font awesone: --><link rel="stylesheet" href="CSS/fontawesome.min.css">
  <!-- bootstrap: --><link rel="stylesheet" href="CSS/bootstrap.min.css.map"><link rel="stylesheet" href="CSS/bootstrap.min.css">
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
                  <a class=" p-2 p-lg-4" href="#">خانه<i class="fa fa-fw fa-home"></i></a>
                </li>
                <li class="col-3 text-center p-0">
                  <a class=" p-2 p-lg-4" href="#">درباره ما<i class="fa fa-fw fa-info"></i></a>
                </li>
                <li class="col-3 text-center p-0">
                  <a class=" p-2 p-lg-4" href="#">محصولات<i class="fa fa-fw fa-shopping-cart"></i></a>
                </li>
                <li class="col-4 text-center p-0">
                  <a class="p-2 p-lg-4" href="index.html">تولیدی صوفی تک و ملیکا
                    <!-- <img  class=" border border-primary" src="img/6.svg" alt="logo"> -->
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
                  <h3 class="px-3 py-2" id="first"> تولید و پخش انواع پوشاک دخترانه</h3>
                  <h5 class="col-8 col-sm-12 py-2">روپوش، سارافون، شال و روسری دخترانه در طرح ها و رنگ های متنوع</h5>
                  <!-- لطفا این لینکها را به سایت هایی وصل کنید که در مورد این نوع نقاشی توضیح می دهند. برای سئو خوب است -->
                  <a class="text-light px-5 py-2" href="#">بیشتر بخوانید</a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/index/photoslider/photo_slider5.jpg" alt="لباس زنانه">
                <div class="carousel-caption">
                  <h3 class="px-3 py-2" id="second">انواع پوشاک زنانه و مجلسی</h3>
                  <h5 class="col-8 col-sm-12 py-2">انواع روپوش زنانه شیک مناسب برای محافل و مجالس رسمی و غیر رسمی</h5>
                  <!-- لطفا این لینکها را به سایت هایی وصل کنید که در مورد این نوع نقاشی توضیح می دهند. برای سئو خوب است -->
                  <a class="text-light px-5 py-2" href="#">بیشتر بخوانید</a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/index/photoslider/photo_slider7.jpg" alt="یونیفرم و لباس اداری">
                <div class="carousel-caption">
                  <h3 class="px-3 py-2" id="third">انواع یونیفرم و لباس اداری</h3>
                  <h5 class="col-8 col-sm-12 py-2">تولید انواع لباس کار و یونیفرم اداری مناسب سازمان ها و مراکز دولتی و غیر دولتی</h5>
                  <!-- لطفا این لینکها را به سایت هایی وصل کنید که در مورد این نوع نقاشی توضیح می دهند. برای سئو خوب است -->
                  <a class="text-light px-5 py-2" href="#">بیشتر بخوانید</a>
                </div>
              </div>
              <div class="carousel-item">
                <img src="img/index/photoslider/photo_slider4.jpg" alt="چادر و لباس اسلامی">
                <div class="carousel-caption">
                  <h3 class="px-3 py-2" id="third">انواع چادر و البسه اسلامی</h3>
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

<section class="swiper sport">
  <h1 class="direction text-center py-2">مانتو دخترانه و اسپرت:</h1>
  <?php swiper_sport(); ?>
</section>

<section class="swiper women">
  <h1 class="text-center ">مجلسی</h1>
  <?php swiper_women(); ?>
</section>
<section class="swiper-administrative">
  <h1 class="text-center ">اداری</h1>

</section>





    <h1 class="text-center ">اماده قرار داد با شرکت ها جهت دوخت</h1>
    <div class="container text-center bgccolor">
      <P class="text-center ">
        تولیدی مانتو و البسه بانوان صوفی تک و ملیکا با بیش از 30 سال تجربه کار حرفه ای در صنعت پوشاک، پیشرو خدمات و مشاوره در حوزه یونیفرم و لباس فرم مدارس و مراکز دولتی است. صوفی تک ملیکا  10 چرخ خیاطی و بیش از 50 کارمند مزدی دوز دارد که در تولیدی فعالیت می کنند و قادرند  روزانه بیش از 150 دست روپوش و لباس فرم جهت مدارس و نهاد های دولتی و خصوصی تولید کنند. صوفی تک ملیکا دو تک فروشی واقع در تهران دارد که یکی در هفت تیر و دیگری خیابان جمهوری واقع شده است. در این راستا صوفی تک آماده همکاری با مدیران مدارس جهت تولید لباس فرم دانش آموزی و یا مسئولین خرید بیمارستان ها جهت تولید یونیفرم کادر پزشکی و خدماتی و همچنین تک فروشی های سراسر ایران جهت عرضه مانتو و شلوار دوخته شده در سایزبندی های متنوع از 38 الی 60 می باشد. 
      </P>
      <P class="text-center ">
        تولیدی صوفی تک و ملیکا قادر است تمامی سفارشات مانتو و لباس زنانه اسپرت، مجلسی و اداری را در رنگ بندی های متنوع و انواع پارچه تولید کند.
      </P>
    </div>

  </main>
  <div class="container-fluid">
    <!----------- Footer ------------>
    <footer class="footer-bs">
      <div class="row">
        <div class="col-md-3 footer-brand animated fadeInLeft">
          <h2>صوفی تک ملیکا</h2>
          <p><iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25903.277425027318!2d51.409972792442375!3d35.753024712700466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f8e041c1fabc95b%3A0x157a53179ef123b3!2sCentral%20Bank%20of%20the%20Islamic%20Republic%20of%20Iran!5e0!3m2!1sen!2s!4v1588511016846!5m2!1sen!2s"
              width="280" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
              tabindex="0"></iframe></p>
        </div>
        <div class="col-md-4 footer-nav animated fadeInUp">
          <h4>منو —</h4>
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
            <li><a href="#" class="fa fa-facebook"></a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#" class="fa fa-twitter"></a></li>
            <li><a href="#">Instagram</a></li>
            <li><a href="#" class="fa fa-instagram"></a></li>
            <li><a href="#">RSS</a></li>
            <li><a href="#" class="fa fa-RSS"></a></li>
          </ul>
        </div>
        <div class="col-md-3 footer-ns animated fadeInRight">
          <h4>قرار داد</h4>
          <p>اگر تمایلی برای عقد قرار داد همکاری با ما داربد، به ما اطلاع دهید</p>
          <p>
            <div class="input-group">
              <input type="text" class="form-control">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"><span
                    class="glyphicon glyphicon-envelope"></span></button>
              </span>
            </div><!-- /input-group -->
          </p>
        </div>
      </div>
    </footer>
    <div class="container-fluid address">
      <i class="fas fa-address-book"></i>
      <p class="centeringpp">سه راه جمهوری چاهار راه امیر اکرم خیابان صبای جنوبی ساختمان اراد طبقه ی پنج واحد هفت
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