<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet">
<div onmouseout="displaybutoutTop()" onmouseover="displaybutinTop()" style="margin-top:10px">
  <center>
    <div>
      <div class="slick-slider" >
        <?php include_once"topics-process.php"; ?>
      </div>
      <button class="carousel-prev">&lt;</button>
      <button class="carousel-next">&gt;</button>
    </div>
  </center>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
<script>
       $(document).ready(function(){
          $('.slick-slider').slick({
            slidesPerRow: 3,
             infinite: false,
              rows: 1,
              dots: true,
              arrows: false,
              autoplay: true,
              autoplaySpeed: 5000,

          })
          $('.home .featured-posts .slick-slider').slick({
arrows: false,
});

// Custom carousel nav
$('.carousel-prev').click(function(){
$(this).parent().find('.slick-slider').slick('slickPrev');
} );

$('.carousel-next').click(function(e){
e.preventDefault();
$(this).parent().find('.slick-slider').slick('slickNext');
} );
});


 function displaybutinTop() {
   $(".carousel-prev").css("display","block")
   $(".carousel-next").css("display","block")
 }
 function displaybutoutTop(){
   $(".carousel-prev").css("display","none")
   $(".carousel-next").css("display","none")
 }
</script>
