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
  <form method="post">
    <h2>Update Existing Player Info</h2><hr>
          <input type="textbox" name="name1" placeholder="PlayerID" required>
      <select name="Country">
          <option value="team_bangladesh">
              BanglaDesh
          </option>
          <option value="India">
              India
          </option>
          <option value="Pakistan">
              Pakistan
          </option>
          <option value="Sri-Lanka">
              Sri-Lanka
          </option>
          <option value="Australia">
              Australia
          </option>
          <option value="England">
              England
          </option>
      </select>
      <br><br>
      <button type="submit" class="search" name="search">Search</button><br>
      <?php
      include "config.php";

      include_once "CRUD_Operation.php";
      $crud=new CRUD_Operation();
      $name="Player Name";
      if (isset($_POST['search'])) {
          $playerid =mysqli_real_escape_string($connection,$_POST['name1']);
          $query7="select * from team_bangladesh where PlayerID='$playerid'";
          $res=$crud->search($query7);
          $name=$res[0]['Name'];

      }



      /*
          include ("config.php");
            $name="Player Name";
           if (isset($_POST['search'])){
                $playerid = mysqli_real_escape_string($connection,$_POST['name1']);
                $query1=mysqli_query($connection,"select * from team_bangladesh where PlayerID='$playerid'");
                while ($res=mysqli_fetch_assoc($query1)) {
                    $name=$res['Name'];

                }


            }
          */
      ?>

<br><hr>
      <input type="textbox" name="f1" value="<?php echo $name;?>" disabled>
      <input type="textbox" name="f2" placeholder="Jersey Number" > <br>
      <input type="textbox" name="f3" placeholder="Number Of Match" >
    <input type="textbox" name="f4" placeholder="Number Of Innings" >
    <input type="textbox" name="f5" placeholder="Total Run" >
    <input type="textbox" name="f6" placeholder="Total Wicket" >
    <input type="textbox" name="f7" placeholder="Total 5's Wicket" >
    <input type="textbox" name="f8" placeholder="Number oF century's">
    <input type="textbox" name="f9" placeholder="Number of Fifth's" >
    <input type="textbox" name="f10" placeholder="Hightest Score" >
    <input type="textbox" name="f11" placeholder="Economy" >
    <input type="textbox" name="f12" placeholder="Batting Average" >
    <input type="textbox" name="f13" placeholder="Strike Rate" >
    <input type="textbox" name="f14" placeholder="Total Stamping" >

    <br><br><br>


          <button type="submit" name="submit" >Update</button>
      <?php

      if (isset($_POST['submit'])) {
          $playerid = mysqli_real_escape_string($connection, $_POST['name1']);
          $match = mysqli_real_escape_string($connection, $_POST['f3']);
          $innings = mysqli_real_escape_string($connection, $_POST['f4']);
          $run = mysqli_real_escape_string($connection, $_POST['f5']);
          $wicket = mysqli_real_escape_string($connection, $_POST['f6']);
          $fivewicket = mysqli_real_escape_string($connection, $_POST['f7']);
          $century = mysqli_real_escape_string($connection, $_POST['f8']);
          $fifty = mysqli_real_escape_string($connection, $_POST['f9']);
          $highscore = mysqli_real_escape_string($connection, $_POST['f10']);
          $economy = mysqli_real_escape_string($connection, $_POST['f11']);
          $average = mysqli_real_escape_string($connection, $_POST['f12']);
          $rate = mysqli_real_escape_string($connection, $_POST['f13']);
          $stamping = mysqli_real_escape_string($connection, $_POST['f14']);
          $query1 = "insert into battingrecord values ('','$playerid','$match','$innings','$run','$highscore','$average','$rate','$century','$fifty')";
          $query3 = "insert into bowlingrecord values ('','$playerid','$wicket','$fivewicket','$economy','$stamping')";

          $query2 = mysqli_query($connection, $query1);
          $query4=mysqli_query($connection,$query3);
          if (!$query1) {
              die("error" . mysqli_error($connection));
          }
          else{
              header("location:cong.php");
          }
      }
      ?>

  </form>

</div>
  </body>
</html>
