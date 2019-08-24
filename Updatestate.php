<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home Page</title>
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/updatecss.css">
<style>

    button
    {
        border: none;
        width: 190px;
        background: white;
        color: #000;
        font-size: 16px;
        line-height: 25px;
        padding: 10px 0;
        border-radius: 15px;
        cursor: pointer;
    }



    button:hover {
        color: #fff;
        background-color: black;
    }

</style>
</head>

<body>
<div class="add"><hr>
  <h2>Teams</h2><hr>
    <form method="post">
        <button type="submit" name="submit1" ">BanglaDesh</button> <br><br>
        <button type="submit" name="submit2" ">India</button> <br><br>
        <button type="submit" name="submit3" ">Pakistan</button> <br><br>
        <button type="submit" name="submit4" ">Sri-Lanka</button> <br><br>
        <button type="submit" name="submit5" ">Australia</button> <br><br>
        <?php
        session_start();
        if (isset($_POST['submit1'])){
            $_SESSION['team']='Bangladesh';
            header("location:ShowPlayerName.php");
        }
        if (isset($_POST['submit2'])){
            $_SESSION['team']='India';
            header("location:ShowPlayerName.php");

        }
        if (isset($_POST['submit3'])){
            $_SESSION['team']='Pakistan';
            header("location:ShowPlayerName.php");

        }
        if (isset($_POST['submit4'])){
            $_SESSION['team']='Sri-Lanke';
            header("location:ShowPlayerName.php");

        }
        if (isset($_POST['submit5'])){
            $_SESSION['team']='Australia';
            header("location:ShowPlayerName.php");

        }

        ?>



        <a href="cong.php" style="text-decoration: none">Go back to Home page</a>
        <br><br>
    </form>

    </div>
</body>
</html>
