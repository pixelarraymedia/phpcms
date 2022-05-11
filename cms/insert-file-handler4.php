<?php session_start();

if(!isset($_SESSION['auth']) || $_SESSION['auth']!=true)
{
    header("location:index.php");
    die();
}

?>
<?php

  include('../includes/mydb-functions.php');


  if(isset($_POST['submit']))

  {




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



if(isset($_FILES["file"], $_POST["submit"]) && in_array($_FILES['file']['type'], $fileMimes)){


        $filename=$_FILES["file"]["tmp_name"];

        if($_FILES["file"] ["size"] > 0)
        {
        $file = fopen($filename, "r");

           fgetcsv($file); // returning csv as ARRAY $file
           
        while (($data = fgetcsv($file, 10000, ",")) !== FALSE)

         {

        $records = $mydb->query("INSERT INTO lot_details 
        ( `date`, `category`, `title`, `lot_location`, `lot_condition`, `pre_tax`, `tax_name` , `tax_amount` ) VALUES 
        ('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."' ,'".$data[5]."','".$data[6]."','".$data[7]."')");
          
                   // runing passed sql statement and store results into $records variable

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
           }   
          
          
          }
          ?>