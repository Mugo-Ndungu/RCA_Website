<!doctype html>
<html class="no-js" lang="zxx">

<?php
$metatag = '<meta name="description" content="Get GLOBALGAP certified and improve your food safety, sustainability, and quality assurance. We offer a comprehensive range of services to help you comply with GLOBALGAP standards and gain access to new markets.">';
$pageTitle = "RCA history with Certification | React Cert Africa Beyond Certification - reactcertafrica.com"; // Set the title for this page
include('head.php'); // Include the common head section
?>
<style>
    .Yearly-timeline {
        font-family: "Poppins", sans-serif;
    }

    .Yearly-timeline:after {
        content: "";
        display: block;
        clear: both;
    }

    .Yearly-timeline .timeline {
        width: calc(50% + 17px);
        padding: 0 30px 30px 0;
        float: left;
        position: relative;
    }

    .Yearly-timeline .timeline:before,
    .Yearly-timeline .timeline:after {
        content: "";
        height: 60px;
        width: 2px;
        border-left: 2px solid #5FBB46;
        transform: rotate(-45deg);
        position: absolute;
        right: 30px;
        bottom: 0;
    }

    .Yearly-timeline .timeline:after {
        background-color: #fff;
        height: 20px;
        width: 20px;
        border: 6px solid #5FBB46;
        border-radius: 50%;
        right: 0;
    }

    .Yearly-timeline .timeline-content {
        color: #555;
        background: #5FBB46;
        text-align: center;
        min-height: 170px;
        padding: 30px 35px 35px;
        border-radius: 15px 15px 0 15px;
        display: block;
        position: relative;
        z-index: 1;
    }

    .Yearly-timeline .timeline-content:before {
        content: "";
        background-color: #fff;
        position: absolute;
        left: 17px;
        right: 17px;
        top: 17px;
        bottom: 17px;
        z-index: -1;
    }

    .Yearly-timeline .timeline-content:hover {
        text-decoration: none;
    }

    .Yearly-timeline .timeline-icon {
        color: #777;
        font-size: 35px;
    }

    .Yearly-timeline .title {
        font-size: 22px;
        font-weight: 700;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin: 0 0 8px;
    }

    .Yearly-timeline .description {
        text-align: left;
        color: #777;
        font-size: 13px;
        font-weight: 400;
        letter-spacing: 0.5px;
        line-height: 18px;
        margin: 0;
    }

    .Yearly-timeline .timeline:nth-child(even) {
        padding: 0 0 30px 30px;
        float: right;
    }

    .Yearly-timeline .timeline:nth-child(even):before {
        transform: rotate(45deg);
        right: auto;
        left: 30px;
    }

    .Yearly-timeline .timeline:nth-child(even):after {
        right: auto;
        left: 0;
    }

    .Yearly-timeline .timeline:nth-child(even) .timeline-content {
        border-radius: 15px 15px 15px 0;
    }

    .Yearly-timeline .timeline:nth-child(4n + 2):before,
    .Yearly-timeline .timeline:nth-child(4n + 2):after {
        border-color: #560F11;
    }

    .Yearly-timeline .timeline:nth-child(4n + 2) .timeline-content {
        background: #560F11;
    }

    .Yearly-timeline .timeline:nth-child(4n + 3):before,
    .Yearly-timeline .timeline:nth-child(4n + 3):after {
        border-color: #E37B05;
    }

    .Yearly-timeline .timeline:nth-child(4n + 3) .timeline-content {
        background: #E37B05;
    }

    .Yearly-timeline .timeline:nth-child(4n + 4):before,
    .Yearly-timeline .timeline:nth-child(4n + 4):after {
        border-color: #ffd670;
    }

    .Yearly-timeline .timeline:nth-child(4n + 4) .timeline-content {
        background: #ffd670;
    }

    @media screen and (max-width: 767px) {
        .Yearly-timeline .timeline {
            width: 100%;
            padding: 30px 0 0 30px;
            margin: 0 0 20px;
        }

        .Yearly-timeline .timeline:before,
        .Yearly-timeline .timeline:nth-child(even):before {
            transform: rotate(-45deg);
            bottom: auto;
            top: 0;
            right: auto;
            left: 30px;
        }

        .Yearly-timeline .timeline:after,
        .Yearly-timeline .timeline:nth-child(even):after {
            bottom: auto;
            top: 0;
            right: auto;
            left: 0;
        }

        .Yearly-timeline .timeline-content,
        .Yearly-timeline .timeline:nth-child(even) .timeline-content {
            border-radius: 0 15px 15px 15px;
        }
    }
</style>

<body>
    <main></main>
    <?php
    include './navbar.php';
    ?>

    <section class="about-area section-bg section-padding">
        <div class="container">
            <div class="row align-items-center">
                <!-- <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">

                        <div class="about-img about-img1  ">
                            <img src="assets/img/gallery/ggcert.png" alt>
                        </div>
                        <div class="about-img about-img1  ">
                            <div id="player"></div>
                            <iframe data-gtm-yt-inspected-12="true" loading="lazy"
                                title="Trader Audit by RCA at TeeGschwendner" width="500" height="281"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                frameborder="0" allowfullscreen src="https://youtu.be/pLa9vNyQfvI">
                            </iframe>
                        </div>
                    </div> -->
                <div class="about-caption about-caption1">
                    <div class="section-tittle m-0">
                        <h2 style="font-size: 30px;">Our History with Certification</h2>
                        <p> Since our inception in 2017, we've achieved significant milestones that reflect our commitment to excellence. From ISO 17065:2012 Accreditation to GLOBAL GAP Approval, and expanding our audit services across multiple countries, our timeline showcases our continuous growth and dedication to providing top-notch certification services. Join us as we explore our journey from the past to the promising future outlined in our 2021-2024 goals.</p>
                        <a href="how-to-join-rca" class="browse-btn mt-20">Visit our How to Join RCA page</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="Yearly-timeline">
                    <div class="timeline">
                        <a href="" class="timeline-content">
                            <div class="timeline-icon"><i class="fa fa-forward"></i></div>
                            <h3 class="title">2017</h3>
                            <!-- <h6>Due on September 30, 2017</h6> -->
                            <p class="description">
                                ISO 17065:2012 Accreditation <br><br>
                                GLOBAL GAP Approval <br><br>
                                Capacitated 2 auditors and launched audit services <br><br>
                                Audited and Certified 7 clients

                            </p>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="" class="timeline-content">
                            <div class="timeline-icon"><i class="fa fa-forward"></i></div>
                            <h3 class="title">2018</h3>
                            <!-- <h6>Due on December 31, 2018 </h6> -->
                            <p class="description">
                                Audited and Certified 51 clients <br><br>
                                Capacity forward of 3rd auditor <br><br>
                                Launched audit services in Ethiopia

                            </p>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="" class="timeline-content">
                            <div class="timeline-icon"><i class="fa fa-forward"></i></div>
                            <h3 class="title">2019</h3>
                            <!-- <h6>Due on December 31, 2019</h6> -->
                            <p class="description">
                                Audited and Certified 74 clients <br><br>
                                Combined ISO 17065: 2012 and ISO 17021-1:2015
                                Accreditation <br><br>
                                Launched audit services in Tanzania <br><br>
                                Expanded scope to audit flowers.
                            </p>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="" class="timeline-content">
                            <div class="timeline-icon"><i class="fa fa-forward"></i></div>
                            <h3 class="title">2020</h3>
                            <!-- <h6>Due on December 31, 2020</h6> -->
                            <p class="description">
                                Audited and Certified 97 clients <br><br>
                                Launched application for ISO 17021-1:2015 Full
                                Accreditation <br><br>
                                Prepared our franchising strategy and plan for Egypt
                            </p>
                        </a>
                    </div>
                    <div class="timeline">
                        <a href="" class="timeline-content">
                            <div class="timeline-icon"><i class="fa fa-forward"></i></div>
                            <h3 class="title">2021 - 2024</h3>
                            <!-- <h6>Due on December 31, 2024 </h6> -->
                            <p class="description">
                                Increase client scope to 300 per annum <br><br>
                                Increase scope to 4 certification standards <br><br>
                                Build capacity for auditors <br><br>
                                Open 4 country offices
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
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
                    nav: true,
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