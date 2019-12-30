<?php
  // Init session
  session_start();

  // Include db config
  require_once 'db.php';



  // Validate login
  if(!isset($_SESSION['email']) && ($_SESSION['plan_type']==='') || empty($_SESSION['email'])){
    header('location: login.php');
    exit;
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/a4abbb3a24.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <title>Dashboard</title>
</head>
<?php include'header.php';?>

<body class="bg-warning">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card card-body bg-light mt-5">
          <h2> Welcome to your Dashboard, <?php echo $_SESSION['plan_type']; ?></h2>
          <p>Your Account Email: <small class="text-muted"><?php echo $_SESSION['email']; ?></small></p>
          
          <div class="card-deck">
            <div class="card">
                <div class="card-body">
                <h3 class="card-title"><i class="fas fa-chess-pawn"></i> Current Plan</h3>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Basic</small>
              </div>
            </div>

           
            <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title"><i class="fas fa-chess-knight"></i> Plus Plan</h3>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">$1 for Access</small> <br>
                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                <button type="submit" class="btn btn-success" value="Submit" name="activate">Activate</button>
              </div>
            </div>

            <br>
            <div class="card">
              <div class="card-body">
                <h3 class="card-title"><i class="fas fa-chess-queen"></i> Pro Plan</h3>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">$2 for a Lifetime</small> <br>
                <button type="submit" class="btn btn-success" name="activate2">Activate</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
</body>
</html>