<footer>
  <div class="footer">
    <!--Open a modal About-->
      <a id="modalBotton-About"  href="#">About</a>
      <div id="about-modal" class="modal">
          <div class="modal-content">
            <span class="close-About">&times;</span>
            <p>Richard Feynman was an incredible scientist,
            but more amazing he was an incredible teacher
            he was capable of teaching complex subjects in a
            clear way this is because he pushed himself to such
            a deep understanding of the subject.  So why I'm speaking
            of a scientist in a programmer blog, this is because
            I believe that if you can't explain the subject in a
            simple way to anybody you don't really understand it.
            So I will use this blog to study for myself, and if I have done a
            good job this will be an interesting blog otherwise I haven't study
            correctly. By the way, my name is Alex, and welcome to the programmer blog.
            </p>
          </div>
        </div>
    <!--Open a modal Contact Us-->
        <a id="modalBotton-Contact"  href="#">Contact Us</a>
        <div id="Contact-Us-modal" class="modal">
            <div class="modal-content">
                <span class="close-Contact-Us">&times;</span>
                <p>If you need to contact us you can write to a.programmer.blog@gmail.com .
                </p>
            </div>
        </div>
        <!--Open a modal Privacy-->
        <a id="modalBotton-Privacy"  href="#">Privacy</a>
        <div id="Privacy-modal" class="modal">
          <div class="modal-content">
              <span class="close-Privacy">&times;</span>
              <p>The data that you give in the registration
              section will be used in the comments section. But now there isn't a comment section.
              </p>
          </div>
        </div>

    <a href="https://www.youtube.com/channel/UC7lGW-m9iUzzNZPCanv_c-A" target="_blank">Youtube</a>
    <a href="https://github.com/the-alex-21" target="_blank"><img src="static/image/GitHub.png" id="GitHub"></a>
  </div>
</footer>
<script>
// Get the modal of about
var modalAbout = document.getElementById("about-modal");
var btnAbout = document.getElementById("modalBotton-About");
var spanAbout= document.getElementsByClassName("close-About")[0];
btnAbout.onclick = function() {
  modalAbout.style.display = "block";
}
spanAbout.onclick = function() {
  modalAbout.style.display = "none";
}
// Get the modal of Contact Us
var modalContactUs = document.getElementById("Contact-Us-modal");
var btnContactUs = document.getElementById("modalBotton-Contact");
var spanContactUs = document.getElementsByClassName("close-Contact-Us")[0];
btnContactUs.onclick = function() {
  modalContactUs.style.display = "block";
}
spanContactUs.onclick = function() {
  modalContactUs.style.display = "none";
}
// Modal privacy Policy
var modalPrivacy = document.getElementById("Privacy-modal");
var btnPrivacy = document.getElementById("modalBotton-Privacy");
var spanPrivacy = document.getElementsByClassName("close-Privacy")[0];
btnPrivacy.onclick = function() {
  modalPrivacy.style.display = "block";
}
spanPrivacy.onclick = function() {
  modalPrivacy.style.display = "none";
}
</script>
