<?php

if (isset($_POST))

{
   
    $login = file('users.txt');  //stored login info on login variable
    $Data = array();
    foreach ($login as $value) {
        list($username, $password) = explode(',', $value);
        $Data[trim($username)] = trim($password);
    }

 

       /*
    if ($uname = isset($_POST['uname'])) {
    $_POST['uname']
} else {
    '';
}
*/
//kontrollera om i
    $uname = isset($_POST['uname']) ? $_POST['uname'] : '';
    $passw = isset($_POST['passw']) ? $_POST['passw'] : '';
 


    // kontorllerra inputen och user.txt data

    if (array_key_exists($uname, $Data) && $passw == $Data[$uname]) {  //array_key_exists — Checks if the given key or index exists in the array  
        session_start();
        $_SESSION['uname'] = $uname;
    }

    else {
        header('Location: http://localhost/sem2/fel.html');
    }
}

?>

    
<!DOCTYPE html>
 <head>
    <meta charset="UTF-8">
  <title>Login</title>
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
     </ul>

     <h1>Tasty Recipes</h1>
    <div class = "box">
        <h2><br>Welcome to TASTY RECIPES, <?php echo $_SESSION['uname'] ?>! You are now logged in! </h2>
    </div>
</body>
</html>