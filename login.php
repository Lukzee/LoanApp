  <?php
  if (isset($_POST['login'])){
    $email= crud::protect($conn, $_POST['email']);
    $pass= crud::protect($conn, $_POST['pass']);
    
    if (!empty($email) && !empty($pass)){
      $table='mytable';
      $arg='WHERE user="$email" AND pass="$pass"';
      $q= crud::select($table, $arg, $conn);
      if (mysqli_num_rows($q) == 1){
        header('Location: home');
      } else {
        $error='Incorrect Email or Password !!';
      }
    } else {
      $error='please fill all the required fields !!';
    }
  }
  
  ?>
  
  <p>Welcome to Lukzee LoanApp</p>
  <!-- Project -->
  <form method="POST">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 alert alert-danger">
        <?php echo $error; ?>
      </div>
      <div class="col-md-4"></div>
      
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <input type="text" name="email" class="form-control" placeholder="Email"><br>
        
        <input type="password" name="pass" class="form-control" placeholder="Password"><br>
        
        <input type="submit" name="login" class="btn btn-success" value="Login">
        
        <a href="reg" class="btn btn-primary">Register</a>
      </div>
    </div>
  </form>