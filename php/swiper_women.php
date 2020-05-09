<?php
function swiper_women(){
    echo    '
    <!-- Swiper -->
    <div class="swiper-container women-container mx-auto">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image:url(img/index/swipper/formal-zanune/samples1.png)"></div>
        <div class="swiper-slide" style="background-image:url(img/index/swipper/formal-zanune/woman1.jpg)"></div>
        <div class="swiper-slide" style="background-image:url(img/index/swipper/formal-zanune/woman2.jpg)"></div>
        <div class="swiper-slide" style="background-image:url(img/index/swipper/formal-zanune/woman3.jpg)"></div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Arrows -->
      <div class="swiper-button-next women-next"></div>
      <div class="swiper-button-prev women-prev"></div>  
    </div>            ';
}

function swiper_load_js_women(){
    echo    "
    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper('.women-container', {
        effect: 'cube',
        grabCursor: true,
        cubeEffect: {
          shadow: true,
          slideShadows: true,
          shadowOffset: 20,
          shadowScale: 0.94,
        },      
        navigation: {
          nextEl: '.women-next',
          prevEl: '.women-prev',
        },  
        pagination: {
          el: '.swiper-pagination',
        },
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },  
      });
    </script>            
            ";
}
?>