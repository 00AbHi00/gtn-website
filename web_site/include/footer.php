<!-- footer -->
<footer style="background-color:rgb(8,52,48);" class="text-white py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <h5>Green Tara Nepal</h5>
                <ul class="list-unstyled">
                    <li><i class="fas fa-map-marker-alt"></i> Baluwatar, Kathmandu</li>
                    <li><i class="fas fa-phone-alt"></i> 01-4532698</li>
                    <li><i class="fas fa-envelope"></i> info@greentara.org.np</li>
                </ul>
            </div>
            <div class="col-md-2">
                <h5>PAGES</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Vision Mission Goal</a></li>
                    <li><a href="#">Core Areas Of Work</a></li>
                    <li><a href="#">About GTN</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h5>USEFUL LINKS</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Ongoing Projects</a></li>
                    <li><a href="#">Accomplished Projects</a></li>
                    <li><a href="#">Blogs</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h5>CONNECT WITH US</h5>
                <ul class="list-unstyled">
                    <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i> Youtube</a></li>
                </ul>
</div>
<div class="col-md-2">

                <form class="form-inline">
                    <div class="form-group mb-2">
                        <label for="newsletter-name" class="sr-only">Name</label>
                        <input type="text" class="form-control" id="newsletter-name" placeholder="Name">
                    </div>
                    <div class="form-group mx-sm-3 mb-2">
                        <label for="newsletter-email" class="sr-only">Email address</label>
                        <input type="email" class="form-control" id="newsletter-email" placeholder="Email address">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
                </form>
            </div>
        </div>
        <hr>
        <p class="text-center">&copy; 2022 GTN. All rights reserved.</p>
    </div>
</footer>


<!-- footer ends -->

<!-- JavaScript and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<!-- Link to Popper.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.3/umd/popper.min.js"></script>
<!-- Link to Bootstrap JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    window.addEventListener('load', function () {
        // Hide preloader and show page content
        var preloader = document.querySelector('.preloader');
        preloader.style.display = 'none';
        document.body.style.overflow = 'visible';
    });
    $(document).ready(function() {
    $('#mySlider').carousel();
    
    $('.box').click(function() {
      var slideNumber = $(this).index();
      $('#mySlider').carousel(slideNumber);
    });
  });
</script>
</body>

</html>