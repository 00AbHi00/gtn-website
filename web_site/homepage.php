<?php
include("include/header.php");
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/slidee2.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Slide 1</h5>
        <p>Description of slide 1</p>
      </div>
    </div>
    <div class="carousel-item" style="position:relative;">
      <img class="d-block w-100" src="images/slidee1.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Slide 2</h5>
        <p>Description of slide 2</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slide3.jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h5>Slide 3</h5>
        <p>Description of slide 3</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<style>
  .information {
    position: relative;
    z-index: 3;
    margin-top: -200px;
  }

  .carousel {
    margin: -100px;
  }

  .carousel-item {
    height: 500px;
  }

  @media(max-width:760px) {
    .carousel-item {
      height: 320px;
      background:no-repeat;
    }
  }
</style>

<div class="information">

</div>





<div style="padding-top:7000px">
  <h1>my nam is abhishek</h1>
</div>
<?php
include("include/footer.php")
  ?>
<script>
  function initCarousel() {
    var carousel = document.querySelector('#myCarousel');
    var carouselItems = carousel.querySelectorAll('.carousel-item');
    var prevButton = carousel.querySelector('.carousel-control-prev');
    var nextButton = carousel.querySelector('.carousel-control-next');
    var indicators = carousel.querySelectorAll('.carousel-indicators li');

    // Initialize the first slide as active
    carouselItems[0].classList.add('active');
    indicators[0].classList.add('active');

    // Add click event listeners to the navigation buttons
    prevButton.addEventListener('click', function () {
      var activeItem = carousel.querySelector('.carousel-item.active');
      var prevItem = activeItem.previousElementSibling;
      var activeIndicator = carousel.querySelector('.carousel-indicators li.active');
      var prevIndicator = activeIndicator.previousElementSibling;

      // If there is no previous item, loop back to the last item
      if (!prevItem) {
        prevItem = carouselItems[carouselItems.length - 1];
        prevIndicator = indicators[indicators.length - 1];
      }

      // Update the active item and indicator
      activeItem.classList.remove('active');
      prevItem.classList.add('active');
      activeIndicator.classList.remove('active');
      prevIndicator.classList.add('active');
    });

    nextButton.addEventListener('click', function ()

</script>