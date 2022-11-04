<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resturant website</title>
    <link rel = "stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel = "stylesheet" type="text/css" href="style2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

</head>
<body>
    <header>
        <a href="#" class=" logo">
            <img src="logo.png" alt="xyz">
        </a>

        <nav class="navbar">
            <a href="#home" class="active">home</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#team">team</a>
            <a href="#reservation">reservation</a>
            <a href="#blog">blog</a>
            <?php
                session_start();
                if (!isset($_SESSION['emailid'])) {
                    echo "<a href='logout.php'>logout</a>";
                }
                else{
                    echo "<a href='login.php'>login</a>";
                }
            ?>
        </nav>
        <div class="icons">
            <i class="fas fa-bars" id="menu"></i>
            <i class="fas fa-search"></i>
            <i class="fas fa-heart"></i>
            <i class="fas fa-shopping-cart"></i>
        </div>
    </header>
    <div class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper wrapper">
                <div class="swiper-slide slider slide1">
                    <div class="content">
                        <img src="crown-symbol.png">
                        <h3>
                            delicionus royate
                        </h3>
                        <h1>gift voucher</h1>
                        <p>
                            give away your beloved custemers
                        </p>
                        <a href="#" class="btn">order now</a>
                    </div>
                </div>
                <div class="swiper-slide slider slide2">
                    <div class="content">
                        <img src="crown-symbol.png">
                        <h3>
                            sale of 10% this dish
                        </h3>
                        <h1>the fresh</h1>
                        <p>
                            food resturant
                        </p>
                        <a href="#" class="btn">order now</a>
                    </div>
                </div>

                <div class="swiper-slide slider slide3">
                    <div class="content">
                        <img src="crown-symbol.png">
                        <h3>
                            we are open
                        </h3>
                        <h1>fresh fruits</h1>
                        <p>
                            you will love it
                        </p>
                        <a href="#" class="btn">order now</a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <section class="welcome" id="about">
        <h1 class="heading">welcome TO ORCHID</h1>
        <center><h3 class="sub-heading"> ~ Luxury & Quality ~ </h3></center>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="pavbhaji.jpg">
                </div>
                <div class="content">
                    <h3>
                        PROFESSIONAL LEVEL
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe cum quasi pariatur illo harum enim doloribus reiciendis placeat error, tempora assumenda nihil. Quaerat laudantium est facilis numquam dolorem, consectetur consequatur iure sed dolore soluta.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="waffle.jpg">
                </div>
                <div class="content">
                    <h3>
                        FRESH FOOD GUARANTEED
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe cum quasi pariatur illo harum enim doloribus reiciendis placeat error, tempora assumenda nihil. Quaerat laudantium est facilis numquam dolorem, consectetur consequatur iure sed dolore soluta.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="mocktail.jpg">
                </div>
                <div class="content">
                    <h3>
                       THE MENU IS PLENTIFUL
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe cum quasi pariatur illo harum enim doloribus reiciendis placeat error, tempora assumenda nihil. Quaerat laudantium est facilis numquam dolorem, consectetur consequatur iure sed dolore soluta.</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>
        </div>
    </section>
    <selection class="our-menu" id="menu">
        <h1 class="heading">our food menu</h1>
        <center><h3 class="sub-heading"> ~ see what we offer ~ </h3></center>
        <div class="menu-container">
            <div class="item">
                <div class="item-name">
                    <h2>Main Course</h2>
                    <img src="drinks.png">
                </div>
                <div class="item-body">
                    <div class="item-menu">
                        <h3>Special Kebab Sampler Veg</h3>
                        <span class="dots"></span>
                        <h3>500</h3>

                        <ul>
                            <li><a href="#">Indian</a></li>|
                            <li><a href="#">Italian</a></li>|
                            <li><a href="#">South Indian</a></li>|
                            <li><a href="#">Thai</a></li>
                        </ul>
                    </div>
                    <div class="item-menu">
                        <h3>Paneer Tikka</h3>
                        <span class="dots"></span>
                        <h3>350</h3>

                        <ul>
                            <li><a href="#">Indian</a></li>|
                            <li><a href="#">Italian</a></li>|
                            <li><a href="#">South Indian</a></li>|
                            <li><a href="#">Thai</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-name">
                    <h2>Soup & Salads</h2>
                    <img src="drinks.png">
                </div>
                <div class="item-body">
                    <div class="item-menu">
                        <h3>Tomato soup</h3>
                        <span class="dots"></span>
                        <h3>240</h3>

                        <ul>
                            <li><a href="#">Indian</a></li>|
                            <li><a href="#">Italian</a></li>|
                            <li><a href="#">South Indian</a></li>|
                            <li><a href="#">Thai</a></li>
                        </ul>
                    </div>
                    <div class="item-menu">
                        <h3>Carrot salad</h3>
                        <span class="dots"></span>
                        <h3>326</h3>

                        <ul>
                            <li><a href="#">Indian</a></li>|
                            <li><a href="#">Italian</a></li>|
                            <li><a href="#">South Indian</a></li>|
                            <li><a href="#">Thai</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="item-name">
                    <h2>Drinks</h2>
                    <img src="drinks.png">
                </div>
                <div class="item-body">
                    <div class="item-menu">
                        <h3>Monster Mocklail</h3>
                        <span class="dots"></span>
                        <h3>400</h3>

                        <ul>
                            <li><a href="#">Indian</a></li>|
                            <li><a href="#">Italian</a></li>|
                            <li><a href="#">South Indian</a></li>|
                            <li><a href="#">Thai</a></li>
                        </ul>
                    </div>
                    <div class="item-menu">
                        <h3>Green Apple Mojito</h3>
                        <span class="dots"></span>
                        <h3>220</h3>

                        <ul>
                            <li><a href="#">Indian</a></li>|
                            <li><a href="#">Italian</a></li>|
                            <li><a href="#">South Indian</a></li>|
                            <li><a href="#">Thai</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item-name">
                    <h2>Desserts</h2>
                    <img src="drinks.png">
                </div>
                <div class="item-body">
                    <div class="item-menu">
                        <h3>Gulab Jamun</h3>
                        <span class="dots"></span>
                        <h3>140</h3>

                        <ul>
                            <li><a href="#">Indian</a></li>|
                            <li><a href="#">Italian</a></li>|
                            <li><a href="#">South Indian</a></li>|
                            <li><a href="#">Thai</a></li>
                        </ul>
                    </div>
                    <div class="item-menu">
                        <h3>Beet Root Halwa</h3>
                        <span class="dots"></span>
                        <h3>226</h3>

                        <ul>
                            <li><a href="#">Indian</a></li>|
                            <li><a href="#">Italian</a></li>|
                            <li><a href="#">South Indian</a></li>|
                            <li><a href="#">Thai</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </selection>
    <section class="our-team" id="team">
        <h1 class="heading">our talented chef</h1>
        <center><h3 class="sub-heading"> ~ Experience $ Enthusiasm ~ </h3></center>
        <div class="our-chef">
            <div class="item">
                <div class="image">
                    <img src="our-chef-10.jpg">
                </div>
                <div class="chef-info">
                    <div>
                        <h3>Sanjeev Kapoor </h3>
                        <span>master chef</span>

                        <ul><li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkdin-in"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="image">
                    <img src="our-safee-1.jpg">
                </div>
                <div class="chef-info">
                    <div>
                        <h3>Vikas Khanna</h3>
                        <span>master chef</span>

                        <ul><li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkdin-in"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="image">
                    <img src="our-chef-8.jpg">
                </div>
                <div class="chef-info">
                    <div>
                        <h3> Kunal Kapur</h3>
                        <span>master chef</span>

                        <ul><li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkdin-in"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="reservation" id="reservation">
        <div class="image"></div>
        <div class="form">
            <h1 class="heading">book a table</h1>
            <center><h3 class="sub-heading"> ~ Check out our place ~ </h3></center>
            <form><div class="form-holder">
                <div>
                    <select>
                        <option>1 people</option>
                        <option>2 people</option>
                        <option>3 people</option>
                        <option>4 people</option>
                    </select>
                    <input type="text" name="" placeholder="Time">
                    <input type="text" name="" placeholder="Phone">
                </div>
                <div>
                    <input type="text" name="" placeholder="Date">
                    <input type="text" name="" placeholder="Name">
                    <input type="email" name="" placeholder="email">
                </div>
            </div>
            <center><a href="#" class="btn">Book now</a></center>
        </form>
        </div>
    </div>
    <section class="blog welcome" id="blog">
        <h1 class="heading">latest news</h1>
        <center><h3 class="sub-heading"> ~ Greate articles ~ </h3></center>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="post-thumb-4.jpg">
                </div>
                <div class="content">
                    <h3>PROFESSIONAL LEVEL</h3>
                    <P>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate omnis, iste vero similique aliquam facilis autem minima necessitatibus, consectetur quo veniam fuga voluptatem consequuntur!</P>
                    <a href="#">READ MORE</a>
                    <img src="post-body-bg-1.png">
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="post-thumb-5.jpg">
                </div>
                <div class="content">
                    <h3>FRESH FOOD GUARANTEED</h3>
                    <P>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate omnis, iste vero similique aliquam facilis autem minima necessitatibus, consectetur quo veniam fuga voluptatem consequuntur!</P>
                    <a href="#">READ MORE</a>
                    <img src="post-body-bg-2.png">
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="post-thumb-6.jpg">
                </div>
                <div class="content">
                    <h3>THE MENU IS PLENTIFUL</h3>
                    <P>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate omnis, iste vero similique aliquam facilis autem minima necessitatibus, consectetur quo veniam fuga voluptatem consequuntur!</P>
                    <a href="#">READ MORE</a>
                    <img src="post-body-bg-3.png">
                </div>
            </div>
        </div>

    </section> 
    <selection class="footer">
        <!-- <img src="logo.png" class="logo"> -->
        <div class="container">
            <div>
                <h3>ABOUT US</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div>
                <h3>GET NEWS & OFFERS</h3>
                <input type="email" name="" placeholder="enter your email">
                <ul>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-linkdin-in"></i></a></li>
                </ul>
            </div>
            <div>
                <h3>CONTACT US</h3>
                <span>The Orchid</span>
                <span>+ (91) 8122556688</span>
                <span>orchid001@gmail.com</span>
                <span>www.theorchid.in</span>
            </div>
        </div>
        <p>&copy;2002 Reserved by creative</p>
    </selection>
    <a href="#"><button class="topbtn"><i class="fa-solid fa-angle-up"></i></button></a>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".home-slider", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        loop:true,
      });
    </script>
    <script type="text/javascript">
        let menu = document.querySelector('#menu');
        let navbar = document.querySelector('.navbar');

        menu.onclick = () =>{
            menu.classList.toggle('fa-times');
            navbar.classList.toggle('active');

        }
    </script>
</body>
</html>