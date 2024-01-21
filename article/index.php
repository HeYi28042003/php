<!DOCTYPE html>
<html lang="en">
<?php include('funtion.php') ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- -------------------- meta name title ------------  -->
    <title>RESTAURANT</title>
    <meta name="title" content="RESTAURANT">
    <meta name="description" content="RESTAURANT description .........">

    <!-- --------------- link logo ------------------- -->
    <link rel="shshortcut icon" href="../article/assets/img/logo1.png">

    <!-- ----------------------- link icons ----------------------------- -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script src="../article/assets/script/js/filter3.js" defer></script>

    <!-- -------------- link css --------------------- -->
    <link rel="stylesheet" href="../article/assets/css/loading_screen.css">
    <link rel="stylesheet" href="../article/assets/css/style.css">
    <link rel="stylesheet" href="../article/assets/css/slides.css">

    <!-- -------------- link js --------------------- -->
    <!-- <script src="/js/filter2.js" defer></script> -->

    <!-- -------------- link google fonts ------------------ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> -->

    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Pacifico&display=swap" rel="stylesheet">

</head>

<body>
    

    <!-- loading screen -->

    <!-- <div id="contaner_load">
        <div class="img_load">
            <img src="/article/assets/img/restaurent_v_001-01.png" alt="">
        </div>
        <div class="loader_box">
            <div class="load_box">
                <div class="line_boxx"></div>
            </div>
        </div>
    </div> -->

    <!-- ----------------------------------- navbar-------------------------- -->
    <header class="header">
        <a href="#" class="logo">
            <img src="../admin/assets/icon/<?php get_logo() ?>">
        </a>

        <nav class="navbar">
            <a href="#home" class="active">HOME</a>
            <a href="#about">ABOUT</a>
            <a href="#menu">MENU</a>
            <a href="#ourchef">OUR CHEF</a>
            <a href="#gallery">GALLERY</a>
            <a href="#blog">BLOG</a>
            <a href="#contact">CONTACT</a>
            <a1 href="page/form_book.php" class="button">BOOK A TABLE</a1>
        </nav>
        <div class="toggle_btn">
            <i class="fa-solid fa-bars"></i>
        </div>

        <div class="dropdown_menu">
            <a href="#home" class="active2">HOME</a>
            <a href="#about">ABOUT</a>
            <a href="#menu">MENU</a>
            <a href="#ourchef">OUR CHEF</a>
            <a href="#gallery">GALLERY</a>
            <a href="#blog">BLOG</a>
            <a href="#contact">CONTECT</a>
            <a1 href="page/form_book.php" class="button">BOOK A TABLE</a1>
        </div>

    </header>



    <!-- ----------------------------------- home page ------------------------------------ -->

    <section class="home" id="home">

        <div class="home_page">
            <h4>___ Delicious Food</h4>
            <h2>Being The <span1 class="multiple_text"></span1>
            </h2>
            <p>Tasty, delicious food ready in restaurant. We respect your test review.</p>

            <a href="#menu" class="button">LEARN MORE</a>
        </div>
        <div class="btn_bottom">
            <a href="#about"><i class='bx bx-chevron-down'></i></a>
        </div>

    </section>


    <!-- ----------------------------------- about page ------------------------------------ -->
    <section class="about" id="about">

        <div class="ab_text_img">
            <div class="ab_img">
                <img src="../article/assets/img/84569.jpg" alt="">
            </div>
            <div class="ab_text">
                <h4>___ Unique story</h4>
                <p>Restaurant food dolor sit amet, consectetur adipisicing elit, sed do eiusmod eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat olore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation Duis aute irure dolor in reprehenderit in voluptate.<br><br>Cafe ut perspiciatis unde omnis iste natus error sit voluptatem totam rem aperiam, eaque ipsa quae ab illo inventore veritatis dicta sunt explicabo.</p>
                <a href="#" class="button">BOOK NOW</a>
            </div>
        </div>
        <div class="ab_serivces">
            <div class="ab_ser">
                <i class="fa-solid fa-champagne-glasses"></i>
                <h5>PRIVATE EVENTS</h5>
                <p>We provide best and fresh quality foods. We also gives you required signature dishes.</p>
            </div>
            <div class="ab_ser">
                <i class="fa-solid fa-utensils"></i>
                <h5>DELICIOUS FOODS</h5>
                <p>We provide best and fresh quality foods. We also gives you required signature dishes.</p>
            </div>
            <div class="ab_ser">
                <i class='bx bx-food-menu'></i>
                <h5>ONLINE ORDER</h5>
                <p>We provide best and fresh quality foods. We also gives you required signature dishes.</p>
            </div>
            <div class="ab_ser">
                <i class="fa-solid fa-truck"></i>
                <h5>FREE DELIVERY</h5>
                <p>We provide best and fresh quality foods. We also gives you required signature dishes.</p>
            </div>
        </div>

    </section>

    <!-- ----------------------------------- menu page ------------------------------------ -->
    <section class="menu" id="menu">

        <div class="top_menu">
            <h4>___ Discover our popular dishes</h4>
            <h2>OUR MENU</h2>
        </div>
        <div class="btn_menu" id="filter-buttons">
            <button class="active" data-filter="all">SHOW ALL</button>
            <button data-filter="brf">BREAKFAST</button>
            <button data-filter="spe">SPECIAL</button>
            <button data-filter="lun">LUNCH</button>
            <button data-filter="sna">SNACKS</button>
            <button data-filter="din">DINNER</button>
        </div>
        <div class="object" id="filterable-cards">
            <div class="card ob_box" data-name="brf">
                <h3>Bissell Breakfast</h3>
                <h5>Cafe ut restaurants unde omnis iste natus error sit voluptatem totam rem aperiam, eaque illo inventore veritatis.</h5>
                <div class="price">
                    <h2>INGREDIENTS</h2>
                    <p>20$</p>
                </div>
            </div>
            <div class="card ob_box" data-name="brf">
                <h3>Francisco Benedictf</h3>
                <h5>Cafe ut restaurants unde omnis iste natus error sit voluptatem totam rem aperiam, eaque illo inventore veritatis</h5>
                <div class="price">
                    <h2>INGREDIENTS</h2>
                    <p>70$</p>
                </div>
            </div>
            <div class="card ob_box" data-name="brf">
                <h3>Protein Breakfast</h3>
                <h5>Cafe ut restaurants unde omnis iste natus error sit voluptatem totam rem aperiam, eaque illo inventore veritatis.</h5>
                <div class="price">
                    <h2>INGREDIENTS</h2>
                    <p>99$</p>
                </div>
            </div>
            <div class="card ob_box" data-name="brf">
                <h3>Chicken and Waffle</h3>
                <h5>Cafe ut restaurants unde omnis iste natus error sit voluptatem totam rem aperiam, eaque illo inventore veritatis.</h5>
                <div class="price">
                    <h2>INGREDIENTS</h2>
                    <p>50$</p>
                </div>
            </div>
            <div class="card ob_box" data-name="brf">
                <h3>Cake Benedictc</h3>
                <h5>Cafe ut restaurants unde omnis iste natus error sit voluptatem totam rem aperiam, eaque illo inventore veritatis.</h5>
                <div class="price">
                    <h2>INGREDIENTS</h2>
                    <p>87$</p>
                </div>
            </div>
            <div class="card ob_box" data-name="spe">
                <h3>Garden Salad</h3>
                <h5>Cafe ut restaurants unde omnis iste natus error sit voluptatem totam rem aperiam, eaque illo inventore veritatis.</h5>
                <div class="price">
                    <h2>INGREDIENTS</h2>
                    <p>10$</p>
                </div>
            </div>
            <div class="card ob_box" data-name="spe">
                <h3>Turkey Pot Pie</h3>
                <h5>Cafe ut restaurants unde omnis iste natus error sit voluptatem totam rem aperiam, eaque illo inventore veritatis.</h5>
                <div class="price">
                    <h2>INGREDIENTS</h2>
                    <p>30$</p>
                </div>
            </div>
            <div class="card ob_box" data-name="spe">
                <h3>Vegetarian Sandwich</h3>
                <h5>Cafe ut restaurants unde omnis iste natus error sit voluptatem totam rem aperiam, eaque illo inventore veritatis.</h5>
                <div class="price">
                    <h2>INGREDIENTS</h2>
                    <p>89$</p>
                </div>
            </div>
            <div class="card ob_box" data-name="spe">
                <h3>Real Mashed Potatoes</h3>
                <h5>Cafe ut restaurants unde omnis iste natus error sit voluptatem totam rem aperiam, eaque illo inventore veritatis.</h5>
                <div class="price">
                    <h2>INGREDIENTS</h2>
                    <p>20$</p>
                </div>
            </div>
            <div class="card ob_box" data-name="lun">
                <h3>Grilled Zucchini</h3>
                <h5>Cafe ut restaurants unde omnis iste natus error sit voluptatem totam rem aperiam, eaque illo inventore veritatis.</h5>
                <div class="price">
                    <h2>INGREDIENTS</h2>
                    <p>69$</p>
                </div>
            </div>
            <div class="card ob_box" data-name="lun">
                <h3>Chicken With Pears</h3>
                <h5>Cafe ut restaurants unde omnis iste natus error sit voluptatem totam rem aperiam, eaque illo inventore veritatis.</h5>
                <div class="price">
                    <h2>INGREDIENTS</h2>
                    <p>24$</p>
                </div>
            </div>
            <div class="card ob_box" data-name="lun">
                <h3>Crumb Broccoli</h3>
                <h5>Cafe ut restaurants unde omnis iste natus error sit voluptatem totam rem aperiam, eaque illo inventore veritatis.</h5>
                <div class="price">
                    <h2>INGREDIENTS</h2>
                    <p>35$</p>
                </div>
            </div>
            <div class="card ob_box" data-name="sna">
                <h3>Broccoli Balls</h3>
                <h5>Cafe ut restaurants unde omnis iste natus error sit voluptatem totam rem aperiam, eaque illo inventore veritatis.</h5>
                <div class="price">
                    <h2>INGREDIENTS</h2>
                    <p>10$</p>
                </div>
            </div>
            <div class="card ob_box" data-name="sna">
                <h3>Momos</h3>
                <h5>Cafe ut restaurants unde omnis iste natus error sit voluptatem totam rem aperiam, eaque illo inventore veritatis.</h5>
                <div class="price">
                    <h2>INGREDIENTS</h2>
                    <p>34$</p>
                </div>
            </div>
            <div class="card ob_box" data-name="sna">
                <h3>Chicken Poppers</h3>
                <h5>Cafe ut restaurants unde omnis iste natus error sit voluptatem totam rem aperiam, eaque illo inventore veritatis.</h5>
                <div class="price">
                    <h2>INGREDIENTS</h2>
                    <p>23$</p>
                </div>
            </div>
            <div class="card ob_box" data-name="din">
                <h3>Pork Medallions</h3>
                <h5>Cafe ut restaurants unde omnis iste natus error sit voluptatem totam rem aperiam, eaque illo inventore veritatis.</h5>
                <div class="price">
                    <h2>INGREDIENTS</h2>
                    <p>23$</p>
                </div>
            </div>
            <div class="card ob_box" data-name="din">
                <h3>Spicy Tropical</h3>
                <h5>Cafe ut restaurants unde omnis iste natus error sit voluptatem totam rem aperiam, eaque illo inventore veritatis.</h5>
                <div class="price">
                    <h2>INGREDIENTS</h2>
                    <p>47$</p>
                </div>
            </div>
            <div class="card ob_box" data-name="din">
                <h3>Focaccia</h3>
                <h5>Cafe ut restaurants unde omnis iste natus error sit voluptatem totam rem aperiam, eaque illo inventore veritatis.</h5>
                <div class="price">
                    <h2>INGREDIENTS</h2>
                    <p>69$</p>
                </div>
            </div>
        </div>




    </section>

    <!-- ----------------------------------- our chef page ------------------------------------ -->
    <section class="ourchef" id="ourchef">

        <div class="top_ourchef">
            <h4>___ Our expert</h4>
            <h2>MEET OUR CHEF</h2>
        </div>

        <div class="slider">
            <div class="list_slider">
                <div class="item_slider activee">
                    <div class="text_item">
                        <h3>BROSSPICH</h3>
                        <h6>EXECUTUVE CHEF</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lara Croft.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lara Croft.</p>
                        <img src="../article/assets/img/bp_kha.png">
                    </div>
                    <div class="img_item">
                        <img src="../article/assets/img/brosspichimg.jpg" alt="">
                    </div>
                </div>
                <div class="item_slider">
                    <div class="text_item">
                        <h3>VANNDIN</h3>
                        <h6>EXECUTUVE CHEF</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lara Croft.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lara Croft.</p>
                        <img src="../article/assets/img/bp_kha.png">
                    </div>
                    <div class="img_item">
                        <img src="../article/assets/img/vandin.jpg" alt="">
                    </div>
                </div>
                <div class="item_slider">
                    <div class="text_item">
                        <h3>HAI</h3>
                        <h6>EXECUTUVE CHEF</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lara Croft.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lara Croft.</p>
                        <img src="../article/assets/img/bp_kha.png">
                    </div>
                    <div class="img_item">
                        <img src="../article/assets/img/hai__001_01.jpg" alt="">
                    </div>
                </div>
                <div class="item_slider">
                    <div class="text_item">
                        <h3>YI</h3>
                        <h6>EXECUTUVE CHEF</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lara Croft.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lara Croft.</p>
                        <img src="../article/assets/img/bp_kha.png">
                    </div>
                    <div class="img_item">
                        <img src="../article/assets/img/yi_pic.JPG" alt="">
                    </div>
                </div>
                <div class="item_slider">
                    <div class="text_item">
                        <h3>PANNY</h3>
                        <h6>EXECUTUVE CHEF</h6>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lara Croft.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lara Croft.</p>
                        <img src="../article/assets/img/bp_kha.png">
                    </div>
                    <div class="img_item">
                        <img src="../article/assets/img/panny_pic.jpg" alt="">
                    </div>
                </div>

                <div class="navigation_slider">
                    <div class="btn_slider activee"></div>
                    <div class="btn_slider"></div>
                    <div class="btn_slider"></div>
                    <div class="btn_slider"></div>
                    <div class="btn_slider"></div>
                </div>
            </div>
        </div>


    </section>

    <!-- ----------------------------------- gallery page ------------------------------------ -->
    <section class="gallery" id="gallery">

        <div class="top_gallery">
            <h4>___ Discover our popular dishes</h4>
            <h2>FOOD GALLERY</h2>
        </div>

        <div class="item_galleryy">
            <div class="item_gallery">
                <div class="gallery_box">
                    <img src="../article/assets/img/0001.jpg" alt="">
                    <div class="gallery_layer">
                        <i class='bx bx-search'></i>
                        <p>Bissell Breakfast</p>
                    </div>
                </div>

                <div class="gallery_box">
                    <img src="../article/assets/img/0002_2.jpg" alt="">
                    <div class="gallery_layer">
                        <i class='bx bx-search'></i>
                        <p>Francisco Benedictf</p>
                    </div>
                </div>

                <div class="gallery_box">
                    <img src="../article/assets/img/0003_3.jpg" alt="">
                    <div class="gallery_layer">
                        <i class='bx bx-search'></i>
                        <p>Protein Breakfast</p>
                    </div>
                </div>

                <div class="gallery_box">
                    <img src="../article/assets/img/0005_5.jpg" alt="">
                    <div class="gallery_layer">
                        <i class='bx bx-search'></i>
                        <p>Garden Salad</p>
                    </div>
                </div>

                <div class="gallery_box">
                    <img src="../article/assets/img/0006_6.jpg" alt="">
                    <div class="gallery_layer">
                        <i class='bx bx-search'></i>
                        <p>Vegetarian Sandwich</p>
                    </div>
                </div>

                <div class="gallery_box">
                    <img src="../article/assets/img/0007_7.jpg" alt="">
                    <div class="gallery_layer">
                        <i class='bx bx-search'></i>
                        <p>Grilled Zucchini</p>
                    </div>
                </div>

                <div class="gallery_box">
                    <img src="../article/assets/img/0008_8.jpg" alt="">
                    <div class="gallery_layer">
                        <i class='bx bx-search'></i>
                        <p>Chicken With Pears</p>
                    </div>
                </div>

                <div class="gallery_box">
                    <img src="../article/assets/img/0009_9.jpg" alt="">
                    <div class="gallery_layer">
                        <i class='bx bx-search'></i>
                        <p>Broccoli Balls</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="botton_gallery">
            <h4>___ Testimonials</h4>
            <h2>WHAT OUR CUSTOMERS SAY</h2>
            <h1>"</h1>
            <p>Laudantium, oloremquetotam rem aperiam, eaque ipsa quae ab illo inventore veritatis quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem Nemo enim ipsam voluptatem Nemo enim ipsam voluptatem.<br><br>By:<br><br>
            <h4>BROSSPICH , VANNDIN , HAI , YI and PANNY</h4>
            </p>
            <!-- <h1>"</h1> -->
        </div>

    </section>

    <!-- ----------------------------------- blog page ------------------------------------ -->
    <section class="blog" id="blog">
        <div class="top_blog">
            <h4>___ Latest news</h4>
            <h2>OUR BLOG</h2>
        </div>

        <div class="con_blog">
            <div class="contan_blog">
                <div class="box_blog">
                    <img src="../article/assets/img/couple1.jpg" alt="">
                    <a href="#">Couple Having Dinner</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <a href="#">Read More</a>
                </div>

                <div class="box_blog">
                    <img src="../article/assets/img/merlin1.jpg" alt="">
                    <a href="#">The Bext Foods</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <a href="#">Read More</a>
                </div>

                <div class="box_blog">
                    <img src="../article/assets/img/cover_pexels1.jpg" alt="">
                    <a href="#">Working In The Chickin</a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        </div>

        <!-- <div class="botton_blog">
            <h4>We also provide catering services</h4>
            <div class="p_b_blog">
                <p>We provide best and fresh quality foods. We also gives you required signature dishes.</p>
            </div>
            <a href="/page/form_book.html" class="button">BOOK SERVICES</a>
        </div> -->

    </section>

    <!-- ----------------------------------- contect page ------------------------------------ -->
    <section class="contact" id="contact">

        <div class="top_contact">
            <h4>___ Location Time & Socail Media</h4>
            <h2>OUR CONTACT</h2>
        </div>
        <div class="location_map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1821.7870128411669!2d104.87676768692239!3d11.565490813172476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310951bda7605819%3A0x486ccc7172c58a93!2sNational%20Institute%20of%20Enterpreneurship%20and%20Innovation!5e0!3m2!1sen!2skh!4v1704473986073!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="text_contact">
            <div class="text_contact1">
                <h3>Address</h3>
                <p>Russian Blvd, Touk Thla,<br>Phnom Penh, Cambodia.</p>
            </div>
            <div class="text_contact2">
                <h3>Timing</h3>
                <p>Monday - Friday 7:00 AM - 5:00 PM<br>Saturday - Sunday Closed</p>
            </div>
            <div class="text_contact3">
                <h3>Contact</h3>
                <p>(+855)23 642 4499<br>niei.tvet@gmail.com</p>
            </div>
        </div>
        <div class="color_botton_contact">
            <div class="botton_contact">
                <h4>CONTECT US : </h4>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class='bx bxl-youtube'></i></a>
                <a href="#"><i class='bx bxl-tiktok'></i></a>
                <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class='bx bxl-telegram'></i></a>
            </div>
        </div>

    </section>




    <!-- ----------------------------------- contect page ------------------------------------ -->
    <footer class="footer_page">
        <div class="footer_text_img">
            <p>2023 &copy; RESTAURANT POWERED BY : </p>
            <a href="#"><span>BROSSPICH</span></a>
            <p> X </p>
            <a href="#"><span>VANNDIN</span></a>
            <p> X </p>
            <a href="#"><span>HAI</span></a>
            <p> X </p>
            <a href="#"><span>YI</span></a>
            <p> X </p>
            <a href="#"><span>PANNY</span></a>
        </div>
        <!-- <div class="footer_socail">
            <p>CONTECT US : </p>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class='bx bxl-youtube' ></i></a>
            <a href="#"><i class='bx bxl-tiktok' ></i></a>
            <a href="#"><i class='bx bxl-instagram-alt' ></i></a>
            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
            <a href="#"><i class='bx bxl-telegram'></i></a>
        </div> -->
    </footer>


    <!-- ----------------------------------- script js ------------------------------ -->

    <!-- <script src="/js/filter.js"></script> -->

    <script src="../article/assets/script/js/slider.js"></script>

    <script src="../article/assets/script/js/button_ripple.js"></script>

    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <script src="../article/assets/script/js/main.js"></script>

    <!-- <script src="/js/loadinggg.js"></script> -->



</body>

</html>