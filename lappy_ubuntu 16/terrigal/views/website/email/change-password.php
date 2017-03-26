<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Use the latest (edge) version of IE rendering engine -->
    <title>EmailTemplate-Responsive</title>
    <!-- The title tag shows in email notifications, like Android 4.4. -->
    <!-- Please use an inliner tool to convert all CSS to inline as inpage or external CSS is removed by email clients -->
    <!-- important in CSS is used to prevent the styles of currently inline CSS from overriding the ones mentioned in media queries when corresponding screen sizes are encountered -->
    <!-- CSS Reset -->
    <style type="text/css">
        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,  body {
            margin: 0 !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }
        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
        /* What it does: Forces Outlook.com to display emails full width. */
        .ExternalClass {
            width: 100%;
        }
        /* What is does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }
        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,  td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }
        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode: bicubic;
        }
        /* What it does: Overrides styles added when Yahoo's auto-senses a link. */
        .yshortcuts a {
            border-bottom: none !important;
        }
        /* What it does: Another work-around for iOS meddling in triggered links. */
        a[x-apple-data-detectors] {
            color: inherit !important;
        }
        body {
            background-color: #fff !important;
        }
    </style>
    <!-- Progressive Enhancements -->
    <style type="text/css">
        /* What it does: Hover styles for buttons */
        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }
        .button-td:hover,
        .button-a:hover {
            background: #555555 !important;
            border-color: #555555 !important;
        }
        /* Media Queries */
        @media screen and (max-width: 600px) {
            .email-container {
                width: 100% !important;
            }
            /* What it does: Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */
            .fluid,
            .fluid-centered {
                max-width: 100% !important;
                height: auto !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }
            /* And center justify these ones. */
            .fluid-centered {
                margin-left: auto !important;
                margin-right: auto !important;
            }
            /* What it does: Forces table cells into full-width rows. */
            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }
            /* And center justify these ones. */
            .stack-column-center {
                text-align: center !important;
            }
            /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                margin-left: auto !important;
                margin-right: auto !important;
                float: none !important;
            }
            table.center-on-narrow {
                display: inline-block !important;
            }
        }
    </style>
</head>
<body width="100%" style="margin: 0; background-color: #fff !important;" yahoo="yahoo">
<table cellpadding="0" cellspacing="0" border="0" height="100%" width="100%" style="border-collapse:collapse; background-color: #fff !important;">
    <tr>
        <td>
            <center style="width: 100%;">
                <!-- Visually Hidden Preheader Text : BEGIN -->
                <div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;"> (Optional) This text will appear in the inbox preview, but not the email body. </div>
                <!-- Visually Hidden Preheader Text : END -->
                <!-- Email Header : BEGIN -->
                <table align="center" width="600" class="email-container">
                    <tr>
                        <td style="padding: 1px 0; text-align: center" bgcolor="#F4FFCD">&nbsp;</td>
                    </tr>
                </table>
                <!-- Email Header : END -->
                <!-- Email Body : BEGIN -->
                <table cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#F4FFCD" width="600" class="email-container">
                    <!-- Hero Image, Flush : BEGIN -->
                    <tr>
                        <td class="full-width-image">
                            <a href="https://www.terrigal.com.au/">
                                <img src="https://s29.postimg.org/itdiwe3rb/b3731f_9fdb3661a9914f14a885aaed8b2997b2_mv3.png" width="600" alt="alt_text" border="0" align="center" style="width: 100%; max-width: 600px; height: auto;">
                        </td>
                    </tr>
                    <!-- Hero Image, Flush : END -->
                    <!-- 1 Column Text : BEGIN -->
                    <tr>
                        <td style="padding: 40px; text-align: center; font-family: sans-serif; font-size: 19px; mso-height-rule: exactly; line-height: 20px; color: #555555;"><strong>Password Changed<br>
                            </strong><br>
                            <br>
                            <br>
                            <!-- Button : Begin -->
                            <table cellspacing="0" cellpadding="0" border="0" style="margin: auto">
                                <tr>
                                    <td style="padding: 0px 40px 0px 40px; font-family: sans-serif; font-size: 19px; mso-height-rule: exactly; line-height: 20px; color: #555555;">
                                        <p>New Password: <strong><?php echo @$password; ?></strong></p>
                                    </td>
                                </tr>
                            </table>
                            <!-- Button : END --></td>
                    </tr>
                    <!-- 1 Column Text : BEGIN -->
                    <!-- Background Image with Text : BEGIN -->
                    <tr>
                        <td background="images/Image_600x230.png" bgcolor="#222222" valign="middle" style="text-align: center; background-position: center center !important; background-size: cover !important;">
                            <!--[if gte mso 9]>
                            <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:600px;height:175px; background-position: center center !important;">
                                <v:fill type="tile" src="assets/Responsive/Image_600x230.png" color="#222222" />
                                <v:textbox inset="0,0,0,0">
                            <![endif]-->
                            <!--[if gte mso 9]>
                            </v:textbox>
                            </v:rect>
                            <![endif]-->
                        </td>
                    </tr>
                    <!-- Background Image with Text : END -->
                    <!-- Two Even Columns : BEGIN -->
                    <tr> </tr>
                    <!-- Two Even Columns : END -->
                    <!-- Three Even Columns : BEGIN -->
                    <tr> </tr>
                    <!-- Three Even Columns : END -->
                    <!-- Thumbnail Left, Text Right : BEGIN -->
                    <tr> </tr>
                    <!-- Thumbnail Left, Text Right : END -->

                    <tr>
                </table>
                <!-- Email Body : END -->
                <!-- Email Footer : BEGIN -->
                <table align="center" width="600" class="email-container" >
                    <tr>
                        <td style="padding: 40px 10px;width: 100%;font-size: 12px; font-family: sans-serif; mso-height-rule: exactly; line-height:18px; text-align: center; color: #888888;" bgcolor="#F4FFCD">
                            <br>
                            <br>
                            <p style="margin:0;padding:0">
                                <a href="https://www.facebook.com/terrigalcomau/">
                                    <center><img src="https://s29.postimg.org/6mc9puohz/social_media.png" border="0" alt="Facebook" height="30"></center></a></p>
                            <span class="mobile-link--footer">PO box 620 Terrigal NSW 2260</span> <br>
                            <br>
                            <unsubscribe style="color:#888888; text-decoration:underline;"> <a href="https://www.terrigal.com.au/" style="color:#a7a7a7;text-decoration:underline" target="_blank" data-saferedirecturl="https://www.terrigal.com.au/">Private Policy</unsubscribe>
                            <unsubscribe style="color:#888888; text-decoration:underline;"> <a href="https://www.terrigal.com.au/" style="color:#a7a7a7;text-decoration:underline" target="_blank" data-saferedirecturl="https://www.terrigal.com.au/">Terms and Conditions</unsubscribe>
                            <unsubscribe style="color:#888888; text-decoration:underline;"> <a href="https://www.terrigal.com.au/" style="color:#a7a7a7;text-decoration:underline" target="_blank" data-saferedirecturl="https://www.terrigal.com.au/">Contact</unsubscribe>
                        </td>
                    </tr>
                </table>
                <!-- Email Footer : END -->
            </center>
        </td>
    </tr>
</table>
</body>
</html>