<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Schedule</title>
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
    <hr>
    <h2>Create Schedule</h2><hr>
          <label for="">Opponent 1:</label>
          <select class="" name="Opponent1">
            <option value="BanglaDesh">BanglaDesh</option>
            <option value="India">India</option>
          </select
          <pre>&nbsp &nbsp &nbsp &nbsp &nbsp Vs &nbsp &nbsp &nbsp &nbsp &nbsp    </pre>
          <label for="">Opponent 2:</label>
          <select class="" name="Opponent2">
            <option value="BanglaDesh">BanglaDesh</option>
            <option value="India">India</option>
          </select>
          <br>
<label for="">Type of Match</label>
<select class="" name="type">
  <option value="ODI">ODI</option>
  <option value="T20">T20</option>
  <option value="Test">Test</option>
</select >  &nbsp &nbsp &nbsp <br>
          Match Venue:<input type="textbox" name="f4" placeholder="" required><br>
          Date:<input type="date" name="date"><br>
          TIme:<input type="time" name="time"><br>
<br>
<label for="">Type of Match</label>
<select class="" name="type1">
  <option value="Day">Day</option>
  <option value="Night">Night</option>
  <option value="Day-Night">Day-Night</option>
</select > <br><br><br>
          <button type="submit" class="search" name="submit">Submit</button><br>
    <br><br><br>


      <?php
      include ("config.php");
      if(isset($_POST['submit'])){
          $Opponent1 = mysqli_real_escape_string($connection,$_POST['Opponent1']);
          $Opponent2 = mysqli_real_escape_string($connection,$_POST['Opponent2']);
          $type = mysqli_real_escape_string($connection,$_POST['type']);
          $Venue = mysqli_real_escape_string($connection,$_POST['f4']);
          $date = mysqli_real_escape_string($connection,$_POST['date']);
          $time = mysqli_real_escape_string($connection,$_POST['time']);
          $type1 = mysqli_real_escape_string($connection,$_POST['type1']);
          $query1=mysqli_query($connection,"insert into schedule values ('','$Opponent1','$Opponent2','$type','$Venue','$date','$time','$type1')");
          if(!$query1){
              die("error".mysqli_error($connection));
          }







      }
      ?>





  </form>

</div>
  </body>
</html>
