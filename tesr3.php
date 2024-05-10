 <?php

    
    include('connection.php');

    // if(isset($_SESSION['id']))
    // {
    // $id=$_SESSION['id'];
    $query = "SELECT * FROM `slider`";
    $result = mysqli_query($conn, $query);
   

    $i=1;

     foreach($result as $slid1)
     {

        if($i==1)
        {
            $active="active";
    ?>
      <img src="<?php echo $slid1['filepath']; ?>" width="100%" height="auto" alt="Slide 2">
      <?php
     }
     else{
        $active = "" ;
     }
     
        $i++;
 
    }
// }
    ?>





</div>


<form method="POST" action="" enctype="">
    <div class="form-group">
        <img src="<?php echo $fetch['filepath'] ?>" alt="" width="40px"><br>
        <br><input class="form-control" type="file" name="uploadfile" id="uploadfile" />
        <input type="hidden" name="id" value="<?php echo $fetch['id']; ?>">
        <input type="hidden" value="<?php echo $fetch['filepath']; ?>" name="old_image">
    </div>
   <div class="form-group">
        <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
   </div>
</form>