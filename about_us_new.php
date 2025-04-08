<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us page </title>
    <!-- bootstrap CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- css link -->
     <link rel="stylesheet" href="style.css">

     <!-- style not redable and i do in index.php -->


      <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    
     <style>
 /* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    text-align: center;
}

/* Scrollable Banner */
.scroll-container {
    width: 100vw;
    overflow: hidden;
    white-space: nowrap;
    background: #f8f9fa;
    padding: 15px 0;
}
.scroll-content {
    display: inline-block;
    white-space: nowrap;
    animation: scrollRight 15s linear infinite;
}
/* Container Layouts */
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    gap: 50px;
    padding: 20px;
}

/* Buttons */
.btn {
    padding: 8px 15px;
    border: 2px solid #ff9800;
    cursor: pointer;
    font-size: 14px;
    border-radius: 5px;
    background-color: white;
    color: #ff9800;
    transition: 0.3s;
}
.btn:hover {
    background-color: #ff9800;
    color: white;
}

/* profile pages */
.profiles-container {
  display: flex;
  flex-wrap: wrap; 
  gap: 20px; 
  justify-content: center;
  padding: 20px;
}

/* Individual Profile Card */
.profile {
  width: 370px; 
  height: auto; 
  background-color: #fff;
  border-radius: 4px;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 16px;
  box-sizing: border-box;
  position: relative;
}

/* Image Styling */
.image {
  width: 236px;
  height: 391px;
  background-size: cover;
  background-position: center;
  border-radius: 4px;
  margin-bottom: 16px;
}

/* Text & Info Styling */
.info {
  text-align: center;
  display: flex;
  flex-direction: column;
  align-items: center;
}

.name {
  font-family: 'Inter', sans-serif;
  font-weight: 500;
  font-size: 32px;
  color: #000;
  margin: 0;
}

.title {
  font-size: 16px;
  color: #000;
  margin-top: 8px;
}

/* Social Media Icons */
.social-media {
  display: flex;
  gap: 10px;
  margin-top: 16px;
}

.social-icon {
  width: 24px;
  height: 24px;
  border-radius: 50%;
  background-color: #000;
}

.social-icon.twitter {
  background-image: url('twitter-icon.png');
  background-size: contain;
  background-repeat: no-repeat;
}

.social-icon.instagram {
  background-image: url('instagram-icon.png');
  background-size: contain;
  background-repeat: no-repeat;
}

.social-icon.linkedin {
  background-image: url('linkedin-icon.png');
  background-size: contain;
  background-repeat: no-repeat;
}

/* Responsivenes */
@media (max-width: 768px) {
    .profiles-container {
        flex-direction: column;
        align-items: center; 
        gap: 15px; 
    }

    .profile {
        width: 90%; 
        max-width: 350px;
        padding: 12px; 
    }

    .image {
        width: 90%; 
        max-width: 220px; 
        height: auto; 
    }

    .name {
        font-size: 28px; 
    }

    .title {
        font-size: 14px; 
    }

    .social-media {
        gap: 8px; 
    }

    .social-icon {
        width: 22px; 
        height: 22px;
    }
}



/* profile pages */

/* footer btn */
.buttonforfooter {
    display: flex;
    justify-content: center; 
    margin-top: 10px;
}

/* Subscribe Button */
.btn-footer {
    width: 500px; 
    height: 45px; 
    display: flex;
    align-items: center; 
    justify-content: center; 
    font-size: 20px;
    background-color: white; 
    color: #ff9800; 
    border: 2px solid #ff9800; 
    border-radius: 8px; 
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
}

/* Hover Effect */
.btn-footer:hover {
    background-color: #ff9800; 
    color: white; 
}

/* Responsive Footer */
@media (max-width: 768px) {
    .footer .row {
        flex-direction: column;
        text-align: center;
    }

    .footer .form-row {
        flex-direction: column;
    }


    .btn-footer {
        width: 100%; 
        max-width: 300px;
        height: 50px;
        font-size: 18px; 
    }
}
/* footer btn-end*/

/* service card */
     
.service-card .icon img {
          position: flex;
          justify-content: center;
          align-items: center;
    width: 50%; 
    height: auto; 
    max-width: 100px; 
    margin-bottom: 5px; 
}

.container{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 80px;
}

div.icon{
  display: flex;
    justify-content: center;
    align-items: center;
}


.form-row {

gap: 5px; /* Adjust spacing between input and button */

    justify-content: center;
    align-items: center;
    text: center;
}
/* service card end*/




    </style>

</head>
<body>

<!-- navbar -->
<div class="container-fluid">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg bg-pink
    ">
  <div class="container-fluid p-0">
    <img src="./images/logo.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index2.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./registration.php">Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="./aboutus.php">About Us</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#"> <i class="fa-solid fa-cart-shopping"></i></i><sup>1</sup></a>
        </li>

        <li class="nav-flex">
          <a class="nav-link" href="#">Total Price:100/-</a>
        </li>
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-white">
<ul class="navbar-nav me-auto">
        <li class="nav-item">
        <a class="nav-link text-black" href="./registration.php">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-black" href="./registration.php">Login</a>
        </li>

</ul>
 </nav>
</div>
</div>

<!-- important section for every page  -->

 <!-- thirt child -->
  <div class="bg-white">
<h3 class="text-center"></h3>
<p class="text-center"></p>
  </div>
</div>


<div class="about-container">
        <h2>About Us</h2>
        <br><br><br>
        <p>Welcome to My Store, your go-to destination for a seamless and enriching shopping experience! We are an innovative e-commerce platform dedicated to making online shopping easy, enjoyable, and accessible for customers while helping businesses grow in the digital world.</p>
<br>
At My Store, we believe that shopping should be more than just a transaction. It should be a personalized journey that allows customers to discover, explore, and buy the products and services they love, all from the comfort of their own homes. Whether you’re looking for the latest fashion trends, cutting-edge electronics, everyday essentials, or unique handmade goods, we have something for everyone.
<br><br><br>
<strong>For Our Customers we offer:</strong>
<br><br>
<strong>Diverse Products</strong>
<p>From fashion and electronics to everyday essentials and unique handmade goods.</p>
<strong>Seamless Shopping</strong>
<p>An intuitive, user-friendly platform with easy browsing and secure payments.</p>
<strong>Reliable Shipping</strong>
<p>Fast delivery with tracking options.</p>
<strong>Dedicated Support</strong>
<p>Our customer service team is always ready to help.</p>
<br><br><br>

<strong>For Our Businesses</strong> 
<strong>We provide tools to help businesses succeed, including:</strong> 
<br><br>
<strong>Easy Product Management </strong> 
<p>Quick product listing and inventory tracking.</p>
<strong>Customer & Order Management</strong> 
<p>Streamlined processes for better customer relationships.</p>
<strong>Marketing & Insights</strong> 
<p>Promotions, analytics, and targeted advertising.</p>
<strong>Dedicated Business Support</strong> 
<p>Helping businesses thrive in the online marketplace.</p>
<br><br><br>

<strong>Our Vision & Values</strong>
<p>We strive to build a dynamic, sustainable shopping ecosystem based on integrity, innovation, customer focus, collaboration, and sustainability.</p>
<br>
<strong>Join Us Today!</strong> 
<p>Discover great deals or grow your business with My Store. We’re here to make shopping and selling better for everyone.</p>
<br><br><br><br><br>
<strong>Thank you for choosing My Store—we look forward to serving you!</strong> 
<br><br>
    </div>



<br><br>

    <div class="Shop-owners">
        <h2 class="new-arrivals-title">Created by</h2>

        <br><br>
    <div class="profiles-container">
    <!-- Profile 1 -->
    <div class="profile">
      <div class="image" style="background-image: url(bannerforus/team/tom.png);"></div>
      <div class="info">
        <h2 class="name">Tom Cruise</h2>
        <p class="title">Founder & Chairman</p>
        <div class="social-media">
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-facebook"></i>
        </div>
      </div>
    </div>

    <!-- Profile 2 -->
    <div class="profile">
      <div class="image" style="background-image: url('bannerforus/team/emma.png');"></div>
      <div class="info">
        <h2 class="name">Emma Watson</h2>
        <p class="title">Managing Director</p>
        <div class="social-media">
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-facebook"></i>
        </div>
      </div>
    </div>

    <!-- Profile 3 -->
    <div class="profile">
      <div class="image" style="background-image: url('bannerforus/team/will.png');"></div>
      <div class="info">
        <h2 class="name">Will Smith</h2>
        <p class="title">Product Designer</p>
        <div class="social-media">
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-facebook"></i>
        </div>
      </div>
    </div>
  </div>
  <br><br><br><br><br>







 <div class="container">
    <!-- FREE AND FAST DELIVERY -->
    <div class="service-card">
        <div class="icon">
            <img src="bannerforus/delivery.png" alt="Delivery">
        </div>
        <h3>FREE AND FAST DELIVERY</h3>
        <p>Free delivery for all orders over £140</p>
    </div>

    <!-- 24/7 CUSTOMER SERVICE -->
    <div class="service-card">
        <div class="icon">
            <img src="bannerforus/customerservice.png" alt="Customer Service">
        </div>
        <h3>24/7 CUSTOMER SERVICE</h3>
        <p>Friendly 24/7 customer support</p>
    </div>

    <!-- MONEY BACK GUARANTEE -->
    <div class="service-card">
        <div class="icon">
            <img src="bannerforus/moneyback.png" alt="Money Back">
        </div>
        <h3>MONEY BACK GUARANTEE</h3>
        <p>We return money within 30 days</p>
    </div>
</div>
</div>
</div>


<br><br><br>











 <!-- start #footer -->
 <footer id="footer" class="bg-dark text-white py-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-12">
                <h4 class="font-rubik font-size-20">MY STORE</h4>
                <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, deserunt.</p>
              </div>
              <div class="col-lg-4 col-12">
                <h4 class="font-rubik font-size-20">Newslatter</h4>
                <form class="form-row">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="Email *">
                  </div>
                  <div class="buttonforfooter">
                    <button type="submit" class="btn btn-footer mb-2">Subscribe</button>
                  </div>
                </form>
              </div>
              <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Information</h4>
                <div class="d-flex flex-column flex-wrap">
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
                </div>
              </div>
              <div class="col-lg-2 col-12">
                <h4 class="font-rubik font-size-20">Account</h4>
                <div class="d-flex flex-column flex-wrap">
                  <a href="./registration.php" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Wish List</a>
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Newslatters</a>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <div class="copyright text-center bg-dark text-white py-2">
          <p class="font-rale font-size-14">&copy; Designed by <a href="#" class="color-second">christina</a></p>
        </div>
 

   <!-- end #footer -->


 <!-- bootstrap js link -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- !Owl-carousel -->

   <!-- jQuery -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

   <!-- Owl Carousel JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

   <script>
       $(document).ready(function(){
           $(".owl-carousel").owlCarousel({
               loop: true,
               margin: 10,
               nav: true,
               autoplay: true,
               autoplayTimeout: 3000, 
               autoplayHoverPause: true,
               responsive: {
                   0: { items: 1 },
                   600: { items: 1 },
                   1000: { items: 1 }
               }
           });
       });
   </script>
<!-- this was for product cards -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
