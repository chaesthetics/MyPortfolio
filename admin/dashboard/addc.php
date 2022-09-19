<?php 
    include "index.php"; ?>
    <div class="card-body">
<form method="POST" action="saver/certif.php" enctype="multipart/form-data">
<h6 class="heading-small text-muted mb-4">Add Certificate</h6>
                <div class="pl-lg-4">
                  <div class="row">
                  <div class="col-lg-4">
                      <div class="form-group">

                        <label class="form-control-label" for="input-city">Photo</label>
                        <input type="file" id="input-city" name="photo" class="form-control">
                          </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">

                        <label class="form-control-label" for="input-city">Title</label>
                        <input type="text" id="input-city"name="title" class="form-control">
                      </div>
                </div></div><div class="row">
                  <div class="col-lg-4">
                      <div class="form-group">

                        <label class="form-control-label" for="input-city">Description</label>
                        <input type="text" id="input-city"name="description" class="form-control">
                      </div>
                    </div>
    </div>

<button name="save" class="btn btn-primary" > Add Certificate </button>
</form>
</div>

