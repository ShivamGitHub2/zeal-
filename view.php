<?php
include("config.php");
?>
<!doctype html>
<html>
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


    <style>
    video{
     float: left;
    }
    </style>


  </head>
  <body>
     <header>
        <a id="logo" href="home.html">
            <img src="img/logo.jpg" alt="Logo">
            <span>ZEAL</span>
        </a>
        <nav>
            <ul>
                <li><a href="about.html">About</a></li>
              
                 <li><a href="index.php"> ADD Course </a></li>
                <li><a href="logout.php">Log out</a></li>
            </ul>
        </nav>
    </header>     

    <div>
 
     <?php
     $fetchVideos = mysqli_query($con, "SELECT * FROM videos ORDER BY id DESC");
     while($row = mysqli_fetch_assoc($fetchVideos)){
       $location = $row['location'];
 
       echo "<div >";
       echo "<video src='".$location."' controls width='320px' height='200px' >";
       echo "</div>";
     }
     ?>
 
    </div>

  </body>
</html>





























addcourse



   <?php
    include("config.php");
 
    if(isset($_POST['but_upload'])){
       $maxsize = 524288; // 5MB
          
       $name = $_FILES['file']['name'];
       $title=$_POST["title"];
$amount=$_POST["amount"];
$target_dir = "videos/";
       $target_file = $target_dir . $_FILES["file"]["name"];

       // Select file type
       $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

       // Valid file extensions
       $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

       // Check extension
       if( in_array($videoFileType,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['file']['size'] <= $maxsize) || ($_FILES["file"]["size"] == 0)) {
            echo "File too large. File must be less than 5MB.";
          }else{
            // Upload
            if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
              // Insert record
              $query = "INSERT INTO videos(name,location,title,amount) VALUES('$name','\$target_file','$title','$amount')";

              mysqli_query($con,$query);
              echo "Upload successfully.";
            }
          }

       }else{
          echo "Invalid file extension.";
       }
 
     }


     ?>

     <!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

<script type="text/javascript" src="js/register.js"></script>


  <link rel="stylesheet" href="home.css">
 <style>
  body{
            width: 100%;
  height: 100%;
  background-image:url("img/adcourse.JPEG");
 
   background-repeat:no-repeat;
   background-size:cover;
}
</style>


<!--container-->
<style>
  .container{
  width: 20%;
  height: 60%
}

.a{
  
  background-color: rgba(255,244,245,.9);
}
</style>


</head>

<body >
        <header>
        <a id="logo" href="home.html">
            <img src="img/logo.jpg" alt="Logo">
            <span>ZEAL</span>
        </a>
        <nav>
            <ul>
                <li><a href="about.html">About</a></li>
                <li><a href="view.php">User's courses</a></li>
                <li><a href="Contact.html"> Courses </a></li>
                <li><a href="logout.php">Log out</a></li>
            </ul>
        </nav>
    </header>
<center><div class="container">
  
<div class="row">
<div class="col-sm-3">

<div class="col-sm-5 a mt-5"   >
      <center><h2>ADD COURSE</h2></center>
      
          <h4>Add your own courses and start earning today.</h4>
         

    <form method="post" action="" enctype='multipart/form-data'>

      <input type="text" name="title">
       <input type="text" name="amount">



      <input type='file' name='file' />
      <input type='submit' value='Upload' name='but_upload'>



<!--reset-->
<input type="reset" class="btn btn-danger" value="reset">

    </form>

  </body>
</html>