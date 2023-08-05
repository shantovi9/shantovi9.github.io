<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="banner.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h2>Notice Board</h2>
<div class="slideshow-container">
  <div class="mySlides fade">
    <img src="1.png" style="width:100%">
  </div>

  <div class="mySlides fade">
    <img src="2.png" style="width:100%">
  </div>
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  slides[slideIndex-1].style.display = "block";  
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>

</body>
</html>
