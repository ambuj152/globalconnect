
<?php
    include("connection.php");
    $query = "SELECT * FROM `slider`";
    $result = mysqli_query($conn, $query);
    foreach ($result as $row) {
        ?>
	<div class="banner" style="background-image: url('<?php echo $row['filepath']; ?>'); no-repeat 0px 0px;
    background-size: cover;
    padding: 10em 0 13em;">
    <?php
    }
    ?>
			<div class="slider">
				<!-- <h2 class="wow shake animated" data-wow-delay=".5s">Global Connect</h2> -->
				<div class="border"></div>
				<script src="js/responsiveslides.min.js"></script>
				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						// Slideshow 4
							$("#slider3").responsiveSlides({
								auto: true,
								pager: true,
								nav: true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
									$('.events').append("<li>before event fired.</li>");
								},
								after: function () {
									$('.events').append("<li>after event fired.</li>");
								}
							 });				
						});
				</script>
				<div  id="top" class="callbacks_container-wrap">
					<ul class="rslides" id="slider3">
						<li>
							<div class="slider-info" style="float: right; padding-right: 40px;">
								<p class="wow fadeInUp animated" data-wow-delay=".5s" style=" font-size: 30px;  color:#181B4C;"><b>Elevate Your Game, Expand Your Reach</b></p>

								<h3 class="wow fadeInDown animated" data-wow-delay=".5s" style="color: #FCBB00;">The Adventure Starts Today</h3>
								<div class="more-button wow fadeInRight animated" data-wow-delay=".5s">
									<a href="Enquiry.php" class="enqq" ><b> Enquiry</b></a>
								</div>
							</div>
						</li>
						<!-- <li>
							<div class="slider-info">
								<h3>Consectetur adipiscing elit</h3>
								<p>Quisque nisl risus, egestas in convallis vitae, fringilla cursus magna</p>
								<div class="more-button">
									<a href="single.html">Read More	</a>
								</div>
							</div>
						</li> -->
						<!-- <li>
							<div class="slider-info">
								<h3>Proin eget consequat ante	</h3>
								<p> Suspendisse bibendum dictum metus, at finibus elit dignissim nec	</p>
								<div class="more-button">
									<a href="single.html">Click Here	</a>
								</div>
							</div>
						</li> -->
					</ul>
				</div>
			</div>
	</div>


	<?php
  include('connection.php');
      $query ="SELECT * FROM `slider`";
      $result = mysqli_query($conn, $query);      
  ?>
  <div id="carouselExampleDark" class="carousel carousel-dark slide slider-none">
    <div class="carousel-indicators">
    <?php
      
    $i=1;
    $j=0;
      // Display the images
      foreach($result as $res){       
      
   if($i==1){ ?>
<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?php echo $j; ?>" 
      class="active" aria-current="true" aria-label="Slide <?php echo $i; ?>"></button>
   <?php 
   }
else{


        ?>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?php echo $j; ?>" 
       aria-label="Slide <?php echo $i; ?>"></button>
      <!-- <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
      <?php 
      }
  $i++;
  $j++;

  }
     ?>
    </div>
    
    <div class="carousel-inner">
      <?php
      
    
    // Display the images
    foreach($result as $res){
        
    
 
      ?>
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="<?php echo $res['filepath'];?>" class="d-block w-100" alt="...">
      </div>
    <?php 
  } ?>
     
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- End Hero Section -->