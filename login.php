  <?php
  
  ?>
  
  <p>Welcome to Lukzee LoanApp</p>
  <!-- Project -->
  <form method="POST">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 alert alert-danger">
        <?php echo error; ?>
      </div>
      <div class="col-md-4"></div>
      
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <input type="text" name="email" class="form-control" placeholder="Email"><br>
        
        <input type="password" name="pass" class="form-control" placeholder="Password"><br>
        
        <input type="submit" name="login" class="btn btn-success" value="Login">
      </div>
    </div>
  </form>