<?php
include("header.php");
include("../includes/mydb-functions.php");
?>


<div id="right">
    <?php
 
    if($records==true) // calling records from database functions file 
    {

        echo "query error"; // checking for error

    }
    else
    {
        
        ?>
      <table>
        <tr><th width="100">ID</th>
        	<th>Date</th>
            <th>Title</th>
            <th>Content</th>
        	<th>Date</th>
            <th>Author</th>
        </tr>
    
      
            <?php
            while($data = mysqli_fetch_array($records)) // placing the array from $records into $data
            {
                ?>
            
            <tr>
                    <td><?php echo $data['ID']; ?> </td>
                    <td><?php echo $data['date']; ?> </td>
                    <td><?php echo $data['category']; ?> </td>
                    <td><?php echo $data['title']; ?> </td>
                    <td><?php echo $data['lot_location']; ?> </td>
                    <td><?php echo $data['lot_condition']; ?> </td>
                    <td><?php echo $data['pre_tax']; ?> </td>
                    <td><?php echo $data['tax_name']; ?> </td>
                    <td><?php echo $data['tax_amount']; ?> </td>
                 
                </tr>

                <?php
            }
                echo "</table>";
        
    }

     ?> 

</div>



<?php
include("footer.php");
?>
      

  
  
  