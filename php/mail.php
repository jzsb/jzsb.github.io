<?php



$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "jzsbyt@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo '<meta name="theme-color" content="#1e88e5">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">';
echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">';
echo "
<style>
   * {
       margin:0;
       padding: 0;
}

body {
   background-color: #fafafa;
}
</style>
<div class='container'>
   <div style='padding-bottom: 30px;' class='card center-align'>
      <p class='center-align' style='color: #757575; padding: 20px; font-size: 1.2em; font-weight: 400;'  >Thank You! We will get back to you as soon as possible!
<br>
Redirecting you back to the home page.
</p>
<div class='preloader-wrapper active'>
    <div class='spinner-layer spinner-blue-only'>
      <div class='circle-clipper left'>
        <div class='circle'></div>
      </div><div class='gap-patch'>
        <div class='circle'></div>
      </div><div class='circle-clipper right'>
        <div class='circle'></div>
      </div>
    </div>
  </div>
   </div>
</div>";
?>


<?php
header('Refresh: 3; URL=http://jzsb.github.io');

?>
