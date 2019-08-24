<?php
include ("config.php");
?>
<html>
<head>
<title>Add New Info</title>
<link rel="stylesheet" type="text/css" href="css/add.css">
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
</style>
</head>
<body>
	<div class="add">
		<form method="post" enctype="multipart/form-data">
			<h2>Add new Info</h2><hr>
            <input type="textbox" name="f0" placeholder="PlayerID" required>
            <input type="textbox" name="f11" placeholder="Jersey Number" required><br>

            <input type="textbox" name="f1" placeholder="First Name" required>
			<input type="textbox" name="f2" placeholder="Last Name" required>
			<input type="textbox" name="f3" placeholder="Age">
			<input type="textbox" name="f4" placeholder="Date of Birth">
			<input type="textbox" name="f5" placeholder="Birth Place">
			<select name="Country">
				<option value="team_bangladesh">
					BanglaDesh
				</option>
				<option value="team_india">
					India
				</option>
				<option value="team_pakistan">
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
            Upload Image :
            <input type="file" name="image">
            <br>
			<h4>Career Objective:</h4>
			Type of Player
			<select name="type">
				<option value="Allrounder">
					Allrounder
				</option>
				<option value="Batsman">
					Batsman
				</option>
				<option value="Bowler">
					Bowler
				</option>
				<option value="WicketKeeper">
					Wicket Keeper
				</option>
			</select>
			<br><br>
			Batting Style
			<select name="batting">
				<option value="Right Handed Batsmen">
					Right Handed Batsmen
				</option>
				<option value="Left Handed Batsmen">
					Left Handed Batsmen
				</option>
			</select>
			Bowling Style
			<select name="bowling">
				<option value="Right Handed Bowler">
					Right Handed Bowler
				</option>
				<option value="Left Handed Bowler">
					Left Handed Bowler
				</option>
				<option value="Bowler">

				</option>
				<option value="None">
					None
				</option>


			</select>
			<br><br>
            <button type="submit" name="submit" ">Submit</button>




		</form>

        <?php
        if(isset($_POST["submit"])){
            $playerid = mysqli_real_escape_string($connection,$_POST['f0']);
            $jersey = mysqli_real_escape_string($connection,$_POST['f11']);


            $username1 = mysqli_real_escape_string($connection,$_POST['f1']);
            $username2 = mysqli_real_escape_string($connection,$_POST['f2']);
            $age= mysqli_real_escape_string($connection,$_POST['f3']);
            $dateofbirth = mysqli_real_escape_string($connection,$_POST['f4']);
            $birthplace = mysqli_real_escape_string($connection,$_POST['f5']);
            $country = mysqli_real_escape_string($connection,$_POST['Country']);
            $type = mysqli_real_escape_string($connection,$_POST['type']);
            $batting = mysqli_real_escape_string($connection,$_POST['batting']);
            $bowling = mysqli_real_escape_string($connection,$_POST['bowling']);
            $username =$username1." ".$username2;

            $image = $_FILES['image']['name'];
            // Get text
            $file_type = $_FILES['image']['type'];
            print_r($file_type);
            //extension
            $extensions= array("jpeg","jpg","png");
            $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
            if(in_array($file_ext,$extensions)=== false){
                $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                //print_r($errors);

            }

            // image file directory
            $target = "images/".basename($image);

            $sql = "INSERT INTO playerimage (PlayerID, Image) VALUES ('$playerid', '$image')";
            // execute query
            mysqli_query($connection, $sql);

            if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            }
            else{
            }




            $a=0;
            if ($country == "team_bangladesh") {
                $query1=mysqli_query($connection,"insert into team_bangladesh values ('','$playerid','$jersey','$username','$age','$dateofbirth','$birthplace','$country','$type','$batting','$bowling','$a','$a')");


            }
            elseif ($country == 'team_india') {
                $query1=mysqli_query($connection,"insert into team_india values ('','$playerid','$jersey','$username','$age','$dateofbirth','$birthplace','$country','$type','$batting','$bowling','$a','$a')");


            } elseif ($country == 'team_pakistan') {

            } elseif ($country == 'Manu') {


            } elseif ($country == 'Juventas') {



            } else {
                echo "players are not in the club";
            }




            if(!$query1){die("error".mysqli_error($connection));
            }

        }

        ?>



</body>
</html>
