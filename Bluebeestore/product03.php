<!DOCTYPE html>
<html>
    <head>
        <title>The BlueBee Fashions | Product Info</title>
        <meta name="description" content="This is the description">
        <link rel="stylesheet" href="styles.css" />
        <script src="store.js" async></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    </head>
    <body>
        <header class="main-header">
            <nav class="main-nav nav">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="store.html">SHOP ONLINE</a></li>
                    <li><a href="chat.html">CHAT WITH US</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="register.html">NEW USER?</a></li>
                    <li><a href="login.html">LOGIN</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </nav>
            <h1 class="band-name band-name-large">The BlueBee</h1>
        </header>
        <section class="container content-section">
            <h2 class="section-header">SHOP NOW</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Winter Wear</span>
                    <img class="shop-item-image" src="img\003.jpg">
                    <span class="shop-item-price">₹ 900.00</span> 

                    <div class="shop-item-details">
                        </div>
                            
                    <button class="btn btn-primary nav a" type="button"><a href="#">BUY NOW</a></button>
                     
                    </div>

           <div class="containerstar">

                 <div class="star-widget">
                <input type="radio" name="rate" id="rate-5">
                <label for="rate-5" class="fas fa-star"></label>
                <input type="radio" name="rate" id="rate-4">
                <label for="rate-4" class="fas fa-star"></label>
                <input type="radio" name="rate" id="rate-3">
                <label for="rate-3" class="fas fa-star"></label>
                <input type="radio" name="rate" id="rate-2">
                <label for="rate-2" class="fas fa-star"></label>
                <input type="radio" name="rate" id="rate-1">
                <label for="rate-1" class="fas fa-star"></label>
                <form action="#">
                  <header></header>

                    
        </section>

        <section class="content-section container">
            
            <h2>Description</h2>
            <h3>Dress ID: 003</h3>
            <p>Winter clothes are especially outerwear like coats, jackets, hats, scarves and gloves or mittens, but also warm underwear like long underwear, union suits and socks. Military issue winter clothing evolved from heavy coats and jackets to multilayered clothing for the purpose of keeping troops warm during winter battles. </p>
        </section>

        <section class="content-section container">
            <form action="review.php" method="post">  
            </form>
        </section>    


         <section class="content-section container">
            <h2 class="section-header">REVIEW SESSION</h2>
                 <form action="review.php" method="post">  
          </section>
          
        <section class="content-section container containerforform>"> 
                    <label> Title </label>
                    <input type="text" name="titlereview" placeholder="Title for review" size="10"/ required> 
                    <label> Review</label>
                    <input type="text" name="reviews" placeholder="Enter review" size="10"/ required>           
                    <?php 

                        if(isset($_COOKIE['user'])){
                            echo "<input hidden name='userID' value=".$_COOKIE['user']." />";
                        }
                        else{
                            echo "<input hidden name='userID' value='0' />";
                            echo "<input hidden name='dressID' value='003' />";
                        }
                    ?>
  
                    <button type="submit" class="registerbtn">Submit</button>    
                </form>  
 
        </section>


     <!-- session for similar products-->
       
 
<section class="container content-section">
            <h2 class="section-header">SIMILAR PRODUCTS</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">WINTER WEAR</span>
                    <img class="shop-item-image" src="img\similar05.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">₹ 1899.00</span>
                        <button class="btn btn-primary shop-item-button"type="button">VIEW NOW</button>
                    </div>
                    <div>
                       

                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                                           
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">WINTER WEAR</span>
                    <img class="shop-item-image" src="img\similar06.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">₹ 1520.00</span>
                        <button class="btn btn-primary shop-item-button"type="button">VIEW NOW</button>
                    </div>
                    <div>
                       

                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                                           
                    </div>
                </div>
                
</section>
</section>

<!-- Due to more textarea tags I got a problem So I've changed the textarea tag to textare. Please correct it. -->
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h3 class="band-name">The BlueBee Fashion</h3>
                <ul class="nav footer-nav">
                    <li>
                        <a href="https://www.youtube.com" target="_blank">
                            <img src="Images/YouTube Logo.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.spotify.com" target="_blank">
                            <img src="Images/Spotify Logo.png">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com" target="_blank">
                            <img src="Images/Facebook Logo.png">
                        </a>
                    </li>
                </ul>
            </div>
        </footer>       


    </body>
</html>