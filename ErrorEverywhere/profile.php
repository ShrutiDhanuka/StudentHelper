<?php
 session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="menuDiv.CSS">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Error Everywhere</title>
 
    <style >
      html {
  scroll-behavior: smooth;
}



::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: red; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #b30000; 
}
    </style>
  </head>
<body style="background-color: #1abc9c;">

<script>
  $(document).ready(function()
  {
    $("#selfDevelopmentSection").hide();
    $("#learningSection").hide();
    $("#entertainmentHIDESHOW").hide();

    $('#a2self').click(function()
    {
      $('#entertainmentHIDESHOW').hide();
      $('#selfDevelopmentSection').show();
      $('#learningSection').hide();
      $('#mainPro').hide();
    });

    $('#a2learn').click(function()
    {
      $('#selfDevelopmentSection').hide();
      $('#entertainmentHIDESHOW').hide();
      $('#learningSection').show();
      $('#mainPro').hide();
    });
    $('#a2entertain').click(function()
    {
      $('#selfDevelopmentSection').hide();
      $('#learningSection').hide();
      $('#entertainmentHIDESHOW').show();
      $('#mainPro').hide();
    });
  });
</script>

<nav class="navbar navbar-expand-lg navbar-light" style="background: none; color: white;">
  <a class="navbar-brand" href="home.php">
    <img src="logoPhoneIcon.png" width="45" height="45" class="d-inline-block align-top" alt="">
    <b><font style="color: white; font-size: 120%">ERROR EVERYWHERE</font></b>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown" >
    
    <ul class="navbar-nav" style="color: white; font-size: 130%;">
      <li class="nav-item active">
        <a class="nav-link" href="profile.php" id="a2profile">&emsp;&emsp;&emsp;<i class="fa fa-id-badge" aria-hidden="true"></i> PROFILE<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#selfDevelopmentSection" id="a2self">&emsp;&emsp;&emsp;<i class="fa fa-book" aria-hidden="true"></i> SELF</a>
      </li><li class="nav-item">
        <a class="nav-link" href="#learningSection" id="a2learn">&emsp;&emsp;&emsp;<i class="fa fa-graduation-cap" aria-hidden="true"></i> LEARN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#entertainmentHIDESHOW" id="a2entertain">&emsp;&emsp;&emsp;<i class="fa fa-play-circle" aria-hidden="true"></i> ENTERTAINMENT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactUSP" id="a2contactUS">&emsp;&emsp;&emsp;<i class="fa fa-play-circle" aria-hidden="true"></i> CONTACT US</a>
      </li>
    </ul>
  </div>
</nav>
<!--close nav-->

<!--MAIN RPOFILE-->
<div id="mainProfile">
  

</div><!--close profile-->


<div id="entertainmentHIDESHOW"> <!--full div-->

<div id="entertainment">
  <div id="entDesk">
    <h2 style="background-color: white; color: #1abc9c; "><center><br><u><b><span style="font-size: 32px;">ENTERTAINMENT</span></b></u><br><br></center></h2>
    <div class="alert mx-auto" style="background-color: #1abc9c; ">
     <h3>Entertainment is necessary for everyone, and anyone that says otherwise is ignorant. It might not seem apparent, but entertainment plays a very big role in ensuring that people live normal and happy lives. Over the years, with the introduction of better entertainment avenues, people have started consuming entertainment more.</h3>
     <br>
     <h4>Many of us are unsuccessful in finding and downloading webseries or movies, as now a days wide range of use of internet had made it compliacated.<br>But don't worry, just follow the given steps to download any web-series or movie. <br><strong>Here, the example is shown of downloading famous web-series: Mirzapur (season-1)</strong></h4>
   </div>
<div style="color: #1abc9c; background-color: white;">
  <h1><br><center><b>STEP-1:</b></center></h1>
  <div style="position: relative;left: 8%; width: 60%; top: 70px;">
     <img  src="es1 (2).jpg" style="height: 60%; width: 70%; box-shadow: 3px 3px 3px 3px gray">
  </div>
  <div style="position: relative; left: 55%; width: 40%;  top: -155px; right: 0%;">
    
    <h2>Open any browser and search for the movie or series name like <strong>index of Mirzapur</strong>.</h2>
  </div>
</div>
<div style="color: white; background-color: #1abc9c;">
  <h1><br><center><b>STEP-2:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</b></center></h1>
  <div style="position: relative;left: 10%; width: 30%;  top: 150px;">
    <h2>Click on the first link.<br><br><br></h2>
  </div>
  <div style="position: relative; left:40%; width: 60%;  top: -40px; ">
     <img  src="es2 (2).jpg" style="height: 60%; width: 70%;box-shadow: 3px 3px 3px 3px gray;">
  </div>
</div>
<div style="color: #1abc9c; background-color: white;">
  <h1><br><center><b>STEP-3:</b></center></h1>
  <div style="position: relative;left: 8%; width: 60%; top: 70px;">
     <img  src="es3 (2).jpg" style="height: 60%; width: 70%; box-shadow: 3px 3px 3px 3px gray">
  </div>
  <div style="position: relative; left: 55%; width: 40%;  top: -175px; right: 0%;">
    
    <h2>Select the season (if you are searching for amy series), else select the part; for movies.</h2>
  </div>
</div>
<div style="color: white; background-color: #1abc9c;">
  <h1><br><center><b>STEP-4:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</b></center></h1>
  <div style="position: relative;left: 10%; width: 30%;  top: 120px;">
    <h2>Click on the episode number that you want to download.<br></h2>
  </div>
  <div style="position: relative; left:40%; width: 60%;  top: -70px; ">
     <img  src="es4 (2).jpg" style="height: 60%; width: 70%;box-shadow: 3px 3px 3px 3px gray;">
  </div>
</div>
<div style="color: #1abc9c; background-color: white;">
  <h1><br><center><b>STEP-5:</b></center></h1>
  <div style="position: relative;left: 8%; width: 60%; top: 70px;">
     <img  src="es5 (2).jpg" style="height: 60%; width: 70%; box-shadow: 3px 3px 3px 3px gray">
  </div>
  <div style="position: relative; left: 55%; width: 40%;  top: -175px; right: 0%;">
    
    <h2>Click on the link that you are interested to download (as per your covenience of quality and language).</h2>
  </div>
</div>
  <center><h4>DOWNLOADING will start...</h4></center>
  </div>

  <div id="entMob">
   <h2 style="background-color: white; color: #1abc9c; "><center><br><u><b><span style="font-size: 30px;">ENTERTAINMENT</span></b></u><br><br></center></h2>
   <div class="alert mx-auto" style="background-color: #1abc9c; ">
     <h4>Entertainment is necessary for everyone, and anyone that says otherwise is ignorant. It might not seem apparent, but entertainment plays a very big role in ensuring that people live normal and happy lives. Over the years, with the introduction of better entertainment avenues, people have started consuming entertainment more.</h4>
     <br>
     <h5>Many of us are unsuccessful in finding and downloading webseries or movies, as now a days wide range of use of internet had made it compliacated.<br>But don't worry, just follow the given steps to download any web-series or movie. <br><strong>Here, the example is shown of downloading famous web-series: Mirzapur (season-1)</strong></h5>
   </div>

    <div style="background-color: white; color: #1abc9c; ">
<h2 ><center><br><u><b><span style="font-size: 24px; color: black;">STEP-1: </span></b></u><br><br></center></h2>
  <div class="alert mx-auto" >
<h3>Open any browser and search for the movie or series name like <strong>index of Mirzapur</strong>.</h3><br>
<img src="ES1.jpg" style="width: 100%;box-shadow: 3px 3px 3px 3px gray">
</div>
</div>

<div style="background-color: #1abc9c; color: white; ">
<h2 ><center><br><u><b><span style="font-size: 24px; color: black;">STEP-2: </span></b></u><br><br></center></h2>
  <div class="alert mx-auto" >
<h3>Click on the first link.</h3><br>
<img src="ES2.jpg" style="width: 100%;box-shadow: 3px 3px 3px 3px gray">
</div>
</div>

<div style="background-color: white; color: #1abc9c; ">
<h2 ><center><br><u><b><span style="font-size: 24px; color: black;">STEP-3: </span></b></u><br><br></center></h2>
  <div class="alert mx-auto" >
<h3>Select the season (if you are searching for amy series), else select the part; for movies.</h3><br>
<img src="ES3.jpg" style="width: 100%;box-shadow: 3px 3px 3px 3px gray">
</div>
</div>

<div style="background-color:#1abc9c; color:  white; ">
<h2 ><center><br><u><b><span style="font-size: 24px; color: black;">STEP-4: </span></b></u><br><br></center></h2>
  <div class="alert mx-auto" >
<h3>Click on the link that you are interested to download (as per your covenience of quality and language).</h3><br>
<img src="ES4.jpg" style="width: 100%; box-shadow: 3px 3px 3px 3px gray">
</div>
</div>

<div style="background-color: white; color: #1abc9c; ">
<h2 ><center><br><u><b><span style="font-size: 24px; color: black;">STEP-5: </span></b></u><br><br></center></h2>
  <div class="alert mx-auto" >
<h3>Press OK or DOWNLOAD button (whatever your system shows).</h3><br>
<img src="ES5.jpg" style="width: 100%;box-shadow: 3px 3px 3px 3px gray">
</div>
  </div>
<center><h5>DOWNLOADING will start...</h5></center>
</div>

</div> <!--mainClose-->
</div> <!--Entr cls-->

<!--UDEMY COURSES-->
<div id="learningSection">

<div id="ebooksSYS">
<div class="alert mx-auto" style="border: 0px; background-color: white; text-align: center;">
  <font style="font-size: 2.5vw; color: #1abc9c"><strong>E-BOOKs</strong></font><br><font style="color: brown; font-size: 1vw;">(available for downloading)</font>
</div>
</div>

<div id="ebooksMOB">
<div class="alert mx-auto" style="border: 0px; background-color: white; text-align: center;">
  <font style="font-size: 24px; color: #1abc9c"><strong>E-BOOKs</strong></font><br><font style="color: brown; font-size: 12px;">(available for downloading)</font>
</div>
</div>

  <div class="card-deck mx-auto" >
  <div class="card mx-auto" style="box-shadow: 3px 3px 3px lightgray; width: 18rem;">
    <img class="card-img-top" src="Programming Language Explorations.jpg" alt="Card image cap" style="height:15rem;">
    <div class="card-body">
      <h5 class="card-title">Programming Language Explorations</h5>
      <p class="card-text"><br><strong>Author(s): Ray Toal, Rachel Rivera, Alexander Schneider, Eileen Choe</strong></p>
    </div>
    <div class="card-footer">
      <center>
      <a href="http://80.82.78.35/get.php?md5=2cd8452ff5a372a7459559ad1d0834e4&key=JW2CMC2MXE1MDFVH&mirr=1" download style="font-size: 20px; color: #1abc9c"><i class="fa fa-download" aria-hidden="true"></i></a>
      </center>
  </div>
  </div>&nbsp;&nbsp;
  <div class="card mx-auto" style="box-shadow: 3px 3px 3px lightgray; width: 18rem;">
    <img class="card-img-top" src="Jumpstarting C.jpg" alt="Card image cap" style="height: 15rem;">
    <div class="card-body">
      <h5 class="card-title"> Jumpstarting C: </h5>
      <p class="card-text">Learn the All-Purpose Programming Language for Microcontrollers and Computers<br><br><strong>Author(s): Wolfram Donat</strong></p>
    </div>
    <div class="card-footer">
      <center>
      <a href="http://80.82.78.35/get.php?md5=a5cca5302375a2469c88c616efea2c7c&key=NH6ECF4FIBNOLJ36&mirr=1" download style="font-size: 20px; color: #1abc9c"><i class="fa fa-download" aria-hidden="true"></i></a>
      </center>
    </div>
  </div>&nbsp;&nbsp;
  <div class="card mx-auto" style="box-shadow: 3px 3px 3px lightgray; width: 18rem;">
    <img class="card-img-top" src="24 patterns of clean code.jpg" alt="Card image cap" style="height: 15rem;">
    <div class="card-body">
      <h5 class="card-title">24 Patterns for Clean Code</h5>
      <p class="card-text">Techniques for Faster, Safer Code with Minimal Debugging<br><br><strong>Author(s): Beisert Robert</strong></p>
    </div>
    <div class="card-footer">
      <center>
      <a href="http://80.82.78.35/get.php?md5=aff0e1526c4a956e665a65086b81b2bf&key=NNKMNP09G4J12R5W&mirr=1" download style="font-size: 20px; color: #1abc9c"><i class="fa fa-download" aria-hidden="true"></i></a>
      </center>
    </div>
  </div>&nbsp;&nbsp;
   <div class="card mx-auto" style="box-shadow: 3px 3px 3px lightgray; width: 18rem;">
    <img class="card-img-top" src="The New S Language.jpg" alt="Card image cap" style="height: 15rem;">
    <div class="card-body">
      <h5 class="card-title"> The New S Language : </h5>
      <p class="card-text">A programming environment for data analysis and graphics<br><br><strong>Author(s): Becker, Richard A.; Chambers, John M.; Wilks, Allan R</strong></p>
    </div>
    <div class="card-footer">
      <center>
      <a href="http://80.82.78.35/get.php?md5=2521dc5d1ff490c09cb99640bee08e33&key=251NDBM4ETITY2O0&mirr=1" download style="font-size: 20px; color: #1abc9c"><i class="fa fa-download" aria-hidden="true"></i></a>
      </center>
    </div>
  </div>&nbsp;&nbsp;
  <div class="card mx-auto" style="box-shadow: 3px 3px 3px lightgray; width: 18rem;">
    <img class="card-img-top" src="Machine learning with Go.jpg" alt="Card image cap" style="height: 15rem;">
    <div class="card-body">
      <h5 class="card-title"> Machine learning with Go: </h5>
      <p class="card-text">Implement regression, classification, clustering, time-series models, neural networks, and more using the Go programming language<br><br><strong>Author(s): Whitenack, Daniel</strong></p>
    </div>
    <div class="card-footer">
      <center>
      <a href="http://80.82.78.35/get.php?md5=57e1856129c5097d646302a093323fdb&key=VUYKI9VAF9STPYQV" download style="font-size: 20px; color: #1abc9c"><i class="fa fa-download" aria-hidden="true"></i></a>&nbsp;&nbsp;
      </center>
    </div>
  </div>
</div>
<br>
    <div class="card-deck mx-auto" >
  <div class="card mx-auto" style="box-shadow: 3px 3px 3px lightgray; width: 18rem;">
    <img class="card-img-top" src="Programming Language Concepts.jpg" alt="Card image cap" style="height:15rem;">
    <div class="card-body">
      <h5 class="card-title">Programming Language Concepts</h5>
      <p class="card-text"><br><strong>Author(s): Peter Sestoft (auth.)</strong></p>
    </div>
    <div class="card-footer">
      <center>
      <a href="http://80.82.78.35/get.php?md5=c4743a79f52d187dd576b41f4df00065&key=7ABJWN17ZU98I9CZ" download style="font-size: 20px; color: #1abc9c"><i class="fa fa-download" aria-hidden="true"></i></a>
      </center>
  </div>
  </div>&nbsp;&nbsp;
  <div class="card mx-auto" style="box-shadow: 3px 3px 3px lightgray; width: 18rem;">
    <img class="card-img-top" src="JAVA.jpg" alt="Card image cap" style="height: 15rem;">
    <div class="card-body">
      <h5 class="card-title"> Java: </h5>
      <p class="card-text">Learn Java Programming With Ultimate Zero to Hero Programming Crash Course for Beginners<br><br><strong>Author(s): Madoff, Paul</strong></p>
    </div>
    <div class="card-footer">
      <center>
      <a href="http://80.82.78.35/get.php?md5=f3256b040cbc8208fc2c02463c35046a&key=5WC1JDYL71TTCMT7&mirr=1" download style="font-size: 20px; color: #1abc9c"><i class="fa fa-download" aria-hidden="true"></i></a>
      </center>
    </div>
  </div>&nbsp;&nbsp;
  <div class="card mx-auto" style="box-shadow: 3px 3px 3px lightgray; width: 18rem;">
    <img class="card-img-top" src="Assembly Language Programming.jpg" alt="Card image cap" style="height: 15rem;">
    <div class="card-body">
      <h5 class="card-title">Assembly Language Programming made clear</h5>
      <p class="card-text">A systemic Approach<br><br><strong>Author(s): Howard Dachslager</strong></p>
    </div>
    <div class="card-footer">
      <center>
      <a href="http://80.82.78.35/get.php?md5=d5f28b54eadde08fc7e0e5db80c47ded&key=CZDTZMVPD51ES1IH&mirr=1" download style="font-size: 20px; color: #1abc9c"><i class="fa fa-download" aria-hidden="true"></i></a>
      </center>
    </div>
  </div>&nbsp;&nbsp;
   <div class="card mx-auto" style="box-shadow: 3px 3px 3px lightgray; width: 18rem;">
    <img class="card-img-top" src="JavaScript.jpg" alt="Card image cap" style="height: 15rem;">
    <div class="card-body">
      <h5 class="card-title"> JavaScript : </h5>
      <p class="card-text">The Definitive Guide: Master the World's Most-Used Programming Language<br><br><strong>Author(s): David Flanagan</strong></p>
    </div>
    <div class="card-footer">
      <center>
      <a href="http://80.82.78.35/get.php?md5=aa16cfcab9f4b980b01675ec7ea75820&key=S6UJ887LRTWX8CU9" download style="font-size: 20px; color: #1abc9c"><i class="fa fa-download" aria-hidden="true"></i></a>
      </center>
    </div>
  </div>&nbsp;&nbsp;
  <div class="card mx-auto" style="box-shadow: 3px 3px 3px lightgray; width: 18rem;">
    <img class="card-img-top" src="Programming Language Pragmatics.jpg" alt="Card image cap" style="height: 15rem;">
    <div class="card-body">
      <h5 class="card-title">Programming Language Pragmatics</h5>
      <p class="card-text"><br><strong>Author(s): Michael L. Scott</strong></p>
    </div>
    <div class="card-footer">
      <center>
      <a href="http://80.82.78.35/get.php?md5=9006e3c672726689767509b65c889202&key=EMFAM9K5EKIH9JXF&mirr=1" download style="font-size: 20px; color: #1abc9c"><i class="fa fa-download" aria-hidden="true"></i></a>&nbsp;&nbsp;
      </center>
    </div>
  </div>
</div>
<br>
<div id="udemySYS">
<div class="alert mx-auto" style="border: 0px; background-color: white; text-align: center;">
  <font style="font-size: 2.5vw; color: #1abc9c"><strong>VIDEO LECTURES</strong></font><br><font style="color: brown; font-size: 1vw;">(udemy)</font>
</div>
<font style="font-size: 2vw; color: white;">
  &nbsp;Tutorial to download udemy courses for free will be uploaded soon again.<br>
  &nbsp;Due to some technical issues it has been removed temporarily.<br>&nbsp;We are extremely sorry for that.
</font>
</div>

<div id="udemyMOB">
<div class="alert mx-auto" style="border: 0px; background-color: white; text-align: center;">
  <font style="font-size: 24px; color: #1abc9c"><strong>VIDEO LECTURES</strong></font><br><font style="color: brown; font-size: 12px;">(udemy)</font>
</div>
<font style="font-size: 20px; color: white;">
  &nbsp;Tutorial to download udemy courses for free will be uploaded soon again.<br>
  &nbsp;Due to some technical issues it has been removed temporarily.<br>&nbsp;We are extremely sorry for that.
</font>
</div>
  
</div><!--close learning -->

<!--SELF-->
<div id="selfDevelopmentSection">
  <div id="selfDevSYS">
<div class="alert mx-auto" style="border: 0px; background-color: white; text-align: center;">
  <font style="font-size: 2.5vw; color: #1abc9c"><strong>SELF DEVELOPMENT</strong></font>
</div>
<font style="font-size: 1.7vw; color: black;">
Personal development is a lifelong process. It is a way for people to assess their skills and qualities, consider their aims in life and set goals in order to realise and maximise their potential.
<br>
This page helps you to identify the skills you need to set life goals which can enhance your employability prospects, raise your confidence, and lead to a more fulfilling, higher quality life. Plan to make relevant, positive and effective life choices and decisions for your future to enable personal empowerment.
<br>
Although early life development and early formative experiences within the family, at school, etc. can help to shape us as adults, personal development should not stop later in life.
<br>
This page contains information and advice that is designed to help you to think about your personal development and ways in which you can work towards goals and your full potential.<br>
</font>
<font style="color: white; font-size: 1.8vw;">
  <i>
  You can download the books whichever you would like.<br>If you would like to have more books then please "write to us", soon your book will be available for downloading.
</i>
</font>
</div>

<div id="selfDevMOB">
<div class="alert mx-auto" style="border: 0px; background-color: white; text-align: center;">
  <font style="font-size: 24px; color: #1abc9c"><strong>SELF DEVELOPMENT</strong></font>
</div>
<font style="font-size: 18px; color: black;">
Personal development is a lifelong process. It is a way for people to assess their skills and qualities, consider their aims in life and set goals in order to realise and maximise their potential.
<br>
This page helps you to identify the skills you need to set life goals which can enhance your employability prospects, raise your confidence, and lead to a more fulfilling, higher quality life. Plan to make relevant, positive and effective life choices and decisions for your future to enable personal empowerment.
<br>
Although early life development and early formative experiences within the family, at school, etc. can help to shape us as adults, personal development should not stop later in life.
<br>
This page contains information and advice that is designed to help you to think about your personal development and ways in which you can work towards goals and your full potential.<br>
</font>
<font style="color: white; font-size: 18px"><i>
  You can download the books whichever you would like.<br>If you would like to have more books then please "write to us", soon your book will be available for downloading.
</i></font>
</div>

<br>
  <div class="card-deck mx-auto" >
    <div class="card mx-auto" style="box-shadow: 3px 3px 3px lightgray; width: 18rem;">
    <img class="card-img-top" src="The Source of Success.jpg" alt="Card image cap" style="height:15rem;">
    <div class="card-body">
      <h5 class="card-title">The Source of Success:</h5>
      <p class="card-text">Five Enduring Principles at the Heart of Real Leadership<br><br><strong>Author(s): Peter Georgescu, Ram Charan, David Dorsey</strong></p>
    </div>
    <div class="card-footer">
      <center>
      <a href="http://80.82.78.35/get.php?md5=44e900c3f1da8b0600ac1f4f83e5982c&key=EQIYGIPQ0O3UJOLP&mirr=1" download style="font-size: 20px; color: #1abc9c"><i class="fa fa-download" aria-hidden="true"></i></a>
      </center>
  </div>
  </div>&nbsp;&nbsp;
  <div class="card mx-auto" style="box-shadow: 3px 3px 3px lightgray; width: 18rem;">
    <img class="card-img-top" src="Thinking, Fast and Slow.jpg" alt="Card image cap" style="height: 15rem;">
    <div class="card-body">
      <h5 class="card-title">Thinking, Fast and Slow</h5>
      <p class="card-text"><br><strong>Author(s): Daniel Kahneman</strong></p>
    </div>
    <div class="card-footer">
      <center>
      <a href="http://80.82.78.35/get.php?md5=da1006bcb9bd598b99f5044270415441&key=UM6P7Q119ZBVV66H&mirr=1" download style="font-size: 20px; color: #1abc9c"><i class="fa fa-download" aria-hidden="true"></i></a>
      </center>
    </div>
  </div>&nbsp;&nbsp;
  <div class="card mx-auto" style="box-shadow: 3px 3px 3px lightgray; width: 18rem;">
    <img class="card-img-top" src="The Power Of Now.jpg" alt="Card image cap" style="height: 15rem;">
    <div class="card-body">
      <h5 class="card-title">The Power Of Now</h5>
      <p class="card-text">A Guide To Spiritual Enlightenment<br><br><strong>Author(s): Eckhart Tolle</strong></p>
    </div>
    <div class="card-footer">
      <center>
      <a href="http://80.82.78.35/get.php?md5=ae89fda34936b29c7b68d46889b958bb&key=N1CAZE4I7JL8TRW1&mirr=1" download style="font-size: 20px; color: #1abc9c"><i class="fa fa-download" aria-hidden="true"></i></a>
      </center>
    </div>
  </div>&nbsp;&nbsp;
   <div class="card mx-auto" style="box-shadow: 3px 3px 3px lightgray; width: 18rem;">
    <img class="card-img-top" src="Declutter Your Mind.jpg" alt="Card image cap" style="height: 15rem;">
    <div class="card-body">
      <h5 class="card-title"> Declutter Your Mind : </h5>
      <p class="card-text">How to Stop Worrying, Relieve Anxiety, and Learn to Control Your Thoughts, Overcome Fear and Self-Doubt in Order to Find Your Way to Happy Life<br><strong>Author(s): Mind Academy</strong></p>
    </div>
    <div class="card-footer">
      <center>
      <a href="http://80.82.78.35/get.php?md5=b70999fa6cdb34ea02bf599edb09a8e9&key=EY4IBSQ70ZIHAS85" download style="font-size: 20px; color: #1abc9c"><i class="fa fa-download" aria-hidden="true"></i></a>
      </center>
    </div>
  </div>&nbsp;&nbsp;
  <div class="card mx-auto" style="box-shadow: 3px 3px 3px lightgray; width: 18rem;">
    <img class="card-img-top" src="How to stress less.jpg" alt="Card image cap" style="height: 15rem;">
    <div class="card-body">
      <h5 class="card-title">How to stress less</h5>
      <p class="card-text">Simple ways to stop worrying and take control of your future<br><br><strong>Author(s): Bonetti, Benjamin</strong></p>
    </div>
    <div class="card-footer">
      <center>
      <a href="http://80.82.78.35/get.php?md5=96fafe5f9b5d0a75c824c9e3347b32aa&key=G35WCUKS86SPDKO5" download style="font-size: 20px; color: #1abc9c"><i class="fa fa-download" aria-hidden="true"></i></a>&nbsp;&nbsp;
      </center>
    </div>
  </div>
</div>
<br>
    <div class="card-deck mx-auto" >
  <div class="card mx-auto" style="box-shadow: 3px 3px 3px lightgray; width: 18rem;">
    <img class="card-img-top" src="The Power of Habit.jpg" alt="Card image cap" style="height:15rem;">
    <div class="card-body">
      <h5 class="card-title"> The Power of Habit: </h5>
      <p class="card-text">Why We Do What We Do in Life and Business<br><br><strong>Author(s): Charles Duhigg</strong></p>
    </div>
    <div class="card-footer">
      <center>
      <a href="http://80.82.78.35/get.php?md5=78e43ca569241c8ac0734ee7948df99a&key=OLF369HIRWSJKT77&mirr=1" download style="font-size: 20px; color: #1abc9c"><i class="fa fa-download" aria-hidden="true"></i></a>
      </center>
  </div>
  </div>&nbsp;&nbsp;
  <div class="card mx-auto" style="box-shadow: 3px 3px 3px lightgray; width: 18rem;">
    <img class="card-img-top" src="The Discipline of Getting Things Done.jpg" alt="Card image cap" style="height: 15rem;">
    <div class="card-body">
      <h5 class="card-title">The Discipline of Getting Things Done</h5>
      <p class="card-text"><br><strong>Author(s): Larry Bossidy, Ram Charan, Charles Burck</strong></p>
    </div>
    <div class="card-footer">
      <center>
      <a href="http://80.82.78.35/get.php?md5=6e1bed47c85f91c01e98f22772439c52&key=7RCTCKN0GS2ERBSB&mirr=1" download style="font-size: 20px; color: #1abc9c"><i class="fa fa-download" aria-hidden="true"></i></a>
      </center>
    </div>
  </div>&nbsp;&nbsp;
  <div class="card mx-auto" style="box-shadow: 3px 3px 3px lightgray; width: 18rem;">
    <img class="card-img-top" src="Do One Thing Different.jpg" alt="Card image cap" style="height: 15rem;">
    <div class="card-body">
      <h5 class="card-title"> Do One Thing Different: </h5>
      <p class="card-text">Ten Simple Ways to Change Your Life<br><br><strong>Author(s): Bill O'hanlon</strong></p>
    </div>
    <div class="card-footer">
      <center>
      <a href="http://80.82.78.35/get.php?md5=756ed5ff7644d9c9aa4714692fc3a6e5&key=700ZXWF8HJLC3BD8&mirr=1" download style="font-size: 20px; color: #1abc9c"><i class="fa fa-download" aria-hidden="true"></i></a>
      </center>
    </div>
  </div>&nbsp;&nbsp;
   <div class="card mx-auto" style="box-shadow: 3px 3px 3px lightgray; width: 18rem;">
    <img class="card-img-top" src="Change One Thing.jpg" alt="Card image cap" style="height: 15rem;">
    <div class="card-body">
      <h5 class="card-title"> Change One Thing : </h5>
      <p class="card-text">Discover Whats Holding You Back and Fix It With the Secrets of a Top Executive Image Consultant<br><strong>Author(s): Anna Wildermuth, Jodie Gould</strong></p>
    </div>
    <div class="card-footer">
      <center>
      <a href="http://80.82.78.35/get.php?md5=2c2fd3d10ad0e80b1606cbfaeba59dbc&key=7RLZYFHDAYFD3MF7&mirr=1" download style="font-size: 20px; color: #1abc9c"><i class="fa fa-download" aria-hidden="true"></i></a>
      </center>
    </div>
  </div>&nbsp;&nbsp;
  <div class="card mx-auto" style="box-shadow: 3px 3px 3px lightgray; width: 18rem;">
    <img class="card-img-top" src="The Power of Discipline.jpg" alt="Card image cap" style="height: 15rem;">
    <div class="card-body">
      <h5 class="card-title">The Power of Discipline</h5>
      <p class="card-text">The Habit that will Change your Life<br><br><strong>Author(s): Raimon Samsó</strong></p>
    </div>
    <div class="card-footer">
      <center>
      <a href="http://80.82.78.35/get.php?md5=ce2663cee6547fbc673e2bfc9844836c&key=OXGAS0IY7P7WLT7K" download style="font-size: 20px; color: #1abc9c"><i class="fa fa-download" aria-hidden="true"></i></a>&nbsp;&nbsp;
      </center>
    </div>
  </div>
</div>
<br>
<div class="card-deck mx-auto" >
    <div class="card mx-auto" style="box-shadow: 3px 3px 3px lightgray; width: 18rem;">
    <img class="card-img-top" src="Win-Win Negotiation Techniques.jpg" alt="Card image cap" style="height:15rem;">
    <div class="card-body">
      <h5 class="card-title">Win-Win Negotiation Techniques:</h5>
      <p class="card-text">Develop the mindset, skills and behaviours of win-win negotiators (ST Training Solutions: Success Skills)<br><strong>Author(s): David Goldwich</strong></p>
    </div>
    <div class="card-footer">
      <center>
      <a href="http://80.82.78.35/get.php?md5=077fedf5df8a1fac89164dcbee3d9986&key=X63Q89XDZ5VMCROU&mirr=1" download style="font-size: 20px; color: #1abc9c"><i class="fa fa-download" aria-hidden="true"></i></a>
      </center>
  </div>
  </div>&nbsp;&nbsp;
  <div class="card mx-auto" style="box-shadow: 3px 3px 3px lightgray; width: 18rem;">
    <img class="card-img-top" src="Mindset.jpg" alt="Card image cap" style="height: 15rem;">
    <div class="card-body">
      <h5 class="card-title">Mindset: </h5>
      <p class="card-text">The New Psychology of Success<br><br><strong>Author(s): Carol Dweck</strong></p>
    </div>
    <div class="card-footer">
      <center>
      <a href="http://80.82.78.35/get.php?md5=0f2b23ade7721f946e0002a6382265ac&key=R6827L6CXRQJAMUJ&mirr=1" download style="font-size: 20px; color: #1abc9c"><i class="fa fa-download" aria-hidden="true"></i></a>
      </center>
    </div>
  </div>&nbsp;&nbsp;
  <div class="card mx-auto" style="box-shadow: 3px 3px 3px lightgray; width: 18rem;">
    <img class="card-img-top" src="78 Important Questions Every Leader Should Ask and Answer.jpg" alt="Card image cap" style="height: 15rem;">
    <div class="card-body">
      <h5 class="card-title">78 Important Questions Every Leader Should Ask and Answer</h5>
      <p class="card-text"><br><strong>Author(s): Chris Clarke-Epstein</strong></p>
    </div>
    <div class="card-footer">
      <center>
      <a href="http://80.82.78.35/get.php?md5=d1239867f1dcd6dd0b957f8ac2847de5&key=IP0C3F61TX7S5HPP&mirr=1" download style="font-size: 20px; color: #1abc9c"><i class="fa fa-download" aria-hidden="true"></i></a>
      </center>
    </div>
  </div>&nbsp;&nbsp;
   <div class="card mx-auto" style="box-shadow: 3px 3px 3px lightgray; width: 18rem;">
    <img class="card-img-top" src="Development and Faith.jpg" alt="Card image cap" style="height: 15rem;">
    <div class="card-body">
      <h5 class="card-title"> Development and Faith : </h5>
      <p class="card-text">Where Mind, Heart, and Soul Work Together<br><br><strong>Author(s): Marisa Van Saanen; Katherine Marshall</strong></p>
    </div>
    <div class="card-footer">
      <center>
      <a href="http://80.82.78.35/get.php?md5=81b0c503fb9d47fe27d07a78102db148&key=1RWVBVJ95CYFFMOR&mirr=1" download style="font-size: 20px; color: #1abc9c"><i class="fa fa-download" aria-hidden="true"></i></a>
      </center>
    </div>
  </div>&nbsp;&nbsp;
  <div class="card mx-auto" style="box-shadow: 3px 3px 3px lightgray; width: 18rem;">
    <img class="card-img-top" src="Self-Coaching Leadership.jpg" alt="Card image cap" style="height: 15rem;">
    <div class="card-body">
      <h5 class="card-title">Self-Coaching Leadership: </h5>
      <p class="card-text">Simple steps from Manager to Leader<br><br><strong>Author(s): Angus I., Ph.D. McLeod</strong></p>
    </div>
    <div class="card-footer">
      <center>
      <a href="http://80.82.78.35/get.php?md5=a0381003a6b8109007c042f1656e7bdd&key=89HWMP9Y8KFZTZIE&mirr=1" download style="font-size: 20px; color: #1abc9c"><i class="fa fa-download" aria-hidden="true"></i></a>&nbsp;&nbsp;
      </center>
    </div>
  </div>
</div>
<br>
</div> <!--close self-->

<div class="alert alert-success" id="mainPro">
  <center><strong><h2>WELCOME</h2></strong></center>
  
  <br>
  <br>
  <br>

<center>
    <img src="<?php echo $_SESSION["image"];?>" height="250px" width="220px"><br><br>
    <br>
<?php

 echo'<h3>';
 echo $_SESSION["firna"].'&nbsp;&nbsp;'.$_SESSION["lasna"];
 echo'</h3>'.'<br>';
 echo'<h4>';
 echo $_SESSION["no"].'<br>';
 echo $_SESSION["email"].'<br>';
 echo $_SESSION["city"].'<br>';
 echo $_SESSION["state"].'<br>';
 
 echo'</h4>';
    
?> 
</center>
</div>

<!--CONTACT US-->
<div id="contactUSP" style="background-color: black">
<center><br><b><font style="color: white; font-size: 135%">CONTACT US</font></b></center><br>
<ul class="nav justify-content-center" style="background: none; font-size: 120%">
  <li class="nav-item">
        <a href="https://telegram.me/Govinda_Kumar" class="nav-link"><i class="fa fa-telegram" aria-hidden="true"></i>  Telegram</a>
  </li>
  <li class="nav-item">
    <a href=" https://wa.me/917273967372?text=I%20have%20a%20query" class="nav-link"><i class="fa fa-whatsapp" aria-hidden="true"></i>  WhatsApp</a>
  </li>
  <li class="nav-item">
        <a href="tel:+917273967372" class="nav-link"><i class="fa fa-mobile" aria-hidden="true" ></i>  Phone Call</a>
  </li>
  <li class="nav-item">
        <a href="mailto:kumargovinda08@gmail.com?body=I%20have%20a%20query" class="nav-link"><i class="fa fa-envelope-o" aria-hidden="true"></i>  Mail Us</a><br>
  </li>
</ul>



</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 

  </body>
</html>