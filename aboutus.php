<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
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

body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
    /* Full-width scrolling container */
    .scroll-container {
            width: 100vw; /* Full screen width */
            overflow: hidden;
            white-space: nowrap;
            background: #f8f9fa;
            padding: 15px 0;
            position: relative;
        }

        /* Scrolling content */
        .scroll-content {
            display: inline-block;
            white-space: nowrap;
            animation: scrollRight 15s linear infinite;
        }
    


        /* Scroll Animation */
        @keyframes scrollRight {
            from {
                transform: translateX(100%);
            }
            to {
                transform: translateX(-100%);
            }
        }
 
        .about-text {
            max-width: 700px;
        }
        h2 {
            color: #ff9800;
            font-weight: bold;
        }

       
.container{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 80px;
}

.form-row {

    gap: 5px; /* Adjust spacing between input and button */
}

.btn {
            display: block;
            width: 100%;
            padding: 8px;
            margin: 5px 0;
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
       

        .service-card .icon img {
    width: 50%; /* Adjust this value to your preferred size */
    height: auto; /* Maintain aspect ratio */
    max-width: 100px; /* Optionally, you can limit the maximum width */
    margin-bottom: 10px; /* Add spacing between image and text */
}


/* profile */

.profiles-container {
  display: flex;
  gap: 30px;
  justify-content: center;
  padding: 20px;
}

.profile {
  width: 370px;
  height: 564px;
  background-color: #fff;
  border-radius: 4px;
  display: flex;
  flex-direction: column;
  align-items: center;
  padding: 16px;
  box-sizing: border-box;
  position: relative;
}

/* Image Styles */
.image {
  width: 236px;
  height: 391px;
  background-size: cover;
  background-position: center;
  border-radius: 4px;
  margin-bottom: 16px;
}

/* Text & Info Styles */
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
/* profile */
     

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
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
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



<div class="about-container">
        <h2>About Us</h2>
        <p>Welcome to My Store, your one-stop destination for a seamless and enriching shopping experience! We are an innovative e-commerce platform dedicated to providing businesses and customers with the ultimate convenience in the world of online shopping. Our mission is simple: to make shopping easy, enjoyable, and accessible, while offering businesses the tools they need to grow and thrive in the digital age.
<br><br>
At My Store, we believe that shopping should be more than just a transaction. It should be a personalized journey that allows customers to discover, explore, and buy the products and services they love, all from the comfort of their own homes. Whether you’re looking for the latest fashion trends, cutting-edge electronics, everyday essentials, or unique handmade goods, we have something for everyone.
<br><br><br>
<strong>For Our Customers:</strong>
We understand that the key to a successful shopping experience lies in convenience, reliability, and variety. That’s why we’ve built a platform that is user-friendly, fast, and secure. Here’s what you can expect when you shop with us:
<br><br>
<strong>Wide Selection of Products:</strong> We bring together products from a diverse range of categories, ensuring that you’ll always find exactly what you need. From trendy apparel and accessories to high-quality gadgets and home decor, we’ve got it all.
<br>
<strong>Seamless Shopping Experience: </strong>Our platform is designed to be intuitive and easy to navigate. With just a few clicks, you can browse through our extensive catalog, compare prices, and read customer reviews to make informed purchasing decisions.
<br>
<strong>Secure Payments: </strong>Your privacy and security are our top priority. We offer a variety of secure payment methods, including credit cards, PayPal, and other trusted gateways, ensuring your transactions are always safe.
<br>
<strong>Fast and Reliable Shipping:</strong> Once you’ve made your purchase, you can rest assured knowing that our fast and reliable shipping partners will handle your order with care. We provide tracking options, so you’ll always know where your order is.
<br>
<strong>Customer Support:</strong> Our dedicated customer support team is always here to assist you. Whether you need help with an order, have a product inquiry, or simply want to provide feedback, we’re just a message away.
<br>
<strong>For Our Businesses:</strong>
At My Store, we are equally passionate about supporting businesses of all sizes to succeed in the online marketplace. We provide a comprehensive suite of tools to help businesses manage and grow their operations, all while offering exceptional service to their customers:
<br>
<strong>Easy Product Listing and Management:</strong> With our easy-to-use platform, businesses can quickly list their products, manage inventory, and track sales with just a few clicks.
<br>
<strong>Order and Customer Management:</strong> Our advanced dashboard allows businesses to keep track of orders, customer interactions, and provide personalized support, helping to build strong customer relationships.
<br>
<strong>Marketing and Promotion Tools: </strong> We offer a variety of marketing tools to help businesses promote their products, including special offers, discounts, and targeted advertising. This enables businesses to reach more customers and increase sales.
<br>
<strong>Analytics and Insights:</strong> Our platform provides in-depth analytics to track sales trends, customer behavior, and inventory performance, allowing businesses to make data-driven decisions and optimize their strategies.
<br>
<strong>Dedicated Support:</strong> Our support team is committed to helping businesses succeed. We provide assistance with everything from onboarding to troubleshooting, ensuring your experience with us is always smooth.
<br>
<strong>Our Vision:</strong>
At My Store, we strive to be more than just another online marketplace. We are committed to creating a space where businesses and customers can connect, discover, and grow together. Our goal is to build a sustainable and dynamic ecosystem that encourages innovation, supports local businesses, and delivers the best shopping experience to our customers.
<br><br><br>
Our Values:
Integrity: We operate with transparency and honesty, ensuring that every interaction with our platform is built on trust.
Innovation: We are constantly improving and evolving our platform to meet the ever-changing needs of our customers and businesses.
Customer-Centricity: Our customers are at the heart of everything we do, and we strive to provide them with an exceptional shopping experience.
Collaboration: We believe in the power of partnerships, working hand in hand with businesses to help them succeed in the digital marketplace.
Sustainability: We are committed to supporting sustainable business practices and offering eco-friendly products to our customers.
Join Us Today!
Whether you're a customer looking for the best deals or a business seeking to expand your reach, [Your Store Name] is here to help you make it happen. We invite you to explore our platform, browse our extensive product range, and experience the convenience of shopping at its finest. If you're a business owner, we welcome you to join our growing community and take your business to new heights.
<br><br><br>
Thank you for choosing My Store. We look forward to serving you!</p>
    </div>





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
                  <div class="col">
                    <button type="submit" class="btn btn-primary mb-2">Subscribe</button>
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
                  <a href="#" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
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