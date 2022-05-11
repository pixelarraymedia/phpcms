<?php session_start();

// Adding sessing to make sure only admins can upload CSV
if(!isset($_SESSION['auth']) || $_SESSION['auth']!=true)
        {
            header("location:index.php");
            die();
        }
        ?>
<?php
  include('../includes/mydb-functions.php');

  if(isset($_POST['submit'])){
    $fileMimes = array(
      'text/x-comma-separated-values',
      'text/comma-separated-values',
      'application/octet-stream',
      'application/vnd.ms-excel',
      'application/x-csv',
      'text/x-csv',
      'text/csv',
      'application/csv',
      'application/excel',
      'application/vnd.msexcel',
      'text/plain'
     );

  if(!empty($_FILES["file"]['name']) && in_array($_FILES['file']['type'], $fileMimes))
    {

        $filename = fopen($_FILES["file"]["tmp_name"], 'r');
        fgetcsv($filename);

        while (($data = fgetcsv($filename, 10000, ",")) !== FALSE)
         {

          $result = preg_match_all($data[1], $content, $matches);

              $date            = $data[0];
              $category        = $data[1];
              $title           = $data[2];
              $lot_location    = $data[3];
              $lot_condition   = $data[4];
              $pre_tax         = $data[5];
              $tax_name        = $data[6];
              $tax_amount      = $data[7];
           

              // running passed sql statement and store results into $records
              $records = $mydb->query("INSERT INTO lot_details 
              ( `date`, `category`, `title`, `lot_location`, `lot_condition`, `pre_tax`, `tax_name` , `tax_amount` ) VALUES 
              ('".$date."','".$category."','".$title."','".$lot_location."', '".$lot_condition."', '".$pre_tax."' ,'".$tax_name."','".$tax_amount."') ");
          // Get sum of all categories by Cat_ID 

          // get Sum of all categories tax amount by ID 

                            
              



                if(!isset($records))
                {

                  $update = $mydb->query("SELECT * from lot_details where categories = 'Construction' ");
 echo $update;
                  echo "<script type=\"text/javascript\">
                      alert(\"Invalid File: Please Use Proper CSV format.\");
                      window.location = \"auction-items.php\"
                      </script>";    //returning to view if success
                }

                 if(!isset($records))
                 {
                   
                   echo "<script type=\"text/javascript\">
                       alert(\"Invalid File: Please Use Proper CSV format.\");
                       window.location = \"auction-items.php\"
                       </script>";    //returning to view if success
                 }
                 else {
                     echo "<script type=\"text/javascript\">
                     alert(\"CSV File Data Uploaded Successfully!.\");
                     window.location = \"auction-items.php\"
                   </script>";
                 }
                    }
                    fclose($file);  
     }

    else
    {
        header("location:index.php?insert=fail"); // if file not CSV enter fail in URL
    }
  }  

          ?>