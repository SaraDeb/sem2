<?php

                    include 'comments.php';
                    include 'delete.php';
    session_start();
?>

<!DOCTYPE html>
<html lang = "sv">
<head>
<meta charset="UTF-8">
    <title>Meatballs Recipes </title>
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

    <h1>Meatballs</h1>
    <div class="box">
        <img src="img/kottbull.jpg" alt="kottbullar">
        <h3> Total:45 min |Prep: 15 min | cook: 40 min | yeald: 4 Servings </h3>
        <h3>Ingredients</h3>

        <p>1 pound lean ground beef<br>
        1 egg<br>
       2 tablespoons water<br>
        1/2 cup bread crumbs<br>
        11/4 cup onion (minced)<br>
        1/2 teaspoon salt<br>
       1/8 teaspoon pepper<br>
        </p>
        <h3>Steps to Make It</h3>
        <p>Gather the ingredients.<br>
        Preheat oven to 350 F<br>
       In a large bowl combine the egg, water, bread crumbs, onion, <br>
       salt, and pepper and combine. Add the ground beef <br>
       that has been broken into chunks, and mix gently, <br>
       but thoroughly,with your hands to combine.<br>
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
                    $commentInfo = file('comm.txt');
                    foreach ($commentInfo as $value) {
                        if(strpos($value, $_SESSION['uname']) !== false) {
                            echo $value;
                            $timestamp = $Data[$a];
                            $j++;
                            echo '
                                <div id = "comments">
                                <form method = "POST" action="kottbullar.php">
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