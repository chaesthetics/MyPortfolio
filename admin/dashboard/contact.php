<?php include('index.php'); ?>
    
<div class="card-body">
              <form action="saver/contact.php" method="post">
                
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" name="address" class="form-control" placeholder="<?php echo$_SESSION['saddress'];?>" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Town/City</label>
                        <input type="text" id="input-city" name="city" class="form-control" placeholder="<?php echo $_SESSION['city'];?>" >
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Country</label>
                        <input type="text" id="input-country" name="country" class="form-control" placeholder="<?php echo$_SESSION['country'];?>" >
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Postal code</label>
                        <input type="number" id="input-postal-code" name="postal" class="form-control" placeholder="<?php echo$_SESSION['postalcode'];?>">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Phone number</label>
                        <input type="number" id="input-postal-code" name="cpno"class="form-control" placeholder="<?php echo $_SESSION['snumber'];?>">
                      </div>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary" name="profiles"> Update </button>
              </form>
            </div>
          </div>
