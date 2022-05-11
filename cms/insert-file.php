<?php include("header.php"); 
?>
<!-- including header and menu -->

<div id="right">
  <form action="insert-file-handler.php" method="post" enctype="multipart/form-data">
      <ul>
    
          <li>Choose a file</li>
          <li><input type="file" name="file" ></li>
          <li>&nbsp;</li>
          <li><button type="submit" value="Send" name="submit" id="submit"> submit </button> </li>
      </ul>
  </form>

</div>


<?php
include("footer.php");
?>