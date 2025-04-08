# Kristina
new file code explaining 

Index page:

<?php
include('includes/connect.php');
include('functions/common_function.php');

?>

This script ensures that:
	•	The database connection is established (from connect.php). 
	•	Common functions are available (from common_function.php).

STYLE.CSS
/* General Styles */
body {
   font-family: Arial, sans-serif;
   margin: 0;
   padding: 0;
   text-align: center;
}


General PAGE STYLE

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
@keyframes scrollRight {
   from { transform: translateX(100%); }
   to { transform: translateX(-100%); }
}

Scrollable Banner STYLE 

/* Container Layouts */
.container {
   display: flex;
   justify-content: center;
   align-items: center;
   flex-wrap: wrap;
   gap: 50px;
   padding: 20px;
}


Container Layouts STYLE
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
 
Button OF PRODUCT STYLE

/* Testimonials Section */
.testimonials-container {
   text-align: center;
   background-color: rgba(232, 255, 226, 0.76);
   padding: 30px;
}
.reviews-container {
   display: flex;
   justify-content: center;
   flex-wrap: wrap;
   gap: 30px;
}
.review-card {
   width: 250px;
   padding: 20px;
   border-radius: 8px;
   background: white;
   box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
}

Testimonials Section STYLE 

/* Product Section */
.new-arrivals-container {
   display: flex;
   justify-content: center;
   flex-wrap: wrap;
   gap: 30px;
}
.product-card {
   width: 220px;
   border-radius: 8px;
   background-color: white;
   box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
   padding: 15px;
   text-align: center;
}
.product-card img {
   width: 100px;
   height: 100px;
   object-fit: cover;
}

Product Section STYLE


/* Categories Section */
.categories-container {
   display: flex;
   flex-wrap: wrap;
   justify-content: center;
   gap: 20px;
}
.category-box {
   background-color: #f5f5f5;
   padding: 20px 30px;
   font-size: 18px;
   text-transform: uppercase;
   border-radius: 6px;
   cursor: pointer;
   transition: 0.3s;
}
.category-box:hover {
   background-color: black;
   color: white;
   transform: scale(1.05);
}


Categories Section STYLE


/* Sidebar Layout */
.sidebar-fixed {
   min-height: 100vh;
   border-right: 2px solid #ddd;
   padding: 0;
}

Sidebar Layout STYLE

/* Responsive Design */
@media (max-width: 768px) {
   .profiles-container, .reviews-container, .categories-container {
       flex-direction: column;
       align-items: center;
   }
   .profile, .review-card, .product-card, .category-box {
       width: 90%;
   }
   .col-md-2 { display: none; }
}
@media (max-width: 480px) {
   .category-box { padding: 15px; }
   .btn { font-size: 12px; }
}


Responsive Design (Mobile View) STYLE

/* Oval Button Style */
.oval-button {
   display: flex;
   justify-content: center;
   align-items: center;
   width: 190px;
   height: 55px;
   border: 2px solid black;
   border-radius:140px;
   background-color: transparent;
   color: black;
   font-size: 16px;
   font-weight: bold;
   text-decoration: none;
   transition: 0.3s ease-in-out;
}

/* Hover Effect */
.oval-button:hover {
   background-color:rgb(0, 46, 96);
   color: white;
   transform: scale(1.1);
}


Oval Button STYLE

/* Hover Effect */
.oval-button:hover {
   background-color:rgb(0, 46, 96);
   color: white;
   transform: scale(1.1);
}

HOVER EFFECT FOR OVAL BUTTON 

.testimonials-container {
       text-align: center;
       background-color:  rgba(232, 255, 226, 0.76);
       padding: 30px;
       border-radius: 0px;
       color: black;
   }


.testimonials-title {
       font-size: 2em;
       font-weight: bold;
   }

   .testimonials-subtitle {
       font-size: 1.2em;
   }

.reviews-container {
       display: flex;
       justify-content: center;
       gap: 50px;
       flex-wrap: wrap;
       margin-top: 20px;
   }

Testimonials Section STYLE 
.review-card {
       width: 290px;
       height: 350px;

       padding: 35px;
       border: 1px solid #ddd;
       border-radius: 8px;
       text-align: center;
       box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
       background: white;
       color: black;
   }

   .image {
       width: 80px;
       height: 80px;
       background-size: cover;
       background-position: center;
       border-radius: 50%;
       margin: 0 auto 10px;
   }

   .name {
       font-size: 1.2em;
       margin-bottom: 5px;
   }

   .comment {
       font-style: italic;
       margin-bottom: 10px;
   }

   .rating {
       font-size: 1.5em;
   }


Review Cards STYLE
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


Service Card STYLE
.form-row {

gap: 5px;

   justify-content: center;
   align-items: center;
   text: center;
}


STYLE form rows
/* footer */
.buttonforfooter {
   display: flex;
   justify-content: center;
   margin-top: 10px;
}

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

.btn-footer:hover {
   background-color: #ff9800;
   color: white;
}


Footer Section STYLE
@media (max-width: 768px) {
   .footer .row {
       flex-direction: column;
       text-align: center;
   }

   .footer .form-row {
       flex-direction: column;
   }

   /* Responsive Subscribe Button */
   .btn-footer {
       width: 100%;
       max-width: 300px;
       height: 50px;
       font-size: 18px;
   }
}
 
Responsiveness 
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>HOME</title>

HTML Metadata & Title
<!-- bootstrap CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

Bootstrap CSS for Styling
<!-- font awesome link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

Font Awesome for Icons
 <!-- css link -->
    <link rel="stylesheet" href="style.css">

CSS link
<!-- Owl Carousel CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


Owl Carousel CSS
<!-- Include Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


<!-- Include jQuery and Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Initialize Owl Carousel -->
<script>
   $(document).ready(function(){
       $(".owl-carousel").owlCarousel({
           items: 1,
           loop: true,
           autoplay: true,
           autoplayTimeout: 500,
           autoplayHoverPause: false,
           animateOut: "fadeOut",
           dots: false,
           nav: false
       });
   });
</script>

Owl Carousel Working code

<!-- navbar -->
<div class="container-fluid">

Navbar Container
 <nav class="navbar navbar-expand-lg bg-pink
   ">

Navbar Component
 <div class="container-fluid p-0">
   <img src="./images/logo.png" alt="" class="logo">

Navbar Content
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
  </button>

Responsive Navbar Toggle Button
<div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav me-auto mb-2 mb-lg-0">

Collapsible Menu (Links Section)
<li class="nav-item">
         <a class="nav-link active" aria-current="page" href="./index2.php">Home</a>
       </li>

 <li class="nav-item">
         <a class="nav-link" href="./registration.php">Register</a>
       </li>

       <li class="nav-item">
         <a class="nav-link" href="./aboutus.php">About Us</a>
       </li>
      

Navigation Links
<li class="nav-item">
         <a class="nav-link" href="#"> <i class="fa-solid fa-cart-shopping"></i></i><sup>1</sup></a>
       </li>

Shopping Cart Icon
 <li class="nav-flex">
         <a class="nav-link" href="#">Total Price:100/-</a>
       </li>
     </ul>


Total Price Display
  <form class="d-flex" role="search">
       <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
       <button class="btn btn-outline-success" type="submit">Search</button>
     </form>
   </div>
 </div>
</nav>

Search Bar


<nav class="navbar navbar-expand-lg navbar-dark bg-white">

Second Child - Additional Navbar
<ul class="navbar-nav me-auto">

Navigation Links
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



Guest & Registration Links





<!-- thirt child -->
 <div class="bg-white">

Third Child - Store Information
<h3 class="text-center">MY STORE</h3>

Store Title
<p class="text-center">Comunication is at the heart of e-commerce and community</p>
 </div>
</div>

Store Slogan
<!-- baners own carusel  -->
<section id="banner-area">

Section: Banner Area
<div class="owl-carousel owl-theme">

 Owl Carousel Setup




<div class="item">
               <img src="baners/baner1.png" alt="Banner1">
           </div>

         <div class="item">
               <img src="baners/banner2.png" alt="Banner2">
           </div>
           <div class="item">
               <img src="baners/baner3.png" alt="Banner3">
           </div>
       </div>
   </section>

<!-- baners own carusel end  -->

Banner Items (Slides)

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

Example Script (Add at the Bottom of index.php or a JS file)




<div class="container-fluid">
   <div class="row">

Main Layout (Bootstrap Grid)
<div class="col-md-2 bg-secondary p-3 sidebar-fixed">

Sidebar (Categories & Brands)
 <!-- Brands Section -->
           <ul class="navbar-nav text-center">
               <li class="nav-item bg-dark p-2">
                   <a href="#" class="nav-link text-white"><h4>Delivery Brands</h4></a>
               </li>
               <?php getbrands(); ?> <!-- Fetch brands -->
           </ul>

Brands Section
	•	Creates a Bootstrap-styled list (<ul>) for brands. 
	•	The first <li> item → Contains a title ("Delivery Brands"). 
	•	getbrands(); → This is a PHP function that fetches brand names from a database. 
How getbrands(); Works (PHP)
	•	This function is likely inside a separate PHP file (e.g., functions.php). 
	•	It queries a database for brand names and dynamically inserts them here. 
Example PHP function:   php CopyEdit function getbrands() {
    global $conn; // Database connection
    $query = "SELECT * FROM brands";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li class='nav-item'><a class='nav-link' href='index.php?brand={$row['brand_id']}'>{$row['brand_name']}</a></li>";
    }
}
This would generate HTML like:
html
CopyEdit
<li class='nav-item'><a class='nav-link' href='index.php?brand=1'>Nike</a></li>
<li class='nav-item'><a class='nav-link' href='index.php?brand=2'>Adidas</a></li>





<!-- Categories Section -->
           <ul class="navbar-nav text-center mt-3">
               <li class="nav-item bg-dark p-2">
                   <a href="#" class="nav-link text-white"><h4>Categories</h4></a>
               </li>
               <?php getcategories(); ?> <!-- Fetch categories -->
           </ul>
       </div>

Categories Section

Similar to the brands section. 
getcategories(); is a PHP function that retrieves product categories from a database. 
Example PHP function:

function getcategories() {
    global $conn;
    $query = "SELECT * FROM categories";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li class='nav-item'><a class='nav-link' href='index.php?category={$row['category_id']}'>{$row['category_name']}</a></li>";
    }
}

 <!-- Right Product Section -->
       <div class="col-md-10">
           <div class="row justify-content-center">
               <?php getproducts(); ?> <!-- Fetch products -->
           </div>
       </div>

Product Display Section

	•	col-md-10 → This takes up 10 out of 12 columns (main content area). 
	•	row justify-content-center → Bootstrap classes for: 
	•	row → Organizes products in rows. 
	•	justify-content-center → Centers the product items. 
	•	getproducts(); → A PHP function that fetches products dynamically. 
How getproducts(); Works (PHP)
function:   php CopyEdit function getproducts() {
    global $conn;
    $query = "SELECT * FROM products ORDER BY RAND() LIMIT 12";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "
        <div class='col-md-4 mb-3'>
            <div class='card'>
                <img src='images/{$row['product_image']}' class='card-img-top' alt='{$row['product_name']}'>
                <div class='card-body'>
                    <h5 class='card-title'>{$row['product_name']}</h5>
                    <p class='card-text'>Price: £{$row['product_price']}</p>
                    <a href='product.php?id={$row['product_id']}' class='btn btn-primary'>View Product</a>
                </div>
            </div>
        </div>";
    }
}

<!-- Categories Section -->
<section id="categories">
 
Section Wrapper
<h2 class="categories_style">BROWSE BY CATEGORY</h2>

Section Title
<br><br>
   <div class="categories-container">

Categories Container
  <div class="category-box">Women Arrivals</div>
       <div class="category-box">Men Arrivals</div>
       <div class="category-box">Kids Arrivals</div>
       <div class="category-box">Junior Arrivals</div>
       <div class="category-box">Sport Wearing</div>
       <div class="category-box">Home Outfit</div>

Category Boxes




In the same way top-selling section 

<div class="new-arrivals-section">
       <h2 class="new-arrivals-title">NEW ARRIVALS</h2>

Section Container new-arrivals section
 <div class="new-arrivals-container">

Product Grid Container
<div class="product-card">
               <img src="./images/River_Island_Summer_Outerwear_Blazers2.png" alt="Apple">
               <h5 class="card-title">River Island Blazer</h5>
               <div class="stars">⭐⭐⭐⭐☆</div>
               <p class="price">£152</p>
               <p class="card-text">New Blazer, designed for those who appreciate timeless style...</p>
               <a href="#" class="btn my-2">View More</a>
              
           </div>
           <div class="product-card">
               <img src="./images/Accessories_Louis_Vuitton_Structured_Handbags1.png" alt="Apple">
               <h5 class="card-title">Louis Vuitton Handbag</h5>
               <div class="stars">⭐⭐⭐⭐⭐</div>
               <p class="price">£152</p>
               <p class="card-text">Louis Vuitton handbag, handbag showcases....</p>
               <a href="#" class="btn my-2">View More</a>
              
           </div>
           <div class="product-card">
               <img src="./images/River_Island_Summer_Outerwear_Cardigans2.png" alt="Apple">
               <h5 class="card-title">River Island Cardigan</h5>
               <div class="stars">⭐⭐☆☆☆</div>
               <p class="price">£152</p>
               <p class="card-text">New Cardigan Collection, designed to keep... </p>
               <a href="#" class="btn my-2">View More</a>
              
           </div>
           <div class="product-card">
               <img src="./images/River_Island_Summer_Outerwear_Trench_Coats2.png" alt="Apple">
               <h5 class="card-title">River Island Trench</h5>
               <div class="stars">⭐⭐⭐☆☆</div>
               <p class="price">£152</p>
               <p class="card-text">New Trench Coat, a perfect blend of classic design and modern....</p>
               <a href="#" class="btn my-2">View More</a>
              
           </div>
           <div class="product-card">
               <img src="./images/UNIQLO_Bottoms_Dark_Wash_Jeans2.png" alt="Apple">
               <h5 class="card-title">UNIQLO Jeans</h5>
               <div class="stars">⭐⭐☆☆☆</div>
               <p class="price">£152</p>
               <p class="card-text">New Dark Jeans, designed for those who appreciate timeless style...</p>
               <a href="#" class="btn my-2">View More</a>
              
           </div>
           <div class="product-card">
               <img src="./images/River_Island_Summer_Outerwear_Trench_Coats3.png" alt="Apple">
               <h5 class="card-title">River Island Trench</h5>
               <div class="stars">⭐⭐⭐⭐☆</div>
               <p class="price">£152</p>
               <p class="card-text">River Island Trench Coat, a timeless wardrobe staple designed......</p>
               <a href="#" class="btn my-2">View More</a>
              
           </div>
           <div class="product-card">
               <img src="./images/River_Island_Summer_Outerwear_Blazers3.png" alt="Apple">
               <h5 class="card-title">River Island Blazer new</h5>
               <div class="stars">⭐⭐⭐⭐☆</div>
               <p class="price">£152</p>
               <p class="card-text">River Island Blazer, a perfect mix of classic......</p>
               <a href="#" class="btn my-2">View More</a>
              
           </div>
           <div class="product-card">
               <img src="./images/River_Island_Summer_Outerwear_Blazers1.png" alt="Apple">
               <h5 class="card-title">River Island blazer</h5>
               <div class="stars">⭐⭐☆☆☆</div>
               <p class="price">£152</p>
               <p class="card-text">River Island Blazer, designed for a perfect blend of sophistication...</p>
               <a href="#" class="btn my-2">View More</a>
              
           </div>
           <div class="product-card">
               <img src="./images/jacket2.png" alt="Apple">
               <h5 class="card-title">UNIQLO Jacket</h5>
               <div class="stars">⭐⭐☆☆☆</div>
               <p class="price">£152</p>
               <p class="card-text">UNIQLO Jacket, designed for ultimate comfort and versatility.........</p>
               <a href="#" class="btn my-2">View More</a>
              
           </div>
           <div class="product-card">
               <img src="./images/Accessories_Louis_Vuitton_Structured_Handbags3.png" alt="Apple">
               <h5 class="card-title">Louis Vuitton Handbag</h5>
               <div class="stars">⭐⭐☆☆☆</div>
               <p class="price">£600</p>
               <p class="card-text">Louis Vuitton Handbag, a perfect blend of iconic... </p>
               <a href="#" class="btn my-2">View More</a>
              
           </div>
           <div class="product-card">
               <img src="./images/Accessories_Guess_Sunglasses1.png" alt="Apple">
               <h5 class="card-title">Vogue Sunglases</h5>
               <div class="stars">⭐⭐☆☆☆</div>
               <p class="price">£152</p>
               <p class="card-text">Vogue Sunglasses, designed for fashion-forward individuals... </p>
               <a href="#" class="btn my-2">View More</a>
              
</div>
           <div class="product-card">
               <img src="./images/pradabelt.png" alt="Apple">
               <h5 class="card-title">PRADA BELT</h5>
               <div class="stars">⭐⭐☆☆☆</div>
               <p class="price">£80.99</p>
               <p class="card-text">Prada Logo Leather Belt, a statement of sophistication and.... </p>
               <a href="./viewmore.php" class="btn my-2">View More</a>
              
           </div>
       </div>
   </div>
   <br><br>


Product Card Structure
   <div class="button-container">
   <a href="#" class="oval-button ">All Arrivals</a>
</div>



<br><br>

"All Arrivals" Button Section
<div class="testimonials-container">
   <h1 class="testimonials-title">Testimonials</h1>
   <p class="testimonials-subtitle">"Quotes from our happy customers"</p>
Testimonials Section
 <div class="reviews-container">

Customer Reviews
<div class="review-card">
           <div class="image" style="background-image: url('users/th.jpeg');"></div>
           <h2 class="name">John Doe</h2>
           <p class="comment">"Absolutely loved this product! High quality and great service."</p>
           <div class="rating">⭐️⭐️⭐️⭐️☆</div>
       </div>
       <div class="review-card">
           <div class="image" style="background-image: url('users/Profile-Portrait-Photographer-in-Dublin-Ireland..jpg');"></div>
           <h2 class="name">Sarah Johnson</h2>
           <p class="comment">"Good value for the price. Will definitely buy again! Absolutely loved this product!"</p>
           <div class="rating">⭐️⭐️⭐️⭐️⭐️</div>
       </div>
       <div class="review-card">
           <div class="image" style="background-image: url('users/business_headshot_linkedIn_profile-picture_Dublin_Rafael-Photography.jpg');"></div>
           <h2 class="name">Mike Williams</h2>
           <p class="comment">"Decent product, but delivery took longer than expected. Absolutely loved this product!"</p>
           <div class="rating">⭐️⭐️⭐️☆☆</div>
       </div>
   </div>
</div>

 <br><br><br><br><br>
 
Example cards with reviews 
















<div class="container">

Container Wrapper
<div class="service-card">
       <div class="icon">
           <img src="bannerforus/delivery.png" alt="Delivery">
       </div>
       <h3>FREE AND FAST DELIVERY</h3>
       <p>Free delivery for all orders over £140</p>
   </div>

FREE AND FAST DELIVERY
Individual Service Cards
 <div class="service-card">
       <div class="icon">
           <img src="bannerforus/customerservice.png" alt="Customer Service">
       </div>
       <h3>24/7 CUSTOMER SERVICE</h3>
       <p>Friendly 24/7 customer support</p>
   </div>

24/7 CUSTOMER SERVICE

<div class="service-card">
       <div class="icon">
           <img src="bannerforus/moneyback.png" alt="Money Back">
       </div>
       <h3>MONEY BACK GUARANTEE</h3>
       <p>We return money within 30 days</p>
   </div>

MONEY BACK GUARANTEE

<footer id="footer" class="bg-dark text-white py-5">

Footer Container
<div class="col-lg-3 col-12">
               <h4 class="font-rubik font-size-20">MY STORE</h4>
               <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, deserunt.</p>
             </div>

Store Description





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

Newsletter Subscription Form

<div class="col-lg-2 col-12">
               <h4 class="font-rubik font-size-20">Information</h4>
               <div class="d-flex flex-column flex-wrap">
                 <a href="./aboutus.php" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                 <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
                 <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                 <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
               </div>
             </div>

Information Links (About Us, Privacy Policy, etc.)
<div class="col-lg-2 col-12">
               <h4 class="font-rubik font-size-20">Account</h4>
               <div class="d-flex flex-column flex-wrap">
                 <a href="./registration.php" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                 <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
                 <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Wish List</a>
                 <a href="./aboutus.php" class="font-rale font-size-14 text-white-50 pb-1">Newslatters</a>
               </div>

User Account Links (My Account, Order History, etc.)








About us page:


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>HOME</title>

HTML Metadata & Title
<!-- bootstrap CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

Bootstrap CSS for Styling
<!-- font awesome link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

Font Awesome for Icons
 <!-- css link -->
    <link rel="stylesheet" href="style.css">

CSS link
<!-- Owl Carousel CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">



body {
   font-family: Arial, sans-serif;
   margin: 0;
   padding: 0;
   text-align: center;
}


General Style
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

Scrollable Banner

/* Container Layouts */
.container {
   display: flex;
   justify-content: center;
   align-items: center;
   flex-wrap: wrap;
   gap: 50px;
   padding: 20px;
}

Container Layouts
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


Button Styling
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

Profile Page Styling
/* Image Styling */
.image {
 width: 236px;
 height: 391px;
 background-size: cover;
 background-position: center;
 border-radius: 4px;
 margin-bottom: 16px;
}

.info {
 text-align: center;
 display: flex;
 flex-direction: column;
 align-items: center;
}


Profile Image
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


Profile Name & Title
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

Social Media Icons

* Responsivenes */
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


Responsiveness

/* footer btn */
.buttonforfooter {
   display: flex;
   justify-content: center;
   margin-top: 10px;
}

Footer Button & Form


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


Subscribe Button


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

Footer Responsive Design
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


Service cards end












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

Navbar section 

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

Guest & Registration Links

<div class="about-container">

Main Container

<h2>About Us</h2>

Section title

<p>Welcome to My Store, your go-to destination for a seamless and enriching shopping experience! We are an innovative e-commerce platform dedicated to making online shopping easy, enjoyable, and accessible for customers while helping businesses grow in the digital world.</p>
<br>

Introduction pharagraph

<strong>For Our Customers we offer:</strong>

Customer befinds section

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


Key Features for Business

 <div class="Shop-owners">
       <h2 class="new-arrivals-title">Created by</h2>

Main Section Wrapper

<div class="profiles-container">
Profiles container

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



Profile cards


<div class="container">

Container Wrapper
<div class="service-card">
       <div class="icon">
           <img src="bannerforus/delivery.png" alt="Delivery">
       </div>
       <h3>FREE AND FAST DELIVERY</h3>
       <p>Free delivery for all orders over £140</p>
   </div>

FREE AND FAST DELIVERY
Individual Service Cards
 <div class="service-card">
       <div class="icon">
           <img src="bannerforus/customerservice.png" alt="Customer Service">
       </div>
       <h3>24/7 CUSTOMER SERVICE</h3>
       <p>Friendly 24/7 customer support</p>
   </div>

24/7 CUSTOMER SERVICE

<div class="service-card">
       <div class="icon">
           <img src="bannerforus/moneyback.png" alt="Money Back">
       </div>
       <h3>MONEY BACK GUARANTEE</h3>
       <p>We return money within 30 days</p>
   </div>

MONEY BACK GUARANTEE

<footer id="footer" class="bg-dark text-white py-5">

Footer Container
<div class="col-lg-3 col-12">
               <h4 class="font-rubik font-size-20">MY STORE</h4>
               <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, deserunt.</p>
             </div>

Store Description





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

Newsletter Subscription Form

<div class="col-lg-2 col-12">
               <h4 class="font-rubik font-size-20">Information</h4>
               <div class="d-flex flex-column flex-wrap">
                 <a href="./aboutus.php" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                 <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>
                 <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                 <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
               </div>
             </div>

Information Links (About Us, Privacy Policy, etc.)
<div class="col-lg-2 col-12">
               <h4 class="font-rubik font-size-20">Account</h4>
               <div class="d-flex flex-column flex-wrap">
                 <a href="./registration.php" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                 <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>
                 <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Wish List</a>
                 <a href="./aboutus.php" class="font-rale font-size-14 text-white-50 pb-1">Newslatters</a>
               </div>

User Account Links (My Account, Order History, etc.)

Registration Page:

<!DOCTYPE html>
<html lang="en">


<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>
   <link rel="stylesheet" href="styles.css">
</head>

Basic HTML Structure

Style in page 

<style>
* {
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   font-family: 'Arial', sans-serif;
}

Global Reset & Styling

body {
   display: flex;
   justify-content: center;
   align-items: center;
   height: 100vh;
   background-color: #f4f4f4;
}

Centering the Content

/* Main container */
.container {
   display: flex;
   width: 90%;
   max-width: 1200px;
   height: 80vh;
   background: white;
}

Page Layout

.image-section {
   flex: 1;
   display: flex;
   justify-content: center;
   align-items: center;
}

.image-section img {
   width: 100%;
   height: 100%;
   object-fit: cover;
}

Left Side - Image Section

.form-section {
   flex: 1;
   display: flex;
   flex-direction: column;
   justify-content: center;
   padding: 3rem;
}


Right Side - Form Section

.form-section h2 {
   font-size: 3rem;
   margin-bottom: 20px;
   color: #333;
}

Form Heading

.form-section input {
   width: 100%;
   padding: 15px;
   margin: 10px 0;
   border: 1px solid #ccc;
   border-radius: 5px;
   font-size: 18px;
}


Input Fields

.register-btn {
   width: 100%;
   padding: 15px;
   margin-top: 10px;
   background-color: red;
   border: none;
   color: white;
   font-size: 20px;
   font-weight: bold;
   cursor: pointer;
   border-radius: 5px;
   transition: 0.3s;
}

.register-btn:hover {
   background-color: darkred;
}


Register Button

.google-btn {
   width: 100%;
   padding: 15px;
   margin-top: 10px;
   background-color: white;
   border: 1px solid #ccc;
   color: black;
   font-size: 18px;
   cursor: pointer;
   border-radius: 5px;
   transition: 0.3s;
}

.google-btn:hover {
   background-color: #f1f1f1;
}


Google Sign-Up Button

.login-link {
   margin-top: 15px;
   font-size: 16px;
   color: #555;
}

.login-link a {
   color: red;
   text-decoration: underline;
   font-weight: bold;
}

.login-link a:hover {
   color: darkred;
}

Log In Link

/* Responsiveness*/
@media (max-width: 900px) {
   .container {
       flex-direction: column;
       height: auto;
   }

   .image-section {
       height: 300px;
   }

   .form-section {
       padding: 2rem;
       text-align: center;
   }
}
Responsiveness


   <div class="container">
       <div class="image-section">
           <img src="./images/reg.png" alt="Fashion Image">
       </div>

  
       <div class="form-section">
           <h2>Create an Account</h2>
           <form action="#" method="POST">
               <input type="text" name="name" placeholder="Name" required>
               <input type="email" name="email" placeholder="Email" required>
               <input type="password" name="password" placeholder="Password" required>
               <button type="submit" class="register-btn">Create an Account</button>
               <button type="button" class="google-btn">Sign up with Google</button>
           </form>

Form Functionality
























Login Page:

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>

Basic HTML structure 

<style>* {
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   font-family: 'Arial', sans-serif;
}


Global Reset & Styling

body {
   display: flex;
   justify-content: center;
   align-items: center;
   height: 100vh;
   background-color: #f4f4f4;
}

Centering the Content

.container {
   display: flex;
   width: 90%;
   max-width: 1200px;
   height: 80vh;
   background: white;
}


Page Layout

.image-section {
   flex: 1;
   display: flex;
   justify-content: center;
   align-items: center;
}

.image-section img {
   width: 100%;
   height: 100%;
   object-fit: cover;
}

Left Side - Image Section

.form-section {
   flex: 1;
   display: flex;
   flex-direction: column;
   justify-content: center;
   padding: 3rem;
}

Right Side - Login Form

.form-section h2 {
   font-size: 3rem;
   margin-bottom: 20px;
   color: #333;
}

Login Form Styling

.form-section input {
   width: 100%;
   padding: 12px;
   margin: 10px 0;
   border: 1px solid #ccc;
   border-radius: 5px;
   font-size: 16px;
}

Input Fields

.login-btn {
   padding: 10px 20px;
   background-color: red;
   border: none;
   color: white;
   font-size: 16px;
   font-weight: bold;
   cursor: pointer;
   border-radius: 5px;
   transition: 0.3s;
}

.login-btn:hover {
   background-color: darkred;
}


Login Button

.forgot-password a {
   color: red;
   text-decoration: underline;
   font-size: 16px;
   font-weight: bold;
}

.forgot-password a:hover {
   color: darkred;
}


Forgot Password Link

@media (max-width: 900px) {
   .container {
       flex-direction: column;
       height: auto;
   }

   .image-section {
       height: 300px;
   }

   .form-section {
       padding: 2rem;
       text-align: center;
   }

   .login-container {
       flex-direction: column;
       align-items: center;
   }

   .forgot-password {
       margin-top: 10px;
   }
}</style>

Responsive Design

<div class="container">
       <div class="image-section">
           <img src="./images/reg.png" alt="Fashion Image">
       </div>


       <div class="form-section">
           <h2>Log in to Exclusive</h2>
           <form action="#" method="POST">
               <input type="email" name="email" placeholder="Email" required>
               <input type="password" name="password" placeholder="Password" required>
               <div class="login-container">
                   <button type="submit" class="login-btn">Log In</button>
                   <p class="forgot-password"><a href="#">Forgot Password?</a></p>
               </div>
           </form>
       </div>
   </div>

Form Submission Functionality



Product page introduction:

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>HOME</title>

HTML Metadata & Title
<!-- bootstrap CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

Bootstrap CSS for Styling
<!-- font awesome link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

Font Awesome for Icons
 <!-- css link -->
    <link rel="stylesheet" href="style.css">

CSS link

body {
   font-family: Arial, sans-serif;
   margin: 0;
   padding: 0;
   text-align: center;
}

General Styles


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

Scrollable Banner

.container {
   display: flex;
   justify-content: center;
   align-items: center;
   flex-wrap: wrap;
   gap: 50px;
   padding: 20px;
}


Container Layouts

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



Buttons Style

/* Responsives */
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


Responsive Design (Mobile-Friendly Adjustments)

/* footer */
.buttonforfooter {
   display: flex;
   justify-content: center;
   margin-top: 10px;
}

Footer Styles

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


Centers buttons in the footer

/* Responsive Footer */
@media (max-width: 768px) {
   .footer .row {
       flex-direction: column;
       text-align: center;
   }

   .footer .form-row {
       flex-direction: column;
   }

   /* Responsive Subscribe Button */
   .btn-footer {
       width: 100%;
       max-width: 300px;
       height: 50px;
       font-size: 18px;
   }
}

Responsiveness 

.featured {
   padding: 4rem 2rem;
   background: var(--light-bg);
   text-align: center;
}


.featured .heading {
   font-size: 3.5rem;
   color: var(--black);
   margin-bottom: 3rem;
}

Featured Section (Product Display)


.featured .row {
   display: flex;
   flex-wrap: wrap;
   justify-content: space-between;
   align-items: center;
   gap: 3rem;
   border-radius: 1rem;
   padding: 3rem;
   background: var(--white);
   box-shadow: var(--box-shadow);
}


 
.featured .image-container {
   flex: 1 1 45%;
   text-align: center;
}

.featured .content {
   flex: 1 1 45%;
   text-align: left;
   padding: 2rem;
}

Product Row Styling

.featured .big-image img {
   width: 100%;
   max-width: 450px;
   height: auto;
   object-fit: cover;
   border-radius: 1rem;
   box-shadow: var(--box-shadow);
   transition: transform 0.3s ease-in-out;
}

.featured .big-image img:hover {
   transform: scale(1.05);
}


Product Images styling

.featured .small-image {
   margin-top: 1.5rem;
   display: flex;
   justify-content: center;
   gap: 1rem;
}

Slightly zooms in the image when hovered.

.featured .small-image img {
   width: 80px;
   height: 60px;
   object-fit: cover;
   border-radius: 0.5rem;
   border: var(--border);
   cursor: pointer;
   transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
}

Aligns the small thumbnail images.

.featured .small-image img:hover {
   transform: scale(1.1);
   box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
}

Changes scale and shadow when hovered

<body>

<!-- navbar -->
<div class="container-fluid">

Main Navbar (Navigation Bar)

<!-- first child -->
   <nav class="navbar navbar-expand-lg bg-pink
   ">

Navbar Structure

 <div class="container-fluid p-0">
   <img src="./images/logo.png" alt="" class="logo">

Navbar Content (Logo & Toggle Button)

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>


Navbar Toggle Button (For Mobile Devices)

   <div class="collapse navbar-collapse" id="navbarSupportedContent">

Collapsible Menu

 <ul class="navbar-nav me-auto mb-2 mb-lg-0">

Navigation Links

<li class="nav-item">
         <a class="nav-link active" aria-current="page" href="./index2.php">Home</a>
       </li>

Each menu item

<li class="nav-item">
         <a class="nav-link" href="./registration.php">Register</a>
       </li>

Shopping Cart Icon


       <li class="nav-flex">
         <a class="nav-link" href="#">Total Price:100/-</a>
       </li>
     </ul>

Total Price Display



<form class="d-flex" role="search">
       <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
       <button class="btn btn-outline-success" type="submit">Search</button>
     </form>

Search Bar

<nav class="navbar navbar-expand-lg navbar-dark bg-white">

Second Child - Secondary Navbar

<ul class="navbar-nav me-auto">

Inside the Navbar

<li class="nav-item">
       <a class="nav-link text-black" href="./registration.php">Welcome Guest</a>
       </li>

Nav Item: Welcome Message

<li class="nav-item">
         <a class="nav-link text-black" href="./registration.php">Login</a>
       </li>

 
Nav Item: Login

<!-- thirt child -->
 <div class="bg-white">
<h3 class="text-center"></h3>
<p class="text-center"></p>
 </div>
</div>

Third Child - Empty Section





<!-- featured section starts  -->

<section class="featured" id="featured">

Section Wrapper

<h1 class="heading"> <span>PRADA BELT</span></h1>

Heading

<div class="row">

Product Row

<div class="image-container">

Image Section (Left Side)

 <div class="big-image">
               <img src="./images/Accessories_Prada_Leather_Belts1.png" class="big-image-1" alt="">
           </div>

Big Product Image

<div class="small-image">
               <img src="./images/pradabelt4.png" class="featured-image-1" alt="">
               <img src="./images/pradabelt2.png" class="featured-image-1" alt="">
               <br>
               <img src="./images/pradabelt.png" class="featured-image-1" alt="">
               <br>
               <img src="./images/Accessories_Prada_Leather_Belts1.png" class="featured-image-1" alt="">
           </div>
       </div>

Shows multiple smaller images

<div class="content">

Content Section (Right Side)

  <h3>Prada new arrival belt</h3>
Product Name

<div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="far fa-star"></i>
           </div>

Star Ratings

<p>Elevate your style with the Prada Logo Leather Belt, a statement of sophistication and luxury. Crafted from premium Saffiano leather, this belt offers durability, a refined texture, and a sleek finish. The iconic Prada triangle logo buckle in polished metal adds a touch of exclusivity, making it the perfect accessory for any outfit—formal or casual.</p>

Product Description

<div class="price">£80.99 <span></span></div>

Price

<a href="#" class="btn">add to cart</a>

Add to Cart Button

<!-- start #footer -->
<footer id="footer" class="bg-dark text-white py-5">

Footer Section

 <div class="container">
           <div class="row">

Container & Row

        <div class="col-lg-3 col-12">
               <h4 class="font-rubik font-size-20">MY STORE</h4>
               <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, deserunt.</p>

Column 1: Store Info

<form class="form-row">
                 <div class="col">
                   <input type="text" class="form-control" placeholder="Email *">
                 </div>
                 <div class="buttonforfooter">
                   <button type="submit" class="btn btn-footer mb-2">Subscribe</button>
                 </div>
               </form>
             </div>

Column 2: Newsletter Signup

             <a href="./aboutus.php" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                 <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Delivery Information</a>

Column 3: Information Links

<a href="./registration.php" class="font-rale font-size-14 text-white-50 pb-1">My Account</a>
                 <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Order History</a>

Column 4: Account Links

  <div class="copyright text-center bg-dark text-white py-2">
         <p class="font-rale font-size-14">&copy; Designed by <a href="#" class="color-second">christina</a></p>

Copyright

<!-- bootstrap js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

Bootstrap JS link 

<!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Owl Carousel JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

Owl Carousel

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

Owl Carousel Initialization


document.addEventListener("DOMContentLoaded", () => {
   // Select all featured section small images
   const featuredSections = document.querySelectorAll(".featured .row");
  
   featuredSections.forEach(section => {
       let bigImage = section.querySelector(".big-image img");
       let smallImages = section.querySelectorAll(".small-image img");
      
       smallImages.forEach(img => {
           img.addEventListener("click", () => {
               bigImage.src = img.src;
           });
       });
   });
});

 Image Switch on Click

</body>
</html>

