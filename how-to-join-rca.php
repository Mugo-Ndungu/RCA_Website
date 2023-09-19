<!doctype html>
<html class="no-js" lang="zxx">

<?php
$metatag = '<meta name="description" content="Learn how to join RCA and become part of a global community of professionals dedicated to improving food safety and sustainability. We offer a variety of membership options to meet the needs of all types of businesses.">';
$pageTitle = "How to join RCA | React Cert Africa Beyond Certification"; // Set the title for this page
include('head.php'); // Include the common head section
?>
<style>
    .about-img img {
        max-width: 100%;
        height: auto;
    }
</style>

<body>
    <main>
        <?php
        include './navbar.php';
        ?>
        <section class="about-area section-bg section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="about-caption about-caption1">
                        <div class="section-tittle m-0">
                            <h2>How to join React Cert Africa Ltd</h2>
                            <p>The certification procedure offered by RCA is comprehensive, and we are dedicated to providing professional guidance and assistance to our clients throughout the entire journey. <br><br>

                                This process comprises three essential phases: application, audit, and evaluation/certification. <br><br>

                                Our primary objective is to assist you in achieving the esteemed status of being recognized as a GLOBALG.A.P Certified Producer, ensuring the highest standards of quality and compliance.</p>
                            <a href="getcertified" class="browse-btn mt-20">Get Certified</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="home-blog section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="section-tittle-ts text-left mb-40">
                            <h2>Your RCA journey: from Application to Certification</h2>
                            <p>Take a look at certification process steps below to find out exactly what it’ll take to become a Fairtrade-certified organisation.</p>
                            <div class="about-img about-img1  ">
                                <img src="assets/img/gallery/Client request service.png" alt>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php
        include './news.php';
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
        const videoUrl = 'https://www.youtube.com/watch?v=pLa9vNyQfvI';

        // Get the video content via the proxy server
        fetch(`http://localhost:3000/proxy?videoUrl=${encodeURIComponent(videoUrl)}`)
            .then(response => response.text())
            .then(videoContent => {
                // Inject the video content into an iframe on your webpage
                const playerContainer = document.getElementById('player');
                playerContainer.innerHTML = '<iframe width="500" height="281" srcdoc="${videoContent}" frameborder="0" allowfullscreen></iframe>';
            })
            .catch(error => console.error(error));
    </script>

    <?php
    include './scripts.php';
    ?>
</body>

</html>