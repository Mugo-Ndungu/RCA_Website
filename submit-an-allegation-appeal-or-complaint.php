<!doctype html>
<html class="no-js" lang="zxx">

<?php
$metatag = '<meta name="description" content="Get GLOBALGAP certified and improve your food safety, sustainability, and quality assurance. We offer a comprehensive range of services to help you comply with GLOBALGAP standards and gain access to new markets.">';
$pageTitle = "Reports & Complaints of Infringment | React Cert Africa Beyond Certification"; // Set the title for this page
include('head.php'); // Include the common head section
?>
<style>
    textarea {
        background-image: linear-gradient(#f1f1f1 50%, #f9f9f9 50%);
        background-size: 100% 4rem;
        border: 1px solid #CCC;
        width: 100%;
        height: 100px;
        line-height: 2rem;
        margin: 0 auto;
        padding: 4px 8px;
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
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">

                        <div class="about-img about-img1  ">
                            <img src="assets/img/gallery/solving-customer-complains-4488132-3810496.webp" alt>
                        </div>
                        <!-- <div class="about-img about-img1  ">
                            <div id="player"></div>
                            <iframe data-gtm-yt-inspected-12="true" loading="lazy"
                                title="Trader Audit by RCA at TeeGschwendner" width="500" height="281"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                frameborder="0" allowfullscreen src="https://youtu.be/pLa9vNyQfvI">
                            </iframe>
                        </div> -->
                    </div>
                    <div class="ol-xxl-6 col-xl-6 col-lg-6 col-md-12 about-caption about-caption1">
                        <div class="section-tittle m-0">
                            <h2>Submit an Allegation, Appeal or Complaint</h2>
                            <p>Do you want to report an allegation, appeal or complaint? <br><br>

                                We welcome all feedback and carefully investigate any information we receive. All information is kept strictly confidential and all sources are protected. <br><br>

                                Please contact us via the form below.</p>
                            <!-- <a href="#" class="browse-btn mt-20">Visit our How to Join RCA page</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home-blog section-padding">
            <div class="container complains-form" style="height: 60vh !important;">
                <div class="wrapper">
                    Fields marked * are mandatory
                    <ul class="steps">
                        <li class="is-active">Your Contact Details</li>
                        <li>Your organisation's details</li>
                        <li>Information about your allegation</li>
                    </ul>
                    <form id="uploadAllegationsForm" class="form-wrapper">
                        <fieldset class="section is-active">
                            <h3>Your Contact Details</h3>
                            <select name="mysituationselect" id="mysituationselect">
                                <option value="option1 disabled selected">What situation would you like to report?</option>
                                <option value="I want to appeal about React Cert Africa Ltd's decision about GLOBALG.A.P certification">I want to appeal about React Cert Africa Ltd's decision about GLOBALG.A.P certification</option>
                                <option value="I think someone is not conforming to GLOBALG.A.P certification Standards">I think someone is not conforming to GLOBALG.A.P certification Standards</option>
                                <option value="I want to complain about the way React Cert Afica Ltd delivers it's services.">I want to complain about the way React Cert Afica Ltd delivers it's services.</option>
                                <option value="Other">Other</option>
                            </select>
                            <input type="text" name="name" id="name" placeholder="Full Names">
                            <input type="text" name="email" id="email" placeholder="Email - Enter in the format: name@domain.com">
                            <input type="text" name="phone" id="phone" placeholder="Phone No. - Enter numbers without spaces, starting with + for country code">
                            <div class="button">Next</div>
                        </fieldset>
                        <fieldset class="section" s style="text-align: left;">
                            <h3>Your Organisation Details</h3>
                            <input type="text" name="orgname" id="orgname" placeholder="Your organisation's name">
                            <input type="text" name="rcaId" id="rcaId" placeholder="RCA ID if applicable">
                            <select id="countrySelect" name="countries">
                                <option value="option1 disabled">Countries</option>
                            </select>
                            <input type="text" name="orgproduct" id="orgproduct" placeholder="Your organisation's product">
                            <input type="text" name="role" id="role" placeholder="Your role in the organisation">
                            <div class="button">Next</div>
                        </fieldset>
                        <fieldset class="section" style="text-align: left;">
                            <h3>Information about your allegation</h3>
                            <div>
                                <textarea name="allegation" id="allegation" cols="100" rows="20" placeholder="What is the situation you would like to inform us about?"></textarea>
                                <p>Attach any documents or evidence to support your claim</p>
                                <input type="file" id="myFile" name="filename">
                                <br><br>
                                <p>By clicking "Submit", you agree to our <a href="#" id="downloadButton" class="browse-btn">Confidentiality Policy.</a></p>
                            </div>
                            <button type="submit" class="button submitAllegations getcertified">Submit</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </section>

        <section class="home-blog section-padding mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="single-blogs mb-30">
                            <div class="blog-img">
                                <img src="assets/img/gallery/2.png" alt>
                            </div>
                            <div class="blog-caption">
                                <p>... are for concerns about non-compliances by certified customers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-blogs">
                            <div class="blog-img">
                                <img src="assets/img/gallery/3.png" alt>
                            </div>
                            <div class="blog-caption">
                                <p>... are about service delivery, RCA employee or RCA Auditor Conduct.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-blogs">
                            <div class="blog-img">
                                <img src="assets/img/gallery/4.png" alt>
                            </div>
                            <div class="blog-caption">
                                <p>... are for contesting RCA certification and evaluation decisions.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <h2>Want more details?</h2>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="section-tittle-ts text-left mb-40">
                            <p><i class="fa fa-file-pdf-o custom-size" aria-hidden="true"></i>
                                <a href="#" id="downloadSchemeManager" class="browse-btn">Incident Report (Scheme Manager)</a><br><br>
                                <i class="fa fa-file-pdf-o custom-size" aria-hidden="true"></i>
                                <a href="#" id="downloadImpartialityCommittee" class="browse-btn">Incident Report (Impartiality Committee)</a> <br><br>
                                <i class="fa fa-file-pdf-o custom-size" aria-hidden="true"></i>
                                <a href="#" id="downloadManagementBoard" class="browse-btn">Incident Report (Management Board)</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="section-tittle-ts text-left mb-40">
                            <p><i class="fa fa-file-pdf-o custom-size" aria-hidden="true"></i>
                                <a href="#" id="downloadSchemeManager" class="browse-btn">Incident Report (Scheme Manager)</a><br><br>
                                <i class="fa fa-file-pdf-o custom-size" aria-hidden="true"></i>
                                <a href="#" id="downloadImpartialityCommittee" class="browse-btn">Incident Report (Impartiality Committee)</a> <br><br>
                                <i class="fa fa-file-pdf-o custom-size" aria-hidden="true"></i>
                                <a href="#" id="downloadManagementBoard" class="browse-btn">Incident Report (Management Board)</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
        const countryList = [
            "Afghanistan",
            "Åland Islands",
            "Albania",
            "Algeria",
            "American Samoa",
            "Andorra",
            "Angola",
            "Anguilla",
            "Antarctica",
            "Antigua and Barbuda",
            "Argentina",
            "Armenia",
            "Aruba",
            "Australia",
            "Austria",
            "Azerbaijan",
            "Bahamas (the)",
            "Bahrain",
            "Bangladesh",
            "Barbados",
            "Belarus",
            "Belgium",
            "Belize",
            "Benin",
            "Bermuda",
            "Bhutan",
            "Bolivia (Plurinational State of)",
            "Bonaire, Sint Eustatius and Saba",
            "Bosnia and Herzegovina",
            "Botswana",
            "Bouvet Island",
            "Brazil",
            "British Indian Ocean Territory (the)",
            "Brunei Darussalam",
            "Bulgaria",
            "Burkina Faso",
            "Burundi",
            "Cabo Verde",
            "Cambodia",
            "Cameroon",
            "Canada",
            "Cayman Islands (the)",
            "Central African Republic (the)",
            "Chad",
            "Chile",
            "China",
            "Christmas Island",
            "Cocos (Keeling) Islands (the)",
            "Colombia",
            "Comoros (the)",
            "Congo (the Democratic Republic of the)",
            "Congo (the)",
            "Cook Islands (the)",
            "Costa Rica",
            "Croatia",
            "Cuba",
            "Curaçao",
            "Cyprus",
            "Czechia",
            "Côte d'Ivoire",
            "Denmark",
            "Djibouti",
            "Dominica",
            "Dominican Republic (the)",
            "Ecuador",
            "Egypt",
            "El Salvador",
            "Equatorial Guinea",
            "Eritrea",
            "Estonia",
            "Eswatini",
            "Ethiopia",
            "Falkland Islands (the) [Malvinas]",
            "Faroe Islands (the)",
            "Fiji",
            "Finland",
            "France",
            "French Guiana",
            "French Polynesia",
            "French Southern Territories (the)",
            "Gabon",
            "Gambia (the)",
            "Georgia",
            "Germany",
            "Ghana",
            "Gibraltar",
            "Greece",
            "Greenland",
            "Grenada",
            "Guadeloupe",
            "Guam",
            "Guatemala",
            "Guernsey",
            "Guinea",
            "Guinea-Bissau",
            "Guyana",
            "Haiti",
            "Heard Island and McDonald Islands",
            "Holy See (the)",
            "Honduras",
            "Hong Kong",
            "Hungary",
            "Iceland",
            "India",
            "Indonesia",
            "Iran (Islamic Republic of)",
            "Iraq",
            "Ireland",
            "Isle of Man",
            "Israel",
            "Italy",
            "Jamaica",
            "Japan",
            "Jersey",
            "Jordan",
            "Kazakhstan",
            "Kenya",
            "Kiribati",
            "Korea (the Democratic People's Republic of)",
            "Korea (the Republic of)",
            "Kuwait",
            "Kyrgyzstan",
            "Lao People's Democratic Republic (the)",
            "Latvia",
            "Lebanon",
            "Lesotho",
            "Liberia",
            "Libya",
            "Liechtenstein",
            "Lithuania",
            "Luxembourg",
            "Macao",
            "Madagascar",
            "Malawi",
            "Malaysia",
            "Maldives",
            "Mali",
            "Malta",
            "Marshall Islands (the)",
            "Martinique",
            "Mauritania",
            "Mauritius",
            "Mayotte",
            "Mexico",
            "Micronesia (Federated States of)",
            "Moldova (the Republic of)",
            "Monaco",
            "Mongolia",
            "Montenegro",
            "Montserrat",
            "Morocco",
            "Mozambique",
            "Myanmar",
            "Namibia",
            "Nauru",
            "Nepal",
            "Netherlands (the)",
            "New Caledonia",
            "New Zealand",
            "Nicaragua",
            "Niger (the)",
            "Nigeria",
            "Niue",
            "Norfolk Island",
            "Northern Mariana Islands (the)",
            "Norway",
            "Oman",
            "Pakistan",
            "Palau",
            "Palestine, State of",
            "Panama",
            "Papua New Guinea",
            "Paraguay",
            "Peru",
            "Philippines (the)",
            "Pitcairn",
            "Poland",
            "Portugal",
            "Puerto Rico",
            "Qatar",
            "Republic of North Macedonia",
            "Romania",
            "Russian Federation (the)",
            "Rwanda",
            "Réunion",
            "Saint Barthélemy",
            "Saint Helena, Ascension and Tristan da Cunha",
            "Saint Kitts and Nevis",
            "Saint Lucia",
            "Saint Martin (French part)",
            "Saint Pierre and Miquelon",
            "Saint Vincent and the Grenadines",
            "Samoa",
            "San Marino",
            "Sao Tome and Principe",
            "Saudi Arabia",
            "Senegal",
            "Serbia",
            "Seychelles",
            "Sierra Leone",
            "Singapore",
            "Sint Maarten (Dutch part)",
            "Slovakia",
            "Slovenia",
            "Solomon Islands",
            "Somalia",
            "South Africa",
            "South Georgia and the South Sandwich Islands",
            "South Sudan",
            "Spain",
            "Sri Lanka",
            "Sudan (the)",
            "Suriname",
            "Svalbard and Jan Mayen",
            "Sweden",
            "Switzerland",
            "Syrian Arab Republic",
            "Taiwan (Province of China)",
            "Tajikistan",
            "Tanzania, United Republic of",
            "Thailand",
            "Timor-Leste",
            "Togo",
            "Tokelau",
            "Tonga",
            "Trinidad and Tobago",
            "Tunisia",
            "Turkey",
            "Turkmenistan",
            "Turks and Caicos Islands (the)",
            "Tuvalu",
            "Uganda",
            "Ukraine",
            "United Arab Emirates (the)",
            "United Kingdom of Great Britain and Northern Ireland (the)",
            "United States Minor Outlying Islands (the)",
            "United States of America (the)",
            "Uruguay",
            "Uzbekistan",
            "Vanuatu",
            "Venezuela (Bolivarian Republic of)",
            "Viet Nam",
            "Virgin Islands (British)",
            "Virgin Islands (U.S.)",
            "Wallis and Futuna",
            "Western Sahara",
            "Yemen",
            "Zambia",
            "Zimbabwe"
        ];

        //Listening/waitig for the document to be ready
        document.addEventListener('DOMContentLoaded', () => {

            const countrySelect = document.getElementById("countrySelect");

            // Function to populate the select element
            function populateCountries() {
                for (const country of countryList) {
                    const option = document.createElement("option");
                    option.value = country;
                    option.textContent = country;
                    countrySelect.appendChild(option);
                }
            }

            // Call the function to populate the select element
            populateCountries();

        });


        $(document).ready(function() {
            $('#mySituation').select2({
                // Enable searching within options
                search: true,
                // Allow multiple selections
                multiple: false,
                // Specify a placeholder
                placeholder: 'What situation would you like to report?'
            });
            $('#countrySelect').select2({
                // Enable searching within options
                search: true,
                // Allow multiple selections
                multiple: false,
                // Specify a placeholder
                placeholder: 'Select Country?'
            });
        });

        $(document).ready(function() {
            $(".form-wrapper .button").click(function() {
                var button = $(this);
                var currentSection = button.parents(".section");
                var currentSectionIndex = currentSection.index();
                var headerSection = $('.steps li').eq(currentSectionIndex);
                currentSection.removeClass("is-active").next().addClass("is-active");
                headerSection.removeClass("is-active").next().addClass("is-active");

                if (currentSectionIndex === 3) {
                    $(document).find(".form-wrapper .section").first().addClass("is-active");
                    $(document).find(".steps li").first().addClass("is-active");
                }
            });

            $("#uploadAllegationsForm").submit(function(e) {
                e.preventDefault();
                console.log('Form Submitted');
                var formData = new FormData(this);
                console.log('Form Data:', formData);

                $.ajax({
                    type: "POST",
                    url: "./assets/core/allegations.php",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        // console.log('Success:', response);
                        Swal.fire({
                            icon: 'success',
                            title: 'Great',
                            text: 'Uploaded Successfully.',
                            footer: 'Contact Developer'
                        })
                        // $("#message").html(response);
                    },
                    error: function() {
                        console.log(response);
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Error occurred while uploading.',
                            footer: 'Contact Developer'
                        })
                        // $("#message").html("Error occurred while uploading.");
                    }
                });
            });
        });

        // Function to handle the Scheme Manager button click
        document.getElementById("downloadSchemeManager").addEventListener("click", function() {
            // Create a link to the Word document
            const downloadLink = document.createElement("a");
            downloadLink.href = "assets/docs/F_25B_Client application - Products certification.docx"; // Replace with the actual path to your Word document
            downloadLink.download = "F_25B_Client Application Form - Products certification.docx"; // Rename the downloaded file (optional)
            // Trigger the click event to start the download
            downloadLink.click();
        });

        document.getElementById("downloadButton").addEventListener("click", function() {
            // Create a link to the Word document
            const downloadLink = document.createElement("a");
            downloadLink.href = "assets/docs/2_PY00_Confidentiality Policy Statement.docx"; // Replace with the actual path to your Word document
            downloadLink.download = "RCA Confidentiality Policy Statement.docx"; // Rename the downloaded file (optional)
            // Trigger the click event to start the download
            downloadLink.click();
        });
    </script>

    <?php
    include './scripts.php';
    ?>
</body>

</html>