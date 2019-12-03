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
    <li><a href="clubsearch.php">Club Profile</a></li>
    <li><a class="active" href="membershipsearch.php">Membership Details</a></li>
    <li><a href="matchsearch.php">Match Details</a></li>
    <li><a href="home.html">Logout</a></li>
</ul>

<body>

<div class="forms">

    <?php
    // Players Table -----------------------------------------------------------------------------------------------

    $query = $_POST['memberSearch'];

    $query = htmlspecialchars($query);

    $playerInfo = "Select membership_name  AS membername, membership_type As type, Regi_date AS RegistrationDate,
    exp_date AS expiredate, playerID AS playerID
                    FROM membership_details WHERE membershipID = '$query'";



    $result1 = mysqli_query($conn, $playerInfo);

    $info1 = mysqli_fetch_assoc($result1);


    if (!empty($info1['membername']))
    {
        $name = $info1['membername'];
        $type = $info1['type'];
        $date = $info1['RegistrationDate'];
        $expire = $info1['expiredate'];
        $playerID=$info1['playerID'];


        echo "Player ID: $playerID <br><br>";
        echo "Type of Membership: $name<br><br>";
        echo "Duration of Membership: $type <br><br>";
        echo "Registration Date: $date <br><br>";
        echo "Expire Date: $expire <br><br>";


        


        }

    else
        echo "member Not Found";
    ?>

</div>

</body>

</html>