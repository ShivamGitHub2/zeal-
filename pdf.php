<div style="margin:auto; padding:auto; width:80%;">
    <h2>Output:</h2>
    <?php
      include('config.php');
      $query=mysqli_query($conn,"select * from photo");
      while($row=mysqli_fetch_array($query)){
$a=$row['location'];

      if (strstr( $a, '.pdf' ))
        {
        ?>

        
<?php 

// The location of the PDF file 
// on the server 
$filename = "$a"; 

// Header content type 
header("Content-type: application/pdf"); 

header("Content-Length: " . filesize($filename)); 

// Send the file to the browser. 
readfile($filename); 
?> 
<?php
}
?>