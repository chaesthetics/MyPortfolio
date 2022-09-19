<?php 
include ("../../config.php");
include ("index.php");
$cid = $_GET['id'];
$sql = "SELECT * FROM certif WHERE certifid = $cid";
$result = mysqli_query($conn, $sql) or die("query unsucessful"); 
while($row = mysqli_fetch_assoc($result)){
?>
<div class="card-body">
<form method="POST" action="saver/updatec.php" enctype="multipart/form-data">
<h6 class="heading-small text-muted mb-4">Edit Certificate</h6>
                <div class="pl-lg-4">
                  <div class="row"> 
                  <div class="col-lg-4">
                      <div class="form-group">

                        <label class="form-control-label" for="input-city">Photo</label>
                        <input type="file" id="input-city" name="photo" class="form-control" value="<?php echo $row['spic'];?>">
                          </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">

                        <label class="form-control-label" for="input-city">Title</label>
                        <input type="text" id="input-city" name="title" class="form-control" value="<?php echo $row['stitle'];?>">
                      </div>
                </div></div><div class="row">
                  <div class="col-lg-4">
                      <div class="form-group">

                        <label class="form-control-label" for="input-city">Description</label>
                    <input type="text" id="input-city"name="description" class="form-control" value="<?php echo $row['sdescript'];?>">
                      </div>
                      <div>
                      <input type="hidden" name="certifid" value="<?php echo $row['certifid'];?>"></div>
                  <button name="save" class="btn btn-primary" > Update </button>
                    </div></div>
                    
    

 
</form>
</div>

<?php }?>