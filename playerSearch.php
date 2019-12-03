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
    <li><a href="index1.html">Login</a></li>
</ul>

<div class="playerProfile">
    <h1 class="pageName">Player Profile</h1>
</div>

<ul class="subMenu">
    <li><a class="active" href="playerRegistration.php">Player Profile</a></li>
    <li><a href="clubSearch.php">Club Profile</a></li>
    <li><a href="membershipsearch.php">Membership Details</a></li>
    <li><a href="matchsearch.php">Match Details</a></li>
    <li><a href="home.html">Logout</a></li>
</ul>

<body>

<div class="forms">
    <form class="forms" action="playerProfile.php" method="post">

        <h4 class="headers">Search using player ID </h4>

        <input type="search" name="playerSearch" title="Search using player ID" placeholder="Search..." required><br><br>

        <input type="submit" name="Search">

    </form>
</div>

</body>

</html>
