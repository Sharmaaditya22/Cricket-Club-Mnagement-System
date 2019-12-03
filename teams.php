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

<ul class="subMenu">
    <li><a  href="playerSearch.php">Player Profile</a></li>
    <li><a class="active" href="clubsearch.php">Club Profile</a></li>
</ul>

<body>

<div class="forms">

    <?php
    // Players Table -----------------------------------------------------------------------------------------------

    $query = $_POST['clubSearch'];

    $query = htmlspecialchars($query);

    $playerInfo = "SELECT club_name AS clubName, president AS president,date_established AS dateEstablished,club_locationID AS clublocation
                    FROM clubs WHERE clubID = '$query'";



    $result1 = mysqli_query($conn, $playerInfo);

    $info1 = mysqli_fetch_assoc($result1);


    if (!empty($info1['clubName']))
    {
        $name = $info1['clubName'];
        $president = $info1['president'];
        $dateEstablished = $info1['dateEstablished'];
        $clublocation = $info1['clublocation'];


        echo "Club Name: $name <br><br>";
        echo "President's Name: $president <br><br>";
        echo "Date of Established: $dateEstablished <br><br>";
        echo "Loaction ID: $clublocation <br><br>";

        


        }

    else
        echo "club Not Found";
    ?>

</div>

</body>

</html>