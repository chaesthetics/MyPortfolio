<?php
include "../config.php"; 
include "index.php";

$sd_id= $_GET['id'];
$sql = "SELECT * FROM skilltable WHERE skillid = $sd_id";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_assoc($result)){ ?>
<div class="card-body">
              <form action="saver/edit.php" method="post">
                
              <h6 class="heading-small text-muted mb-4">Update Data</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <input type = "hidden" name="skillid" value="<?php echo $row['skillid'];?>"
                        <label class="form-control-label" for="input-city">Skill</label>
                        <input type="text" id="input-city"name="skillname" class="form-control" value="<?php echo$row['skillname'];?>" >
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Percentage</label>
                        <input type="number" id="input-country" name="percent" class="form-control" value="<?php echo$row['percent'];?>" >
                      </div>
                    </div>
    </div>
    </div>
    <button type="submit" class="btn btn-primary"> Update </button>
       
    </form>
  
    </div>
  
  <?php }
}
?>