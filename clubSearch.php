<html>

<link rel="stylesheet" type="text/css" href="CCBStyleSheet.css">

<head>
    <meta charset="UTF-8">
    <title>player Search</title>
</head>

<ul>
    <li><a href="home.html">Home</a></li>
    <li><a  href="playerRegistration.php">Registration</a></li>
    <li><a class="active" href="playerSearch.php">Information</a></li>
</ul>

<div class="clubProfile">
    <h1 class="pageName">club Profile</h1>
</div>

<ul class="subMenu">
<li><a href="playerSearch.php">player Profile</a></li>
    <li><a class="active" href="clubRegistration.php">Club Profile</a></li>
    <li><a href="membershipsearch.php">Membership Details</a></li>
    <li><a href="matchsearch.php">Match Details</a></li>
    <li><a href="home.html">Logout</a></li>
</ul>

<body>

<div class="forms">
    <form class="forms" action="clubProfile.php" method="post">

        <h4 class="headers">Search using club ID </h4>

        <input type="search" name="clubSearch" title="Search using club ID" placeholder="Search..." required><br><br>

        <input type="submit" name="Search">

    </form>
</div>

</body>

</html>