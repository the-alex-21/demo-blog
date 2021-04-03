<?php
require_once"../dashboard.php"
?>
<link rel="stylesheet" href="../dashboard-style.css">

<div id="userstyle">
  <center>
    <h3 style="color:white"> Users </h3>
  </center>

  <!-- Slick . js-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet">
  <div id="containeusers">
   <div class="slick-slider">
    <?php require_once("user-show.php");?>
   </div>
<button class="carousel-prev-us">&lt;</button>
<button class="carousel-next-us">&gt;</button>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
<script>
       $(document).ready(function(){
          $('.slick-slider').slick({
            infinite: false,
             slidesPerRow: 4,
              rows:7,
              arrows: false,
              autoplay: true,
              autoplaySpeed: 4000,

          })


// Custom carousel nav
$('.carousel-prev-us').click(function(){
$(this).parent().find('.slick-slider').slick('slickPrev');
} );

$('.carousel-next-us').click(function(e){
e.preventDefault();
$(this).parent().find('.slick-slider').slick('slickNext');
} );
});

</script>
</div>
</div>
</body>
</html>
