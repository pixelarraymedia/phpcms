<?php 
include('../includes/mydb-functions.php');

?>


<?php
            
    
        $data = array ();       
        foreach ($records as $row){
            $data[] = $row;
        }


      
// this page displays chart data in json format
        print json_encode($data);

?>