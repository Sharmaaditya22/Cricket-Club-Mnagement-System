<?php
    include_once "connection.php";
?>


<html>

<link rel="stylesheet" type="text/css" href="CCBStyleSheet.css">

<head>
    <meta charset="UTF-8">
    <title>Player Search</title>
</head>

<ul>
    <li><a href="home.html">Home</a></li>
    <li><a  href="playerRegistration.php">Registration</a></li>
    <li><a class="active" href="playerSearch.php">Information</a></li>
</ul>

<div class="playerProfile">
    <h1 class="pageName">Player Profile</h1>
</div>

<?php

$name=$_POST['username'];
$password=$_POST['password'];
$name = htmlspecialchars($name);
$password = htmlspecialchars($password);
$playerInfo = "SELECT first_name AS firstName, middle_name AS middleName, last_name AS lastName, father_name AS father, mother_name AS mother, date_of_birth AS dob
                    FROM players WHERE last_name='$password' ";

 $test="SELECT first_name AS firstName, middle_name AS middleName, last_name AS lastName, father_name AS father, mother_name AS mother, date_of_birth AS dob
                    FROM players WHERE playerID='$name' ";

$playerhist = "SELECT transferred_to AS transferred, transferred_from as t_From, total_runs AS run, total_wickets AS wicket, club_name AS club, team_leader AS leader
                FROM player_history WHERE playerID = '$name'";

$contract = "SELECT clubID AS ID, contract_start_date AS dates, contract_end_date AS endd, paymentID AS pay, witness1 AS w1, witness2 AS w2, designation AS de, authorized_person AS ap, contract_amount AS amount FROM contracts WHERE playerID='$name'";  

    $result1 = mysqli_query($conn, $playerInfo);

    $info1 = mysqli_fetch_assoc($result1);

     $result2 = mysqli_query($conn, $playerhist);

    $info2 = mysqli_fetch_assoc($result2);

     $result3 = mysqli_query($conn, $test);

    $info3 = mysqli_fetch_assoc($result3);

    $result4 = mysqli_query($conn, $contract);

    $info4 = mysqli_fetch_assoc($result4);

    if(!empty($info1['firstName']) && !empty($info3['firstName'])){
      ?>

<ul class="subMenu">
    <li><a href="playerSearch.php">Player Profile</a></li>
    <li><a href="clubsearch.php">Club search</a></li>
    <li><a href="membershipsearch.php">Membership Deatils</a></li>
    <li><a href="matchsearch.php">Match Details</a></li>
    <li><a href="home.html">logout</a></li>
</ul>

<body>

<div class="forms">
      <?php 

       $name = $info1['firstName'];
        $name .= " " . $info1['middleName'];
        $name .= " " . $info1['lastName'];
        $father = $info1['father'];
        $mother = $info1['mother'];
        $dob = $info1['dob'];
        echo"Player Personal details:-<br><br>";

        echo "Player Name: $name <br><br>";
        echo "Father's Name: $father <br><br>";
        echo "Mother's Name: $mother <br><br>";
        echo "Date of Birth: $dob <br><br>";
        echo"<br><br>";

        $name=$info2['club'];
          $transferred=$info2['transferred'];
          $from=$info2['t_From'];
          $run=$info2['run'];
          $wicket=$info2['wicket'];
          $leader=$info2['leader'];
         echo "Player history:-<br><br>";
         echo " Club Name: $name<br><br>";
         echo "Admission date: $transferred<br><br>";
         echo "Resignation date: $from<br><br>";
         echo "Total run score : $run<br><br>";
         echo"Total wicket Taken: $wicket<br><br>";
         echo"Leader status: $leader<br><br>";
         echo"<br><br>";
        
if(!empty($info4['ID'])){
            $ID=$info4['ID'];
            $dates=$info4['dates'];
            $end=$info4['endd'];
            $pay=$info4['pay'];
            $w1=$info4['w1'];
            $w2=$info4['w2'];
            $de=$info4['de'];
            $ap=$info4['ap'];
            $amount=$info4['amount'];
        echo"Contract Details:-<br><br>";
        echo"Club ID: $ID<br><br>";
        echo"Contract Start Date: $dates<br><br>";
        echo"Contract End Date: $end<br><br>";
        echo"Payment ID:$pay<br><br>";
        echo"Witness1: $w1<br><br>";
        echo"Witness2: $w2<br><br>";
        echo"Designation : $de<br><br>";
        echo"Authorized person:$ap<br><br>";
        echo"Amount of Contract: $amount<br><br>";
}
else{
    echo"No Contract Details Found";
}
        
}
        

    else{?>

<ul class="subMenu">
    <li><a href="playerSearch.php">MESSAGE</a></li>
</ul>

<body>

<div class="forms">
    	
   <?php
   echo "Wrong Username or Password<br><br>";
   echo"Use this Link to Go back to previous page<br><br>";
echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";

    }

 ?>

</div>

</body>

</html>