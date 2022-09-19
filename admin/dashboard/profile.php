<?php include('index.php'); ?>
    
<div class="card-body">
              <form action="saver/profile.php" method="post">

                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Username</label>
                        <input type="text"  name="username"class="form-control" placeholder="<?php echo $_SESSION['sname'];?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="<?php echo $_SESSION['semailadd'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">First name</label>
                        <input type="text"  name="fname" class="form-control" placeholder="<?php echo $_SESSION['currentuser'];?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Last name</label>
                        <input type="text"  name="lname" class="form-control" placeholder="<?php echo $_SESSION['slastname'];?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label">Password</label>
                        <input type="text" name="pass" class="form-control" placeholder="Password">
                      </div>
                    </div>
                  </div>
                </div>
              <button type="submit" class="btn btn-primary" name="profiles"> Update </button>
              </form>
            
