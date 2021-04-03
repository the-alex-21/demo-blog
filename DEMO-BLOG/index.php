<?php include_once("app/includes/nav.php");?>
  <div class="indexwelcome">
    <div class="Cont-text">
      <section class="home">
            <div class="home-text">
                <h1>Welcome, this is the programmer blog !</h1>
                <br>
                <p class="animate-text">
                   <span>Here you can find the most useful tutorial</span>
                   <span>So you can advance  in your programming skill.</span>
                   <span >Please, scull down to find new blogs.</span>
                 </p>
            </div>
      </section>
    </div>
         <span id="scroll-img"><img src= "static/image/scroll.png" ></span>
   </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
       const txts=document.querySelector(".animate-text").children,
             txtsLen=txts.length;
         let index=0;
        const textInTimer=3000,
              textOutTimer=2800;
       function animateText() {
          for(let i=0; i<txtsLen; i++){
            txts[i].classList.remove("text-in","text-out");
          }
          txts[index].classList.add("text-in");
          setTimeout(function(){
              txts[index].classList.add("text-out");
          },textOutTimer)
          setTimeout(function(){
            if(index == txtsLen-1){
                index=0;
              }
             else{
                 index++;
               }
              animateText();
          },textInTimer);
       }
      window.onload=animateText
      setTimeout(function () {$(".animate-text").css('display','none');$("#scroll-img").css('display', 'block');}, 9000);
</script>
<!-- Topics --->
<?php include_once"app/process/Topics/topics-slick.php"; ?>
<!-- blogs --->
<?php include_once"app/process/Blogs/blogs-slick.php"; ?>
<!--footer-->
<?php include_once("app/includes/footer.php");?>
