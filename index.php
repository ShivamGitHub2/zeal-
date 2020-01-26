<?php   

 $connect = mysqli_connect("localhost", "root", "", "pcube");  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
      header("location:entry.php");  
 }  
 if(isset($_POST["register"]))  
 {  
      if(empty($_POST["username"]) && empty($_POST["password"]) && empty($_POST["phone"]) && empty($_POST["mail"]))  
      {  
           echo '<script>alert(" All Data Field Are Required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = md5($password);
            $phone = mysqli_real_escape_string($connect, $_POST["phone"]); 
             $mail = mysqli_real_escape_string($connect, $_POST["mail"]); 
               
           $query = "INSERT INTO register (username,password,phone,mail ) VALUES('$username', '$password','$phone','$mail')";  
           if(mysqli_query($connect, $query))  
           {  
                echo '<script>alert("Registration Done")</script>';  
           }  
      }  
 }  
 if(isset($_POST["login"]))  
 {  
 
session_start();
// Store Session Data
$_SESSION['login_user']= $username;
      if(empty($_POST["username"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = md5($password);  
           $query = "SELECT * FROM register WHERE username = '$username' AND password = '$password'";  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                $_SESSION['username'] = $username;  
                header("location:entry.php");  
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details")</script>';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  

 <style >

  .register {
    margin: auto;
    padding: 16px 0;
    text-align: center;
    margin-top: 40px;
    width: 85%;
    border-top: 2px solid #C1C3C6;
}
   

#register-link {
    margin-top: 10px;
    padding: 6px 25px;
    background: #373E4A;
    color: #C1C3C6;
    font-weight: bold;
    border: 0 none;
    cursor: pointer;
    border-radius: 3px;
}

          .rb{
            width: 100%;
  height: 100%;
  background-image:url("img/ffg.jpg");
 
   background-repeat:no-repeat;
   background-size:cover;

}
 
 .clr{
  color: white;
 }
        
 </style>

 <script>
  

//phone no default char remove
  $( document ).ready(function() {
var invalidChars=["-", "+", "e", "E","."];
  $("input[type='number']").on("keydown",function(e) {
    if(invalidChars.includes(e.key)){
      e.preventDefault();
    }
  });
  
   //phone up,down key
$(document).on('keydown',function(e)
{ 
    var key = e.charCode || e.keyCode;
    if(key == 38 || key == 40 )
        {
        e.preventDefault();
    }
});
 </script>
           <title>ZEAL.COM </title>  
            <script type="text/javascript" src="js/register.js"></script>
  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />


<!--heading-->
           <style>
            .a{
  
 background-color: rgba(255,244,245,.7);
    width: 100%;
  height: 100%;
}
             
.heading{
  animation-name: headng;
  animation-duration: 10s;
  animation-iteration-count: infinite;
  font-size: 60px;
    font-family:Times New Roman;
    font-weight: 70PX;
}

@keyframes headng
{
  0% {color: #FFEC00;}
  20% {color: #FFEC00;}
  40% {color:#0012FF;}
  60% {color: #D8000F;}
  80% {color: #FFEC00;}
    100%{color:#EC00FF}
}

           </style>  
      </head>  
      <body class="rb" >


           <br /><br />  
           <div class="container-fluid"  style="width:500px;">  

                <h3 align="center" class="heading"> Registration Form </h3>  
                <br />  
                <?php  
                if(isset($_GET["action"]) == "login")  
                {  
                ?>  

  
<div class="row">
<div class="col-sm-3"></div>

<div class="col-sm-5 a mt-5"   >
                <h3 align="center" class="heading">Login</h3>  
                <br />  
                <form method="post" autocomplete="off">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" autocomplete="false" placeholder="ENTER NAME" class="form-control" />  
                     <br />  
                     <label>Enter Password</label>  
                     <input type="password"  autocomplete="new-password" placeholder="ENTER PASSWORD" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" align="center" name="login" value="Login" class="btn btn-info" />  
                     <br />  
   <div class="register">
            Don't have an account yet?
           <button id="register-link"> <a href="index.php">Register here</a></button>
             Forget Password?
           <button id="register-link"> <a href="forgetpassword.html">Forget Password</a></button>
        </div>
                </form>  
              </div>
            </div>
          </div>
                <?php       
                }  
                else  
                {  
                ?>  
  
               
<div class="row">
<div class="col-sm-3"></div>

<div class="col-sm-5 a mt-5"   >
                <form method="post"  autocomplete="off" action="">
                  <!--name-->
                <div class="form-group">  
                     <label>Enter Username</label>  
                     <input type="text" autocomplete="false" name="username" placeholder="ENTER NAME" id="idname" class="form-control" />  
                   </div>
                     <br />  
                     
<!--gender
<label>GENDER</label>
<br>
<label class="radio-inline">
      <input type="radio" name="optradio" class="gender custom-control-input" id="radio1" value="male">MALE
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio" class="gender custom-control-input" id="radio2" value="female">FEMALE
    </label>
<br>
<br>-->
<!--PHONE NO-->
<div class="form-group">
      <label for="no" id="lblphone">PHONE NO</label>
    <input type="number"  class="form-control" name="phone" maxLength="10" id="no" placeholder="ENTER PHONE NUMBER"   oninput="javascript:if(this.value.length>this.maxLength)this.value=this.value.slice(0,this.maxLength);">
<br>


<!--MAIL-->
<div class="form-group">
      <label for="mail" id="lblmail">EMAIL</label>
    <input type="text" class="form-control" name="mail" placeholder="..@GMAIL.COM" id="email">
  </div>
<br>


<!--password-->
<div class="form-check">
 <label>Enter Password</label>  
                     <input type="password"  autocomplete="new-password" placeholder="ENTER PASSWORD" name="password" class="form-control" id="pwd"> 
                     </div> 
                     <br >  
    
<!--check-->
<div class="form-check">
  <label id="lblcheck" class="form-check-label">
    <input type="checkbox"    class="form-check-input" name="agree">
    I AGREE TO ALL IMFORMATIN.
  </label>
</div>
<!--submit-->
<input type="submit" name="register" onclick="return validator();" value="Register" class="btn btn-info" />  

<!--reset-->
<input type="reset" class="btn btn-danger" value="reset">
     <div class="register">
            Don't have an account yet?
         <button id="register-link">   <a href="index.php?action=login">Login here</a></button>
         Forget Password?
           <button id="register-link"> <a href="forgetpassword.html">Forget Password</a></button>
    </div>

                </form> 
                </div>
                </div>
                </div> 
                <?php  
                }  
                ?>  
           </div>  
          
      </body>  
 </html>  

