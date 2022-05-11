<?php
include("header.php");
include("../includes/mydb-functions.php");
?>

<Div id="right">
    <p>Welcome</p>

    <?php        
     
    if($pretax==true) 
    // if SQL query succeed we should have some data to show
    {		

        ?>
        <?php
            while($row = mysqli_fetch_array($pretax)) 
            // placing the array from $tax into $data
            {    

                ?>

                <tr>
                <li><td><?php echo $row['condition_sum']; ?> </td></li>
                </tr>

                <?php
            }

            ?>

        </table>
        <?php
    }
 ?>

</Div>
<?php
include("footer.php");
?>