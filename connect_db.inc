<?php
  // Connect to our DB with mysql_connect(<server>, <username>, <password>)

    $host = "localhost";

    $user = "root";

    $pass= "";

    $sql_connection = mysql_connect($host, $user, $pass);

        if (!$sql_connection) {
            die('error ' . mysql_error());

        }
        echo 'successfully connection';


    $database = "contact_form";

    $table_name = "user";

        $db_selected = mysql_select_db( $database, $sql_connection);

    if (!$db_selected) {

        die ('</br> Unable to select database:' . mysql_error());

    }
        else {echo '<br>selected db Ok';}
?>
