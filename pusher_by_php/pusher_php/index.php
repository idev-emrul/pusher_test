<?php
//   require __DIR__ . '/vendor/autoload.php';
  require_once('vendor/autoload.php');

  $options = array(
    'cluster' => 'ap2',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    '62c10c146fe2c033b91c',
    '460101046a418c9bbffa',
    '1867271',
    $options
  );

  //====== start notification initiator ==========
  $data['message'] = 'hello emrul, this is your first notification';
  $pusher->trigger('emrul-test-channel', 'emrul-test-event', $data);
  //====== end notification initiator ========

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $user = $_POST['user'];

    // Sanitize the input to prevent XSS attacks
    $user = htmlspecialchars($user, ENT_QUOTES, 'UTF-8');

    //====== start notification initiator ==========
    $data['message'] = 'hello emrul, this is your first notification';
    $trigger_event='emrul-test-event'.'-'.$user;
    echo $trigger_event;
    // $pusher->trigger('emrul-test-channel', 'emrul-test-event', $data);
    $pusher->trigger('emrul-test-channel', $trigger_event, $data);
    //====== end notification initiator ========

    // header("Location: index.php");
    // exit();

  } 
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>

  <body>
    <h1>Hello, world!</h1>

    <form method="post" action="index.php">
        <input type="text" name="user">
        <button class="btn btn-primary btn-sm">Submit</button>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>

</html>