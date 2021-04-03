<div class="super-cont-b" onmouseout="displaybutout()" onmouseover="displaybutin()" >
  <center>
    <div class="slick-container-B" style="width:80%;">
      <div class="slick-slider-B">
        <?php include_once"blogs-process.php"; ?>
      </div>
      <button class="prev-Blog">&lt;</button>
      <button class="next-Blog">&gt;</button>
    </div>
  </center>
</div>

<script>
       $(document).ready(function(){
          $('.slick-slider-B').slick({
            slidesPerRow: 2,
             rows: 2,
              infinite:false,
              dots: true,
              arrows: false,
              autoplay: true,
              autoplaySpeed: 100000,
          })
          $('.home .featured-posts .slick-slider').slick({
arrows: false,
});

// Custom carousel nav
$('.prev-Blog').click(function(){
$(this).parent().find('.slick-slider-B').slick('slickPrev');
} );

$('.next-Blog').click(function(e){
e.preventDefault();
$(this).parent().find('.slick-slider-B').slick('slickNext');
} );
});

function displaybutin() {
  $(".prev-Blog").css("display","block")
  $(".next-Blog").css("display","block")
}
function displaybutout(){
  $(".prev-Blog").css("display","none")
  $(".next-Blog").css("display","none")
}
</script>
