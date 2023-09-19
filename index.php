<!doctype html>
<html class="no-js" lang="zxx">

<?php
$metatag = '<meta name="description" content="Get GLOBALGAP certified and improve your food safety, sustainability, and quality assurance. We offer a comprehensive range of services to help you comply with GLOBALGAP standards and gain access to new markets.">';
$pageTitle = "RCA | React Cert Africa Beyond Certification - reactcertafrica.com"; // Set the title for this page
include('head.php'); // Include the common head section
?>

<style>
    /*slider-bg-setup*/
    .slider-items {
        position: relative;
        /*   slider-height */
        height: 100vh;
        -webkit-background-size: 100% 100%;
        background-size: 100% 100%;
        background-position: 0 0;
        background-repeat: no-repeat;
    }

    /* you can use background imgae in internal css */
    .bg-img-1 {
        background-image: url(./assets/img/gallery/Client\ request\ service.png);
    }

    .bg-img-2 {
        background-image: url(./assets/img/gallery/Client\ request\ service.png);
    }
    /*slider-style*/
    .active-slider {
        position: relative;
    }

    .sigle-item {
        position: absolute;
        color: #fff;
        text-align: top;
        width: 100%;
        top: 50%;
        text-transform: uppercase;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    /*over-lay-for-slider*/
    .slider-items:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* overlay-color */
        background: -webkit-gradient(linear, left top, left bottom, from(#777), to(#000));
        background: -webkit-linear-gradient(#777, #000);
        background: -o-linear-gradient(#777, #000);
        background: linear-gradient(#777, #000);
        opacity: .0
    }

    /*slider-reade-more-button*/
    a.home-btn {
        border: 2px solid #fff;
        display: inline-block;
        padding: 10px 25px;
        margin-top: 30px;
        color: #fff;
        text-decoration: none;
        transition: linear .3s;
    }

    a.home-btn:hover,
    .owl-nav div:hover {
        background-color: #000;
    }

    /*owl-nav*/
    .owl-nav div {
        border: 2px solid #fff;
        color: #fff;
        height: 40px;
        width: 40px;
        position: absolute;
        z-index: 9;
        top: 50%;
        margin-top: -20px;
        left: 10px;
        line-height: 40px;
        text-align: center;
        -webkit-transition: linear .3s;
        -o-transition: linear .3s;
        transition: linear .3s;
    }

    .owl-nav div.owl-next {
        left: auto;
        right: 10px;
    }

    /* optional */
    .owl-nav h1 {
        font-weight: 900;
    }
</style>

<body>
    <main></main>
    <?php
    include './navbar.php';
    ?>
    <section class="slider-area position-relative">
        <div class="slider-active">

            <div class="single-slider slider-height hero-overly slider-bg1 d-flex  align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10 col-sm-12">
                            <div class="hero-caption">
                                <span data-animation="fadeInUp" data-delay=".2s">REACT CERT AFRICA</span>
                                <h1 data-animation="fadeInUp" data-delay=".2s" style="text-transform: uppercase;">
                                    Precision Audits, Powerful Results</h1>
                                <P data-animation="fadeInUp" data-delay=".4s">Your Beacon in Systems Clarity:
                                    Trusted Partners in Audit Excellence, Guiding Your Success with Precision and
                                    Integrity.</P>
                                <a href="#" class="btn_1 hero-btn" data-animation="fadeInUp" data-delay=".8s">Get
                                    Started Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="visit-three fix">

        <div class="tailor-details">
            <div class="section-tittle mb-40">
                <h2>RCA is on a mission to promote africa led solutions</h2>
                <p style="width: 70%;"> <strong><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Empowering African Women and Youth:</strong> RCA, driven by African women and youth, championing homegrown solutions in global trade, fostering growth. <br> <br> <strong><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Global Experience, Local Experts: </strong>  With global experience, our team contextualizes local expertise to ensure efficient, cost-effective, and professional services. <br><br> <strong><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Efficiency in Turnaround Time: </strong> Dedicated timelines to service delivery with the flexibility in curating solutions that meet clients goals. <br> <br> <strong><i class="fa fa-dot-circle-o" aria-hidden="true"></i> International Accreditation: </strong> As an internationally accredited institution, we stand at the forefront of quality assurance in Africa.</p>
            </div>

            <!-- <div class="single-gallery mb-15">
                    <div class="thumb-content-box d-flex">
                        <div class="thumb-content">
                            <div class="capt">
                                <h3>First year students</h3>
                                <p>Integer efficitur tellus metus, sed feugiat leo posuere ac.<br> Morbi vitae tincidunt
                                    mi, et malesuada massa.</p>
                            </div>
                            <a href="projects.php"><i class="ti-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="single-gallery mb-15">
                    <div class="thumb-content-box d-flex">
                        <div class="thumb-content">
                            <div class="capt">
                                <h3>Tuition & fees</h3>
                                <p>Integer efficitur tellus metus, sed feugiat leo posuere ac.<br> Morbi vitae tincidunt
                                    mi, et malesuada massa.</p>
                            </div>
                            <a href="projects.php"><i class="ti-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="single-gallery mb-15">
                    <div class="thumb-content-box d-flex">
                        <div class="thumb-content">
                            <div class="capt">
                                <h3>International students</h3>
                                <p>Integer efficitur tellus metus, sed feugiat leo posuere ac.<br> Morbi vitae tincidunt
                                    mi, et malesuada massa.</p>
                            </div>
                            <a href="projects.php"><i class="ti-angle-right"></i></a>
                        </div>
                    </div>
                </div> -->
        </div>

        <!-- <div class="visit-team"></div> -->
    </section>


    <section class="about-area section-bg section-padding">
        <div class="container">
            <div class="row align-items-center">
                <!-- <h2>Check us out in action during an audit!</h2> -->
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                    <div class="about-caption about-caption1">
                        <div class="section-tittle m-0">
                            <h2>Want to learn more about the audit process?</h2>
                        </div>
                    </div>
                    <section class="hearo-area">
                        <!-- slider-area -->
                        <div class="slider-wrapper">
                            <div class="active-slider owl-carousel">
                                <div class="slider-items bg-img-1">
                                    <!-- <div class="sigle-item">
                                        <h1>Unconditional Certification</h1>
                                    </div> -->
                                </div>
                                <div class="slider-items bg-img-2">
                                    <!-- <div class="sigle-item">
                                        <h1>Conditional Certification</h1>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- slider-area-ends -->
                    </section>
                    <!-- <div class="about-img about-img1  ">
                        <img src="assets/img/gallery/Share Application.png" alt>
                    </div> -->

                </div>
                <!-- <div class="offset-xl-1 offset-lg-0 offset-sm-1 col-xxl-5 col-xl-5 col-lg-6 col-md-9 col-sm-11">
                    <div class="about-caption about-caption1">
                        <div class="section-tittle m-0">
                            <h2>Want to learn more about the audit process?</h2>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <?php
    include 'services.php';
    include 'news.php';
    ?>


    <!-- <section class="brand-area section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-10">

                        <div class="section-tittle text-center mb-60">
                            <h2>Our Partners</h2>
                            <p>Maecenas felis felis, vulputate sit amet mauris et, semper aliquam ligula. Integer
                                efficitur tellus metus, sed feugiat leo posuere.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center align-items-end">
                    <div class="col-xl-8 col-lg-9">
                        <div class="brand-active text-center">
                            <div class="single-brand">
                                <img src="assets/img/gallery/brand1.png" alt>
                            </div>
                            <div class="single-brand">
                                <img src="assets/img/gallery/brand2.png" alt>
                            </div>
                            <div class="single-brand">
                                <img src="assets/img/gallery/brand3.png" alt>
                            </div>
                            <div class="single-brand">
                                <img src="assets/img/gallery/brand4.png" alt>
                            </div>
                            <div class="single-brand">
                                <img src="assets/img/gallery/brand2.png" alt>
                            </div>
                            <div class="single-brand">
                                <img src="assets/img/gallery/brand3.png" alt>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="visit-one fix">

            <div class="visit-team">
                <div class="wrapper"></div>
            </div>

            <div class="tailor-details">
                <div class="section-tittle section-tittle2 mb-25">
                    <h2>TRUSTED BY OVER <br> 6000+ STUDENTS</h2>
                    <p class="mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas felis felis,
                        vulputate sit amet mauris et, semper aliquam ligula. Integer efficitur tellus metus, sed feugiat
                        leo posuere ac. Morbi vitae tincidunt malesuada massa.</p>
                    <p class="mb-30">Maecenas felis felis, vulputate sit amet mauris et, semper aliquam ligula. Integer
                        efficitur tellus metus, sed feugiat leo posuere ac. Morbi vitae tincidunt mi, et malesuada
                        massa.</p>
                    <a href="#" class="browse-btn browse-btn2 mt-20">Join Now</a>
                </div>
            </div>
        </section> -->

    </main>
    <?php
    include './footer.php';
    ?>

    <div id="back-top">
        <a title="Go to Top" href="#"><i class="fa fa-arrow-up"></i></a>
    </div>
    <script>
        (function($) {
            'use strict';
            $(document).ready(function() {
                $('.active-slider').owlCarousel({
                    items: 1,
                    loop: true,
                    nav: false,
                    //animation
                    animateOut: 'fadeOut',
                    autoplay: true,
                    //icon for nav
                    // navText: ['<h1> < </h1>', '<h1> > </h1>']
                });
            });
        })(jQuery);
    </script>

    <?php
    include './scripts.php';
    ?>
</body>

</html>