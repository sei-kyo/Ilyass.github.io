<?php

session_start();

require_once('CreateDb.php');

require_once('component.php');

$database= new CreateDb(dbname:"Productdb",tablename:"Producttb");

if(isset($_POST['add'])){
    print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="Images/Logo1.png">

    <title>GamerShop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Styles.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comforter&
    family=Dancing+Script:wght@400;500;600;700&
    family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/f5d632692c.js" crossorigin="anonymous"></script>

</head>
<body>

    <!--PROJECT:site e-commerce
        Gr:B
        Nom & prenom:Ilyass Aissaoui , Mohammed Tabibi-->

    <header>

        <Nav id="navbar-header" style="top:0">
            <div class="container" style="display: flex;
            justify-content: space-between;align-items: center;">
                <div  id="inline-nav-element" >
                <a href="index.html" class="no-decoration-link">
                    <img src="Images/Logo1.png" alt="Logo" class="brand-logo">
                    <h1 class="brand-name">GamerShop</h1>
                </a>
                </div>
                <div>
                <div class="home"id="inline-nav-element">
                    <a href="index.html" class="no-decoration-link active" >Home</a>
                </div>
                <div class="nav-element" id="inline-nav-element">
                    <a href="all-games.html" class="no-decoration-link" >Shop</a>
                    <ul id="submenu">
                        <li style="list-style: none;padding-top: 5px;border-bottom:solid 1px #000 ;"><a href="all-games.html" class="no-decoration-link">Games</a></li>
                        <li style="list-style: none;"><a href="gift-cards.html" class="no-decoration-link">GiftCards</a></li>
                    </ul>
                </div>
                <div class="nav-element" id="inline-nav-element">
                    <a href="about-us.html" class="no-decoration-link" >About</a>
                </div>
                <div class="nav-element"id="inline-nav-element">
                    <a href="mailto:ilyassaissaoui711@gmail.com" class="no-decoration-link" >Contact-us</a>
                </div>
                <?php require_once ("cart-count.php"); ?>
            </div>
            </div>
        </Nav>

        <section class="welcome">
            <div class="container">
                <div class="welcome-text">
                <h4 class="text-border">best prices</h4>
                <h1 class="text-border"><span class="text-border"id="brand-name-font">GamerShop</span> Oujda</h1>
                <h2 class="text-border">The Best Store For Games</h2>
                <p class="text-border">deals up to <span class="text-border"id="green-text">-50%</span></p>
                </div>
            </div>
        </section>
    </header>

    <main style="padding-top:10px;">
        <section class="container best-sale">
            <h3>Top sellers</h3>
            <h4>Browse the most popular video games.</h4>

            <section class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide card" style="width: 302px;">
                        <div class="card-image">
                            <a href="diablo4.html"><img src="Images/diablo.webp" alt="diablo 4 cover"></a>
                        </div>
                        <div class="card-content">
                            <a href="diablo4.html" class="no-decoration-link"><h4>Diablo IV</h4></a>
                        </div>
                        <div class="card-button">
                            <p>699.99MAD</p><button type="submit" name="add">Buy <i class="fa-solid fa-bag-shopping"></i></button>
                        </div>
                    </div>

                    <div class="swiper-slide card">
                        <div class="card-image">
                            <a href="re4.html"><img src="Images/re4.webp" alt="Resident Evil 4 cover"></a>
                        </div>
                        <div class="card-content">
                            <a href="re4.html" class="no-decoration-link"><h4>Resident Evil 4</h4></a>
                        </div>
                        <div class="card-button">
                            <p>599.99MAD</p><button type="submit" name="add">Buy <i class="fa-solid fa-bag-shopping"></i></button>
                        </div>
                    </div>

                    <div class="swiper-slide card">
                        <div class="card-image">
                            <a href="hogwartsl.html"><img src="Images/Hogwarts-Legacy.webp" alt="Hogwarts Legacy cover"></a>
                        </div>
                        <div class="card-content">
                            <a href="hogwartsl.html" class="no-decoration-link"><h4>Hogwarts Legacy</h4></a>
                        </div>
                        <div class="card-button">
                            <p>599.99MAD</p><button type="submit" name="add">Buy <i class="fa-solid fa-bag-shopping"></i></button>
                        </div>
                    </div>

                    <div class="swiper-slide card">
                        <div class="card-image">
                            <a href="elden-ring.html"><img src="Images/elden-ring.jpg" alt="elden ring cover"></a>
                        </div>
                        <div class="card-content">
                            <a href="elden-ring.html" class="no-decoration-link"><h4>Elden Ring</h4></a>
                        </div>
                        <div class="card-button">
                            <p>599.99MAD</p><button type="submit" name="add">Buy <i class="fa-solid fa-bag-shopping"></i></button>
                        </div>
                    </div>

                    

                    <div class="swiper-slide card">
                        <div class="card-image">
                            <a href="mw2.html"><img src="Images/mw2.jpg" alt="Call of Duty: Modern Warfare 2 cover"></a>
                        </div>
                        <div class="card-content">
                            <a href="mw2.html" class="no-decoration-link"><h4>Call of Duty: Modern Warfare 2</h4></a>
                        </div>
                        <div class="card-button">
                            <p>699.99MAD</p><button type="submit" name="add">Buy <i class="fa-solid fa-bag-shopping"></i></button>
                        </div>
                    </div>
                    

                </div>
                <div class="swiper-pagination"></div>

            </section>

            <div class="discover-more"><a href="all-games.html" class="no-decoration-link">more games <i class="fa-solid fa-arrow-right"></i></a></div>
        </section>

        <section class="container gift-card" style="padding-top: 50px;">
            <a href="gift-cards.html" class="no-decoration-link"><h3>Gift Cards</h3></a>
            <h4>Gain a fast and easy access to stores and services.</h4>
            
            <section class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide card" style="width: 302px;">
                        <div class="card-image">
                            <a href="steam-20.html"><img src="Images/steam-20.jpg" alt="steam 20$ giftcard cover"></a>
                        </div>
                        <div class="card-content">
                            <a href="steam-20.html" class="no-decoration-link"><h4>Steam 20$ giftcard</h4></a>
                        </div>
                        <div class="card-button">
                            <p>200.00MAD</p><button type="submit" name="add">Buy <i class="fa-solid fa-bag-shopping"></i></button>
                        </div>
                    </div>

                    <div class="swiper-slide card">
                        <div class="card-image">
                            <a href="ps-10.html"><img src="Images/ps-10.jpg" alt="playstation 10$ giftcard cover"></a>
                        </div>
                        <div class="card-content">
                            <a href="ps-10.html" class="no-decoration-link"><h4>Playstation 10$ giftcard</h4></a>
                        </div>
                        <div class="card-button">
                            <p>100.00MAD</p><button type="submit" name="add">Buy <i class="fa-solid fa-bag-shopping"></i></button>
                        </div>
                    </div>

                    <div class="swiper-slide card">
                        <div class="card-image">
                            <a href="xbox-25.html"><img src="Images/xbox-25.jpg" alt="Xbox 25$ giftcard cover"></a>
                        </div>
                        <div class="card-content">
                            <a href="xbox-25.html" class="no-decoration-link"><h4>Xbox 25$ giftcard</h4></a>
                        </div>
                        <div class="card-button">
                            <p>250.00MAD</p><button type="submit" name="add">Buy <i class="fa-solid fa-bag-shopping"></i></button>
                        </div>
                    </div>

                    <div class="swiper-slide card">
                        <div class="card-image">
                            <a href="lol-10.html"><img src="Images/lol-10.jpg" alt="League Of Legends 10$ giftcard cover"></a>
                        </div>
                        <div class="card-content">
                            <a href="lol-10.html" class="no-decoration-link"><h4>League Of Legends 10$ giftcard</h4></a>
                        </div>
                        <div class="card-button">
                            <p>100.00MAD</p><button type="submit" name="add">Buy <i class="fa-solid fa-bag-shopping"></i></button>
                        </div>
                    </div>

                    

                    <div class="swiper-slide card">
                        <div class="card-image">
                            <a href="blizzard-20.html"><img src="Images/blizzard-20.jpg" alt="Blizzard 20$ giftcard cover"></a>
                        </div>
                        <div class="card-content">
                            <a href="blizzard-20.html" class="no-decoration-link"><h4>Blizzard 20$ giftcard</h4></a>
                        </div>
                        <div class="card-button">
                            <p>200.00MAD</p><button type="submit" name="add">Buy <i class="fa-solid fa-bag-shopping"></i></button>
                        </div>
                    </div>
                    

                </div>
                <div class="swiper-pagination"></div>

            </section>

            <div class="discover-more"><a href="gift-cards.html" class="no-decoration-link">see more <i class="fa-solid fa-arrow-right"></i></a></div>

        </section>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <script>
    var swiper = new Swiper(".mySwiper", {
    effect:"coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 10,
        stretch: -10,
        depth: 100,
        modifier: 1,
        slideShadows: true,
    },
    pagination: {
    el: ".swiper-pagination",
        },
    });
    </script>


    <footer>
        <section class="container">
            <div  style="display: flex;">
            <div class="flex-box" style="width: 30%;">
                <a href="index.html" class="no-decoration-link">
                    <img src="Images/Logo1.png" alt="Logo" class="brand-logo2">
                    <h1 class="brand-name">GamerShop</h1>
                </a>
            </div>
            <div class="information">
                <div class="flex-box">

                        <h4 style="font-weight: bold;margin-top: 10px;">Contact</h4>
                        <p><span id="green-text">Adresse: </span>mexico lazaret,Oujda</p>
                        <p><span id="green-text">Phone: </span>06 00 00 00 00</p>
                        <p><span id="green-text">Hours:</span>9:00-20:00 (GMT+1)</p>
                </div>
            </div>
            <div class="about" style="display: inline-block; width: 20%;">
                <div class="flex-box">
                    <h4 style="font-weight: bold ; margin-top: 10px;">About</h4>
                    <a href="about-us.html" class="no-decoration-link"><p style="font-size: 12px;">About us</p></a>
                    <a href="mailto:ilyassaissaoui711@gmail.com" class="no-decoration-link"><p style="font-size: 12px;">Contact us</p></a>
                </div>
            </div>
            <div>
                <h4 style="font-weight: bold ; margin-top: 10px;">Secured Payment Gateways</h4>
                <img class="payment-logo" src="Images/Visa_logo.png" alt="visa logo">
                <img class="payment-logo" src="Images/MasterCard_Logo.png" alt="master card logo" style="margin-left: 11%;">
                <img class="payment-logo" src="Images/PayPal-logo.png" alt="Paypal logo" style="margin-left: 11%;">
            </div>
        </div>
        <aside class="credit">
            <p>&#169;All rights reserved. All trademarks and registered trademarks are the property of their respective owners.</p>
            <p style="float: right;">WebSite Designed & Created By Ilyass Aissaou & Mohammed Tabibi</p>
        </aside>
        </section>
        
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>