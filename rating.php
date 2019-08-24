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
        <h2> Add Player Rating</h2><hr>
        <input type="textbox" name="f0" placeholder="PlayerID" required >
        <select name="Country">
            <option value="team_bangladesh">
                BanglaDesh
            </option>
            <option value="team_india">
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
        </select><br> <br>
        <button type="submit" class="search" name="search">Search</button><br><br>
            <?php
      include "config.php";

      include_once "CRUD_Operation.php";
      $crud=new CRUD_Operation();
      $name="Player Name";
      $rating="Player Rating";

            if (isset($_POST['search'])) {
          $playerid =mysqli_real_escape_string($connection,$_POST['f0']);
          $country =mysqli_real_escape_string($connection,$_POST['Country']);
          $query7="select * from team_bangladesh where PlayerID='$playerid'";

                if ($country == "team_bangladesh") {
                    $query7="select * from team_bangladesh where PlayerID='$playerid'";


                }
                elseif ($country == 'team_india') {
                    $query7="select * from team_india where PlayerID='$playerid'";


                }


          $res=$crud->search($query7);
          $name=$res[0]['Name'];
          $rating=$res[0]['rating'];


            }

?>




        <input type="textbox" name="f1" value="<?php echo $name;?>" disabled> <br> <br>

        <input type="textbox" name="f1" value="<?php echo $rating;?>" disabled>
        <input type="textbox" name="f6" placeholder="New Rating" >

        <br><br><br>


        <button type="submit" name="submit" ">Update</button>

    </form>
    <?php
    if (isset($_POST['submit'])){
        $rate =mysqli_real_escape_string($connection,$_POST['f6']);
        $playerid =mysqli_real_escape_string($connection,$_POST['f0']);
        $country =mysqli_real_escape_string($connection,$_POST['Country']);

        $new=(int)$rating+(int)$rate;


        if ($country == "team_bangladesh") {
            $query1=mysqli_query($connection,"update team_bangladesh SET rating='$new' where PlayerID='$playerid'");


        }
        elseif ($country == 'team_india') {
            $query1=mysqli_query($connection,"update team_india SET rating='$new' where PlayerID='$playerid'");


        }



        if(!$query1){
            die("error".mysqli_error($connection));
        }

          header("location:cong.php");








    }


    ?>

</body>
</html>
