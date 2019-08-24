<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/uprecord.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
    .n9 {

        width: 100%;
        height: 500px; /* only for demonstration, should be removed */

        padding-left: 182px;
    }

    /* Style the list inside the menu */


    .n3 {
        border: 2px solid black;
        float: left;
        padding: 20px;
        width: 70%;
        height: 300px; /* only for demonstration, should be removed */
    }
</style>
  </head>
  <body>
    <div class="add">
      <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"> <img src="css/pic/logo.png" alt="" height="36px"> </a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
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
  <section>
    <nav  class="n9">
        <div  style="max-width:500px;">
            <img class="mySlides" src="shakib.jpg" style="width:720px;height: 500px;">
            <img class="mySlides" src="world.png" style="width:720px;height: 500px;">
            <img class="mySlides" src="cup.jpg" style="width:720px;height: 500px;">
        </div>


    </nav>
      <!-- <article class="n3">
         <h2 style="text-align:left;color: white;">News</h2><hr>
         He is one the best allrounder in the world
       </article>
  </section>-->

        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}
                x[myIndex-1].style.display = "block";
                setTimeout(carousel, 2000); // Change image every 2 seconds
            }
        </script>
      <hr>
      <h2 style="text-align:left;color: white;">News</h2><hr>
      <p style="color: white;">Page Is Under Developing</p>
  </body>
</html>

