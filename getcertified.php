<!doctype html>
<html class="no-js" lang="zxx">

<?php
$metatag = '<meta name="description" content="Get certified with GLOBALGAP, the world\'s leading food safety and sustainability certification program. We offer a comprehensive range of services to help you comply with GLOBALGAP standards and gain access to new markets.">';
$pageTitle = "Get Certified | React Cert Africa Beyond Certification"; // Set the title for this page
include('head.php'); // Include the common head section
?>

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
                            <h2>Get certified today!</h2>
                            <a href="#" id="downloadButton" class="browse-btn">Download Application Form - Products Certification</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <?php
        include 'services.php';
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
        // Function to handle the button click
        document.getElementById("downloadButton").addEventListener("click", function() {
            // Create a link to the Word document
            const downloadLink = document.createElement("a");
            downloadLink.href = "assets/docs/F_25B_Client application - Products certification.docx"; // Replace with the actual path to your Word document
            downloadLink.download = "F_25B_Client Application Form - Products certification.docx"; // Rename the downloaded file (optional)
            // Trigger the click event to start the download
            downloadLink.click();
        });
    </script>

    <?php
    include './scripts.php';
    ?>
</body>

</html>