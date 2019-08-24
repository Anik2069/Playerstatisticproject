<?php
include('config.php');
$r=$_GET['re'];

$query="Select * from battingrecord where PlayerID='$r'";
$query1="Select * from bowlingrecord where PlayerID='$r'";
$data=mysqli_query($connection,$query);
$data1=mysqli_query($connection,$query1);
session_start();
if($_SESSION['team']=='Bangladesh'){
    $query9=mysqli_query($connection,"select * from team_bangladesh where PlayerID='$r'");


}
else if($_SESSION['team']==India){
    $query9=mysqli_query($connection,"select * from team_india where PlayerID='$r'");

}

while ($res=mysqli_fetch_assoc($query9)) {
    $name=$res['Name'];
    $je=$res['JerseyNumber'];
    $bir=$res['birthday'];
    $birth=$res['birthplace'];
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/uprecord.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="add">
        <header><hr>
          Player Profile
        </header><hr>
        <section>
          <nav class="n4">
              <?php
              $result = mysqli_query($connection, "SELECT * FROM playerimage where PlayerID='$r'");

              while ($row = mysqli_fetch_array($result)) {
                  echo "<div id='img_div'>";
                  echo "<img src='images/".$row['Image']."' width='320px' height='260px' >";
                  echo "</div>";
              }
              ?>

          </nav>
          <article class="n3">
              <h2 style="color: white;"><?php echo $name;?></h2>


              <p style="color: white;">When the world talks about the sub-continental players, they talk about the aggression factor. Virender Sehwag, Sanath Jayasuriya and Sachin Tendulkar have ruthlessly destroyed the bowling over the years. However, an opener from Bangladesh soon joined that list and made the world take notice.

                  He scored his first century against Ireland, but it was his knock against Zimbabwe at Harare in 2009 which got him top billing</p>
          </article>
        </section>
        <section>
          <nav class="n1">
              <p style="color: white;">Name: <?php echo $name;?> </p>
              <p style="color: white;">Jersey Number: <?php echo $je;?></p>
              <p style="color: white;">Birthday: <?php echo $bir;?></p>
              <p style="color: white;">Birth Place: <?php echo $birth;?></p>

          </nav>
          <article class="n2">
            <h2 style="color: white;">Batting summary</h2>
            <table class="table">
              <tr class="active">
                <td>
                  Number of Match
                </td>
                <td>
                    Number of Innings
                </td>
                <td>
                  Total Run
                </td>
                <td>
                  High Score
                </td>
                <td>
                  Average
                </td>
              </tr>
                <?php
                while ($res=mysqli_fetch_assoc($data)) {
                    echo "<tr class='active'>
<td>".$res['NumberOfMatch']."</td>
 <td>".$res['NumberOfInnings']."</td>
 <td>".$res['TotalRun']."</td>
 <td>".$res['HighScore']."</td>
 <td>".$res['Average']."</td>


</tr>";
                }
                ?>
            </table>
            <h2 style="color: white;">Bowling Career</h2>
            <table class="table">
              <tr class="active">
                <td>
                  Total Wicket
                </td>
                <td>
                  Total Five Wicket
                </td>
                <td>
                  Economy
                </td>
                <td>
                  Stamping
                </td>

              </tr>

                <?php
                while ($res1=mysqli_fetch_assoc($data1)) {
                    echo "<tr class='active'>
<td>".$res1['TotalWicket']."</td>
<td>".$res1['TotalFiveWicket']."</td>
<td>".$res1['Economy']."</td>

 <td>".$res1['Stamping']."</td>

</tr>";
                }
                ?>

            </table>

          </article>
        </section>


    </div>

  </body>
</html>
