<?php
function swiper_sport(){
    echo    '  
   <div class="swiper-container">
    <div class="swiper-wrapper ">
      <div class="swiper-slide ">
        <img class="" src="img/index/swipper/dokhtarune/girlish1.jpg" alt="مانتو دخترانه و اسپرت">
      </div>
      <div class="swiper-slide ">
        <img class="" src="img/index/swipper/dokhtarune/girlish2.jpg" alt="مانتو دخترانه و اسپرت">
      </div>
      <div class="swiper-slide ">
        <img class="" src="img/index/swipper/dokhtarune/girlish3.jpg" alt="مانتو دخترانه و اسپرت">
      </div>
      <div class="swiper-slide ">
        <img class="" src="img/index/swipper/dokhtarune/girlish4.jpg" alt="مانتو دخترانه و اسپرت">
      </div>
      <div class="swiper-slide ">
        <img class="" src="img/index/swipper/dokhtarune/girlish10.jpg" alt="مانتو دخترانه و اسپرت">
      </div>
      <div class="swiper-slide ">
        <img class="" src="img/index/swipper/dokhtarune/girlish6.jpg" alt="مانتو دخترانه و اسپرت">
      </div>
      <div class="swiper-slide ">
        <img class="" src="img/index/swipper/dokhtarune/girlish7.jpg" alt="مانتو دخترانه و اسپرت">
      </div>
      <div class="swiper-slide ">
        <img class="" src="img/index/swipper/dokhtarune/girlish11.jpeg" alt="مانتو دخترانه و اسپرت">
      </div>
      <div class="swiper-slide ">
        <img class="" src="img/index/swipper/dokhtarune/girlish9.jpeg" alt="مانتو دخترانه و اسپرت">
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination sport"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next sport-next"></div>
    <div class="swiper-button-prev sport-prev"></div>
  </div>
';
}
function swiper_load_js_sport(){
    echo    "
    <script>
    var swiper = new Swiper('.sport .swiper-container', {
      slidesPerView: 4,
      spaceBetween: 20,
      centeredSlides:true,
      grabCursor:true,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.sport',
        clickable: true,
      },
      navigation: {
        nextEl: '.sport-next',
        prevEl: '.sport-prev',
      },
    });
    </script>  
            ";
}
?>