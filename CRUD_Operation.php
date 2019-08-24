<?php

include_once  "DBconfig.php";
class CRUD_Operation extends DBconfig
{
    public function __construct()
    {
        parent::__construct();
    }


    public function execute($query){
        $result = $this->connection->query($query);
        if($result == false){
            return false;
        }else{
            return true;
        }
    }
    public function search($query){
        $result = $this->connection->query($query);

        if($result == false){
            return false;
        }
        $rows = array();

        while($row = $result->fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
    }
    public function add($run,$wic,$ball,$eco,$stamp,$strike,$data){
        $run=number_format($run);
        $wic=number_format($wic);
        $ball=number_format($ball);
        $eco=number_format($eco);
        $stamp=number_format($stamp);
        $strike=number_format($strike);
        $q="select * from battingrecord where PlayerID='$data'";
        $q1="select * from bowlingrecord where PlayerID='$data'";

        $result=$this->connection->query($q);
        $result1=$this->connection->query($q1);

        if($result == false){
            return false;
        }
        $rows = array();
        $rows1 = array();


        while($row = $result->fetch_assoc()){
            $rows[] = $row;
        }
        while($row1 = $result1->fetch_assoc()){
            $rows1[] = $row1;
        }

        $run1=number_format($run)+number_format($rows[0]['TotalRun']);
        $num1=number_format($rows[0]['NumberOfMatch'])+1;
        $num2=number_format($rows[0]['NumberOfInnings'])+1;
        $avg=$run/$num2;
        $strike=number_format($strike)+number_format($rows[0]['Rate']);
        $strikeavg=$strike/$num2;
        $high=number_format($rows[0]['HighScore']);
        if($run>$high){
            $high=$run;
        }
        $cen=number_format($rows[0]['Century']);
        $fifthy=number_format($rows[0]['Century']);

        if($run>=100){
            $cen=number_format($rows[0]['Century'])+1;

        }
        elseif($run>=50){
            $fifthy=number_format($rows[0]['fifthy'])+1;

        }


        //bowling Table
        $wic1=number_format($rows1[0]['TotalFiveWicket']);
        if($wic >= 5){
            $wic1=number_format($rows1[0]['TotalFiveWicket'])+1;

        }
        $wic=number_format($wic)+number_format($rows1[0]['TotalWicket']);
        $eco1=number_format($rows1[0]['Economy'])+$eco;
        $ecoavg=$eco1/$num1;
        $stamping=number_format($rows1[0]['Stamping'])+$stamp;

        $q11="update battingrecord SET TotalRun='$run1', NumberOfMatch='$num1', NumberOfInnings='$num2', HighScore='$high', Century='$cen', fifthy='$fifthy', Rate='$strikeavg', Average='$avg' where PlayerID='$data'";
        $res=$this->execute($q11);
        $q12="update bowlingrecord SET TotalWicket='$wic',TotalFiveWicket='$wic1',Economy='$ecoavg',Stamping='$stamping' where PlayerID='$data'";
        $res1=$this->execute($q12);






    }
}
?>