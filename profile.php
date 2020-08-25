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

</head>

<body>


    <!-- Header -->

    <?php include_once "HeaderFooter/protected_header.php"; ?>
    <title> <?php echo $_SESSION['f_name'] . " " . $_SESSION['l_name']; ?> | ESCAPERS</title>

    <!-- Home -->

    <div class="home">
        <div class="home_background" style="background-image:url(images/profile_head.jpg)"></div>
        <div class="home_content">
            <div class="home_content_inner">
                <div class="home_text_small"><?php echo $_SESSION['f_name'] . " " . $_SESSION['l_name']; ?></div>
            </div>
        </div>
    </div>

    <!-- Body -->
    <div class="container" style="margin-top: 20px;">
        <div class="row contact_content">
            <div class="col-lg-6">
                <h3>Profile Info</h3>

                <form class="form-horizontal" method="POST" action="Backend\profile_edit.php">
                    <div class="form-group">
                        <label for="exampleInputTitle">First Name</label>
                        <input type="text" class="form-control" name="f_name" value="<?php echo $_SESSION['f_name']; ?>" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTitle">Last Name</label>
                        <input type="text" class="form-control" name="l_name" value="<?php echo $_SESSION['l_name']; ?>" placeholder="Last Name" required>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputTitle">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $_SESSION['email']; ?>" placeholder="email" required>
                    </div>
                    <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i>
                        Update</button>
                </form>

            </div>
            <div class="col-lg-6">
                <h3>My Posts</h3>
                <?php
                include_once "Backend\connection.php";
                include_once "Modals\delete_edit_modal.php";
                $u_id = $_SESSION['u_id'];
                $sql = " SELECT post_id, title from post_table WHERE u_id = $u_id ORDER BY post_id DESC ";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    echo " <table class='table'> ";
                    echo " <thead> ";
                    echo "     <tr> ";
                    echo "         <th>Post Id</th> ";
                    echo "         <th>Title</th> ";
                    echo "         <th>Edit</th> ";
                    echo "         <th>Delete</th> ";
                    echo "     </tr> ";
                    echo " </thead> ";
                    echo " <tbody> ";
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo " <tr>";
                        echo "     <td>" . $row['post_id'] . "</td>";
                        echo '     <td><a href="postview.php?id=' . $row['post_id'] . '">' . $row['title'] . '</a></td>';
                        echo '     <td> <button class ="btn btn-success edit" data-id=" ' . $row['post_id'] . ' "> Edit </button> </td>';
                        echo '     <td> <button class ="btn btn-danger delete" data-id=" ' . $row['post_id'] . ' "> Delete </button> </td>';
                        echo " </tr>";
                    }
                    echo " </tbody> ";
                    echo " </table> ";
                } else {
                    echo "No recent post!!!";
                }
                ?>
            </div>
        </div>
    </div>

    <br><br><br><br>

    <script>
        $(function() {

            $(document).on('click', '.delete', function(e) {
                e.preventDefault();
                $('#delete').modal('show');
                var id = $(this).data('id');
                $('#post_id_d').val(id);
                getRow(id)
            });

            $(document).on('click', '.edit', function(e) {
                e.preventDefault();
                $('#edit').modal('show');
                var id = $(this).data('id');
                $('#post_id_e').val(id);
                getRow(id)
            });

            $(document).on('click', '.photo_edit', function(e) {
                e.preventDefault();
                $('#photo_edit').modal('show');
                var id = $(this).data('id');
                $('#id_ep').val(id);
                getRow(id)
            });

        });


        function getRow(id) {
            $.ajax({
                type: 'POST',
                url: 'Backend/post_details.php',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    $('#title').val(response.title);
                    $('#places').val(response.places);
                    $('#num_guest').val(response.num_guest);
                    $('#cost').val(response.cost);
                    $('#date').val(response.held_at);
                    $('#details').html(response.post);
                }
            });
        }
    </script>

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