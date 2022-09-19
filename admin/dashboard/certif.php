<?php 
include "index.php";
include "../config.php";
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="card-body">
<h6 class="heading-small text-muted mb-4">Manage Certificates</h6>


<button class="btn btn-primary" name="profiles"><a  href="addc.php" style="color:white" > Add Certificate </a></button>

    <?php 
    $sql = "SELECT * FROM certif";
    $result = mysqli_query($conn, $sql) or die("query unsucessful");
    if(mysqli_num_rows($result)>0){  ?>
       
        <table class="table table-striped"> 
          <thead>
            <th scope="row"><h6>Title<h6></th>
            <th scope="row"><h6>Description</h6></th>
            <th scope="row"><h6>Image</h6></th>
            <th scope="row"><h6>Action<h6></th></thead>
            <tr> <?php while($row = mysqli_fetch_assoc($result)){
        ?>
            <td style="font-size: 18px;"><?php echo $row['stitle'];?></td>
            <td style="font-size: 18px;"><?php echo $row['sdescript'];?></td>
            <td><img src="saver/<?php echo $row['spic']; ?>" height="60" width="60"></td>
            <td>
            <a type="button" href="editc.php?id=<?php echo $row['certifid']?>" class="btn-floating deep-purple"><i class="fas fa-edit" style='font-size:33px' aria-hidden="true"></i></a>
            <a type="button" href="saver/deletec.php?id=<?php echo $row['certifid']?>" class="btn btn-danger"><i class="fa fa-trash" style='font-size:16px' aria-hidden="true"></i></a></td>
        </tr> <?php }?>
        
   <?php }
    else{ ?>
        <h1>No Certificate.</h1>
 <?php   }
    
    
    
    ?>
</div>


