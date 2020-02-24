<?php

if (isset($_GET['debug'])) {
    die(highlight_file(__FILE__));
}
?>
<!DOCTYPE HTML>
<html>
  <head>
  <title>Komparesyen v2.0</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <style>
    .corb-body { background-color: #16a085;}

    .centered {
      position: fixed;
      top: 50%;
      left: 50%;
      /* bring your own prefixes */
      transform: translate(-50%, -50%);
    }

    .corb-login-length { width: 200px;}
    .corb-submit { position: relative; left: auto; right: -120px;}
    .corb-flag { color: #ffffff; }
    .corb-alert { margin-top: 20px; }
  </style>
  </head>
  <body class="corb-body container-fluid">
  <div class="centered">
<?php
function len($x) {
  if (is_array($x))
  return count($x);
  return strlen($x);
}

require("flag.php");
$otp = $_GET["code"];
$cek = len($otp)==11;

      for ($i=0; $i<len($otp); $i++){
           if (strcmp($otp[$i], $secret[$i])!=0){
                $cek = false;
            }
if ($cek) {
echo('<h1><div class="alert alert-success centered" role="alert"> Flag: '.$flag.' </div></h1>');
}else{
  echo('<h1><div class="alert alert-danger centered" role="alert">Sorry, Wrong password!</div></h1>');
}
die;
}
?>
</div>
<div class="row">
      <div class="centered">
        <div class="well">
          <center><h3 class="corb-login-length">OTP Login</h3></center>
          <br/>
          <form method="GET">
          <input name="code" class="form-control" type="text" placeholder="OTP Code">
          <br/>
          <button class="corb-submit btn btn-primary btn-lg" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
 <script
          src="https://code.jquery.com/jquery-3.1.1.min.js"
          integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
          crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
  <!-- see ?debug for source-->
</html>