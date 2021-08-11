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


    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
    <!-- scrollToTop ending here -->


    <!-- header section start here -->
    <header class="header-section style-2">
        <div class="header-bottom">
            <div class="header-wrapper">
                <div class="logo-search-acte">
                    <div class="logo">
                        <a href="<?= base_url(); ?>"><img src="<?= base_url('theme/edukon'); ?>/assets/images/logo/01.png" alt="logo" style="height: 10%;"></a>
                    </div>
                    <div class="cate-search d-none d-xxl-block">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="header-cate">
                                <select name="category" id="select">
                                    <option value="">All Categories</option>
                                    <option value="uncategorized">Uncategorized</option>
                                    <option value="academy">Academy</option>
                                    <option value="agency">Agency</option>
                                    <option value="app">App</option>
                                    <option value="bar">Bar</option>
                                    <option value="blog">Blog</option>
                                    <option value="business">Business</option>
                                    <option value="butcher-shop">Butcher Shop</option>
                                    <option value="cafe">Cafe</option>
                                    <option value="charity-2">Charity</option>
                                    <option value="church">Church</option>
                                    <option value="clinic">clinic</option>
                                    <option value="college">College</option>
                                    <option value="conference">Conference</option>
                                    <option value="construction">Construction</option>
                                    <option value="corona-virus">Corona Virus</option>
                                    <option value="corporate">Corporate</option>
                                    <option value="covid19">Covid19</option>
                                    <option value="digital-products">Digital Products</option>
                                    <option value="doctors">doctors</option>
                                    <option value="ecological">Ecological</option>
                                    <option value="education">Education</option>
                                    <option value="entertainment">Entertainment</option>
                                    <option value="environment">Environment</option>
                                    <option value="environmental">Environmental</option>
                                    <option value="events">Events</option>
                                    <option value="fitness">Fitness</option>
                                    <option value="food-shop">Food Shop</option>
                                    <option value="free">Free</option>
                                    <option value="gym">Gym</option>
                                    <option value="halloween">Halloween</option>
                                    <option value="health">health</option>
                                    <option value="healthcare">healthcare</option>
                                    <option value="learnpress">learnpress</option>
                                    <option value="meat-shop">Meat Shop</option>
                                    <option value="medical">medical</option>
                                    <option value="medical-prevention">Medical Prevention</option>
                                    <option value="meetup">Meetup</option>
                                    <option value="mobile-apps">Mobile Apps</option>
                                    <option value="music">Music</option>
                                    <option value="news">News</option>
                                    <option value="nonprofit">Nonprofit</option>
                                    <option value="onepage">Onepage</option>
                                    <option value="online-course">Online Course</option>
                                    <option value="personal-blog">Personal Blog</option>
                                    <option value="portfolio">Portfolio</option>
                                    <option value="pregnancy">pregnancy</option>
                                    <option value="premium">premium</option>
                                    <option value="psd">psd</option>
                                    <option value="religion">Religion</option>
                                    <option value="restaurants">Restaurants</option>
                                    <option value="school">School</option>
                                    <option value="seo">SEO</option>
                                    <option value="software">Software</option>
                                    <option value="startups">Startups</option>
                                    <option value="university">University</option>
                                    <option value="vcard">Vcard</option>
                                    <option value="woocommerce">WooCommerce</option>
                                    <option value="yoga">Yoga</option>
                                    <option value="magazine">Magazine</option>
                                    <option value="event-wordpress">Event</option>
                                </select>
                            </div>
                            <div class="header-search">
                                <form action="/">
                                    <input type="text" placeholder="Search Here.....">
                                    <button type="submit"><i class="icofont-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-area">
                    <div class="menu">
                        <ul class="lab-ul">
                            <!-- <li>
                                <a href="#0">Beranda</a>
                                <ul class="lab-ul">
                                    <li><a href="index.html">Home One</a></li>
                                    <li><a href="index-2.html" class="active">Home Two</a></li>
                                    <li><a href="index-3.html">Home Three</a></li>
                                    <li><a href="index-4.html">Home Four</a></li>
                                    <li><a href="index-5.html">Home Five</a></li>
                                    <li><a href="index-6.html">Home Six</a></li>
                                    <li><a href="index-7.html">Home Seven</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#0">Courses</a>
                                <ul class="lab-ul">
                                    <li><a href="course.html">Course</a></li>
                                    <li><a href="course-single.html">Course Details</a></li>

                                </ul>
                            </li>
                            <li>
                                <a href="#0">Blog</a>
                                <ul class="lab-ul">
                                    <li><a href="blog.html">Blog Grid</a></li>
                                    <li><a href="blog-2.html">Blog Style 2</a></li>
                                    <li><a href="blog-3.html">Blog Style 3</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#0">Pages</a>
                                <ul class="lab-ul">
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="instructor.html">Instructor</a></li>
                                    <li>
                                        <a href="#0">Shop Pages</a>
                                        <ul class="lab-ul">
                                            <li><a href="shop.html">Shop Page</a></li>
                                            <li><a href="shop-single.html">Shop Details Page</a></li>
                                            <li><a href="cart-page.html">Shop Cart Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="search-page.html">Search Page</a></li>
                                    <li><a href="search-none.html">Search None</a></li>
                                    <li><a href="404.html">404</a></li>
                                </ul>
                            </li> -->
                            <li><a href="<?= base_url(); ?>">Beranda</a></li>
                            <li><a href="#">Panduan Pengguna</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Kontak Kami</a></li>
                            <li><a href="/login"><i class="icofont-user"></i> <span>Masuk</span> </a></li>
                        </ul>
                    </div>

                    <!-- <a href="#" class="login"><i class="icofont-user"></i> <span>Masuk</span> </a>
                    <a href="#" class="signup"><i class="icofont-users"></i> <span>Daftar</span> </a> -->

                    <!-- toggle icons -->
                    <div class="header-bar d-lg-none">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <!-- <div class="ellepsis-bar d-lg-none">
                        <i class="icofont-info-square"></i>
                    </div> -->
                </div>
            </div>
        </div>
    </header>
    <!-- header section ending here -->

    <!-- banner section start here -->
    <section class="banner-section style-2">
        <div class="container">
            <div class="section-wrapper">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-xxl-5 col-xl-6 col-lg-10 me-auto">
                        <div class="banner-content">
                            <h6 class="subtitle text-uppercase fw-medium">Pembelajaran Daring</h6>
                            <h4 class="title">
                                <span class="d-lg-block">Belajar Dari Rumah</span>
                                <span class="d-lg-block">Jadi Lebih Mudah</span>
                            </h4>
                            <p class="desc">Akses materi pembelajaran yang disajikan secara terstruktur di halaman BelajarKU</p>
                            <form action="/">
                                <div class="banner-icon">
                                    <i class="icofont-search"></i>
                                </div>
                                <input type="text" placeholder="">
                                <button type="submit">Pencarian</button>
                            </form>
                            <!-- <div class="banner-catagory d-flex flex-wrap">
                                <p>Most Popular : </p>
                                <ul class="lab-ul d-flex flex-wrap">
                                    <li><a href="#">Figma</a></li>
                                    <li><a href="#">Adobe XD</a></li>
                                    <li><a href="#">illustration</a></li>
                                    <li><a href="#">Photoshop</a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-6">
                        <div class="thumb-part">
                            <div class="banner-thumb text-center">
                                <img src="<?= base_url('theme/edukon'); ?>/assets/images/banner/02.png" alt="img">
                            </div>
                            <div class="abs-thumb d-none d-xxl-block">
                                <!-- <img src="<?= base_url('theme/edukon'); ?>/assets/images/banner/03.png" alt="img"> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section ending here -->
    <!-- About section start here -->
    <div class="about-section style-2 section-bg">
        <div class="container">
            <div class="row justify-content-center row-cols-lg-4 row-cols-sm-2 row-cols-1">
                <div class="col">
                    <div class="about-right">
                        <div class="section-wrapper">
                            <ul class="lab-ul">
                                <li>
                                    <div class="sr-left">
                                        <img src="<?= base_url('theme/edukon'); ?>/assets/images/about/icon/siswa.png" alt="about icon">
                                    </div>
                                    <div class="sr-right">
                                        <h5>1.000+</h5>
                                        <p>Siswa Aktif</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="about-right">
                        <div class="section-wrapper">
                            <ul class="lab-ul">
                                <li>
                                    <div class="sr-left">
                                        <img src="<?= base_url('theme/edukon'); ?>/assets/images/about/icon/guru.png" alt="about icon">
                                    </div>
                                    <div class="sr-right">
                                        <h5>500+</h5>
                                        <p>Guru Aktif</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="about-right">
                        <div class="section-wrapper">
                            <ul class="lab-ul">
                                <li>
                                    <div class="sr-left">
                                        <img src="<?= base_url('theme/edukon'); ?>/assets/images/about/icon/kelas.png" alt="about icon">
                                    </div>
                                    <div class="sr-right">
                                        <h5>50+</h5>
                                        <p>Kelas Aktif</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="about-right">
                        <div class="section-wrapper">
                            <ul class="lab-ul">
                                <li>
                                    <div class="sr-left">
                                        <img src="<?= base_url('theme/edukon'); ?>/assets/images/about/icon/materi.png" alt="about icon">
                                    </div>
                                    <div class="sr-right">
                                        <h5>580</h5>
                                        <p>Materi Dibaikan</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About section ending here -->

    <!-- student feedbak section start here -->
    <div class="student-feedbak-section padding-tb shape-img">
        <div class="container">
            <div class="section-header text-center">
                <!-- <span class="subtitle">Loved by 200,000+ students</span> -->
                <h2 class="title">Apa itu BelajarKU</h2>
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center row-cols-lg-2 row-cols-1">
                    <div class="col">
                        <div class="stu-feed-item">
                            <div class="stu-feed-inner">
                                <div class="stu-feed-bottom">
                                    <p>Portal pembelajaran daring bagi Pendidkan Anak Usia Dini (PAUD), Taman Kanak-Kanak (TK), Sekolah Dasar (SD), dan Sekolah Menengan Pertama (SMP) yang pengelolaannya dibawah Pemerintahan Kabupaten Kulon Progo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="stu-feed-item">
                            <div class="stu-feed-inner">
                                <div class="stu-feed-bottom">
                                    <p>BelajarKU hadir sebagai inovasi pembelajaran di era teknologi informasi yang menyediakan bahan belajar secara terstruktur yang mendukung proses pembelajaran secara daring antara guru dan siswa. Dengan menggunakan BelajarKU, siswa dapat mengakses materi pembelajaran dimana saja dan kapan saja.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="sf-left">
                            <!-- <div class="sfl-thumb"> -->
                            <div>
                                <img src="<?= base_url('theme/edukon'); ?>/assets/images/feedback/01.png" alt="student feedback">
                                <!-- <a href="#" class="video-button" data-rel="lightcase"><i class="icofont-ui-play"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- student feedbak section ending here -->

    <!-- category section start here -->
    <div class="category-section padding-tb section-bg style-2">
        <div class="container">
            <div class="section-header text-center">
                <!-- <span class="subtitle">Popular Category</span> -->
                <h2 class="title">Kemudahan di BelajarKU</h2>
            </div>
            <div class="section-wrapper">
                <div class="row justify-content-center row-cols-lg-3 row-cols-1">
                    <div class="col mb-2">
                        <div class="stu-feed-item">
                            <div class="stu-feed-inner">
                                <div class="stu-feed-top">
                                    <div class="sft-left">
                                        <div class="sftl-content">
                                            <a href="#">
                                                <h6>MATERI</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="pf-right">
                                        <span class="ratting">
                                            <i class="icofont-black-board"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="stu-feed-bottom">
                                    <p>Akses materi pembelajaran berdasarkan kurikulum yang telah disajikan secara terstruktur dan menarik dalam bentuk gambar, video, maupun dokumen.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-2">
                        <div class="stu-feed-item">
                            <div class="stu-feed-inner">
                                <div class="stu-feed-top">
                                    <div class="sft-left">
                                        <div class="sftl-content">
                                            <a href="#">
                                                <h6>TUGAS</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="pf-right">
                                        <span class="ratting">
                                            <i class="icofont-book-alt"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="stu-feed-bottom">
                                    <p>Kerjakan tugas secara langsung atau unggah dokumen/gambar hasil tugas dengan mudah di satu tempat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="stu-feed-item">
                            <div class="stu-feed-inner">
                                <div class="stu-feed-top">
                                    <div class="sft-left">
                                        <div class="sftl-content">
                                            <a href="#">
                                                <h6>NILAI</h6>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="pf-right">
                                        <span class="ratting" style="height: 40px;">
                                            <i class="icofont-award"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="stu-feed-bottom">
                                    <p>Dapatkan bilai secara langsung setelah mengerjakan tugas dan pantau rekap nilaimu di halaman BelajarKU.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- category section start here -->

    <!-- footer -->
    <div class="news-footer-wrap">
        <!-- Footer Section Start Here -->
        <footer>
            <div class="footer-top padding-tb pt-0">
                <div class="container">
                    <div class="row g-4 row-cols-xl-4 row-cols-sm-2 row-cols-1 justify-content-center">
                        <div class="col mt-5">
                            <div class="footer-item">
                                <div class="footer-inner">
                                    <div class="footer-content">
                                        <div class="title">
                                            <img src="<?= base_url('theme/edukon'); ?>/assets/images/logo/footer.png" alt="education">
                                            <!-- <h4>Site Map</h4> -->
                                        </div>
                                        <div class="content">
                                            <p style="color:white">Dinas Pendidikan Kabupaten Kulon Progo</p>
                                            <p style="color:white">Jl. Ki Josuto, Wates, Kulon Progo</p>
                                            <p style="color:white">Telp: (0274) 774535</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mt-5">
                            <div class="footer-item">
                                <div class="footer-inner">
                                    <div class="footer-content">
                                        <div class="title">
                                            <h4>Layanan</h4>
                                        </div>
                                        <div class="content">
                                            <ul class="lab-ul">
                                                <li><a href="#">pendekarKU</a></li>
                                                <li><a href="#">DAPODIK</a></li>
                                                <li><a href="#">BOS</a></li>
                                                <li><a href="#">SIPLah</a></li>
                                                <li><a href="#">Rumah Belajar</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mt-5">
                            <div class="footer-item">
                                <div class="footer-inner">
                                    <div class="footer-content">
                                        <!-- <div class="title">
                                            <h4>Social Contact</h4>
                                        </div>
                                        <div class="content">
                                            <ul class="lab-ul">
                                                <li><a href="#">Facebook</a></li>
                                                <li><a href="#">Twitter</a></li>
                                                <li><a href="#">Instagram</a></li>
                                                <li><a href="#">YouTube</a></li>
                                                <li><a href="#">Github</a></li>
                                            </ul>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mt-5">
                            <div class="footer-item">
                                <div class="footer-inner">
                                    <div class="footer-content">
                                        <!-- <div class="title">
                                            <h4>Our Support</h4>
                                        </div>
                                        <div class="content">
                                            <ul class="lab-ul">
                                                <li><a href="#">Help Center</a></li>
                                                <li><a href="#">Paid with Mollie</a></li>
                                                <li><a href="#">Status</a></li>
                                                <li><a href="#">Changelog</a></li>
                                                <li><a href="#">Contact Support</a></li>
                                            </ul>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom style-2">
                <div class="container">
                    <div class="section-wrapper">
                        <p>&copy; 2021 <a href="<?= base_url(); ?>">BelajarKu</a> Designed by <a href="
https://kominfo.kulonprogokab.go.id" target="_blank">Dinas Kominfo Kabupaten Kulon Progo</a> </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section Ending Here -->
    </div>
    <!-- footer -->




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