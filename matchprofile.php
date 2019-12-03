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

<div class="">
    <h1 class="pageName">Match Profile</h1>
</div>

<ul class="subMenu">
    <li><a href="playerSearch.php">Player Profile</a></li>
    <li><a href="clubsearch.php">Club Profile</a></li>
    <li><a href="membershipsearch.php">Membership Details</a></li>
    <li><a class="active" href="matchsearch.php">Match Details</a></li>
    <li><a href="home.html">Logout</a></li>
</ul>

<body>

<div class="forms">

    <?php
    // Players Table -----------------------------------------------------------------------------------------------

    $query = $_POST['matchSearch'];

    $query = htmlspecialchars($query);

    $playerInfo = "SELECT date_of_match AS date1,team_batting_first AS batting,team_bowling_first AS bowling,man_of_the_match AS man,umpire AS umpire,venueID AS venue
                    FROM matches WHERE matchID = '$query'";

                       $new="Select matchID AS matchID,playerID AS player,total_runs As run,total_wickets AS wickets,outstanding_performance AS per
    from match_performance where matchID='$query'";

    


    $result1 = mysqli_query($conn, $playerInfo);

    $info1 = mysqli_fetch_assoc($result1);
    $result2 = mysqli_query($conn, $new);

    $info2 = mysqli_fetch_assoc($result2);



    if (!empty($info1['date1']))
    {
        $date = $info1['date1'];
        $batting = $info1['batting'];
        $bowling =  $info1['bowling'];
        $man = $info1['man'];
        $umpire = $info1['umpire'];
        $venue = $info1['venue'];


        echo "Date of the Match: $date <br><br>";
        echo "First Innings Batting Team: $batting <br><br>";
        echo "First Innings Bowling Team: $bowling <br><br>";
        echo "Man of the Match: $man <br><br>";
        echo "Match Umpire: $umpire <br><br>";
        echo "venueID: $venue <br><br>";

        if(!empty($info2['matchID'])){
            $player=$info2['player'];
            $total=$info2['run'];
            $wicket=$info2['wickets'];
            $per=$info2['per'];

            echo"Player ID: $player<br><br>";
            echo"Run score by player: $total<br><br>";
            echo"Wicket Taken by Player: $wicket<br><br>";
            echo"Team outstanding_performance: $per<br><br>";
        }

    }

    else
        echo "Match Not Found";
    ?>

</div>

</body>

</html>