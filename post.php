<!DOCTYPE html>
<html lang="en">

<head>
    <title>Post Your Tour Plan | ESCAPERS</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Destino project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <?php include "HeaderFooter/header.php"; ?>

        <!-- Home -->

        <div class="home">
            <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/news.jpg" data-speed="0.8"></div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_content_inner">
                                <div class="home_title">Post</div>
                                <div class="home_breadcrumbs">
                                    <ul class="home_breadcrumbs_list">
                                        <li class="home_breadcrumb">Post your tour plan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact -->

        <div class="contact">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="contact_title">Post your tour plan</div>
                        <div class="contact_subtitle">Describe your post here. Give a perfect title. Make sure you are
                            not breaking any rules</div>
                    </div>
                </div>
                <div class="row contact_content">
                    <div class="col-lg-5">
                        <div class="contact_text">
                            <p>Look at our terms and condition. Make sure you are not breaking any rules. Lorem ipsum
                                dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectus nec diam
                                auctor, ut fringilla diam sagittis. Quisque vel est id justo faucibus dapibus id a nibh.
                                Aenean suscipit consequat lacus, sit amet mollis nulla. Morbi sagittis orci id lacus
                                convallis tempus eget sit amet metus.</p>
                        </div>
                        <div class="contact_info">
                            <div class="contact_info_box">?</div>
                            <div class="contact_info_container">
                                <div class="contact_info_content">
                                    <ul>
                                        <li>Any query? Mail us or give us a phone call</li>
                                        <li>Phone: +880 999 9999 999</li>
                                        <li>Email: info@escapers.com</li>
                                    </ul>
                                </div>
                                <div class="contact_info_social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact_form_container">
                            <form action="Backend\continue_submitting_post.php" id="contact_form" class="clearfix">
                                <input name="title" class="contact_input contact_input_name" type="text" placeholder="Post title" required="required" data-error="Title is required.">
                                <input name="places" class="contact_input contact_input_name" type="text" placeholder="Places" required="required" data-error="Places are required.">
                                <input name="num_guest" class="contact_input contact_input_name" type="number" placeholder="Number of guest" required="required" data-error="Title is required.">
                                <input name="cost" class="contact_input contact_input_name" type="number" placeholder="Money(taka) per person" required="required" data-error="Title is required.">
                                <h5>Tour Date</h5>
                                <input name="held_at" class="contact_input contact_input_subject" type="date" required="required" data-error="Please, seelct tour date.">
                                <textarea class="contact_message_input contact_input_message" name="post" placeholder="Details about your tour" required="required" data-error="Please, write about your tour."></textarea>
                                <?php
                                if (isset($_SESSION['u_id'])) {
                                    echo '<button type="submit" class="contact_send_btn trans_200"
                                      value="Submit" >Post</button>';
                                }
                                ?>
                                <br>
                                <?php if (!isset($_SESSION['u_id'])) {
                                    echo '<div class="alert alert-danger" role="alert">
                                        You must <a href="LoginRegLogout\login.php?return=post.php" class="alert-link">login</a> in order to make a post.
                                        </div>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock/TimelineMax.min.js"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA">
    </script>
    <script src="js/contact_custom.js"></script>
</body>

</html>