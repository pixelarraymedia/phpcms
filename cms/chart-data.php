<?php 
include('../includes/mydb-functions.php');
header('Content-Type:  Application/json');
?>


<?php

    
        $data = array ();
        foreach ($records as $row){
            $data[] = $row;
        }


      

        print json_encode($data);

?>