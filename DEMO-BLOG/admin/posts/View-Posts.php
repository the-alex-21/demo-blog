<?php
require_once"../dashboard.php";
?>
<link rel="stylesheet" href="../dashboard-style.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet">
<div class="main">
 <div id="viewpost"  alt="slider data">
   <div class="slick-slider">
   <?php
   require_once("View-post/view-post-process.php");
   ?>
</div>
<button class="carousel-prev">&lt;</button>
<button class="carousel-next">&gt;</button>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
<script>
       $(document).ready(function(){
          $('.slick-slider').slick({
            infinite: false,
             slidesPerRow: 5,
              rows:8,
              dots: true,
              arrows: false,
              autoplay: true,
              autoplaySpeed: 4000,

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

</script>
