<?php include('index.php');
include "../../config.php"; ?>

<div class="card-body">
<?php $sql= "SELECT * FROM skilltable";
$result= mysqli_query($conn, $sql) or die("query unsuccessful!");   
  if(mysqli_num_rows($result)>0){
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<h6 class="heading-small text-muted mb-4">Skill Management</h6>
<button class="btn btn-primary" name="profiles"><a  href="add.php" style="color:white"> Add Skill </a></button>
  <table class="table table-striped"> 
    <thead>
    <th scope="row"><h6>Skill</h6></th>
    <th scope="row"><h6>Percentage</h6></th>
    <th scope="row"><h6>Action</h6></th></thead>
      <tbody>
      <?php while($row = mysqli_fetch_assoc($result)){ ?>
        <tr>
          <td><?php echo $row['skillname']?></td>
          <td><?php echo $row['percent']?></td>
          <td> 
          <a type="button" href="edit.php?id=<?php echo $row['skillid']?>" class="btn-floating deep-purple"><i class="fas fa-edit" style='font-size:33px' aria-hidden="true"></i></a>
          <a type="button" href="saver/delete.php?id=<?php echo $row['skillid']?>" class="btn btn-danger"><i class="fa fa-trash" style="font-size: 16px" aria-hidden="true"></i></a></td>
        </td>
    
        </tr>
      <?php } ?>

      </tbody>
  </table>
  <?php }
  else{ ?>
    <br><br>
    <h3 style="font-size: 40px; text-align:center;">No Records Found</h3>
  <?php }
?>
  <br><br>
 
 </div>
 <?php mysqli_close($conn);
 ?>
