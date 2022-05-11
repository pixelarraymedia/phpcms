<?php
include("header.php");
include("../includes/mydb-functions.php");
?>

<Div id="right">
    <p>Welcome</p>

    <?php

 if($chart->num_rows > 0) {
 // if SQL query succeed in our mydb-functions.php page we should have some data to show

    $i = 0;

    while($row = $chart->fetch_assoc()){
                $date = $row["date"];
                $tax = $row["tax_name"];
                $pretax = $row["pre_tax"];
            ?>
            <div class="container">
                <div class="row my-3">
                    <div class="col">
                        <h4>Bootstrap 4 Chart.js - Line Chart</h4>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="chLine" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <tr>
                <li> <td><?php $i++; echo $i; ?> </td></li>
                <li> <td><?php echo $tax; ?> </td></li>
                <li> <td><?php echo $date; ?> </td></li>
                <li> <td><?php echo $pretax; ?> </td></li>
             </tr>


         
        
             <?php
         }

         ?>

     </table>
     <?php
 }

 ?>

 
</div>
<?php
include("footer.php");
?>