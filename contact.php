<!doctype html>
<html class="no-js" lang="zxx">

<?php
$metatag = '<meta name="description" content="Get in touch with [Company Name] today! We offer a variety of ways to contact us, including phone, email, and social media. Our customer service team is here to help you with any questions or concerns you may have.">';
$pageTitle = "Contact Us | React Cert Africa Beyond Certification"; // Set the title for this page
include('head.php'); // Include the common head section
?>

<body>
    <?php
    include './navbar.php';
    ?>
    <main>

        <div class="slider-area">
            <div class="slider-height2 slider-bg2 d-flex hero-overly align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-9">
                            <div class="hero-caption hero-caption2">
                                <h2>Contact</h2>
                                <p>Connect with Us Today. Questions, feedback, or inquiries? Our team is here to assist you. Reach out now for prompt assistance.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="button" class="button button-contactForm boxed-btn" onclick="send_contact_message()">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>106 Mwimuto, Ngecha Rd.</h3>
                                <p>P.O Box 2401 - 00200</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>(+254) 714-389-599</h3>
                                <p style="font-size: 15.5px;">Mon to Fri 8:30am to 5:30pm <br>Saturday 8:30am to 1:30pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>admin@reactcertafrica.com</h3>
                                <p style="font-size: 15.5px;">Send us your query anytime!</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-world"></i></span>
                            <div class="media-body">
                                <h3>www.reactcertafrica.com</h3>
                                <p style="font-size: 15.5px;">Enhanced User Experience</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-timer"></i></span>
                            <div class="media-body">
                                <h3>Assured response within 48 hours.</h3>
                                <p style="font-size: 15.5px;">Improved User Experience</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="fa fa-whatsapp" style="color: #25d366;"></i></span>
                            <div class="media-body text-center">
                                <h3>Scan Me</h3>
                                <div class="blog-img">
                                    <img height="150" width="150" src="assets/img/gallery/RCA WhatsApp.png" alt>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <?php
    include './footer.php';
    ?>

    <div id="back-top">
        <a title="Go to Top" href="#"><i class="fa fa-arrow-up"></i></a>
    </div>

    <script>
        function send_contact_message() {
            // Create an empty array to store form data

            // Get form elements by their IDs
            var message = document.getElementById("message").value;
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var subject = document.getElementById("subject").value;
            var formData = [message, name, email, subject];

            var formDataInfo = JSON.stringify(formData);

            // Send the form data to actions.php using AJAX
            $.ajax({
                type: "POST",
                url: "./assets/core/actions.php",
                data: {
                    formDataInfo: formDataInfo
                },
                success: function(response) {
                    // Handle the response from the server (e.g., display a success message)
                    Swal.fire(
                        'Good job!',
                        'You clicked the button!',
                        'success'
                    )
                },
                error: function(xhr, status, error) {
                    console.log("AJAX Request Error: " + status + " - " + error);
                }
            });

        }
    </script>
    <?php
    include './scripts.php';
    ?>

</body>

</html>