<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/for.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    <style>

        button
        {
            border: none;
            background: white;
            color: black;
            font-size: 16px;
            line-height: 25px;
            padding: 10px 0;
            border-radius: 12px;
            cursor: pointer;
            width: 180px;
            margin-left: 30px;
        }
        button:hover
        {
            background: black;
            color: white;
        }
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
	margin-right:50px;
}

#msg.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {top: 0; opacity: 0;} 
    to {top: 30px; opacity: 1;}
}

@keyframes fadein {
    from {top: 0; opacity: 0;}
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
<div class="forget">

<form method="post">

<h2 align="center" style="color:#fff;">Forget password</h2>
<h5 style="font-size:14px; color:yellow;">Enter email here that you used on your account.</h5>
<input type="text" name="email" placeholder="Enter your email" /><br /><br />
    <button type="submit" name="submit1" onclick="">Search</button>
    <br /><br />
<a href="logn.php" style="text-decoration:none;">Go back to Home page</a><br /><br />

<div id="msg">Link send on your email successfully!!</div>

<script>
function myFunction() {
    var x = document.getElementById("msg");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
</form>
    <?php
    session_start();
    include ('config.php');
    if(isset($_POST['submit1'])){
        $email = mysqli_real_escape_string($connection,$_POST['email']);
        $_SESSION["mail"]=$email;

        $query1=mysqli_query($connection,"select * from admininfo where Email='$email'");
        $row=mysqli_fetch_assoc($query1);
        if($email==""){
            header("location:for.php");
        }
        else if($row['Email']==$email){
            header("location:re.php");

        }
        else{
            header("location:for.php");
        }


    }
    ?>
</div>
</body>
</html>
