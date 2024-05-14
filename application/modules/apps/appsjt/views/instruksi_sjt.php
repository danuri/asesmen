<style>
/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 100%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: #fff;
  background:#028740;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #000000;
  font-size: 14px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.slide1 {
  animation-name: slide;
  animation-duration: 0.5s;
}

@keyframes slide1 {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

img.center {
    display: block;
    margin: 0 auto;
}
</style>





<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Instruksi Pengerjaan</h3>
    </div>
<!-- /.col-lg-12 -->
</div>


<div class="slideshow-container">

<div class="mySlides slide1">
  <div class="numbertext">Tahap 1 / 6</div>
  <img class="center" src="<?=base_url('assets/media/upload/mastersoal/instruksisjtbeta/Instruksi_SJT_001.jpg');?>" style="width:65%">
</div>

<div class="mySlides slide1">
  <div class="numbertext">Tahap 2 / 6</div>
  <img class="center" src="<?=base_url('assets/media/upload/mastersoal/instruksisjtbeta/Instruksi_SJT_002.jpg');?>" style="width:65%">
</div>

<div class="mySlides slide1">
  <div class="numbertext">Tahap 3 / 6</div>
  <img class="center" src="<?=base_url('assets/media/upload/mastersoal/instruksisjtbeta/Instruksi_SJT_003.jpg');?>" style="width:65%">
</div>

<div class="mySlides slide1">
  <div class="numbertext">Tahap 4 / 6</div>    
  <img class="center" src="<?=base_url('assets/media/upload/mastersoal/instruksisjtbeta/Instruksi_SJT_004.jpg');?>" style="width:65%">
</div>

<div class="mySlides slide1">
  <div class="numbertext">Tahap 5 / 6</div>
  <img class="center" src="<?=base_url('assets/media/upload/mastersoal/instruksisjtbeta/Instruksi_SJT_005.jpg');?>" style="width:65%">
</div>

<div class="mySlides slide1">
  <div class="numbertext">Tahap 6 / 6</div>
  <img class="center" src="<?=base_url('assets/media/upload/mastersoal/instruksisjtbeta/Instruksi_SJT_006.jpg');?>" style="width:65%">
</div>

<a class="prev" onclick="plusSlides(-1)"><</a>
<a class="next" onclick="plusSlides(1)">></a>

</div>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
</div>



<div class="row">
	<div class="col-md-12" >
		<h4 class="page-header">Klik " SJT (Password) " pada Menu disamping untuk mengerjakan !</h4>
	</div>
</div>
<br/>


<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

						
