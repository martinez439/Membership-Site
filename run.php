<?php include'header.php'; ?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <title>Run it!</title>
</head>
<?php
  function runMyFunction() {
    echo 'I just ran a php function';
  };

  if (isset($_GET['hello'])) {
    runMyFunction();
  };
?>

<a href='helloworld.php?hello=true'>Run PHP Function </a>
</html>