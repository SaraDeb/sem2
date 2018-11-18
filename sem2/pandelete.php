<?php

    session_start();

if(isset($_POST['Delete']))
    {
        file_put_contents('panCom.txt','');  //Write data to a file
        foreach($commentInfo as $value) {   //the value is the line
            if(strpos($value, $_POST['timestamp']) === false) {
                $handle = fopen("panCom.txt", "a");
                fwrite($handle, $value);
                fclose($handle);
            }
        }
          }  

?>