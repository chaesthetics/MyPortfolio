<?php include('index.php'); ?>
<div class="card-body">
              <form action="saver/EA.php" method="post">
                
              <h6 class="heading-small text-muted mb-4">Elementary</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">School</label>
                        <input id="input-address" name="skul1" class="form-control" placeholder="<?php echo$_SESSION['address1'];?>"  type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Degree</label>
                        <input type="text" id="input-city"name="degree1" class="form-control" placeholder="<?php echo$_SESSION['degree1'];?>" >
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Year/Month</label>
                        <input type="text" id="input-country" name="year1" class="form-control" placeholder="<?php echo$_SESSION['year1'];?>" >
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Description</label>
                        <input type="text" id="input-postal-code" name="d1"class="form-control" placeholder="<?php echo$_SESSION['description1'];?>">
                      </div>
                    </div>
                  </div>
                </div>

                <br>
                <br>
                <h6 class="heading-small text-muted mb-4">Highschool</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">School</label>
                        <input id="input-address" class="form-control" name="skul2" placeholder="<?php echo$_SESSION['address2'];?>" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Degree</label>
                        <input type="text" id="input-city" name="degree2" class="form-control" placeholder="<?php echo$_SESSION['degree2'];?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Year/Month</label>
                        <input type="text" id="input-country" name="year2" class="form-control" placeholder="<?php echo$_SESSION['year2'];?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Description</label>
                        <input type="text" id="input-postal-code" name="d2" class="form-control" placeholder="<?php echo$_SESSION['description2'];?>">
                      </div>
                    </div>
                  </div>
                </div>

                <br>
                <br>
                <h6 class="heading-small text-muted mb-4">College</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">School</label>
                        <input id="input-address" class="form-control" name="skul3" placeholder="<?php echo$_SESSION['address3'];?>" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Degree</label>
                        <input type="text" id="input-city" name="degree3" class="form-control" placeholder="<?php echo$_SESSION['degree3'];?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Year/Month</label>
                        <input type="text" id="input-country" name="year3" class="form-control" placeholder="<?php echo$_SESSION['year3'];?>" >
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Description</label>
                        <input type="text" id="input-postal-code" name="d3" class="form-control" placeholder="<?php echo$_SESSION['description3'];?>">
                      </div>
                    </div>
                  </div>
                </div>

                <br>
                <br>
                <button type="submit" class="btn btn-primary"> Update </button>
              </form>
            </div>
          </div>
