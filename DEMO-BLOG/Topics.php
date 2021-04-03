<?php include_once("app/includes/nav.php");?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet">
<div class="super-cont-b" >
  <center>
    <div class="slick-container-B" style="width:80%;margin-top:100px;">
      <div class="slick-slider-B">
        <?php include_once"app/process/Filter-blog/topics-process.php"; ?>
      </div>
    </div>
  </center>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
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
});
</script>
<?php include_once("app/includes/footer.php");?>
