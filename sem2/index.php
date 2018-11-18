<?php
    session_start();

?>

<!DOCTYPE html>
<html lang = "sv">
<head>
<meta charset="UTF-8">
<!--<body style="background-color:powderblue;"> -->
    <title>Tasty Recipes</title>
    <link href="reset.css" rel ="stylesheet" type="text/css">
    <link href="index.css" rel="stylesheet" type="text/css">

</head>
<body>
<ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="kalender.php"> Calendar</a></li>

 <li class="abc">
<div>
    <a href="kottbullar.php">MeatBalls</a>
	<a href="pankakor.php">Pancake</a>
	</div>
	 </li>




<div class="topnav">
  <div class="login-container">
    <form method="post" action="login.php" >
      <input type="text" placeholder="Username" name="uname" required>
      <input type="text" placeholder="Password" name="psw"required>
      <button type="submit">Login</button>
    </form>
  </div>
</div>

 </ul>
     

<h1>TASTY.RECIPES</h1>

<div class="box">
    <h2>Welcome to Tasty Recipes!</h2>
    <p> Discover recipes, cooks and how-tos. Find and share everyday cooking inspiration on Tasty recipes. <br>
    Only two recipes are available at the moment, let us know on the comment section of the receipes <br><br>
    what you want us to do for next time. With your help and our ambitions to cook we can make this site <br>
    go next level. Keep suggesting what we should improve.<br>
    You can check out the recipes if you click on the calander.<br>
    -	Tasty Recipes.<br><br>

    </p>
</div>
</body>
</html>