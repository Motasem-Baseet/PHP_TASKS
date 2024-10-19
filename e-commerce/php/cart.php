
<?php 
session_start();

if(isset($_POST['add_to_cart'])){

    //if user have alrady added item
    if(isset($_POST['cart'])){

        $item_arr_id = array_column($_SESSION['cart'], "item_id");

        if(!in_array($_POST['item_id'], $item_arr_id)){

            $item_arr = array(

                'item_id' => $_POST['item_id'],
                'item_name' => $_POST['item_name'],
                'item_img' => $_POST['item_img'],
                'item_price' => $_POST['item_price'],
                'item_quantity' => $_POST['item_quantity']
            );

            $_SESSION['cart'][$item_id] = $item_arr;

        }

        //this is for the first item
    }else{


        $item_id = $_POST['item_id'];
        $item_name = $_POST['item_name'];
        $item_img = $_POST['item_img'];
        $item_price = $_POST['item_price'];
        $item_quantity = $_POST['item_quantity'];

        $item_arr = array(
            'item_id' => $item_id,
            'item_name' => $item_name,
            'item_img' => $item_img,
            'item_price' => $item_price,
            'item_quantity' => $item_quantity,


        );

        $_SESSION['cart'][$item_id] = $item_arr;

    }

}
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="../style/style.css"> -->
    
    <title>CAFENA Coffee Shop</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
    font-family: 'Nunito', sans-serif;
}

:root {
    --bg-color: #000;
    --text-color: #ffff;
    --btn-bg-color: #d3ad7f;

    --z-index: 10;
}
html{
    scroll-padding-top: 5rem;
    scroll-behavior: smooth;
    
}

body {
    background-color: #000;
}

img {
    width: 100%;
    height: auto;
}

h1,
h2,
h3,
h4 {
    margin-bottom: 1.2rem;
    color: var(--text-color);
}

p {
    margin-bottom: 1rem;
    color: var(--text-color);
}

.section {
    padding: 3rem 0;
}

.container {
    width: 85%;
    max-width: 1200px;
    margin-inline: auto;
}

.grid {
    display: grid;
}

.row {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    row-gap: 1rem;
}

.split {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.text-center {
    text-align: center;
}


/* ===================HEADER&NAV===================== */

.header {
    background: #000;
    position: fixed;
    width: 100%;
    left: 0;
    top: 0;
    border-bottom: 1px solid #eeee;
    padding: 1rem 0;
    z-index: var(--z-index);
}

.logo {
    width: 60px;
}

.header-icons {
    color: var(--text-color);
}

.header-icons i {
    cursor: pointer;
    font-size: 20px;
    font-weight: 600;
}

.header-icons i+i {
    margin-left: 1.2rem;
}

.header-icons i:hover {
    color: var(--btn-bg-color);
}

.nav {
    position: absolute;
    right: -100%;
    top: 88px;
    padding: 1rem;
    background-color: var(--text-color);
    width: 65%;
    height: 100vh;
    border-radius: 5px 0 0 5px;
    transition: right .4s;
}

.nav-list {
    position: relative;
    gap: 1.2rem;
}

.nav-link a {
    color: #000;
    font-weight: 500;
    font-size: 20px;
}

.nav-link a:hover {
    color: var(--btn-bg-color);
    border-bottom: #d3ad7f solid 1px;
    padding-bottom: .25rem;
    transition: all .3s;
}

.open-menu {
    right: 0;
    transition: .4s;
}

.search_inp{
    position: absolute;
    right: 15%;
    top: 105%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    transform: scaleY(0);
    transform-origin: top;
    transition: transform .4s;
}
.open-search_inp{
    transform: scaleY(1);
    transition: transform .4s;
}
.search_inp i{
    color: #eeeeeeb9;
    /* margin: 0 10px; */
    margin-left: 5px;
    padding: 6px;
    cursor: pointer;
    border: solid 1px #eeeeeeb9;
}
.search_bar{
    outline: none;
    border: none;
    height: 30px;
    padding: 0 1rem;
}

.shopping-cart {
    position: absolute;
    right: -100%;
    top: 100%;
    background-color: var(--text-color);
    height: 100vh;
    max-width: 100%;
    display: flex;
    flex-direction: column;
    padding: 1rem .56rem;
}
.items h2{
    color: #000;
    font-size: 1.2rem;
}
.card-active{
    right: 0;
    transition: right .4s;
}

.shop-card{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 2rem;
}
.close-btn{
    display: flex;
    align-self: flex-start;
    justify-content: center;
    cursor: pointer;
    font-size: 1.1rem;
}
.item-desc *{
    color: #000;
}
.item-desc{
    margin-left: 1.5rem;
    margin-right: 3rem;
}
.prod-item{
    display: flex;
    align-items: center;
}
.prod-item>img{
    width: 90px;
}

/* ===================MAIN===================== */

/* .main {
    padding: 10rem 0;
    background: url(images/home-img.jpeg);
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    height: 100vh;

} */

/* ===================FOOTER===================== */
.author p{
    text-align: center;
    font-weight: 300;
    font-size: 1rem;
}
.author p>a{
    color: var(--btn-bg-color);
}
.menu-bottom{
    margin-bottom: 1.4rem;
}
.menu-bottom ul{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: .5rem;
}
.menu-bottom ul li{
    border: #eeeeeeb9 solid 1px;
    padding: .215rem .6rem;
}
.menu-bottom ul li a{
    color: var(--text-color);
    font-size: 1.05rem;
}
.menu-bottom ul li:hover{
    background-color: #d3ad7f;
}
.social-stickers{
    text-align: center;
    margin-bottom: 1.5rem;
}
.stickers{
    display: flex;
    align-items: center;
    justify-content: center;
    gap: .5rem;
    flex-wrap: wrap;
}
.stickers li{
    border-radius: 50%;
    background-color: #d3ad7f;
    color: var(--text-color);    
}
.stickers li:hover{
    background-color: var(--text-color);
}
.stickers li:hover a{
    color: #d3ad7f;
}
.stickers li a{
    padding: 1rem;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--text-color);
}







/* ===================MEDIA QUERIES===================== */
@media screen and (min-width: 320px) {
    .shopping-cart{
        max-width: 90%;
    }
}

@media screen and (min-width: 475px) {
    .nav{
        width: 50%;
    }
}


/* @media screen and (min-width: 880px) {
    img {
        width: auto;
        height: auto;
    } */

    .row {
        flex-direction: row;
    }

    .col-50 {
        width: 50%;
    }

    .col-48 {
        width: 48%;
    }

    .nav {
        position: static;
        height: auto;
        width: auto;
        background: none;
    }

    #open-btn {
        display: none;
    }

    .nav-link a {
        color: var(--text-color);
    }

    .main-text {
        max-width: 45%;
        margin: 0;
        text-align: start;
    }

    .main-text h1 {
        font-size: 48px;
    }

    /* .cards {
        grid-template-columns: repeat(3, 1fr);
    } */
    .info-inputs{
        flex-direction: column;
    }

    .contact-info{
    align-self: center;
    }



.btn {
    padding: .325rem 1rem;
    margin: 1.5rem 0;
    border: none;
    background-color: var(--btn-bg-color);
    color: var(--text-color);
    font-weight: 500;
    font-size: 1rem;
    cursor: pointer;

}

.btn:hover {
    padding: .325rem 2rem;
    transition: .4s;
    color: #000;
}
/*cart*/
.cart table {
    width: 100%;
    border-collapse:collapse;
}

.cart .p_info{
    display:flex;
    flex-wrap:warp;
}

.cart th{
    text-align: left;
    padding: 5px 10px;
    background-color: gray;
    
}

.cart td {
    padding:10px 20px;
}

.cart td img{
    width: 80px;
    height:80px;
    margin-right:10px
}

.cart td input{
    width:40px;
    height: 30px;
    padding:5px;
}

.cart td a{
    color:orange;
}

.cart .remove{
    color: orange;
}

.cart .edit-btn{
    color:orange;
    text-decoration:none;
}

.cart .p_info p {
    margin:3px;
}

.cart_total {
    display:flex;
    justify-content:flex-end;
}

.cart_total table {
    width:100%;
    max-width:500px;
    border-top: 3px solid orange;
}

td:last-child {
    text-align:right;
}

th:last-child {
    text-align:right;
}

.btn-cont {
    display: flex;
    justify-content:flex-end;

}

    </style>
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

    
    <section style="margin-top:150px;" class="cart container my-5 py-5">
        <div class="container mt-5">
            <h2>Your cart</h2>
        </div>
        
        <table style="color:white;" class="mt-5 pt-5">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>

            <?php foreach($_SESSION['cart'] as $key => $value){ ?>
            <tr>

                <td><div class="p_info">
                <img src="./images/<?php echo $value['item_img'];?>">
                <div>
                <p><?php echo $value['item_name'];?></p>
                <small><span><?php echo $value['item_price'];?></span></small><br>
                <a class="remove-btn" href="">remove</a>
            </div>
        </div>
            </td>
            <td>
            <input type="number" value="<?php echo $value['item_quantity'];?>">
            <a class="edit-btn" href="">edit</a>
            </td>

            <td>
                <span>$</span>
                <span class="price"><?php echo $value['item_price'] ?></span>
            </td>
            </tr>
            
            <?php } ?>

        </table>


        <div style="color:white; " class="cart_total">
            <table>
                <tr>
                <td>Subtotal</td>
                <td>155JD</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>1000JD</td>
                </tr>
            </table>
        </div>

        <div class="btn-cont">
        <button class="btn checkout_btn">Checkout</button>
        </div>
    </section>


            <!-- ==================FOOTER======================= -->
    <footer  class="footer">
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