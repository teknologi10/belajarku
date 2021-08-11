<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BelajarKU</title>
    <link rel="shortcut icon" href="<?= base_url('theme/edukon'); ?>/assets/images/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="<?= base_url('theme/edukon'); ?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?= base_url('theme/edukon'); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('theme/edukon'); ?>/assets/css/icofont.min.css">
    <link rel="stylesheet" href="<?= base_url('theme/edukon'); ?>/assets/css/swiper.min.css">
    <link rel="stylesheet" href="<?= base_url('theme/edukon'); ?>/assets/css/lightcase.css">
    <link rel="stylesheet" href="<?= base_url('theme/edukon'); ?>/assets/css/style.css">
    <style>
        body {
            background-image: url("<?= base_url('theme/edukon'); ?>/assets/images/bg-img/02.jpg");
        }

        .banner-section.style-2 {
            padding-top: 100px;
        }
    </style>
</head>

<body>

    <!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- preloader ending here -->


    <!-- banner section start here -->
    <section class="banner-section style-2" style="background: transparent;">
        <div class="container">
            <div class="account-wrapper">
                <div class="row align-items-center flex-row-reverse">
                    <div>
                        <div class="logo">
                            <a href="<?= base_url(); ?>"><img src="<?= base_url('theme/edukon'); ?>/assets/images/logo/01.png" alt="logo" style="height: 10%;"></a>
                        </div>
                        <br>
                        <p>Selamat datang di Aplikasi Belajarku</p>
                        <br>
                        <form class="account-form">
                            <div class="form-group">
                                <input type="text" placeholder="Username" name="username">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Password" name="password">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="d-block lab-btn"><span>Masuk</span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </section>
    <!-- banner section ending here -->

    <script src="<?= base_url('theme/edukon'); ?>/assets/js/jquery.js"></script>
    <script src="<?= base_url('theme/edukon'); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url('theme/edukon'); ?>/assets/js/swiper.min.js"></script>
    <script src="<?= base_url('theme/edukon'); ?>/assets/js/progress.js"></script>
    <script src="<?= base_url('theme/edukon'); ?>/assets/js/lightcase.js"></script>
    <script src="<?= base_url('theme/edukon'); ?>/assets/js/counter-up.js"></script>
    <script src="<?= base_url('theme/edukon'); ?>/assets/js/isotope.pkgd.js"></script>
    <script src="<?= base_url('theme/edukon'); ?>/assets/js/functions.js"></script>
</body>

</html>