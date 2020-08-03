<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/post_responsive.css">
    <title>ESCAPERS | Home</title>
</head>

<body>


    <!-- Header -->

    <?php include "HeaderFooter/header.php"; ?>



    <!-- Home -->

    <div class="home">
        <div class="home_background" style="background-image:url(images/boat.jpg)"></div>
        <div class="home_content">
            <div class="home_content_inner">
                <div class="home_text_large">ESCAPERS</div>
                <div class="home_text_small">Go beyond</div>
            </div>
        </div>
    </div>

    <!-- Find Form -->

    <div class="find">
        <div class="find_background parallax-window" data-parallax="scroll" data-image-src="images/find.jpg"
            data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="find_title text-center">Find the Adventure of a lifetime</div>
                </div>
                <div class="col-12">
                    <div class="find_form_container">
                        <form action="#" id="find_form"
                            class="find_form d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-between justify-content-start flex-wrap">
                            <div class="find_item">
                                <div>Destination:</div>
                                <input type="text" class="destination find_input" required="required"
                                    placeholder="Keyword here">
                            </div>
                            <div class="find_item">
                                <div>Adventure type:</div>
                                <select name="adventure" id="adventure" class="dropdown_item_select find_input">
                                    <option>Categories</option>
                                    <option>Categories</option>
                                    <option>Categories</option>
                                </select>
                            </div>
                            <div class="find_item">
                                <div>Min price</div>
                                <select name="min_price" id="min_price" class="dropdown_item_select find_input">
                                    <option>&nbsp;</option>
                                    <option>Price</option>
                                    <option>Price</option>
                                </select>
                            </div>
                            <div class="find_item">
                                <div>Max price</div>
                                <select name="max_price" id="max_price" class="dropdown_item_select find_input">
                                    <option>&nbsp;</option>
                                    <option>Price</option>
                                    <option>Price</option>
                                </select>
                            </div>
                            <button class="button find_button">Find</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Places -->

    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h2>Featured Places</h2>
                        <div>take a look at these places</div>
                    </div>
                </div>
            </div>
            <div class="row top_content">

                <div class="col-lg-3 col-md-6 top_col">

                    <!-- Top Destination Item -->
                    <div class="top_item">
                        <a href="#">
                            <div class="top_item_image"><img src="images/top_1.jpg"
                                    alt="https://unsplash.com/@sgabriel"></div>
                            <div class="top_item_content">
                                <div class="top_item_text">Inani, CoxBazar</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 top_col">

                    <!-- Top Destination Item -->
                    <div class="top_item">
                        <a href="#">
                            <div class="top_item_image"><img src="images/top_2.jpg"
                                    alt="https://unsplash.com/@jenspeter"></div>
                            <div class="top_item_content">
                                <div class="top_item_text">Sajek Vally</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 top_col">

                    <!-- Top Destination Item -->
                    <div class="top_item">
                        <a href="#">
                            <div class="top_item_image"><img src="images/top_3.jpg"
                                    alt="https://unsplash.com/@anikindimitry"></div>
                            <div class="top_item_content">
                                <div class="top_item_text">Kaptail Lake, Rangamati</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 top_col">

                    <!-- Top Destination Item -->
                    <div class="top_item">
                        <a href="#">
                            <div class="top_item_image"><img src="images/top_4.jpg"
                                    alt="https://unsplash.com/@hellolightbulb"></div>
                            <div class="top_item_content">
                                <div class="top_item_text">Kantajir Temple, Dinajpur</div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Posts -->

    <div class="news">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h2>Recent Post</h2>
                        <div>Find out our best deal.</div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">

                <!-- Post Posts -->
                <div class="col-lg-9">
                    <div class="post_posts">

                        <!-- Post Post -->
                        <?php
                           include_once "Backend\connection.php";
                           $sql = "SELECT post_table.post_id, post_table.title, post_table.created_at, post_table.held_at, post_table.num_guest, post_table.places, post_table.cost, post_table.tour_type, post_table.post, users.f_name, users.l_name, users.u_id  FROM post_table INNER JOIN users ON post_table.u_id = users.u_id";
                           $result = mysqli_query($conn, $sql);

                           if (mysqli_num_rows($result) > 0) {
                             // output data of each row
                             while($row = mysqli_fetch_assoc($result)) {
                               echo ' <div class="post_post">
                                   <div class="post_title"><a href="/posts?id='.$row['post_id'].'">'.$row['title'].'</a></div>
                                   <div class="post_meta">
                                       <ul>
                                           <li><a href="/users?id='.$row['u_id'].'">by ' . $row['f_name'] . " " . $row['l_name'] . '</a></li>
                                           <li>'.$row['created_at'].'</li>
                                           <li>'.$row['places'].'</li>
                                           <li>'.$row['cost'].' Taka</li>
                                           <li>'.$row['tour_type'].'</li>
                                       </ul>
                                   </div>
                                   <div class="post_text">
                                       <p>'.$row['post'].'</p>
                                   </div>
                               </div> ';
                             }
                           } else {
                             echo "0 results";
                           }
                         ?>

                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="sidebar_search">
                            <input type="search" class="sidebar_search_input" placeholder="Search">
                        </div>

                        <!-- Featured Posts -->
                        <div class="sidebar_featured">
                            <h3>Sponsored Posts</h3>

                            <!-- Featured Post -->
                            <div class="sidebar_featured_post">
                                <div class="sidebar_featured_image"><img src="images/sidebar_featured_1.jpg" alt="">
                                </div>
                                <div class="sidebar_featured_title"><a href="#">Top destinations in Europe</a></div>
                                <div class="sidebar_featured_meta">
                                    <ul>
                                        <li><a href="#">by admin</a></li>
                                        <li>january 31, 2018</li>
                                        <li><a href="#">3 comments</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Featured Post -->
                            <div class="sidebar_featured_post">
                                <div class="sidebar_featured_image"><img src="images/sidebar_featured_2.jpg" alt="">
                                </div>
                                <div class="sidebar_featured_title"><a href="#">Best beaches in the world</a></div>
                                <div class="sidebar_featured_meta">
                                    <ul>
                                        <li><a href="#">by admin</a></li>
                                        <li>january 31, 2018</li>
                                        <li><a href="#">3 comments</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Featured Post -->
                            <div class="sidebar_featured_post">
                                <div class="sidebar_featured_image"><img src="images/sidebar_featured_3.jpg" alt="">
                                </div>
                                <div class="sidebar_featured_title"><a href="#">Best beaches in the world</a></div>
                                <div class="sidebar_featured_meta">
                                    <ul>
                                        <li><a href="#">by admin</a></li>
                                        <li>january 31, 2018</li>
                                        <li><a href="#">3 comments</a></li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                        <!-- Offers -->
                        <div class="sidebar_offers">

                            <!-- Offer -->
                            <div class="sidebar_offer">
                                <div class="sidebar_offer_background" style="background-image:url(images/offer_1.jpg)">
                                </div>
                                <div class="sidebar_offer_content">
                                    <div class="sidebar_offer_destination">bali</div>
                                    <div class="sidebar_offer_percent">38%</div>
                                    <div class="sidebar_offer_title">Last Minute Offer</div>
                                    <div class="sidebar_offer_text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit.
                                        Integer pulvinar sed mauris.</div>
                                    <div class="sidebar_offer_button"><a href="offers.html">See Offer</a></div>
                                </div>
                            </div>

                            <!-- Offer -->
                            <div class="sidebar_offer">
                                <div class="sidebar_offer_background" style="background-image:url(images/offer_2.jpg)">
                                </div>
                                <div class="sidebar_offer_content">
                                    <div class="sidebar_offer_destination">bali</div>
                                    <div class="sidebar_offer_percent">25%</div>
                                    <div class="sidebar_offer_title">Last Minute Offer</div>
                                    <div class="sidebar_offer_text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit.
                                        Integer pulvinar sed mauris.</div>
                                    <div class="sidebar_offer_button"><a href="offers.html">See Offer</a></div>
                                </div>
                            </div>

                        </div>

                        <!-- Sidebar Quote -->
                        <div class="sidebar_quote">
                            <div class="quote_box"><img src="images/quote.png" alt=""></div>
                            <div class="quote_text"><span>“Traveling</span> – it leaves you speechless, then turns you
                                into
                                a storyteller.”</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/custom.js"></script>


</body>

</html>
