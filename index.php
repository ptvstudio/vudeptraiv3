<html>
<head>
<title>PTV Online</title> 
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="top-nav-bar">
<div class="search-box">
<i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
<i class="fa fa-bars" id="close-btn" onclick="closemenu()"></i>
<a href="PTVOnline.html"><img src="Images/Logo.png" class="logo"></a>
<input type=text class="form-control">
<span class="input-group-text"><i class="fa fa-search"></i></span>          
</div>
</div>
<div class="menu-bar">
<ul>
<li><a href="#"><i class="fa fa-shopping-basket"></i>Cart</a></li>
<li><a href="#">Log in</a></li>
<li><a href="Register.html">Register</a></li>
</ul>    
</div>
<section class="header">
<div class="side-menu" id="side-menu">
<ul>
<li>On Sale<i class="fa fa-angle-right"></i>
<ul>
    <li>Sub Menu 1</li>
    <li>Sub Menu 1</li>
    <li>Sub Menu 1</li>
    <li>Sub Menu 1</li> 
</ul>     
</li>
<li>Mobiles<i class="fa fa-angle-right"></i>
<ul>
    <li>Sub Menu 2</li>
    <li>Sub Menu 2</li>
    <li>Sub Menu 2</li>
    <li>Sub Menu 2</li>
</ul>    
</li>  
<li>Computer<i class="fa fa-angle-right"></i>
<ul>
    <li>Sub Menu 3</li>
    <li>Sub Menu 3</li>
    <li>Sub Menu 3</li>
    <li>Sub Menu 3</li> 
</ul>
</li>         
</ul>       
</div>  
<div class="slider">
<div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Images/Slide1.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="Images/Slide2.jpg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="Images/Slide3.jpg" class="d-block w-100">
    </div>
  </div>
    <ol class="carousel-indicators">
    <li data-target="#slider" data-slide-to="0" class="active"></li>
    <li data-target="#slider" data-slide-to="1"></li>
    <li data-target="#slider" data-slide-to="2"></li>
  </ol>
</div>    
    </div>    
</section>
<!-----------Featured---------->
<section class="featured-categories">
<div class="container">
<div class="row">
<div class="col-md-4">
<img src="Images/Feature1.png">    
</div>   
<div class="col-md-4">
<img src="Images/Feature2.jpg">    
</div>
<div class="col-md-4">
<img src="Images/Feature3.png">    
</div>
</div> 
</div>    
</section> 
<!----------On Sale----------->
<section class="on-sale">
<div class="container">
<div class="title-box">
<h2>On sale</h2>
</div>
<div class="row">
<div class="col-md-3">
<div class="product-top">
<a href="Product.html"><img src="Images/Product1.png"></a>
    <div class="overlay-right">
    <button tyep="button" class="btn btn-secondary" title="Quick Shop">
        <i class="fa fa-angle-right"></i>
        </button>
        <button tyep="button" class="btn btn-secondary" title="Add to wishlist">
        <i class="fa fa-heart-o"></i>
        </button>
        <button tyep="button" class="btn btn-secondary" title="Add to cart">
        <i class="fa fa-shopping-cart"></i>
        </button>
    </div>
</div>
    <div class="product-bottom text-center">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star-half-o"></i>
        <h3>Watch</h3>
        <h5>$50.00</h5>
    </div>
</div>   
    <div class="col-md-3">
<div class="product-top">
    <a href="Product2.html"><img src="Images/Product2.png"></a>
    <div class="overlay-right">
    <button tyep="button" class="btn btn-secondary" title="Quick Shop">
        <i class="fa fa-angle-right"></i>
        </button>
        <button tyep="button" class="btn btn-secondary" title="Add to wishlist">
        <i class="fa fa-heart-o"></i>
        </button>
        <button tyep="button" class="btn btn-secondary" title="Add to cart">
        <i class="fa fa-shopping-cart"></i>
        </button>
    </div>
</div>
    <div class="product-bottom text-center">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
        <h3>Smart Phone</h3>
        <h5>$40.00</h5>
    </div>       
</div>
    <div class="col-md-3">
<div class="product-top">
    <a href="Product3.html"><img src="Images/Product3.png"></a>
    <div class="overlay-right">
    <button tyep="button" class="btn btn-secondary" title="Quick Shop">
        <i class="fa fa-angle-right"></i>
        </button>
        <button tyep="button" class="btn btn-secondary" title="Add to wishlist">
        <i class="fa fa-heart-o"></i>
        </button>
        <button tyep="button" class="btn btn-secondary" title="Add to cart">
        <i class="fa fa-shopping-cart"></i>
        </button>
    </div>
</div>
    <div class="product-bottom text-center">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
        <h3>Fidelio Headphone</h3>
        <h5>$60.00</h5>
    </div>     
</div>
    <div class="col-md-3">
<div class="product-top">
    <a href="Product4.html"><img src="Images/Product4.png"></a>
    <div class="overlay-right">
    <button tyep="button" class="btn btn-secondary" title="Quick Shop">
        <i class="fa fa-angle-right"></i>
        </button>
        <button tyep="button" class="btn btn-secondary" title="Add to wishlist">
        <i class="fa fa-heart-o"></i>
        </button>
        <button tyep="button" class="btn btn-secondary" title="Add to cart">
        <i class="fa fa-shopping-cart"></i>
        </button>
    </div>
</div>
    <div class="product-bottom text-center">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
        <h3>Gaming Chair</h3>
        <h5>$150.00</h5>
    </div>     
</div>
</div>
</div>
</section>
<!--------New product---------->
<section class="New-product">
<div class="container">
<div class="title-box">
<h2>New product</h2>
</div>
<div class="row">
<div class="col-md-3">
<div class="product-top">
<img src="Images/Product1.png">
    <div class="overlay-right">
    <button tyep="button" class="btn btn-secondary" title="Quick Shop">
        <i class="fa fa-angle-right"></i>
        </button>
        <button tyep="button" class="btn btn-secondary" title="Add to wishlist">
        <i class="fa fa-heart-o"></i>
        </button>
        <button tyep="button" class="btn btn-secondary" title="Add to cart">
        <i class="fa fa-shopping-cart"></i>
        </button>
    </div>
</div>
    <div class="product-bottom text-center">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star-half-o"></i>
        <h3>Watch</h3>
        <h5>$50.00</h5>
    </div>
</div>   
    <div class="col-md-3">
<div class="product-top">
<img src="Images/Product2.png">
    <div class="overlay-right">
    <button tyep="button" class="btn btn-secondary" title="Quick Shop">
        <i class="fa fa-angle-right"></i>
        </button>
        <button tyep="button" class="btn btn-secondary" title="Add to wishlist">
        <i class="fa fa-heart-o"></i>
        </button>
        <button tyep="button" class="btn btn-secondary" title="Add to cart">
        <i class="fa fa-shopping-cart"></i>
        </button>
    </div>
</div>
    <div class="product-bottom text-center">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
        <h3>Smart Phone</h3>
        <h5>$40.00</h5>
    </div>       
</div>
    <div class="col-md-3">
<div class="product-top">
<img src="Images/Product3.png">
    <div class="overlay-right">
    <button tyep="button" class="btn btn-secondary" title="Quick Shop">
        <i class="fa fa-angle-right"></i>
        </button>
        <button tyep="button" class="btn btn-secondary" title="Add to wishlist">
        <i class="fa fa-heart-o"></i>
        </button>
        <button tyep="button" class="btn btn-secondary" title="Add to cart">
        <i class="fa fa-shopping-cart"></i>
        </button>
    </div>
</div>
    <div class="product-bottom text-center">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
        <h3>Fidelio Headphone</h3>
        <h5>$60.00</h5>
    </div>     
</div>
    <div class="col-md-3">
<div class="product-top">
<img src="Images/Product4.png">
    <div class="overlay-right">
    <button tyep="button" class="btn btn-secondary" title="Quick Shop">
        <i class="fa fa-angle-right"></i>
        </button>
        <button tyep="button" class="btn btn-secondary" title="Add to wishlist">
        <i class="fa fa-heart-o"></i>
        </button>
        <button tyep="button" class="btn btn-secondary" title="Add to cart">
        <i class="fa fa-shopping-cart"></i>
        </button>
    </div>
</div>
    <div class="product-bottom text-center">
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
    <i class="fa fa-star"></i>
        <h3>Gaming Chair</h3>
        <h5>$150.00</h5>
    </div>     
</div>
</div>
</div>
</section>
    <!-----------------Website features----------------->
    <section class="website-features">
    <div class="container">
    <div class="row">
    <div class="col-md-3 feature-box">
    <img src="Images/100%25.jpg">
    <div class="feature-text">
    <p><b>100% original items </b>are available at company </p>    
    </div>
    </div>
    <div class="col-md-3 feature-box">
    <img src="Images/return.png">
    <div class="feature-text">
    <p><b>Return within 30 days </b>of receiving your order </p>    
    </div>
    </div>
        <div class="col-md-3 feature-box">
    <img src="Images/Delivery.png">
    <div class="feature-text">
    <p><b>Get free delivery </b>for every order on more than price </p>    
    </div>
    </div>
    </div>    
    </div>
    </section>
    <!------------Footer---------->
    <section class="footer">
    <div class="container text-center">
    <div class="row">
    <div class="col-md-3">
        <h1>Useful Links</h1>
        <p>Privacy Policy</p>
        <p>Terms of use</p>
        <p>Return Policy</p>
        <p>Discount Coupons</p>
    </div> 
    
        <div class="col-md-3">
        <h1>Company</h1>
        <p>About Us</p>
        <p>Contact Us</p>
        <p>Career</p>
        <p>Affiliate</p>
    </div> 
        <div class="col-md-3">
        <h1>Follow Us On</h1>
        <p><i class="fa fa-facebook-official"></i> Facebook</p>
        <p><i class="fa fa-youtube-play"></i> Youtube</p>
        <p><i class="fa fa-twitter"></i> Twitter</p>
        <p><i class="fa fa-instagram"></i> Instagram</p>
    </div> 
        <div class="col-md-3 footer-image">
        <h1>Download App</h1>
            <img src="Images/Download.png">
        </div>
    </div>
        <hr>
        <p class="copyright"> Made with <i class="fa fa-heart-o"></i> by PTV</p>
    </div>
    </section>
<script>
    function openmenu()
    {
        document.getElementById("side-menu").style.display="block";
        document.getElementById("menu-btn").style.display="none";
        document.getElementById("close-btn").style.display="block";
    }
    function closemenu()
    {
        document.getElementById("side-menu").style.display="none";
        document.getElementById("menu-btn").style.display="block";
        document.getElementById("close-btn").style.display="none";
    }
    </script>    
</body>
</html>