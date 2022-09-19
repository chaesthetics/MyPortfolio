<?php session_start();
?>
<html>
<head>
    <title>User Login and Registration </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
    <div class="login-box">
    <div class="row">
    <div class="login-left">
        <h2>Login here</h2> 
        <form action="validation.php" method="post">
        <?php if(isset($_SESSION['erol'])){ ?>
                <p class="error"><?php echo $_SESSION['erol'];?></p>
         <?php   }
            ?>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div> <br>
        <button type="submit" class="btn btn-primary" name="login"> Login </button><br> <a href="logout.php"  style="float:right;"></i>
                  <span>Return to porfolio</span>
                  </a>
        </form>
       
    </div>   
</div>
</div>
 
</body>

</html>