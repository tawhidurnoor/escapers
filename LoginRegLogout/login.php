<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login | Escapers</title>
    <!-- plugins:css -->

    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- endinject -->
    <!--Sweet alert -->
    <script src="../sweetalert2/dist/sweetalert2.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <link rel="stylesheet" href="../sweetalert2/dist/sweetalert2.min.css">
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
                <div class="row w-100">
                    <div class="col-lg-4 mx-auto">
                        <div class="auto-form-wrapper">
                            <form action="login_checker.php" method="post">
                                <h3>LOGIN</h3>
                                <div class="form-group">
                                    <label class="label">Email</label>
                                    <div class="input-group">
                                        <input type="text" name="email" class="form-control" placeholder="Email">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="label">Password</label>
                                    <div class="input-group">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="*********">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="mdi mdi-check-circle-outline"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <?php if (null != isset($_GET['error'])) {
                                        echo '<p class="text-danger">Wrong email or password.</p>';
                                    } ?>
                                </div>
                                <?php
                                if (!isset($_GET['return'])) {
                                    $return = "index.php";
                                } else {
                                    $return = $_GET['return'];
                                }
                                ?>
                                <input type="hidden" value="<?php echo $return; ?>" name="return">
                                <div class="form-group">
                                    <button type="submit" name="login"
                                        class="btn btn-primary submit-btn btn-block">Login</button>
                                </div>
                                <div class="text-block text-center my-3">
                                    <span class="text-small font-weight-semibold">Not a member ?</span>
                                    <a href="registration.php" class="text-black text-small">Create new account</a>
                                </div>
                            </form>
                        </div>
                        <br>
                        <p class="footer-text text-center ft">copyright © <b>Escapers</b>. All rights reserved.</p>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
</body>

</html>