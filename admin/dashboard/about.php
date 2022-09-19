<?php include('index.php'); ?>
<div class="card-body">
              <form action="saver/about.php" method="post">
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">About me</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">About Me</label>
                    <textarea rows="4" name="aboutyou" class="form-control" placeholder="<?php echo$_SESSION['about'];?>"></textarea>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary" name="abouts"> Update </button>
              </form>
            </div>
          </div>
