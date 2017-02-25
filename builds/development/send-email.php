<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "peter@petercole.com";
  $email = $_REQUEST['email'];
  $subject = 'Email from Peter Cole.com';
  $message = $_REQUEST['message'];


  $config = array(
              'protocol' => 'smtp',
              'smtp_host' => 's1301.gridserver.com',
              'smtp_port' => 587,
              'smtp_user' => 'peter@petercole.com',
              'smtp_pass' => 'Remmilg67'
  );
  
  //send email
  mail($admin_email, "$subject", $message, "From:" . $email);
  
  //Email response
  echo '

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Peter Cole Composer</title>
      <!-- inject:css -->
      <link rel="stylesheet" href="css/main.css">
        <!-- endinject -->
  </head>
      <body>
      <div class="form-group"><p>Thank you for your email. I will respond as soon as I can!</p></div>
      </body>
      </html>';
  }
  
  //if "email" variable is not filled out, display the form
  else  {
    echo "Error. Please try again. Be sure to enter your email address.";
  }
?>