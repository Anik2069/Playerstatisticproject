<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Schedule</title>
    <link rel="stylesheet" href="css/uprecord.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="add">     <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="Home.php"> <img src="css/pic/logo.png" alt="" height="36px"> </a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="Home.php">Home</a></li>
                    <li><a href="schedule.php">Schedule</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Team
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="Updatestate.php">BanglaDesh</a></li>
                            <li><a href="#">India</a></li>
                            <li><a href="#">Page 1-3</a></li>
                        </ul>
                    </li>
                    <li><a href="allrounder.php">Top allrounder</a></li>
                    <li><a href="topbatsmen.php">Top Batsmen</a></li>
                    <li><a href="topbowler.php">Top Bowler</a></li>
                </ul>
                <form class="navbar-form navbar-right" action="/action_page.php">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search" name="search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </nav>

  <header><hr>
    Top 10 Batsmen
  </header><hr>
  <table class="table">
    <tr class="active">
      <td>
        Serial
      </td>
      <td>
        Name
      </td>
      <td>
        Country
      </td>
      <td>
        Rating
      </td>
    </tr>
  </table>

  </body>
</html>
