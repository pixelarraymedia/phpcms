<?php 
include('../includes/mydb-functions.php');
header('Content-Type:  Application/json');
?>


<?php

	$records = $mydb->query("SELECT ID, `date`,`category`, `tax_name`, `pre_tax` from lot_details order by `date` ");

  
    $category = $mydb->query("UPDATE lot_details set cat_id =1 where category='Construction' ");
    
        $data = array ();
        foreach ($records as $row){
            $data[] = $row;
        }


      

        print json_encode($data);

?>