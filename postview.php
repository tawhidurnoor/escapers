<?php

include_once 'Backend/connection.php';

if ($_REQUEST) {
    $id = $_GET['id'];
    $sql = "SELECT post_table.post_id, post_table.title, post_table.created_at, post_table.held_at, post_table.num_guest, post_table.places, post_table.cost, post_table.tour_type, post_table.post, users.f_name, users.l_name, users.u_id  FROM post_table INNER JOIN users ON post_table.u_id = users.u_id WHERE post_table.post_id = '$id' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $post_id = $row['post_id'];
            $title = $row['title'];
            $u_id = $row['u_id'];
            $f_name = $row['f_name'];
            $l_name = $row['l_name'];
            $created_at = $row['created_at'];
            $places = $row['places'];
            $cost = $row['cost'];
            $tour_type = $row['tour_type'];
            $post = $row['post'];
        }
    }
} else {
    header("Location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title ?> | ESCAPERS</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Destino project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <?php include "HeaderFooter/header.php"; ?>

        <!-- Home -->

        <div class="home">
            <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/postview.jpg" data-speed="0.8"></div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_content_inner">
                                <div class="home_title"> <?php echo $title ?> </div>
                                <div class="home_breadcrumbs">
                                    <ul class="home_breadcrumbs_list">
                                        <li class="home_breadcrumb"> <a href="publicprofile.php?id=<?php echo $u_id ?>"><?php echo $f_name . " " . $l_name ?></a> </li>
                                        <li class="home_breadcrumb"> <?php echo $created_at; ?> </li>
                                        <li class="home_breadcrumb"> <?php echo $places; ?> </li>
                                        <li class="home_breadcrumb"> <?php echo $cost; ?> Taka</li>
                                        <li class="home_breadcrumb"> <?php echo $tour_type; ?> </li>
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
                    <div class="col-lg-12">
                        <div class="post_post">
                            <div class="">
                                <p>
                                    <?php echo $post ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>
                <h6>Comments</h6>
                <div class="row" style="margin: 20px;">
                    <div class="col-lg-8">
                        <div class="comment">
                            <div class="post_meta">
                                <ul>
                                    <li>Noor</li>
                                    <li>Today</li>
                                </ul>
                            </div>
                            <div class="comment_text">
                                <?php echo $post ?>
                            </div>
                        </div>
                        <div class="comment">
                            <div class="post_meta">
                                <ul>
                                    <li>Noor</li>
                                    <li>Today</li>
                                </ul>
                            </div>
                            <div class="comment_text">
                                <?php echo $post ?>
                            </div>
                        </div>
                        <div class="comment">
                            <div class="post_meta">
                                <ul>
                                    <li>Noor</li>
                                    <li>Today</li>
                                </ul>
                            </div>
                            <div class="comment_text">
                                <?php echo $post ?>
                            </div>
                        </div>
                        <textarea style="height: 60px;" class="contact_message_input contact_input_message" name="post" placeholder="Details about your tour" required="required" data-error="Please, write about your tour."></textarea>
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