<?php
  $page = $_GET["page"];
  if($page == null)
  {
    $newURL = "?page=home";
    header('Location: '.$newURL);
    die();
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-light" id="mainNav">
      <a class="navbar-brand" href="?page=home">Rybners LAN</a>
      <ul class="nav">
      <li class="nav-item">
        <a class="nav-link active" href="?page=info">Info</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=booking">Booking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=kontakt">Kontakt</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=nyheder">Nyheder</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=login">Log ind</a>
      </li>
    </ul>
    </nav>

    <?php
        switch ($page) {
          case "home":
            include "pages/home.php";
            break;
          case "info":
            include "pages/info.php";
            break;
          case "booking":
            include "pages/booking.php";
            break;
          case "kontakt":
            include "pages/kontakt.php";
            break;
          case "nyheder":
            include "pages/nyheder.php";
            break;
          case "login":
            include "pages/login.php";
            break;
          default:
            include "pages/home.php";
      }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>