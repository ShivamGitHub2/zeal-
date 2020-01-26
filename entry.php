
<?php  
 //entry.php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:index.php?action=login");  
 }  
 ?>  
 <!DOCTYPE html>  
 <html lang="en">  
      <head>  
           <title>ZEAL.COM</title>  
           
    <title>ZEAL.COM</title>
     <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="home.css">

<!--navbar icon libray-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--service and image-->
 <link rel="Stylesheet" type="text/css" href="css/service.css">

<!--footer social media-->
 <link rel="Stylesheet" type="text/css" href="css/footersocial.css">
<!--language-->
<style>
.cp{
    width: 100%;
    height: 20%;
  }

  .chover:hover{
    opacity: .5;
  }
</style>

<!--counter-->
<style>
  .stat{
    background:#121212;
    padding-top: 80px;
    padding-bottom: 80px;
    color: white;
    background-attachment: fixed;
    margin-top: 100px;
  }

  .stat i{
    font-size: 50px;
  }

  .stat-items h2{
    font-weight: bold;
    font-size: 42px;
    color: red;
  }

  .stat p{
    font-weight: bold;
    letter-spacing: 1px;
  }
</style>


<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
<script >
  jQuery(document).ready(function(){
      $('.counter').counterUp({
    delay: 10,
    time: 3000
});
    })
</script>

<head>
  <body>




    <header>
        <a id="logo" href="home.html">
            <img src="img/logo.jpg" alt="Logo">
            <span>ZEAL</span>
        </a>
        <nav>
            <ul>
                <li><a href="about.html">About</a></li>
                <li><a href="Contact.html">FREE Courses </a></li>
                 <li><a href="addcourse.php"> ADD Course </a></li>
                 <li><a href="#"> CART </a></li>
                <li><a href="logout.php">log out</a></li>
            </ul>
        </nav>
    </header>     
    <main>
        <div class="hero">
            <div class="hero-content">
                <h1 class="hero-title">ONLINE COURSES</h1>
                <p>be a hero in your field</p>
         
            </div>
        </div>
    </main>
  


<!--LANGUAGES-->

<br>
<h2 align="center" style="font-family: Georgia;"><b>LEARN TOP COURSES</b></h2>
<br>
<br>
<div class="container">
  <div class="row">
    <a href="front.html" class="chover">
    <div class="col-sm-3" style=" border: 2px solid grey;margin: 2%">
      <div>
        <img src="img/web.png" class="img-thumbnail" alt="C PROGRAMING" class="cp">
      </div>
      <div style="color:black;">
        <h2 align="center" ><b>EDUCATION</b></h2>
          
          <ul >
            <li >
              <h5><b>1500</b>views</h5>
            </li>
          </ul>
      </div>

    </div>
     </a>

     <a href="java.html" class="chover">
    <div class="col-sm-3" style=" border: 2px solid grey;margin: 2%">
      <div>
        <img src="img/dance.jpg" class="img-thumbnail" alt="JAVA PROGRAMING" class="cp">
      </div>
      <div style="color:black;">
        <h2 align="center"><b>DANCE</b></h2>
          
          <ul >
            <li >
              <h5><b>1000</b>views</h5>
            </li>
          </ul>
      </div>
    </div>
  </a>


<a href="python.html" class="chover">
    <div class="col-sm-3" style=" border: 2px solid grey;margin: 2%">
      <div>
        <img src="img/cooking.jpg" class="img-thumbnail" alt="PYTHON PROGRAMING" class="cp">
      </div>
      <div style="color:black;">
        <h2 align="center"><b>COOKING</b></h2>
          
          <ul >
            <li >
              <h5><b>1600</b>views</h5>
            </li>
          </ul>
      </div>
    </div>
  </a>

</div>

 <div class="row">
  <a href="webdevlopment.html" class="chover">
    <div class="col-sm-3" style=" border: 2px solid grey;margin: 2%">
      <div>
        <img src="img/Beatboxing.jpg" class="img-thumbnail" alt="WEB DEVLOPMENT" class="cp">
      </div>
      <div style="color:black;">
        <h2 align="center"><b>Beatboxing</b></h2>
          
          <ul >
            <li >
              <h5><b>960</b>views</h5>
            </li>
          </ul>
      </div>
    </div>
  </a>


    <a href="interview.html" class="chover">
    <div class="col-sm-3" style=" border: 2px solid grey;margin: 2%">
      <div>
        <img src="img/photo.jpg" class="img-thumbnail" alt="INTERVIEW" class="cp">
      </div>
      <div style="color:black;">
        <h2 align="center" ><b>PHOTOGRAPHY</b></h2>
          
          <ul >
            <li >
              <h5><b>500</b>views</h5>
            </li>
          </ul>
      </div>

    </div>
     </a>

     <a href="web.html" class="chover">
    <div class="col-sm-3" style=" border: 2px solid grey;margin: 2%">
      <div>
        <img src="img/art.jpg" class="img-thumbnail" alt="MCQ QUESTIONS" class="cp">
      </div>
      <div style="color:black;">
        <h2 align="center"><b>ART AND CRAFT</b></h2>
          
          <ul >
            <li >
              <h5><b>1000</b>views</h5>
            </li>
          </ul>
      </div>
    </div>
  </a>
</div>
  </div>


<div class="lessons-banner">
      <img src="img/banner-2.png" />
      <div class="banner-content">
        <div class="wrapper">
          <span class="title">Our Lessons</span>
          <span class="sub-title">Are Easy</span>
        </div>
      </div>
    </div>

<!--services-->
 <section id="services">
      <div class="wrapper">
        <center><h1>SERVICES</h1></center>
        <p></p>
        <ul>
     
          <li>
            <img src="img/certificate.png" />
            <a href="#">Get a printed<br />certificate</a>
          </li>
           
          <li>
            <img src="img/notification.png" />
            <a href="#">Instant notification of course<br />via email</a>
          </li>
          <li>
            <img src="img/courses-icon.jpg" />
            <a href="#">Online courses<br />free</a>
          </li>
        </ul>
      </div>
    </section>


<!--counter-->

<section class="stat" id="stats ">
<div class="content-box">
<br><br>
<div class="container">
  <div  class="row text-center">
    <div class="col-md-3">
      <div class="stat-items">
        <i class="fa fa-book" aria-hidden="true"></i>
        <h2><span class="counter text-center">50</span><span>+</span></h2>
        <p>COURSES ADDED</p>
      </div>
    </div>

    <div class="col-md-3">
      <div class="stat-items">
        <i class="fa fa-smile-o" aria-hidden="true"></i>
        <h2><span class="counter text-center">400</span><span>+</span></h2>
        <p>HAPPY CLIENTS</p>
      </div>
    </div>


    <div class="col-md-3">
      <div class="stat-items">
        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
        <h2><span class="counter text-center">6</span><span>+</span></h2>
        <p>FREE COURSES</p>
      </div>
    </div>

    <div class="col-md-3">
      <div class="stat-items">
        <i class="fa fa-thumbs-up" aria-hidden="true"></i>
        <h2><span class="counter text-center">900</span><span>+</span></h2>
        <p>LIKES</p>
      </div>
    </div>
  </div>
</div> </section>  

 <!--footer-->
<footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/agency/logo-inverse-140x37.png" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
                <p>This website will make your technical knowledge better.</p>
                <!-- Rights-->
                <h4><p class="rights"><span>©  </span><span class="copyright-year">2019</span><span> </span><span>Waves</span><span>. </span><span>All Rights Reserved.</span></p></h4>
              </div>
            </div>
            <div class="col-md-4">
              <h2>Contacts</h2>
              <dl class="contact-list">
               <h3> <dt>Address:</dt></h3>
                <dd>Clement Town, Dehradun</dd>
              </dl>
              <dl class="contact-list">
                <h3><dt>email:</dt></h3>
                <dd><a href="mailto:#">shivamrawat2626@gmail.com</a></dd>
  <dd><a href="mailto:#">singhmayank1698@gmail.com</a></dd>
    <dd><a href="mailto:#">ritwikbahukhandi@gmail.com</a></dd>

              </dl>
            </div>
            <div class="col-md-4 col-xl-3">
              <h2>Links</h2>
              <ul class="nav-list">
                 <li><a href="c.html">EDUCATION</a></li>
                <li><a href="java.html">DANCE</a></li>
                <li><a href="python.html">COOKING</a></li>
                <li><a href="web.html">PHOTOGRAPHY</a></li>
                <li><a href="webdevlopment.html">BEATBOXING</a></li>
                <li><a href="web.html">ART AND CRAFT</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>

<!--FOOTER-->
<footer >
<section id="lab_social_icon_footer">
<div class="container-fluid">
        <div class="text-center center-block">
                <a href="https://www.facebook.com"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
              <a href="https://twitter.com"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
              <a href="https://plus.google.com"><i id="social-gp" class="fa fa-google-plus-square fa-3x social"></i></a>
              <a href="mailto:shivamrawat2626@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
    </div>
</div>
</section>
</footer>

</body>
</html>
