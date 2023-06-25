<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

ini_set("display_errors", "On");



// Include PHPMailer library files
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Create an instance of PHPMailer class
$mail = new PHPMailer;
//TP debugging.
$mail->SMTPDebug = 3;
//Set PHPMailer to use SMTP.
$mail->isSMTP();
//Set SMTP host name
$mail->Host = "mail.wlasoflogistics.ro";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;
//Provide username and password
$mail->Username = "site@wlasoflogistics.ro";
$mail->Password = "wlasoflogistics2022";
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "ssl";
//Set TCP port to connect to
$mail->Port = 465;

// Sender info
$mail->setFrom('site@wlasoflogistics.ro', 'PIESEAUTO');
// $mail->addReplyTo('contact.besttkd@gmail.com', 'dsadasdas');

$mail->addAddress($_POST['email']);
  // Import PHPMailer classes into the global namespace



    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];



// // Add cc or bcc
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// Email subject
$mail->Subject = 'Oferta pentru '.$name.',';

// Set email format to HTML
$mail->isHTML(true);

// Email body content
$mailContent = '

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head>
<!--[if gte mso 9]>
<xml>
  <o:OfficeDocumentSettings>
    <o:AllowPNG/>
    <o:PixelsPerInch>96</o:PixelsPerInch>
  </o:OfficeDocumentSettings>
</xml>
<![endif]-->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="x-apple-disable-message-reformatting">
  <!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]-->
  <title></title>

    <style type="text/css">
      @media only screen and (min-width: 620px) {
  .u-row {
    width: 600px !important;
  }
  .u-row .u-col {
    vertical-align: top;
  }

  .u-row .u-col-50 {
    width: 300px !important;
  }

  .u-row .u-col-100 {
    width: 600px !important;
  }

}

@media (max-width: 620px) {
  .u-row-container {
    max-width: 100% !important;
    padding-left: 0px !important;
    padding-right: 0px !important;
  }
  .u-row .u-col {
    min-width: 320px !important;
    max-width: 100% !important;
    display: block !important;
  }
  .u-row {
    width: 100% !important;
  }
  .u-col {
    width: 100% !important;
  }
  .u-col > div {
    margin: 0 auto;
  }
}
body {
  margin: 0;
  padding: 0;
}

table,
tr,
td {
  vertical-align: top;
  border-collapse: collapse;
}

p {
  margin: 0;
}

.ie-container table,
.mso-container table {
  table-layout: fixed;
}

* {
  line-height: inherit;
}

a[x-apple-data-detectors="true"] {
  color: inherit !important;
  text-decoration: none !important;
}

table, td { color: #000000; } #u_body a { color: #0000ee; text-decoration: underline; } @media (max-width: 480px) { #u_content_heading_2 .v-container-padding-padding { padding: 10px 10px 0px !important; } #u_content_text_1 .v-container-padding-padding { padding: 10px !important; } #u_content_divider_2 .v-container-padding-padding { padding: 10px !important; } #u_content_text_11 .v-container-padding-padding { padding: 10px !important; } #u_content_heading_3 .v-container-padding-padding { padding: 30px 10px 0px 30px !important; } #u_content_text_4 .v-container-padding-padding { padding: 5px 10px 30px !important; } #u_column_4 .v-col-border { border-top: 1px solid #8f8f8f !important;border-left: 0px solid transparent !important;border-right: 0px solid transparent !important;border-bottom: 1px solid #8f8f8f !important; } #u_content_text_5 .v-container-padding-padding { padding: 5px 10px 30px !important; } #u_content_text_6 .v-container-padding-padding { padding: 30px 10px 10px !important; } #u_content_text_7 .v-container-padding-padding { padding: 60px 10px 5px !important; } #u_column_8 .v-col-border { border-top: 2px solid #000000 !important;border-left: 2px solid #000000 !important;border-right: 2px solid #000000 !important;border-bottom: 2px solid #000000 !important; } #u_content_text_8 .v-container-padding-padding { padding: 10px !important; } #u_content_text_8 .v-line-height { line-height: 180% !important; } }
    </style>



<!--[if !mso]><!--><link href="https://fonts.googleapis.com/css2?family=Arvo&amp;display=swap" rel="stylesheet" type="text/css"><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;display=swap" rel="stylesheet" type="text/css"><link href="https://fonts.googleapis.com/css?family=Rubik:400,700&amp;display=swap" rel="stylesheet" type="text/css"><!--<![endif]-->

</head>

<body class="clean-body u_body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #e7e7e7;color: #000000">
  <!--[if IE]><div class="ie-container"><![endif]-->
  <!--[if mso]><div class="mso-container"><![endif]-->
  <table id="u_body" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #e7e7e7;width:100%" cellpadding="0" cellspacing="0">
  <tbody>
  <tr style="vertical-align: top">
    <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
    <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #e7e7e7;"><![endif]-->


<div class="u-row-container" style="padding: 0px;background-color: transparent">
  <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
    <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
      <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: transparent;"><![endif]-->

<!--[if (mso)|(IE)]><td align="center" width="600" class="v-col-border" style="background-color: #ffffff;width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
<div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
  <div style="background-color: #ffffff;height: 100%;width: 100% !important;">
  <!--[if (!mso)&(!IE)]><!--><div class="v-col-border" style="height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;"><!--<![endif]-->

<table style="font-family:"Open Sans",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:"Open Sans",sans-serif;" align="left">

  <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
    <tbody>
      <tr style="vertical-align: top">
        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
          <span>&nbsp;</span>
        </td>
      </tr>
    </tbody>
  </table>

      </td>
    </tr>
  </tbody>
</table>

<table id="u_content_heading_2" style="font-family:"Open Sans",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px 10px 0px 30px;font-family:"Open Sans",sans-serif;" align="left">

  <h1 class="v-line-height" style="margin: 0px; line-height: 140%; text-align: left; word-wrap: break-word; font-weight: normal; font-family: Arvo; font-size: 23px;"><strong>Raspuns oferta PIESE-AUTO!</strong></h1>

      </td>
    </tr>
  </tbody>
</table>

<table id="u_content_text_1" style="font-family:"Open Sans",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px 10px 10px 30px;font-family:"Open Sans",sans-serif;" align="left">

  <div class="v-line-height" style="line-height: 160%; text-align: left; word-wrap: break-word;">
<p style="font-size: 14px; line-height: 160%;">Oferta dvs. se regaseste mai jos:</p>
  </div>

      </td>
    </tr>
  </tbody>
</table>

<table id="u_content_divider_2" style="font-family:"Open Sans",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px 30px;font-family:"Open Sans",sans-serif;" align="left">
  <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 2px solid #2dc26b;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
    <tbody>
      <tr style="vertical-align: top">
        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
          <span>&nbsp;</span>
        </td>
      </tr>
    </tbody>
  </table>

      </td>
    </tr>
  </tbody>
</table>

<table id="u_content_text_11" style="font-family:"Open Sans",sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
  <tbody>
    <tr>
      <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px 10px 10px 30px;font-family:"Open Sans",sans-serif;" align="left">
  <div class="v-line-height" style="line-height: 160%; text-align: left; word-wrap: break-word;">
<p style="font-size: 14px; line-height: 160%;">Mesaj:</p>
<p>'.$message.'</p>
<p style="font-size: 14px; line-height: 160%;">&nbsp;</p>
  </div>

      </td>
    </tr>
  </tbody>
</table>

  <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
  </div>
</div>
<!--[if (mso)|(IE)]></td><![endif]-->
      <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
    </div>
  </div>
</div>


</body></html>
';
$mail -> Body = $mailContent;

// Send email
if(!$mail->send()){
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
}else{
  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "srvcol";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$idCol = $_POST["id"];

$sql = "UPDATE oferte SET status='old' WHERE id=".$idCol;

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();

}










//
//
// $name_client = $_POST['name'];
//
// // FOR CLIENT SECTION
//
//
// $mail_client = new PHPMailer;
// //TP debugging.
// $mail_client->SMTPDebug = 3;
// //Set PHPMailer to use SMTP.
// $mail_client->isSMTP();
// //Set SMTP host name
// $mail_client->Host = "smtp.gmail.com";
// //Set this to true if SMTP host requires authentication to send email
// $mail_client->SMTPAuth = true;
// //Provide username and password
// $mail_client->Username = "contact.besttkd@gmail.com";
// $mail_client->Password = "bestTkD#a30a";
// //If SMTP requires TLS encryption then set it
// $mail_client->SMTPSecure = "tls";
// //Set TCP port to connect to
// $mail_client->Port = 587;
//
// // Sender info
// $mail_client->setFrom('contact.besttkd@gmail.com', 'BEST TAEKWONDO WTF');
// // $mail->addReplyTo('contact.besttkd@gmail.com', 'dsadasdas');
//
// $mail_client->addAddress($email);
//
//
//
// $mail_client->Subject = 'Multumim pentru mesajul trimis !';
//
// // Set email format to HTML
// $mail_client->isHTML(true);
//
// // Email body content
// $mailContent_client = '
//
//
// <!doctype html>
// <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
//   <head>
//     <title>
//
//     </title>
//     <!--[if !mso]><!-- -->
//     <meta http-equiv="X-UA-Compatible" content="IE=edge">
//     <!--<![endif]-->
//     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1">
//     <style type="text/css">
//       #outlook a { padding:0; }
//       .ReadMsgBody { width:100%; }
//       .ExternalClass { width:100%; }
//       .ExternalClass * { line-height:100%; }
//       body { margin:0;padding:0;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%; }
//       table, td { border-collapse:collapse;mso-table-lspace:0pt;mso-table-rspace:0pt; }
//       img { border:0;height:auto;line-height:100%; outline:none;text-decoration:none;-ms-interpolation-mode:bicubic; }
//       p { display:block;margin:13px 0; }
//     </style>
//     <!--[if !mso]><!-->
//     <style type="text/css">
//       @media only screen and (max-width:480px) {
//         @-ms-viewport { width:320px; }
//         @viewport { width:320px; }
//       }
//     </style>
//     <!--<![endif]-->
//     <!--[if mso]>
//     <xml>
//     <o:OfficeDocumentSettings>
//       <o:AllowPNG/>
//       <o:PixelsPerInch>96</o:PixelsPerInch>
//     </o:OfficeDocumentSettings>
//     </xml>
//     <![endif]-->
//     <!--[if lte mso 11]>
//     <style type="text/css">
//       .outlook-group-fix { width:100% !important; }
//     </style>
//     <![endif]-->
//
//   <!--[if !mso]><!-->
//     <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet" type="text/css">
// <link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet" type="text/css">
//     <style type="text/css">
//       @****** url(https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700);
// @import url(https://fonts.googleapis.com/css?family=Cabin:400,700);
//     </style>
//   <!--<![endif]-->
//
//
//
// <style type="text/css">
//   @media only screen and (min-width:480px) {
//     .mj-column-per-100 { width:100% !important; max-width: 100%; }
//   }
// </style>
//
//
//     <style type="text/css">
//
//
//
// @media only screen and (max-width:480px) {
//   table.full-width-mobile { width: 100% !important; }
//   td.full-width-mobile { width: auto !important; }
// }
//
//     </style>
//     <style type="text/css">.hide_on_mobile { display: none !important;}
//     @media only screen and (min-width: 480px) { .hide_on_mobile { display: block !important;} }
//     .hide_section_on_mobile { display: none !important;}
//     @media only screen and (min-width: 480px) { .hide_section_on_mobile { display: table !important;} }
//     .hide_on_desktop { display: block !important;}
//     @media only screen and (min-width: 480px) { .hide_on_desktop { display: none !important;} }
//     .hide_section_on_desktop { display: table !important;}
//     @media only screen and (min-width: 480px) { .hide_section_on_desktop { display: none !important;} }
//     [owa] .mj-column-per-100 {
//         width: 100%!important;
//       }
//       [owa] .mj-column-per-50 {
//         width: 50%!important;
//       }
//       [owa] .mj-column-per-33 {
//         width: 33.333333333333336%!important;
//       }
//       p, h1, h2, h3 {
//           margin: 0px;
//       }
//
//       a {
//           text-decoration: none;
//           color: inherit;
//       }
//
//       @media only print and (min-width:480px) {
//         .mj-column-per-100 { width:100%!important; }
//         .mj-column-per-40 { width:40%!important; }
//         .mj-column-per-60 { width:60%!important; }
//         .mj-column-per-50 { width: 50%!important; }
//         mj-column-per-33 { width: 33.333333333333336%!important; }
//         }</style>
//
//   </head>
//   <body style="background-color:#FFFFFF;">
//
//
//   <div style="background-color:#FFFFFF;">
//
//
//   <!--[if mso | IE]>
//   <table
//      align="center" border="0" cellpadding="0" cellspacing="0" class="" style="width:600px;" width="600"
//   >
//     <tr>
//       <td style="line-height:0px;font-size:0px;mso-line-height-rule:exactly;">
//   <![endif]-->
//
//
//   <div style="Margin:0px auto;max-width:600px;">
//
//     <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="width:100%;">
//       <tbody>
//         <tr>
//           <td style="direction:ltr;font-size:0px;padding:9px 0px 9px 0px;text-align:center;vertical-align:top;">
//             <!--[if mso | IE]>
//               <table role="presentation" border="0" cellpadding="0" cellspacing="0">
//
//     <tr>
//
//         <td
//            class="" style="vertical-align:top;width:600px;"
//         >
//       <![endif]-->
//
//   <div class="mj-column-per-100 outlook-group-fix" style="font-size:13px;text-align:left;direction:ltr;display:inline-block;vertical-align:top;width:100%;">
//
//   <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="vertical-align:top;" width="100%">
//
//         <tr>
//           <td align="center" style="font-size:0px;padding:0px 0px 0px 0px;word-break:break-word;">
//
//   <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="border-collapse:collapse;border-spacing:0px;">
//     <tbody>
//       <tr>
//         <td style="width:90px;">
//
//   <img alt="Imaginie in asteptare" height="auto" src="https://s3.us-west-1.amazonaws.com/wthmedia/plugin-assets/8315/83629/favicon.png" style="border:0;display:block;outline:none;text-decoration:none;height:auto;width:100%;font-size:13px;" width="90">
//
//         </td>
//       </tr>
//     </tbody>
//   </table>
//
//           </td>
//         </tr>
//
//         <tr>
//           <td align="left" style="font-size:0px;padding:15px 15px 15px 15px;word-break:break-word;">
//
//   <div style="font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:11px;line-height:1.5;text-align:left;color:#000000;">
//     <p style="text-align: center;"><span style="font-size: 30px; color: #2262b7;">Best Taekwondo WTF</span></p>
//   </div>
//
//           </td>
//         </tr>
//
//         <tr>
//           <td style="font-size:0px;padding:10px undefined;padding-top:10px;padding-right:10px;word-break:break-word;">
//
//   <p style="border-top:solid 1px #000000;font-size:1;margin:0px auto;width:100%;">
//   </p>
//
//   <!--[if mso | IE]>
//     <table
//        align="center" border="0" cellpadding="0" cellspacing="0" style="border-top:solid 1px #000000;font-size:1;margin:0px auto;width:NaNpx;" role="presentation" width="NaNpx"
//     >
//       <tr>
//         <td style="height:0;line-height:0;">
//           &nbsp;
//         </td>
//       </tr>
//     </table>
//   <![endif]-->
//
//
//           </td>
//         </tr>
//
//         <tr>
//           <td align="left" style="font-size:0px;padding:28px 15px 15px 15px;word-break:break-word;">
//
//   <div style="font-family:Ubuntu, Helvetica, Arial, sans-serif;font-size:11px;line-height:1.5;text-align:left;color:#000000;">
//   <p><span style="font-size: 17px; color: #34495e;">'.$name_client.', </span></p><br />
//     <p><span style="font-size: 17px; color: #34495e;">Multumim pentru mesajul trimis !</span></p>
// <p><span style="font-size: 17px; color: #34495e;"> Va vom raspunde in cel mai scurt timp posibil !</span></p> <br />
// <p><span style="font-size: 17px; color: #34495e;">O zi buna !</span></p>
//   </div>
//
//           </td>
//         </tr>
//
//         <tr>
//           <td style="font-size:0px;padding:10px undefined;padding-top:10px;padding-right:10px;word-break:break-word;">
//
//   <p style="border-top:solid 1px #000000;font-size:1;margin:0px auto;width:100%;">
//   </p>
//
//   <!--[if mso | IE]>
//     <table
//        align="center" border="0" cellpadding="0" cellspacing="0" style="border-top:solid 1px #000000;font-size:1;margin:0px auto;width:NaNpx;" role="presentation" width="NaNpx"
//     >
//       <tr>
//         <td style="height:0;line-height:0;">
//           &nbsp;
//         </td>
//       </tr>
//     </table>
//   <![endif]-->
//
//
//           </td>
//         </tr>
//
//         <tr>
//           <td align="center" style="font-size:0px;padding:10px 10px 10px 10px;word-break:break-word;">
//
//
//  <!--[if mso | IE]>
//   <table
//      align="center" border="0" cellpadding="0" cellspacing="0" role="presentation"
//   >
//     <tr>
//
//           <td>
//         <![endif]-->
//           <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="float:none;display:inline-table;">
//
//   <tr>
//     <td style="padding:4px;">
//       <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:transparent;border-radius:3px;width:35px;">
//         <tr>
//           <td style="font-size:0;height:35px;vertical-align:middle;width:35px;">
//             <a href="https://www.facebook.com/besttaekwondo.ro" target="_blank">
//                 <img alt="FACEBOOK" height="35" src="https://s3-eu-west-1.amazonaws.com/ecomail-assets/editor/social-icos/rounded/facebook.png" style="border-radius:3px;display:block;" width="35">
//               </a>
//             </td>
//           </tr>
//       </table>
//     </td>
//
//   </tr>
//
//           </table>
//         <!--[if mso | IE]>
//           </td>
//
//           <td>
//         <![endif]-->
//           <table align="center" border="0" cellpadding="0" cellspacing="0" role="presentation" style="float:none;display:inline-table;">
//
//   <tr>
//     <td style="padding:4px;">
//       <table border="0" cellpadding="0" cellspacing="0" role="presentation" style="background:transparent;border-radius:3px;width:35px;">
//         <tr>
//           <td style="font-size:0;height:35px;vertical-align:middle;width:35px;">
//             <a href="https://www.youtube.com/channel/UCXXdvD9X3Vqllmg3OuGR7Ag" target="_blank">
//                 <img alt="YOUTUBE" height="35" src="https://s3-eu-west-1.amazonaws.com/ecomail-assets/editor/social-icos/rounded/youtube.png" style="border-radius:3px;display:block;" width="35">
//               </a>
//             </td>
//           </tr>
//       </table>
//     </td>
//
//   </tr>
//
//           </table>
//         <!--[if mso | IE]>
//           </td>
//
//       </tr>
//     </table>
//   <![endif]-->
//
//
//           </td>
//         </tr>
//
//   </table>
//
//   </div>
//
//       <!--[if mso | IE]>
//         </td>
//
//     </tr>
//
//               </table>
//             <![endif]-->
//           </td>
//         </tr>
//       </tbody>
//     </table>
//
//   </div>
//
//
//   <!--[if mso | IE]>
//       </td>
//     </tr>
//   </table>
//   <![endif]-->
//
//
//   </div>
//
//
// </body>
// </html>
//
// ';
// $mail_client -> Body = $mailContent_client;
//
// // Send email
// if(!$mail_client->send()){
//     echo 'Message could not be sent. Mailer Error: '.$mail_client->ErrorInfo;
// }else{
//     echo 'Message has been sent.';
// }

?>
