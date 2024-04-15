<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <?php
    $ref = isset($_GET['r']) ? htmlspecialchars($_GET['r']) : 'noref';
    ?>

<head>
    <title>
        Daw usage survey
    </title>

    <meta name="robots" content="noindex">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="description" content="Daw Survey by LIM" />
    <meta name="keywords" content="DAW, Survey, Music, Lim, Audio, Production, Music" />
    <meta name="author" content="Giorgio Presti, Federico Avanzini, Riccardo Della Longa" />

    <meta property="og:title" content="DAW Survey" />
    <meta property="og:description" content="Music Production habits survey" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.lim.di.unimi.it/dawsurvey/" />
	<meta property="og:image" content="https://www.lim.di.unimi.it/dawsurvey/logo.png" />




    <link rel="stylesheet" type="text/css" href="css/desktop.css" media="Screen">

    <link rel="stylesheet" type="text/css" href="css/mobile3.css" media="handheld, only screen and (max-device-width:770px)">

    <script>

        function myFunction() {
          // Get the text field
          var copyText = ("www.lim.di.unimi.it/dawsurvey/?r=<?php echo $ref ?>_s");


           // Copy the text inside the text field
          navigator.clipboard.writeText(copyText);

          // Alert the copied text
          alert("Copied the text: " + copyText);
        }

    </script>

</head>

<body>

<header>
    <img src="logo_small.png" >

    <h1 class="badge text-bg-dark" style="text-align:center"> DAW USAGE SURVEY </h1>

    <img src="dipinfo.jpeg" >
    </header>
<div class="module1" style="text-align:center">

    <b id="thanks"> Thanks for your support! </b> <br>
    <b> If you want you can share this survey with your colleagues and friends to help us ask more people:</b>

    <a href="https://www.lim.di.unimi.it/dawsurvey/?r=<?php echo $ref ?>_s">www.lim.di.unimi.it/dawsurvey/r=<?php echo $ref ?>_s</a> <br>
   <!-- <input type="text" value="Hello World" id="myInput"> <br>-->

    <button onclick="myFunction()">Copy link</button>
</div>

<div class="bottom-bar"> </div>
</body>

</html>