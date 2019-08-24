<?php
$r=$_GET['re'];
include ("config.php");
$query1=mysqli_query($connection,"select * from team_bangladesh where PlayerID='$r'");
while ($res=mysqli_fetch_assoc($query1)) {
    $name = $res['Name'];
    $name1 = $res['JerseyNumber'];

}

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update</title>
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



    button:hover
    {
        color: #fff;
        background-color: black;
    }
    .search{
    border: none;
    width: 250px;
    background: white;
    color: #000;
    font-size: 16px;
    line-height: 25px;
    padding: 5px 0;
    border-radius: 15px;
    cursor: pointer;

    }
</style>
  </head>
  <body>
    <div class="add">
  <form method="post"><hr>
    <h2> Add Player Statistic</h2><hr>
    <input type="textbox" name="f0" value="<?php echo $r;?>" disabled><br><br>
    <input type="textbox" name="f1" value="<?php echo $name;?>" disabled >
    <input type="textbox" name="f2"value="<?php echo $name1;?>" disabled><br>
    <label name="l1">Type of Match:</label>
    <select class="" name="">
      <option value="1">1</option>
    </select><br>
    <input type="textbox" name="f5" placeholder="Today's Run" required>
    <input type="textbox" name="f6" placeholder="Today' Wicket" required>
    <input type="textbox" name="f7" placeholder="Number of ball Playyed" required>
    <input type="textbox" name="f8" placeholder="Today bowling Economy" required>
    <input type="textbox" name="f9" placeholder="Todays Stamping" required>
      <input type="textbox" name="f10" placeholder="Todays Strike Rate" required>

    <br><br><br>


          <button type="submit" name="submit" ">Add Record</button>

  </form>
        <?php
        include_once "CRUD_Operation.php";
        $crud=new CRUD_Operation();

        if (isset($_POST['submit'])){
            $run =mysqli_real_escape_string($connection,$_POST['f5']);
            $wic =mysqli_real_escape_string($connection,$_POST['f6']);
            $ball =mysqli_real_escape_string($connection,$_POST['f7']);
            $eco =mysqli_real_escape_string($connection,$_POST['f8']);
            $stamp =mysqli_real_escape_string($connection,$_POST['f9']);
            $strike =mysqli_real_escape_string($connection,$_POST['f10']);
            $crud->add($run,$wic,$ball,$eco,$stamp,$strike,$r);
          //  header("location:cong.php");








        }


        ?>

  </body>
</html>
