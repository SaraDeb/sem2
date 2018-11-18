<?php

    session_start();

if(isset($_POST['Delete']))
    {
        file_put_contents('comm.txt','');  //Write data to a file
        foreach($commentInfo as $value) {
            if(strpos($value, $_POST['timestamp']) === false) {
                $handle = fopen("comm.txt", "a");
                fwrite($handle, $value);
                fclose($handle);
            }
        }
          }  

?>