<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MY Shop</title>
    <link rel="stylesheet" href="style11.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  </head>
  <body>
    <div class="header">
     <div class="container">
          <div class="navbar">
          <div class="logo">
           <a href="index.php"> online shopping page </a>
          </div>
          <nav>
            <ul id="MenuItems">
              <li><a href="index.php">Home</a></li>
              <li><a href="product.php">product</a></li>
                

                
               <li><a href="about.php">About</a></li>
              <li><a href="contact.php">Contact</a></li>

              <li><a href="http://localhost/Project1/register.php" target="_blank">Register</a></li>
		<li><a href="http://localhost/Project1/login.php" target="_blank">login</a></li>
            </ul>
          </nav>
        </div>
        <div class="row">
          <div class="col-2">
            <h1>
              Here shopping becomes <br/>simple!
            </h1>
            <p>
              "We trust something in a grocery store and assume it's good. We don't learn about the most precious thing in life—
              <br/>the food we put in our body. Educate yourself!"
            </p>
            <a href="" class="btn">Explore Now &#10140;</a>
          </div>
          <div class="col-2">
             <img src="images/image1.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  <!-- ---------featured categories--------   -->
<div class="small-container">
  <h2 class="title">Categories</h2>
  <div class="row">
    <div class="col-4">
      <a href="fashion-child-product.php" target="_blank"><img src="images/clothes/category-3.png" alt=""></a>
      <a href="fashion-child-product.php" target="_blank"><h4>Clothes</h4></a>
      <a href="fashion-child-product.php" target="_blank"><p>explore more..</p></a>    
    </div>
    <div class="col-4">
      <a href="gift-product.php"target="_blank"><img src="images/gifts/gift.png" alt=""></a>
      <a href="gift-product.php"target="_blank"><h4>Gift</h4></a>
      <a href="gift-product.php"target="_blank"><p>explore more..</p></a>
      
    </div>
    <div class="col-4">
      <a href="toys-product.php"target="_blank"><img src="images/Toys/toys.png" alt=""></a>
      <a href="toys-product.php"target="_blank"><h4>Toys</h4></a>
      <a href="toys-product.php"target="_blank"><p>explore more..</p></a>
    </div>
    <div class="col-4">
      <a href="footwear-product.php"target="_blank"><img src="images/footware/foot.png" alt=""></a>
      <a href="footwear-product.php"target="_blank"><h4>Footwear</h4></a>
      <a href="footwear-product.php"target="_blank"><p>explore more..</p></a>
    </div>
  </div>
  
 
<!-- -----offer------ -->
<div class="offer">
<div class="small-container">
  <div class="row">
    <div class="col-2">
<img src="images/electronic/speaker1.png" class="offer-img">
    </div>
    <div class="col-2">
<p>Exclusively Available On SiyaShop</p>
<h1>Wireless Portable Bluetooth Speakers</h1>
<small>B M C Wireless Portable Bluetooth Speakers kt-125 with Mobile Holder, with USB, Memory Card and Bluetooth Connectivity (Kt-125)</small><br>
<a href="product-detials-speaker.html" target="_blank" class="btn">Buy Now &#10140</a>
    </div>
  </div>
</div>
</div>

      <!-- -------footer------ -->
      <footer class="footer">
        <div class="container-f">
          <div class="row-f">
            <div class="footer-col">
              <h4>online shop</h4>
              <ul>
                
                <li><a href="fashion-child-product.php">Fashion</a></li>
                <li><a href="footwear-product.php">Footwear</a></li>
                <li><a href="electronics-product.php">Electronics</a></li>
                
              </ul>
            </div>
            <div class="footer-col">
              <h4>get help</h4>
              <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">shipping</a></li>
                <li><a href="#">returns</a></li>
                <li><a href="#">order status</a></li>
                <li><a href="#">payment options</a></li>
              </ul>
            </div> 
              <div class="footer-col">
                <h4>company</h4>
                <ul>
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                  <li><a href="product.php">Our Services</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                </ul>
              </div>
              <div class="footer-col">
                <h4>follow us</h4>
                <div class="social-links">
                  
                  <a href="https://www.instagram.com/balakumarr_25/" target="_blank"><i class="fab fa-instagram"></i></a>
                  
                </div>
            </div>
          </div>
            <hr><div class="copyright text-center">
              <h5><a href="#">🌐</a> copyright © BALAKUMAR all rights reserved</h5>
              <br><small>♥ built by <a href="https://www.instagram.com/balakumarr_25/" target="_blank">BALAKUMAR




              </a>-</small>
            </div>
          </div>  
     </footer>
     <!-- -------js for toggle menu----- -->
     <script>
       var MenuItems = document.getElementById("MenuItems");
       var MenuItem = document.getElementById("inneritems");
       MenuItems.style.maxHeight = "0px";

       function menutoggle(){
         if(MenuItems.style.maxHeight == "0px")
         {
          MenuItems.style.maxHeight = "200px";
         }
         else
         {
          MenuItems.style.maxHeight = "0px";
         }
        
       }
       function menutoggl(){
         if(MenuItem.style.display == "block")
         {
          MenuItem.style.display = "none";
         }
         else
         {
          MenuItem.style.display = "block";
         }
        
       }
     </script>
  </body>
</html>
