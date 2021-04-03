<?php
require_once"../dashboard.php"
?>
<link rel="stylesheet" href="../dashboard-style.css">
<div class="main">
<!-- Create pages -->
</div >
<!-- First we create a form in wich the data will be write
and then send to  mysql -->
<center>
<form method="post" action="create-posts/Create-post-process.php"
enctype='multipart/form-data' id="formCreate" name="myForm"onsubmit="return validateForm()">
<label class = "label" style="font-size:20px;">Title </label>

<input type="text" name="Article_Title" id="slug-source">
<br>

<label class = "label" style="font-size:20px; margin-left:-30%;">Content </label><br>
<div class="Article_content">
<textarea name="Article_content" id="Article_content"></textarea>
<br>
</div>

<label class = "label" style="font-size:20px; margin-left:20%">Topic </label>
<input type="text" name="Article_Topics" id="topics" >
<br><br>
<label class = "label" style="font-size:20px;">Slug  </label>
<input type="text" name="Article_ID"  id="slug-target"  >
<button type="button" onClick="Slug()" class="button" id="butslug"> Convert</button>
<input type="file" name="image"class="button"  id="butfile" >
<br>
<input type="submit" name="nameSubmit" value="submit" class="button" id="create-post-Submit" >
</form>
<center/>

<script src="../../ckeditor/ckeditor.js"></script>
<script >CKEDITOR.replace("Article_content")

CKEDITOR.on('instanceReady', function(e) {
    // First time
    e.editor.document.getBody().setStyle('background-color', 'rgb(45,45,45)');
    // in case the user switches to source and back
    e.editor.on('contentDom', function() {
        e.editor.document.getBody().setStyle('background-color', 'rgb(45,45,45)');
      });
  });


</script>
<script>
function Slug() { //Create a slug

        var a = document.getElementById("slug-source").value;

        var b = a.toLowerCase().replace(/ /g, '-')
            .replace(/[^\w-]+/g, '');

        document.getElementById("slug-target").value = b;
    }
</script>
<script>
  function validateForm() {
    var Title = document.forms["myForm"]["Article_Title"].value;
    if ( Title == "") {
      alert("Write something in Article Title.");
      return false;
    }  else if  (/[^a-zA-Z0-9_-\s.,;!$%^#@&*()|{}-]/.test(Title)){
     alert("You have use an illegal character in Article Title.");
     return false;
    }
    var Topics = document.forms["myForm"]["Article_Topics"].value;
    if ( Topics == "") {
      alert("Write something in Article Topics.");
      return false;
    }  else if  (/[^a-zA-Z0-9_-\s.,;!$%^#@&*()|{}-]/.test(Topics)){
     alert("You have use an illegal character in Article Topics.");
     return false;
    }
    var slug = document.forms["myForm"]["Article_ID"].value;
    if ( slug == "") {
      alert("Write something in Article slug.");
      return false;
    }  else if  (/[^a-zA-Z0-9_-\s.,;!$%^#@&*()|{}-]/.test(slug)){
     alert("You have use an illegal character in Article slug.");
     return false;
    }
    var image = document.forms["myForm"]["image"].value;
    if ( image == "") {
      alert("Select a Image");
      return false;
    }
  }
</script>
