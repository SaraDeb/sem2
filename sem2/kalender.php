<?php
    session_start();
?>
<!DOCTYPE html>
<html lang = "sv">
    <head>
        <title>Tasty Recipes - calendar</title>
        <link href="reset.css" rel ="stylesheet" type="text/css">
        <link href="index.css" rel="stylesheet" type="text/css">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    </head>
	<body>
	<ul>
	    <li><a href="index.php">HOME</a></li>
	    <li><a href="kalender.php"> Calendar</a></li>

	 <li class="abc">
	<div>
	    <a href="kottbullar.php">Meatballs</a>
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

        <h1>Calendar</h1>
<!--<div class="box"> -->


 <div class="month">
			<ul>
				<li class="prev">&#10094;</li>
				<li id=monthandyear>
				  <span id="month">Month 2</span>

				</li>
				<li class="next">&#10095;</li>

			</ul>
		</div>

		<div>
        <ul class="weekdays">
			<li>Sun.</li>
            <li>Mon.</li>
            <li>Tue.</li>
            <li>Wed.</li>
            <li>Thu.</li>
            <li>Fri.</li>
            <li>Sat.</li>
        </ul>
		</div>
		<div>
        <ul class="days">
            <li><span class="inactive">29</span></li>
            <li><span class="inactive">30</span></li>
            <li><span class="inactive">31</span></li>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>7</li>
            <li>8</li>
            <li>9</li>
            <li>10</li>
            <li>11</li>
            <li>12</li>
            <li>13</li>
            <li>14</li>
            <li>15</li>
            <li>16</li>

            <li>17</li>
            <li>18</li>
            <li>19</li>
            <li>20<a href="kottbullar.php"><img src="img/kottbull.jpg" class="calendarpic" alt="kottbullar."></a></li>
            <li>21</li>
            <li>22</li>
            <li>23</li>
            <li>24<a href="pankakor.php"><img src="img/pankaka.jpg" class="calendarpic" alt="pankakor."></a></li>
            <li>25</li>
            <li>26</li>
            <li>27</li>
            <li>28</li>
            <li>29</li>
            <li>30</li>
            <li>31</li>
			<li><span class="inactive">1</span></li>
        </ul>
		</div>


    </body>
</html>