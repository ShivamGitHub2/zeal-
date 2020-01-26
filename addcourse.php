<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Uploading Multiple Files using PHP</title>
</head>
<body>
  <div style="height:50px;"></div>
  <div style="margin:auto; padding:auto; width:80%;">
    
    <div style="height:20px;"></div>

<?php
$_SESSION['username'];
echo $_SESSION['username'];
?>
    <form method="POST" action="upload.php" enctype="multipart/form-data">

     title <input type="text" name="title">
     amount <input type="text" name="amount">
     category<select name="courseselect">
    <option selected="true" disabled>SELECT COURSE</option>
       <option>EDUCATION</option>
       <option>DANCE</option>
       <option>BEATBOXING</option>
       <option>PHOTOGRAPHY</option>
      <option>ART AND CRAFT</option>
     </select>
    <input type="file" name="upload[]" multiple>
    <input type="submit" value="Upload"> 
    </form>
  </div>
  
   
  </div>
</body>
</html>

















