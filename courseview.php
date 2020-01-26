<div style="margin:auto; padding:auto; width:80%;">
    <h2>Output:</h2>
    <?php
      include('config.php');
      $query=mysqli_query($conn,"select * from photo");
      while($row=mysqli_fetch_array($query)){
$a=$row['location'];
        if (strstr( $a, '.mp4' ))
        {
        ?>

        <video width="320" height="240" controls>
  <source src="<?php echo $a;?>" type="video/mp4">
 
 
</video>


        <?php

      }


      else
      {
?>
        <img src="<?php echo $row['location']; ?>" height="150px;" width="150px;">
<?php

      }
      }
 
    ?>


<button><a href="pdf.php">open pdf</button>