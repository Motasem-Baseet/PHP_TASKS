






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../style/style.css">
    
    <title>CAFENA Coffee Shop</title>
</head>

<body>

    <!-- ==================HEADER&NAV======================= -->
    <header class="header">
        <div class="container split">
            <a href="#home">
                <img src="images/logo.png" alt="Logo" class="logo">
            </a>

            <nav id="nav" class="nav">
                <ul class="nav-list row">
                    <li class="nav-link"><a href="#home">Home</a></li>
                    <li class="nav-link"><a href="#about">About</a></li>
                    <li class="nav-link"><a href="#menu">Menu</a></li>
                    <li class="nav-link"><a href="#products">Products</a></li>
                    <li class="nav-link"><a href="#review">Review</a></li>
                    <li class="nav-link"><a href="#contact">Contact</a></li>
                    <li class="nav-link"><a href="#blogs">Blogs</a></li>
                </ul>
            </nav>

            <div class="header-icons">
                <i id="search-btn" class="fa-sharp fa-solid fa-magnifying-glass"></i>
                <i id="cart-shopping" class="fa-regular fa-cart-shopping"></i>
                <i id="open-btn" class="fa-solid fa-bars"></i>
            </div>
            
         
                <label class="search_inp">
                    <input type="search" class="search_bar" placeholder="Search...">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </label>

                <div class="shopping-cart">
                    <div class="items">
                        <h2>You haven't Any Item</h2>
                    </div>

                    <button class="btn check-items">Checkout Now</button>
                </div>
   
        </div>
    </header>







    <!-- ==================MAIN======================= -->
    <div id="home" class="main split">
        <div class="container">
            <div class="main-text">
                <h1>fresh coffee in the morning</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, quasi ad doloribus mollitia magnam
                    molestias?</p>
                <button class="btn">Get Yours Now</button>
            </div>
        </div>
    </div>


    <!-- ==================ABOUT SECTION======================= -->

    <section class="section about" id="about">
        <div class="container">
            <h1 class="text-center sect-head">
                <span>About</span> us
            </h1>
            <div class="row">
                <img src="images/about-img.jpeg" alt="about-img" class="about-img col-50">
                <div class="about-content col-48">
                    <h2>What Makes Our Coffee Special?</h2>
                    <p>Welcome to Brew Haven, where every cup tells a story!

                    At Brew Haven, we believe that coffee is more than just a beverage – it's a ritual, a moment of connection, and a source of inspiration. Whether you're seeking a cozy corner to catch up with friends.</p>
                    <p>a quiet spot to work, or simply the perfect cup to brighten your day, we’ve got you covered.</p>
                    <button class="btn">Learn More</button>
                </div>
            </div>

        </div>
    </section>


    <!-- ==================OUR MENU SECTION======================= -->
    <section class="section menu" id="menu">
        <div class="container">
            <h1 class="text-center sect-head">
                our <span>menu</span>
            </h1>
            <div class="grid cards">
                <?php include('get_prod.php');?>
                
                <?php while($row = $product->fetch_assoc()){ ?>
                <div onclick="window.location.href='single_prod.php?item_id=<?php echo $row['item_id'] ?>'". class="card text-center">
                    <img  src="images/<?php echo $row['item_img'] ?>" alt="" class="card-img">
                    <h4><?php echo $row['item_name'] ?></h4>
                    <p><?php echo $row['item_des'] ?></p><br>
                    <p><?php echo $row['item_price'] ?>JD</p>
                    <button class="btn">Add to Cart</button>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>




    
    <!-- ==================CUSTOMER'S REVIEW SECTION======================= -->
    <section class="section review" id="review">
        <div class="container">
            <h1 class="text-center sect-head">
                customer's <span>review</span>
            </h1>

            <div class="grid cards review">
                <div class="card text-center">
                    <i class="fa-solid fa-comment-dots"></i>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus natus error facilis veniam exercitationem in animi dolorum vel tempora at</p>
                    <img src="images/pic-1.png" 
                    alt="pic-1" class="card-img">
                    <h2>İbrahim</h2>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                </div>
                <div class="card text-center">
                    <i class="fa-solid fa-comment-dots"></i>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid atque, laudantium id eum nobis sit! Laudantium repellat repellendus aliquam veniam minus</p>
                    <img src="images/pic-2.png" 
                    alt="pic-1" class="card-img">
                    <h2>Sara</h2>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                </div>
                <div class="card text-center">
                    <i class="fa-solid fa-comment-dots"></i>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quas laboriosam vitae perferendis. Aspernatur nesciunt cumque suscipit distinctio odit? Ipsa.</p>
                    <img src="images/pic-3.png" 
                    alt="pic-1" class="card-img">
                    <h2>Ramal </h2>
                    <div class="stars">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ==================CONTACT US SECTİON======================= -->
    <section class="section contact" id="contact">
        <div class="container">
            <h1 class="sect-head text-center">
                contact <span>us</span>
            </h1>

            <div class="row">
                <div class="col-50 map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d11261.345476552693!2d35.884816317699865!3d31.89342564289682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2sjo!4v1729239413741!5m2!1sar!2sjo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-48 contact-info">
                    <h1 class="info-head text-center">get in touch</h1>
                    <div class="info-inputs row">
                        <label>
                            <i class="fa-solid fa-user"></i>
                            <input type="text" placeholder="name"
                            name="name" class="name" required>
                        </label>
                        <label>
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" placeholder="email"
                                   name="email" class="email" required>
                        </label>
                        <label>
                            <i class="fa-solid fa-phone-flip"></i>
                            <input type="number" placeholder="number"
                                   name="number" class="number" required>
                        </label>
                        <button class="btn contact-btn">Contact Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ==================FOOTER======================= -->
    <footer class="footer">
        <div class="container">
            <div class="social-stickers">
                <ul class="stickers">
                    <li>
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                    </li>
                </ul>
            </div>
            <div class="menu-bottom">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="#review">Review</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#blogs">Blogs</a></li>
                </ul>
            </div>
            <div class="author">
                <p>
                    Created By <a href="#">Fərhad Eyvazov</a> | All Right Reserved
                </p>
            </div>
        </div>



    </footer>

    <script src="../app.js"></script>
</body>

</html>