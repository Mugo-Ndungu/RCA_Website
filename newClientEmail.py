from assets.core import dbconnection
import smtplib, ssl
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
import pandas as pd

# Establish a database connection
conn = dbconnection.get_connection()
cursor = conn.cursor()

# Execute a query to check for new rows
cursor.execute("SELECT * FROM resume_info WHERE emailSent = 0")

# Fetch the new rows
new_rows = cursor.fetchall()

print(new_rows)

# If there are new rows, send an email
if new_rows:
    # Define the HTML document
    html = """
            <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

        <head>
            <!--[if (gte mso 9)|(IE)]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- So that mobile will display zoomed in -->
            <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- enable media queries for windows phone 8 -->
            <meta name="format-detection" content="telephone=no"> <!-- disable auto telephone linking in iOS -->
            <meta name="format-detection" content="date=no"> <!-- disable auto date linking in iOS -->
            <meta name="format-detection" content="address=no"> <!-- disable auto address linking in iOS -->
            <meta name="format-detection" content="email=no"> <!-- disable auto email linking in iOS -->
            <title>Email</title>

            <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Lora:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Dancing+Script:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

            <!-- CSS - you can't modify or add anything of it, as the StampReady Editor uses a copy of these styles. -->
            <style type="text/css">
                /* basics */
                body {
                    margin: 0px !important;
                    padding: 0px !important;
                    display: block !important;
                    min-width: 100% !important;
                    width: 100% !important;
                    -webkit-text-size-adjust: none;
                }

                table {
                    border-spacing: 0;
                    mso-table-lspace: 0pt;
                    mso-table-rspace: 0pt;
                }

                table td {
                    border-collapse: collapse;
                }

                strong {
                    font-weight: bold !important;
                }

                td img {
                    -ms-interpolation-mode: bicubic;
                    display: block;
                    width: auto;
                    max-width: auto;
                    height: auto;
                    margin: auto;
                    display: block !important;
                    border: 0px !important;
                }

                td p {
                    margin: 0 !important;
                    padding: 0 !important;
                    display: inline-block !important;
                    font-family: inherit !important;
                }

                td a {
                    text-decoration: none !important;
                }

                /* outlook */
                .ExternalClass {
                    width: 100%;
                }

                .ExternalClass,
                .ExternalClass p,
                .ExternalClass span,
                .ExternalClass font,
                .ExternalClass td,
                .ExternalClass div {
                    line-height: inherit;
                }

                .ReadMsgBody {
                    width: 100%;
                    background-color: #ffffff;
                }

                /* iOS blue links */
                a[x-apple-data-detectors] {
                    color: inherit !important;
                    text-decoration: none !important;
                    font-size: inherit !important;
                    font-family: inherit !important;
                    font-weight: inherit !important;
                    line-height: inherit !important;
                }

                /* gmail blue links */
                u+#body a {
                    color: inherit;
                    text-decoration: none;
                    font-size: inherit;
                    font-family: inherit;
                    font-weight: inherit;
                    line-height: inherit;
                }

                /* buttons fix */
                .undoreset a,
                .undoreset a:hover {
                    text-decoration: none !important;
                }

                .yshortcuts a {
                    border-bottom: none !important;
                }

                .ios-footer a {
                    color: #aaaaaa !important;
                    text-decoration: none;
                }

                /* responsive */
                @media screen and (max-width: 640px) {

                    td.img-responsive img {
                        width: 100% !important;
                        max-width: 100% !important;
                        height: auto !important;
                        margin: auto;
                    }

                    table.row {
                        width: 100% !important;
                        max-width: 100% !important;
                    }

                    table.center-float,
                    td.center-float {
                        float: none !important;
                    }

                    /* stops floating modules next to each other */
                    td.center-text {
                        text-align: center !important;
                    }

                    td.container-padding {
                        width: 100% !important;
                        padding-left: 15px !important;
                        padding-right: 15px !important;
                    }

                    table.hide-mobile,
                    tr.hide-mobile,
                    td.hide-mobile,
                    br.hide-mobile {
                        display: none !important;
                    }

                    td.menu-container {
                        text-align: center !important;
                    }

                    td.autoheight {
                        height: auto !important;
                    }

                    table.mobile-padding {
                        margin: 15px 0 !important;
                    }

                    table.br-mobile-true td br {
                        display: initial !important;
                    }

                }
            </style>
        </head>

        <body>
            <!--module-->

            <!--module-->
            <table style="width:100%;max-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                <tbody>
                    <tr>
                        <td bgcolor="#F4F4F4" align="center">

                            <!--container-->
                            <table class="row" style="width:600px;max-width:600px;" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                    <tr>
                                        <td bgcolor="#560F11" align="center">

                                            <!--wrapper-->
                                            <table class="row" style="width:540px;max-width:540px;" width="540" cellspacing="0" cellpadding="0" border="0" align="center">
                                                <tbody>
                                                    <tr>
                                                        <td class="container-padding" align="center">



                                                            <!-- content container -->
                                                            <table width="540" border="0" cellpadding="0" cellspacing="0" align="center" class="row" style="width:540px;max-width:540px;">
                                                                <tbody>
                                                                    <tr>
                                                                        <td align="center">

                                                                            <!-- content -->
                                                                            <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" style="width:100%; max-width:100%;">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td height="25">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td width="80" align="left">
                                                                                                            <!-- <img width="80" style="display:block;width:100%;max-width:80px;" alt="img" src="./assets/img/logo/logo.png"> -->
                                                                                                        </td>
                                                                                                        <td>&nbsp;</td>
                                                                                                        <td align="right" style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #ffffff;"><a href="contact" target="_blank" style="color: #ffffff">Help Center</a></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="25">&nbsp;</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>



                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </td>
                    </tr>
                </tbody>
            </table>
            <!--module-->
            <table style="width:100%;max-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                <tbody>
                    <tr>
                        <td bgcolor="#F4F4F4" align="center">

                            <!--container-->
                            <table class="row" style="width:600px;max-width:600px;" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                    <tr>
                                        <td bgcolor="#ffffff" align="center">

                                            <!--wrapper-->
                                            <table class="row" style="width:540px;max-width:540px;" width="540" cellspacing="0" cellpadding="0" border="0" align="center">
                                                <tbody>
                                                    <tr>
                                                        <td class="container-padding" align="center">



                                                            <!-- content container -->
                                                            <table width="540" border="0" cellpadding="0" cellspacing="0" align="center" class="row" style="width:540px;max-width:540px;">
                                                                <tbody>
                                                                    <tr>
                                                                        <td align="center">

                                                                            <!-- content -->
                                                                            <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" style="width:100%; max-width:100%;">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td height="40">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="center"><img width="100" style="display:block;width:100%;max-width:100px;" alt="img" src="./assets/img/logo/logo.png"></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="20">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="center" style="font-family:'Josefin Sans', Arial, Helvetica, sans-serif;font-size: 25px;color: #282828;">New Job Seeker Information in the Database</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td style="line-height: 15px;height: 15px;font-size: 0px;">&nbsp;</td>
                                                                                    </tr>

                                                                                </tbody>
                                                                            </table>

                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>



                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </td>
                    </tr>
                </tbody>
            </table>
            <!--module-->
            <table style="width:100%;max-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                <tbody>
                    <tr>
                        <td bgcolor="#F4F4F4" align="center">

                            <!--container-->
                            <table class="row" style="width:600px;max-width:600px;" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                    <tr>
                                        <td bgcolor="#FFFFFF" align="center">

                                            <!--wrapper-->
                                            <table class="row" style="width:540px;max-width:540px;" width="540" cellspacing="0" cellpadding="0" border="0" align="center">
                                                <tbody>
                                                    <tr>
                                                        <td class="container-padding" align="center">



                                                            <!-- content container -->
                                                            <table width="540" border="0" cellpadding="0" cellspacing="0" align="center" class="row" style="width:540px;max-width:540px;">
                                                                <tbody>
                                                                    <tr>
                                                                        <td align="center">

                                                                            <!-- content -->
                                                                            <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" style="width:100%; max-width:100%;">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td style="line-height: 15px;height: 15px;font-size: 0px;">&nbsp;</td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td>
                                                                                            <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td style="font-family:'Josefin Sans', Arial, Helvetica, sans-serif;font-size: 18px;color: #282828;line-height: 21px;">Dear Management</td>
                                                                                                        <td width="30">&nbsp;</td>
                                                                                                        <!-- <td align="right" style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 13px;color: #282828;">Items Price</td> -->
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <!-- <td height="20" style="border-bottom: 1px solid #e0e0e0">&nbsp;</td> -->
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="20">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td width="20">&nbsp;</td>
                                                                                                        <td width="100%">
                                                                                                            <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                                                                                <tbody>
                                                                                                                    <tr>
                                                                                                                        <td style="font-family:'Josefin Sans', Arial, Helvetica, sans-serif;font-size: 18px;color: #282828;line-height: 21px;"></td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;line-height: 21px;">I am pleased to inform you that we have added a new job seeker's information to our database. This individual is now a part of our growing pool of potential candidates.</td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td width="20">&nbsp;</td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td style="font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;line-height: 21px;">Here are the details we have on file for the new job seeker:</td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td width="20">&nbsp;</td>
                                                                                                                    </tr>
                                                                                                                </tbody>
                                                                                                            </table>
                                                                                                        </td>
                                                                                                        <td>&nbsp;</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td width="20">&nbsp;</td>
                                                                                                        <td width="300" cellpadding="0">
                                                                                                            <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                                                                                <tbody>
                                                                                                                    <tr>
                                                                                                                        <td style="padding-left: 20px; font-family:'Josefin Sans', Arial, Helvetica, sans-serif;font-size: 18px;color: #282828;line-height: 21px;"><strong>Full Name:</strong> [Job Seeker's Full Name]</td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td style="padding-left: 20px; font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;line-height: 21px;"><strong>Phone Number:</strong> [Job Seeker's Phone Number]</td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td style="padding-left: 20px; font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;line-height: 21px;"><strong>Email Address:</strong> [Job Seeker's Email Address]</td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td style="padding-left: 20px; font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;line-height: 21px;"><strong>Resume File Name:</strong> [Job Seeker's Resume File Name]</td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td>&nbsp;</td>
                                                                                                                    </tr>
                                                                                                                </tbody>
                                                                                                            </table>
                                                                                                        </td>
                                                                                                        <td>&nbsp;</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td width="20">&nbsp;</td>
                                                                                                        <td width="300" cellpadding="0">
                                                                                                            <table border="0" width="100%" cellpadding="0" cellspacing="0">
                                                                                                                <tbody>
                                                                                                                    <tr>
                                                                                                                        <!-- <td style=" font-family:'Josefin Sans', Arial, Helvetica, sans-serif;font-size: 18px;color: #282828;line-height: 21px;">Full Name: [Job Seeker's Full Name]</td> -->
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td style=" font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;line-height: 21px;">This addition enhances our talent database, allowing us to better serve our clients and meet their business needs effectively.</td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td width="20">&nbsp;</td>
                                                                                                                    </tr>
                                                                                                                    <tr>
                                                                                                                        <td style=" font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size: 14px;color: #282828;line-height: 21px;">Thank you for your attention, and we look forward to continuing our commitment to excellence in service delivery.</td>
                                                                                                                    </tr>
                                                                                                                </tbody>
                                                                                                            </table>
                                                                                                        </td>
                                                                                                        <td>&nbsp;</td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="20">&nbsp;</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>



                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </td>
                    </tr>
                </tbody>
            </table>
            <!--module-->
            <table style="width:100%;max-width:100%;" width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
                <tbody>
                    <tr>
                        <td bgcolor="#F4F4F4" align="center">

                            <!--container-->
                            <table class="row" style="width:600px;max-width:600px;" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
                                <tbody>
                                    <tr>
                                        <td bgcolor="#560F11" align="center">

                                            <!--wrapper-->
                                            <table class="row" style="width:540px;max-width:540px;" width="540" cellspacing="0" cellpadding="0" border="0" align="center">
                                                <tbody>
                                                    <tr>
                                                        <td class="container-padding" align="center">



                                                            <!-- content container -->
                                                            <table width="540" border="0" cellpadding="0" cellspacing="0" align="center" class="row" style="width:540px;max-width:540px;">
                                                                <tbody>
                                                                    <tr>
                                                                        <td align="center">

                                                                            <!-- content -->
                                                                            <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" style="width:100%; max-width:100%;">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td height="40">&nbsp;</td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td align="center" style="font-family:'Josefin Sans', Arial, Helvetica, sans-serif;font-size: 18px;color: #dadada;font-weight: 400;">Get in Touch</td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td height="20">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>

                                                                                            <table cellspacing="0" cellpadding="0" border="0" align="center">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td width="25">
                                                                                                            <img width="25" style="display:block;width:100%;max-width:25px;" src="assets/img/gallery/fb.png">
                                                                                                        </td>
                                                                                                        <td width="10">&nbsp;</td>
                                                                                                        <td width="25">
                                                                                                            <img width="25" style="display:block;width:100%;max-width:25px;" src="assets/img/gallery/tw.png">
                                                                                                        </td>
                                                                                                        <td width="10">&nbsp;</td>
                                                                                                        <td width="25">
                                                                                                            <img width="25" style="display:block;width:100%;max-width:25px;" src="assets/img/gallery/in.png">
                                                                                                        </td>
                                                                                                        <td width="10">&nbsp;</td>
                                                                                                        <td width="25">
                                                                                                            <img width="25" style="display:block;width:100%;max-width:25px;" src="assets/img/gallery/pi.png">
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>

                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="20">&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="center" style="font-family:'Roboto', Arial, Helvetica, sans-serif;font-size: 13px;color: #dadada;line-height: 19px;">This email was sent to : admin@reactcertafrica.com<br>
                                                                                            You are receiving this email because you are subscribed to our mailing list.<br>
                                                                                            For any questions please send to operations@reactcertafrica.com
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>&nbsp;</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td align="center">

                                                                                            <table cellspacing="0" cellpadding="0" border="0">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <!-- <td align="center" style="font-family:'Roboto', Arial, Helvetica, sans-serif;font-size: 13px;color: #dadada;line-height: 20px;text-decoration: underline"><a href="http://www.example.com" target="_blank" style="color: #dadada">Subscription</a></td>
                                                                                                        <td width="20" align="center" style="font-family:'Roboto', Arial, Helvetica, sans-serif;font-size: 13px;color: #dadada;line-height: 20px;">|</td> -->
                                                                                                        <td align="center" style="font-family:'Roboto', Arial, Helvetica, sans-serif;font-size: 13px;color: #dadada;line-height: 20px;text-decoration: underline"><a href="http://www.example.com" target="_blank" style="color: #dadada">Privacy Policy</a></td>
                                                                                                        <td width="20" align="center" style="font-family:'Roboto', Arial, Helvetica, sans-serif;font-size: 13px;color: #dadada;line-height: 20px;">|</td>
                                                                                                        <td align="center" style="font-family:'Roboto', Arial, Helvetica, sans-serif;font-size: 13px;color: #dadada;line-height: 20px;text-decoration: underline"><a href="contact" target="_blank" style="color: #dadada">Help Center</a></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>

                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td height="40">&nbsp;</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
        </body>
        </html>
    """
    # Compose the email
    # Generate today's date to be included in the email Subject
    date_str = pd.Timestamp.today().strftime("%Y-%m-%d")
    # email_subject = "New Job Seeker Information in the Database %s" % (date_str)

    # Set up the email addresses and password. Please replace below with your email address and password
    email_from = "reactcertafrica@gmail.com"
    password = "Reat1234!"
    email_to = "operations@reactcertafrica.com"

    # Create a MIMEMultipart class, and set up the From, To, Subject fields
    email_message = MIMEMultipart()
    email_message["From"] = email_from
    email_message["To"] = email_to
    email_message[
        "Subject"
    ] = f"New Job Seeker Information in the Database - {date_str}"

    # Attach the html doc defined earlier, as a MIMEText html content type to the MIME message
    email_message.attach(MIMEText(html, "html"))
    # Convert it as a string
    email_string = email_message.as_string()
    # Connect to the Gmail SMTP server and Send Email
    context = ssl.create_default_context()
    with smtplib.SMTP_SSL("smtp.gmail.com", 465, context=context) as server:
        server.login(email_from, password)
        server.sendmail(email_from, email_to, email_string)


    # Mark the rows as email_sent = 1 to avoid resending
    cursor.execute("UPDATE your_table SET email_sent = 1 WHERE email_sent = 0")
    dbconnection.commit()

# Close the database connection
cursor.close()
conn.close()
