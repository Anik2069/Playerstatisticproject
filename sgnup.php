<?php
include ("config.php");
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/sgnup.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    <style>
    #msg {
    visibility: hidden;
    min-width: 250px;
    background-color:yellow;
    color: #000;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    right: 30%;
    top: 30px;
    font-size: 17px;
	margin-right:30px;
}

#msg.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 4.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {top: 0; opacity: 0;} 
    to {top: 30px; opacity: 1;}
}

@keyframes fadein {
    from {top: 0; opacity: 1;}
    to {top: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {top: 30px; opacity: 1;} 
    to {top: 0; opacity: 0;}
}

@keyframes fadeout {
    from {top: 30px; opacity: 1;}
    to {top: 0; opacity: 0;}
}
    </style>
</head>

<body>
<div class="signup">
    <form method="post">
    <h2 style="color: #fff;">Sign Up</h2>
    <input type="text" name="username1" placeholder="First name"><br><br>
    <input type="text" name="username2" placeholder="Last name"><br><br>
    <input type="password" name="pass" placeholder="Password"><br><br>    
    <input type="password" name="pass" placeholder="Confirm Password"><br><br>   
    <input type="text" name="email"placeholder="Email address"><br><br>
    <button type="submit" name="submit" onclick="myFunction()">Sign Up</button><br><br>
        <div id="msg">Congratulations You Sign Up successfully!!</div>
        <script>
function myFunction() {
    var x = document.getElementById("msg");
    x.className = "show";

    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);

}
</script>
        Already have account?<a href="logn.php" style="text-decoration: none; font-family: 'Play', sans-serif; color: yellow;">&nbsp;Log In</a>
    </form>
    
    </div>

<?php
if(isset($_POST["submit"])){
    $username1 = mysqli_real_escape_string($connection,$_POST['username1']);
    $username2 = mysqli_real_escape_string($connection,$_POST['username2']);
    $pass = mysqli_real_escape_string($connection,$_POST['pass']);
    $Email = mysqli_real_escape_string($connection,$_POST['email']);
    $username =$username1." ".$username2;
    $query1=mysqli_query($connection,"insert into admininfo values ('','$username','$pass','$Email')");
    if(!$query1){
        die("error".mysqli_error($connection));
    }

}

?>



</body>
</html>
