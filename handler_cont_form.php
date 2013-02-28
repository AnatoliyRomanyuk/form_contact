<?php

    $contactSurname = $_POST['surnName'];

    $contactName = $_POST['firstName'];

    $contactEmail = $_POST['emaile'];

    $contactImportance = $_POST['importance'];

    $contactCause = $_POST['cause'];
      
    $contactCall_time = $_POST['call_time'];
    
          
                                                // debugBreak();
          
                                        //
                foreach($contactCall_time as $value){
                    
                    if($call_time == ''){
                        $call_time = $value;
                    }
                    else{
                        $call_time=$call_time.','.$value;
                    }
                }
                                     // var_dump($call_time);

    $contactText = $_POST['textMess'];
                                           //validations input
       /* if ((strlen($contactName) >= 2) and (strlen($contactName) <= 25) and ctype_alpha($contactName))
        {
            $name = stripslashes($contactName);
            $name = html_entity_decode($contactName);
            $name = strip_tags($contactName);
        }
        else
        {
            echo "You entered the correct data in the field \"Name\"";
            echo "<center><input name='back' type='button' value='Back'
           onclick= 'javascript:history.back()'></center>";
        }           */

    if (empty($contactEmail)){

       print "do something because the email is empty </br>";

    }
    
    include 'connect_db.inc'; 



       $sql = "INSERT INTO $table_name(
          surName,

          firstName,

          emaile,

          importance,

          cause,

          call_time,

          textMess

          )
          VALUES(
          '$contactSurname',

          '$contactName',

          '$contactEmail',

          '$contactImportance',

          '$contactCause',

          '$call_time',

          '$contactText'
          )";

            if (!mysql_query($sql,$sql_connection))
            {
                die('Error: ' . mysql_error());
            }
            echo "</br>1 record added";

    mysql_close($sql_connection);
?>