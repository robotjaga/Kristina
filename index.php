<!-- connect file brands/categories  -->
<?php
include('includes/connect.php');
include('functions/common_function.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
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

    <!-- Include Owl Carousel CSS -->
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
@keyframes scrollRight {
    from { transform: translateX(100%); }
    to { transform: translateX(-100%); }
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

/* Sidebar Layout */
.sidebar-fixed {
    min-height: 100vh;
    border-right: 2px solid #ddd;
    padding: 0;
}

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


/* Full-page container to center the button */
.button-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 15vh; 
    width: 100%;
}

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

/* profile */

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

gap: 5px; 

    justify-content: center;
    align-items: center;
    text: center;
}


/* footer */
.buttonforfooter {
    display: flex;
    justify-content: center;
    margin-top: 10px;
}

/* Even Longer & Centered Subscribe Button */
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

    /* Responsive Subscribe Button */
    .btn-footer {
        width: 100%; 
        max-width: 300px; 
        height: 50px; 
        font-size: 18px; 
    }
}
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

 <!-- thirt child -->
  <div class="bg-white">
<h3 class="text-center">MY STORE</h3>
<p class="text-center">Comunication is at the heart of e-commerce and community</p>
  </div>
</div>


 <!-- baners own carusel  -->
 <section id="banner-area">
        <div class="owl-carousel owl-theme">
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




<!-- improvement -->
  
<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar (Categories & Brands) -->
        <div class="col-md-2 bg-secondary p-3 sidebar-fixed">
            <!-- Brands Section -->
            <ul class="navbar-nav text-center">
                <li class="nav-item bg-dark p-2">
                    <a href="#" class="nav-link text-white"><h4>Delivery Brands</h4></a>
                </li>
                <?php getbrands(); ?> <!-- Fetch brands -->
            </ul>

            <!-- Categories Section -->
            <ul class="navbar-nav text-center mt-3">
                <li class="nav-item bg-dark p-2">
                    <a href="#" class="nav-link text-white"><h4>Categories</h4></a>
                </li>
                <?php getcategories(); ?> <!-- Fetch categories -->
            </ul>
        </div>

        <!-- Right Product Section -->
        <div class="col-md-10">
            <div class="row justify-content-center">
                <?php getproducts(); ?> <!-- Fetch products -->
            </div>
        </div>
    </div>
</div>
               

<!-- improvement -->







<br><br><br>

<!-- Categories Section -->
<section id="categories">
    <h2 class="categories_style">BROWSE BY CATEGORY</h2>
    <br><br>
    <div class="categories-container">
        <div class="category-box">Women Arrivals</div>
        <div class="category-box">Men Arrivals</div>
        <div class="category-box">Kids Arrivals</div>
        <div class="category-box">Junior Arrivals</div>
        <div class="category-box">Sport Wearing</div>
        <div class="category-box">Home Outfit</div>
    </div>
</section>

<br><br><br>


    <div class="new-arrivals-section">
        <h2 class="new-arrivals-title">TOP SELLING</h2>
        <br><br>

        <div class="new-arrivals-container">
        <div class="product-card">
                <img src="./images/River_Island_Summer_Outerwear_Blazers2.png" alt="Apple">
                <h5 class="card-title">River Island Blazer</h5>
                <div class="stars">⭐⭐⭐⭐☆</div>
                <p class="price">£152</p>
                <p class="card-text">New Blazer, designed for those who appreciate timeless style, sharp tailoring, and effortless versatility. You every day choise</p>
                <a href="#" class="btn my-2">View More</a>
                
            </div>
            <div class="product-card">
                <img src="./images/Accessories_Louis_Vuitton_Structured_Handbags1.png" alt="Apple">
                <h5 class="card-title">Louis Vuitton Handbag</h5>
                <div class="stars">⭐⭐⭐⭐⭐</div>
                <p class="price">£152</p>
                <p class="card-text">Louis Vuitton handbag, handbag showcases premium materials, exquisite detailing, and suitable for every day use</p>
                <a href="#" class="btn my-2">View More</a>
                
            </div>
            <div class="product-card">
                <img src="./images/River_Island_Summer_Outerwear_Cardigans2.png" alt="Apple">
                <h5 class="card-title">River Island Cardigan</h5>
                <div class="stars">⭐⭐☆☆☆</div>
                <p class="price">£152</p>
                <p class="card-text">New Cardigan Collection, designed to keep you warm while elevating your everyday look. Based of every day use </p>
                <a href="#" class="btn my-2">View More</a>
                
            </div>
            <div class="product-card">
                <img src="./images/River_Island_Summer_Outerwear_Trench_Coats2.png" alt="Apple">
                <h5 class="card-title">River Island Trench</h5>
                <div class="stars">⭐⭐⭐☆☆</div>
                <p class="price">£152</p>
                <p class="card-text">New Trench Coat, a perfect blend of classic design and modern refinement. Support you with warm callor and quality materials</p>
                <a href="#" class="btn my-2">View More</a>
                
            </div>
            <div class="product-card">
                <img src="./images/River_Island_Summer_Outerwear_Trench_Coats2.png" alt="Apple">
                <h5 class="card-title">River Island Trench</h5>
                <div class="stars">⭐⭐⭐☆☆</div>
                <p class="price">£152</p>
                <p class="card-text">New Trench Coat, a perfect blend of classic design and modern refinement. Support you with warm callor and quality materials</p>
                <a href="#" class="btn my-2">View More</a>
                
            </div>
            <div class="product-card">
                <img src="./images/UNIQLO_Bottoms_Dark_Wash_Jeans2.png" alt="Apple">
                <h5 class="card-title">UNIQLO Jeans</h5>
                <div class="stars">⭐⭐☆☆☆</div>
                <p class="price">£152</p>
                <p class="card-text">New Dark Jeans, designed for those who appreciate timeless style, premium quality, and a flawless fit. Every day choise</p>
                <a href="#" class="btn my-2">View More</a>
                
            </div>
            </div>
            </div>
        
<br><br>


    <section id="banner-area">
    <div class="owl-carousel owl-theme">
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

<br><br><br><br>



    

    <div class="new-arrivals-section">
        <h2 class="new-arrivals-title">NEW ARRIVALS</h2>

        <br><br>

        <div class="new-arrivals-container">
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


    
    <div class="button-container">
    <a href="#" class="oval-button ">All Arrivals</a>
</div>



<br><br>

    
    <div class="testimonials-container">
    <h1 class="testimonials-title">Testimonials</h1>
    <p class="testimonials-subtitle">"Quotes from our happy customers"</p>

    <div class="reviews-container">
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
                  <a href="./aboutus.php" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
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
                  <a href="./aboutus.php" class="font-rale font-size-14 text-white-50 pb-1">Newslatters</a>
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
    
</body>
</html>
