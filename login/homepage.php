<!DOCTYPE html>
<html>
<head>
	<title>Plane Ticket Booking System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-lZE0o6DBHPIaKvNHQ2Pn2J0ZHpOftc6Uv3XUWxg3RPJq2Iy0UvLIJi5gTxO1rZiw" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>
<style>
    #hero {
  background: url("hero-img.png") center center/cover no-repeat fixed;
  height: 100vh;
}
</style>
<body>

  <!--NavBar-->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		<div class="container">
			<a href="#" class="navbar-brand"><img src="Airpotlogo1.JPG" id="logo"> Kenya Airways</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
        		<span class="navbar-toggler-icon"></span>
      		</button>

			<div class="collapse navbar-collapse" id="navbar">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active"><a class="nav-link" href="#"><strong>Home</strong></a></li>
					<li class="nav-item"><a class="nav-link" href="Kenya Airways-About.php"><strong>About</strong></a></li>
					<li class="nav-item"><a class="nav-link" href="Kenya Airways-Contacts.php"><strong>Contacts</strong></a></li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a class="nav-link" href="signup.php"><strong>Sign up </strong><i class="fas fa-user-plus"></i></a></li>
					<li class="nav-item"><a class="nav-link" href="login.php"><strong>Login </strong><i class="fas fa-user"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="Admin.php"><strong>Admin </strong><i class="fas fa-user-plus"></i></a></li>
				</ul>
			</div>
		</div>
	</nav>
  <!--NavBar End-->

  <!--Hero Section-->
  <section id="hero" style="background-image: url('hero-img.png');">
  <section>
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-6">
        <h1>Your Travel Made Easy</h1>
        <p class="lead">Find the best deals on flights and book your tickets hassle-free with our easy-to-use booking system.</p>
        <a href="login.php" class="btn btn-primary btn-lg">Book Now</a>
      </div>
      <div class="col-md-6">
        <!-- Empty column -->
      </div>
    </div>
  </div>
</section>
  <!--Hero Section End-->

  <!--Tabs Section-->
<section id="featured-destinations">
  <div class="container">
    <h2>Featured Destinations</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="destination1.jpg" class="card-img-top" alt="Destination 1">
          <div class="card-body">
            <h5 class="card-title">New York</h5>
            <p class="card-text">Experience the hustle and bustle of the Big Apple with Kenya Airways.</p>
            <a href="login.php" class="btn btn-primary btn-lg">Book Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="destination2.jpg" class="card-img-top" alt="Destination 2">
          <div class="card-body">
            <h5 class="card-title">Tokyo</h5>
            <p class="card-text">Explore the vibrant culture and cuisine of Tokyo with Kenya Airways.</p>
            <a href="login.php" class="btn btn-primary btn-lg">Book Now</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img src="destination3.jpg" class="card-img-top" alt="Destination 3">
          <div class="card-body">
            <h5 class="card-title">Cape Town</h5>
            <p class="card-text">Relax and soak up the sun in beautiful Cape Town with Kenya Airways.</p>
            <a href="login.php" class="btn btn-primary btn-lg">Book Now</a>
          </div>
          </div>
      </div>
      <div class="col-md-4">
         <div class="card">
            <img src="destination4.jpg" class="card-img-top" alt="Destination 3">
            <div class="card-body">
                <h5 class="card-title">Nairobi</h5>
                <p class="card-text">Relax and soak up the sun in beautiful Nairobi with Kenya Airways.</p>
                <a href="login.php" class="btn btn-primary btn-lg">Book Now</a>
                </div>
          </div>
      </div>
      <div class="col-md-4">
         <div class="card">
            <img src="destination5.jpg" class="card-img-top" alt="Destination 3">
            <div class="card-body">
                <h5 class="card-title">Mombassa</h5>
                <p class="card-text">Relax and soak up the sun in beautiful Mombassa with Kenya Airways.</p>
                <a href="login.php" class="btn btn-primary btn-lg">Book Now</a>
                </div>
          </div>
      </div>
      <div class="col-md-4">
         <div class="card">
            <img src="destination6.jpg" class="card-img-top" alt="Destination 3">
            <div class="card-body">
                <h5 class="card-title">Kisumu</h5>
                <p class="card-text">Relax and soak up the sun in beautiful Kisumu with Kenya Airways.</p>
                <a href="login.php" class="btn btn-primary btn-lg">Book Now</a>
                </div>
          </div>
      </div>
    </div>
            
            
        
</section>
<!--Call to Action Section-->
<section id="call-to-action">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-8 text-center">
        <h2>Get exclusive deals and discounts!</h2>
        <p>Subscribe to our newsletter to receive updates on our latest promotions and offers.</p>
      </div>
      <div class="col-md-4">
        <form class="form-inline">
          <div class="form-group">
            <input type="email" class="form-control mr-2" placeholder="Enter your email">
            <button type="submit" class="btn btn-primary">Subscribe</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<section id="testimonials">
  <div class="container">
    <h2>What Our Customers Say</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="testimonial">
          <p>"I couldn't believe how easy it was to book my ticket with Kenya Airways. The process was smooth and hassle-free!"</p>
          <cite>- John Doe, Nairobi</cite>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial">
          <p>"I've been using Kenya Airways for years now and they never disappoint. Their customer service is top-notch!"</p>
          <cite>- Jane Smith, London</cite>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial">
          <p>"Thanks to Kenya Airways, I was able to find the cheapest flight for my budget. I highly recommend them to anyone looking to travel."</p>
          <cite>- Michael Johnson, Dubai</cite>
        </div>
      </div>
    </div>
  </div>
</section>
</section>

<!--Call to Action Section End-->
		
