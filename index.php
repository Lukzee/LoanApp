<?php
require_once('class.php');
require_once('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Loan App</title>
  
  <!-- HTML -->
  
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.2/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.2/dist/css/bootstrap.min.css">

  <!-- Custom Styles -->
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  $req= strtolower($_GET['req']);
  
  switch ($req) {
    case 'login':
      require_once('login.php');
      break;
      
    case 'reg':
      require_once('sign_up.php');
      break;
      
    case 'home':
      require_once('dash.php');
      break;
    
    default:
      // code...
      break;
  }
  ?>
  
  <script src="main.js"></script>
</body>
</html>