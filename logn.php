<?php
include ("config.php");
session_start();
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Log In</title>
<link href="css/logn.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
</head>

<body>
   <div class="signin">

<form method="post">
<h2 style="color:#fff;">Log In</h2>
<input type="text" name="username" placeholder="Email"/><br /><br />
<input type="password" name="password" placeholder="Password" /><br /><br />
<a href="cong.php">  <button type="submit" name="login" onclick="">Log In</button></a><br /><br />
<div id="container">
<a href="re.php" style=" margin-right:0px; font-size:13px; font-family:Tahoma, Geneva, sans-serif;">Reset password?</a>
    <a href="for.php" style=" margin-left:30px; font-size:13px; font-family:Tahoma, Geneva, sans-serif;">Forget password</a>
    </div><br /><br /><br /><br /><br /><br />
Don't have account?<a href="sgnup.php" style="font-family:'Play', sans-serif;">&nbsp;Sign Up</a>

</form>
</div>


<?php
if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($connection,$_POST['username']);
    $password = mysqli_real_escape_string($connection,$_POST['password']);
    $query1=mysqli_query($connection,"select * from admininfo where Email='$username' && Password='$password'");
    $row=mysqli_fetch_assoc($query1);
    if($username==""){
        header("location:logn.php");
    }
    else if($row['Email']==$username && $row['Password']==$password){
        header("location:cong.php");

    }
    else{
        header("location:logn.php");
    }


}

?>

</body>
</html>
