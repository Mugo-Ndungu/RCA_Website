<!doctype html>
<html class="no-js" lang="zxx">

<?php
$metatag = '<meta name="description" content="Get GLOBALGAP certified and improve your food safety, sustainability, and quality assurance. We offer a comprehensive range of services to help you comply with GLOBALGAP standards and gain access to new markets.">';
$pageTitle = "Our Mission, Vision and Values | React Cert Africa Beyond Certification - reactcertafrica.com"; // Set the title for this page
include('head.php'); // Include the common head section
?>

<body>
    <main></main>
    <?php
    include './navbar.php';
    ?>
    <section class="about-area section-bg section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                    <div class="about-img about-img1  ">
                        <img src="assets/img/gallery/Mission-Vision-Values2.png" alt>
                    </div>
                </div>
                <div class="ol-xxl-6 col-xl-6 col-lg-6 col-md-12 about-caption about-caption1">
                    <div class="section-tittle m-0">
                        <h2 style="font-size: 30px !important;">Our Mission, Vision and Values</h2>
                        <p>Our mission at RCA is to build lasting client relationships by delivering exceptional value in a trustworthy and respectful environment. <br><br> Our vision is to provide a platform for African experts, with a focus on women, in the auditing and certification movement. <br><br> Our values include impartiality, competence, responsibility, openness, confidentiality, responsiveness to complaints, a risk-based approach, and ensuring access to information.</p>
                        <a href="how-to-join-rca" class="browse-btn mt-20">Visit our How to Join RCA page</a>
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
                        <h2>RCA Mission Statement</h2>
                        <p><i class="fa fa-bullseye" aria-hidden="true"></i> Our mission is clear: We are a result-driven company dedicated to building enduring client relationships by delivering exceptional value within an environment founded on trust and respect.</p>
                    </div>
                    <div class="section-tittle-ts text-left mb-40">
                        <h2>RCA Vision Statement</h2>
                        <p><i class="fa fa-eye" aria-hidden="true"></i> We aim to provide a platform for African experts focusing on women to participate and lend their voice to the auditing and certification movement. </p>
                    </div>
                    <div class="section-tittle-ts text-left mb-40">
                        <h2>RCA Values</h2>
                        <!-- <i class="fa fa-check" aria-hidden="true"></i> -->
                        <p> We uphold principles vital for trust: impartiality, competence, responsibility, openness, confidentiality, responsiveness to complaints, information access, and risk-awareness. Our impartiality ensures unbiased certification activities. Competence is ingrained in every team member, backed by our management system. We establish and evaluate competence criteria for audit and certification personnel, maintaining confidence in our certifications.</p>
                        <p style="margin-left: 50px;" ><i class="fa fa-check" aria-hidden="true"></i> <strong>Responsibility:</strong> 
The client organization, not the RCA, has the responsibility for conformity with the requirements for certification. RCA has the responsibility to assess sufficient objective evidence upon which to base a certification decision. Based on audit conclusions, it makes a decision to grant certification if there is sufficient evidence of conformity, or not to grant certification, if there is not sufficient evidence of conformity, or a decision not to maintain certification.
Openness RCA provides public access to, or disclosure of, appropriate and timely information about its audit process and certification process, and about the certification status (i.e., the granting, extending, maintaining, renewing, suspending, reducing the scope of, or withdrawing of certification) of any organization, to gain confidence in the integrity and credibility of certification. Openness 
is a principle of access to, or disclosure of, appropriate information. To gain or maintain confidence in certification, RCA provides appropriate access to, or disclosure of, non–confidential information about the conclusions of specific audits (e.g., audits in response to complaints) to specific interested parties. <br><br>
<i class="fa fa-check" aria-hidden="true"></i> <strong>Confidentiality</strong>
 To gain the privileged access to information that is needed for the RCA to assess conformity to requirements for certification adequately, it is essential that RCA keeps confidential any proprietary information about a client. All organisations and personnel have the right to ensure the protection of any proprietary information they provide, unless the law or the certification scheme that has been applied requires disclosure of proprietary information.
<br><br>
<strong>Responsiveness</strong> 
to complaints Parties that rely on certification expect to have complaints investigated and, if these are found to be valid, should have confidence that the complaints will be appropriately addressed and that a reasonable effort is made to resolve the complaints. Effective responsiveness to complaints is an important means of protection for RCA, its clients and other users of certification against errors, omissions or unreasonable behaviour. RCA safeguards confidence in its certification services by processing complaints appropriately.
<br><br>
<strong>Risk based approach</strong>
RCA has identified the risks associated with providing competent, consistent and impartial certification. Risks includes following, but not limited to, those associated with: • the objective of audit, • the sampling used in the audit process, • real and perceived impartiality, • Integrity of the audit teams Professionalism of the audit teams • legal, regulatory and liability issues, • the client organization being audited and its operating environment, • impact of the audit on the client and its activities, • health and safety of the audit teams, • perception of interested parties, • misleading statements by the certified clients, • use of certification marks
<br><br>
<strong>Access to information</strong>
Any information held by RCA on a product or service that is the subject of an evaluation and /or certification should be made accessible, upon request, to the person or organisation that contracted RCA to undertake the certification activity
</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
    include 'news.php';
    ?>


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