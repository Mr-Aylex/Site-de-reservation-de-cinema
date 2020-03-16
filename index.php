<!DOCTYPE html>
<html lang="en">
<?php
include "include/header.php";
?>

<link rel="stylesheet" type="text/css" href="src/css_index/index.css" />
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">



	  <section id="home-section" class="hero js-fullheight">
	  	<h3 class="vr"><span>Bienvenue </span> à Cine Views.</h3>
	  	<div id="timer" class="text-center">
			  <div class="time" id="days"></div>
			  <div class="time" id="hours"></div>
			  <div class="time" id="minutes"></div>
			  <div class="time" id="seconds"></div>
			</div>
		  <div class="home-slider owl-carousel js-fullheight">
	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid px-0">
	          <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-end justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third order-md-last js-fullheight img" style="background-image:url(src/images/carroussel/carroussel.jpeg);">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth js-fullheight d-flex align-items-start align-items-md-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text mt-4 mt-md-0">
			            <h2 class="mb-4">Réservez dès maintenant </h2>
			            <p></li><a href="views/mosaique.php" class="btn btn-primary py-3 px-4">Acheter un ticket</a> <a href="#" class="btn btn-white py-3 px-4">Bande annonce</a></p>
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>

	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid px-0">
	          <div class="row d-flex no-gutters slider-text js-fullheight align-items-end justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third order-md-last js-fullheight img" style="background-image:url(src/images/carroussel/carroussel_2.jpeg);">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth js-fullheight d-flex align-items-start align-items-md-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text mt-4 mt-md-0">
                  <h2 class="mb-4">Réservez dès maintenant </h2>
                <p><a href="#" class="btn btn-primary py-3 px-4">Acheter un ticket</a> <a href="#" class="btn btn-white py-3 px-4">Bande annonce</a></p>
              </div>
		          </div>
	        	</div>
	        </div>
	      </div>

        <div class="slider-item js-fullheight">
          <div class="overlay"></div>
          <div class="container-fluid px-0">
            <div class="row d-flex no-gutters slider-text js-fullheight align-items-end justify-content-end" data-scrollax-parent="true">
              <div class="one-third order-md-last js-fullheight img" style="background-image:url(src/images/carroussel/carroussel_3.jpeg);">
                <div class="overlay"></div>
              </div>
              <div class="one-forth js-fullheight d-flex align-items-start align-items-md-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                <div class="text mt-4 mt-md-0">
                    <h2 class="mb-4">Réservez dès maintenant </h2>
                  <p><a href="#" class="btn btn-primary py-3 px-4">Acheter un ticket</a> <a href="#" class="btn btn-white py-3 px-4">Bande annonce</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
	    </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
    	<div class="container-fluid px-0">
    		<div class="row no-gutters">
	  			<div class="col-md-6 col-lg-3 ftco-animate">
	  				<div class="gallery img" style="background-image: url(src/images/film-1.jpg);">
	  				</div>
	  			</div>
	  			<div class="col-md-6 col-lg-3 ftco-animate">
	  				<div class="gallery img" style="background-image: url(src/images/film-2.jpg);">
	  				</div>
	  			</div>
	  			<div class="col-md-6 col-lg-3 ftco-animate">
	  				<div class="gallery img" style="background-image: url(src/images/film-3.jpg);">
	  				</div>
	  			</div>
	  			<div class="col-md-6 col-lg-3 ftco-animate">
	  				<div class="gallery img" style="background-image: url(src/images/film-4.jpg);">
	  				</div>
	  			</div>
    		</div>
    	</div>
    </section>

		<section class="ftco-section ftco-subscribe img" style="background-image: url(src/images/dunkerque.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
            <h2 class="mb-4">Join Our Event</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="row d-flex justify-content-center mt-4">
              <div class="col-md-10">
                <form action="#" class="subscribe-form">
                  <div class="form-group d-flex">
                    <input type="text" class="form-control" placeholder="Enter email address">
                    <input type="submit" value="Subscribe" class="submit px-3">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
			</div>
		</section>

		<section class="ftco-section bg-light" id="schedule-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Schedule</span>
            <h2 class="mb-4">Program Schedule</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
				<div class="ftco-schedule">
					<div class="row">
            <div class="col-md-4 nav-link-wrap">
	            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	              <a class="nav-link ftco-animate active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Day 01 <span>21 November 2019</span></a>

	              <a class="nav-link ftco-animate" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Day 02 <span>22 November 2019</span></a>

	              <a class="nav-link ftco-animate" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Day 03 <span>23 November 2019</span></a>

	              <a class="nav-link ftco-animate" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Day 04 <span>24 November 2019</span></a>

	            </div>
	          </div>
	          <div class="col-md-8 tab-wrap">

	            <div class="tab-content" id="v-pills-tabContent">

	              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
	              	<div class="speaker-wrap ftco-animate d-flex">
	              		<div class="img speaker-img" style="background-image: url(src/images/person_1.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Introduction to Wordpress 5.0</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="speaker-name">&mdash; <a href="#">Brett Morgan</a> <span class="position">Founder of Wordpress</span></h3>
	              		</div>
	              	</div>
	              	<div class="speaker-wrap ftco-animate d-flex">
	              		<div class="img speaker-img" style="background-image: url(src/images/person_2.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Best Practices For Programming WordPress</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="speaker-name">&mdash; <a href="#">Brett Morgan</a> <span class="position">Founder of Wordpress</span></h3>
	              		</div>
	              	</div>
	              	<div class="speaker-wrap ftco-animate d-flex">
	              		<div class="img speaker-img" style="background-image: url(src/images/person_3.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Web Performance For Third Party Scripts</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="speaker-name">&mdash; <a href="#">Brett Morgan</a> <span class="position">Founder of Wordpress</span></h3>
	              		</div>
	              	</div>
	              </div>

	              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
	              	<div class="speaker-wrap ftco-animate d-flex">
	              		<div class="img speaker-img" style="background-image: url(src/images/person_1.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Introduction to Wordpress 5.0</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="speaker-name">&mdash; <a href="#">Brett Morgan</a> <span class="position">Founder of Wordpress</span></h3>
	              		</div>
	              	</div>
	              	<div class="speaker-wrap ftco-animate d-flex">
	              		<div class="img speaker-img" style="background-image: url(src/images/person_2.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Best Practices For Programming WordPress</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="speaker-name">&mdash; <a href="#">Brett Morgan</a> <span class="position">Founder of Wordpress</span></h3>
	              		</div>
	              	</div>
	              	<div class="speaker-wrap ftco-animate d-flex">
	              		<div class="img speaker-img" style="background-image: url(src/images/person_3.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Web Performance For Third Party Scripts</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="speaker-name">&mdash; <a href="#">Brett Morgan</a> <span class="position">Founder of Wordpress</span></h3>
	              		</div>
	              	</div>
	              </div>
	              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-day-3-tab">
	              	<div class="speaker-wrap ftco-animate d-flex">
	              		<div class="img speaker-img" style="background-image: url(src/images/person_1.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Introduction to Wordpress 5.0</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="speaker-name">&mdash; <a href="#">Brett Morgan</a> <span class="position">Founder of Wordpress</span></h3>
	              		</div>
	              	</div>
	              	<div class="speaker-wrap ftco-animate d-flex">
	              		<div class="img speaker-img" style="background-image: url(src/images/person_2.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Best Practices For Programming WordPress</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="speaker-name">&mdash; <a href="#">Brett Morgan</a> <span class="position">Founder of Wordpress</span></h3>
	              		</div>
	              	</div>
	              	<div class="speaker-wrap ftco-animate d-flex">
	              		<div class="img speaker-img" style="background-image: url(src/images/person_3.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Web Performance For Third Party Scripts</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="speaker-name">&mdash; <a href="#">Brett Morgan</a> <span class="position">Founder of Wordpress</span></h3>
	              		</div>
	              	</div>
	              </div>
	              <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-day-4-tab">
	              	<div class="speaker-wrap ftco-animate d-flex">
	              		<div class="img speaker-img" style="background-image: url(src/images/person_1.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Introduction to Wordpress 5.0</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="speaker-name">&mdash; <a href="#">Brett Morgan</a> <span class="position">Founder of Wordpress</span></h3>
	              		</div>
	              	</div>
	              	<div class="speaker-wrap ftco-animate d-flex">
	              		<div class="img speaker-img" style="background-image: url(src/images/person_2.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Best Practices For Programming WordPress</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="speaker-name">&mdash; <a href="#">Brett Morgan</a> <span class="position">Founder of Wordpress</span></h3>
	              		</div>
	              	</div>
	              	<div class="speaker-wrap ftco-animate d-flex">
	              		<div class="img speaker-img" style="background-image: url(src/images/person_3.jpg);"></div>
	              		<div class="text pl-md-5">
	              			<span class="time">08:00AM - 10:00AM</span>
	              			<h2><a href="#">Web Performance For Third Party Scripts</a></h2>
	              			<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	              			<h3 class="speaker-name">&mdash; <a href="#">Brett Morgan</a> <span class="position">Founder of Wordpress</span></h3>
	              		</div>
	              	</div>
	              </div>
	            </div>
	          </div>
	        </div>
        </div>
			</div>
		</section>



    <section class="ftco-section bg-light" id="blog-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Blog</span>
            <h2 class="mb-4">Our Blog</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.html" class="block-20" style="background-image: url('src/images/image_1.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center mb-3 meta">
	                <p class="mb-0">
	                	<span class="mr-2">March 23, 2019</span>
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.html" class="block-20" style="background-image: url('src/images/image_2.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center mb-3 meta">
	                <p class="mb-0">
	                	<span class="mr-2">March 23, 2019</span>
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="single.html" class="block-20" style="background-image: url('src/images/image_3.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center mb-3 meta">
	                <p class="mb-0">
	                	<span class="mr-2">March 23, 2019</span>
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
                <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div id="map" class="bg-white"></div>
		</section>
    <?php
    include "include/footer.php";
    ?>
  </body>
</html>
