<?php
require_once"../dashboard.php"
?>
<link rel="stylesheet" href="../dashboard-style.css">
<div id="body-topics">
<div class="div-form">
  <form  name="myForm" method="post" action="Topics-create-process.php" enctype='multipart/form-data' id="formCreate" onsubmit="return validateForm()">
  <label class = "label" style="font-size:20px;">Topic </label>
  &nbsp;&nbsp;&nbsp;&nbsp;
  <input type="text" name="Topics"  id="Topicsinp"  >
  <input type="submit" name="nameSubmit" value="submit" id="TopicsBut" >
  </form>
  <hr>
</div>
</div>
<!-- Slick . js-->
<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" rel="stylesheet">
 <div id="topics-views"  alt="slider data" >
   <div class="slick-slider">
   <?php
   require_once("view-topics.php");
   ?>
</div>
<button class="carousel-prev">&lt;</button>
<button class="carousel-next">&gt;</button>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
<script>
       $(document).ready(function(){
          $('.slick-slider').slick({
            infinite: false,
             slidesPerRow: 4,
              rows:10,
              arrows: false,
              autoplay: true,
              autoplaySpeed: 4000,

          })


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
<script>
  function validateForm() {
    var x = document.forms["myForm"]["Topics"].value;
    if (x == "") {
      alert("Write something.");
      return false;
    }  else if  (/[^a-zA-Z0-9_-\s.,;!$%^#@&*()|{}-]/.test(x)){
     alert("You have use an illegal character.");
     return false;
    }
  }
</script>
</div>
</body>
</html>
