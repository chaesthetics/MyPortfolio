<?php include "index.php"; ?>
<div class="card-body">
              <form action="saver/add.php" method="post">
                
              <h6 class="heading-small text-muted mb-4">Add Skill</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">

                        <label class="form-control-label" for="input-city">Skill</label>
                        <input type="text" id="input-city"name="skilladd" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Percentage</label>
                        <input type="number" id="input-country" name="percentadd" class="form-control">
                      </div>
                    </div>
    </div>
    </div>
    <button type="submit" class="btn btn-primary" > Add </button>
       
    </form>
  
    </div>