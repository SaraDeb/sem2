 <?php
                    include 'pancomments.php';
                    include 'pandelete.php';
                     session_start();
                ?>

<!DOCTYPE html>
<html lang = "sv">
<head>
<meta charset="UTF-8">
    <title>Pancakes Recipes </title>
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
	<a href="pankakor.php">Pancakes</a>
	</div>
	 </li>



<div class="topnav">
  <div class="login-container">
    <form method="post" action="login.php" >
      <input type="text" placeholder="Username" name="uname" required>
      <input type="text" placeholder="Password" name="passw"required>
      <button type="submit">Login</button>
    </form>
  </div>
</div>

 </ul>
             

    <h1>Pancakes</h1>
<div class="box">
        <img src="img/pankaka.jpg" alt="Pankakor">
        <h3>Prep: 10 min | Total: 30 min | Servings: 4</h3>
        <h3>Ingredients</h3>
        <p>1 cup all-purpose flour<br>
        2 tablespoons sugar<br>
        2 tablespoon baking powder<br>1/2 teaspoon salt teaspoon salt<br>
        1 large egg, slightly beaten <br>
        2 tablespoons vegetable oil <br>
       3/4 cup milk<br>
        <h3>Steps to Make It</h3>
        <p>Combine the flour, sugar, baking powder, and salt. Whisk or stir to blend thoroughly.<br>
        Stir in egg, oil, and the milk. Mix lightly, just enough to blend.<br>

        Cook the pancakes on a hot, well-greased griddle. Flip the pancakes when <br>
        you see bubbles breaking all over the tops, and then continue cooking <br>
        until the underside is browned. <br>
</p>




<?php
            if($_SESSION['uname']) {
                echo'
                    <h3>Comment Here</h3>
                    <div class="comments">
                        <form action="" method = "POST">
                            <label>Comment</label>
                            <input type="text" id="comment" name="comment" placeholder="Your comments...">
                            <input type="submit" value="Submit">
                        </form>
                    </div>';
            }

           else {
                echo '<h4>Log in to write a comment</h4><br>';
            }
        ?>



<h4>Comment section...</h4>
        <hr>
        <div id = "commentlist">


 <?php
                    $commentInfo = file('panCom.txt');
                      foreach ($commentInfo as $value) {
                        if(strpos($value, $_SESSION['uname']) !== false) {
                            echo $value;
                            $timestamp = $Data[$a];
                                echo '
                                <div id = "comments">
                                <form method = "POST" action="pankakor.php">
                                    <input type="submit" value="Delete" name = "Delete">
                                   <input type="hidden" value="'.$timestamp.'" name="timestamp">
                                </form>
                                </div>
                            ';
                        }

                        else
                            echo $value;
                    }
                ?>


          </div>


</div>

</body>
</html>



