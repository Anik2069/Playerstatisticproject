<?php
session_start();
$_GET['re'];

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/show.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
      h2
      {
          text-align: center;
          color: white;
          font-family: 'Play', sans-serif;
      }
    </style>
  </head>
  <body>
    <div class="add" ><hr>
      <h2>Team Players</h2><hr>
      <table class="table">
        <tr class="active">
        <td>
          Player Name
        </td>
        <td>
            Age
        </td>
        <td>
            BirthDay
        </td>
        <td>
            Player Type
        </td>
        <td>
            Batting Style
        </td>
        <td>
            Bowling Style
        </td>
        <td>
            Option
        </td>

        </tr>
          <?php
          include ("config.php");
          if($_SESSION['team']=='Bangladesh'){
              $dql=mysqli_query($connection,"Select * from team_bangladesh");


          }
          else if($_SESSION['team']==India){
              $dql=mysqli_query($connection,"Select * from team_india");

          }
          while ($res=mysqli_fetch_assoc($dql)) {
              echo "<tr class='active'>
<td>".$res['Name']."</td>
 <td>".$res['Age']."</td>
 <td>".$res['birthday']."</td>
 <td>".$res['PlayerType']."</td>
  <td>".$res['BattingStyle']."</td>

 <td>".$res['BowlingStyle']."</td>

      <td><a href='playerview.php?re=$res[PlayerID]'>Details</a></td>

</tr>";
          }
          ?>

      </table>

    </div>

  </body>
</html>
