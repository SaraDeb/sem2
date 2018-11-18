<?php
    session_start();
    
    // Parse users.txt
    $commentInfo = file('panCom.txt');
   //   $i=0;
    $Data = array();
    foreach ($commentInfo as $value) {  //strpos — Find the position of the first occurrence of a substring in a string       
     if(strpos($value, $_SESSION['uname']) !== false) {
           list($comment, $user) = explode('hidden', $value);  
            $Data[$i++] = trim($user);
        }
    }


//om det är tomt
      if (!empty($_POST['comment'])) { //fopen — Opens file or URL
        $content = $_POST['comment']; //spara det man skriver i comment section
        $handle = fopen("panCom.txt", "a");  // 'a'   Open for writing only; 
        $t=time();        
        //fwrite() writes the contents of string to the file stream pointed to by handle.
        fwrite($handle, "<b>". $_SESSION['uname']." ".gmdate("Y-m-d",$t)."</b>:<br>".$content."<p hidden>".time().",".$_SESSION['uname']."</p><br><br>"."\n");
        
        fclose($handle); //fclose — Closes an open file pointer
         }


?>


