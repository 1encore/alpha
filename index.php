<?php
  $page = "main";

  if(isset($_GET['page'])){
    if($_GET['page'] == "main"){
      $page = "main";
    }else if($_GET['page'] == "about"){
      $page = "about";
    }else if($_GET['page'] == "contact"){
      $page = "contact";
    }else if($_GET['page'] == "course"){
      $page = "course";
    }else if($_GET['page'] == "event"){
      $page = "event";
    }else if($_GET['page'] == "teacher"){
      $page = "teacher";
    }
  }
?>

<!doctype html>
<html class="no-js" lang="en">
    <head>
      <?php include 'templates/links.php'; ?>
    </head>
    <body>
  		<!-- Header Area Start -->
      <?php include 'templates/header.php'; ?>
  		<!-- Header Area End -->

      <?php include 'pages/'.$page.'.php'; ?>

      <!-- Footer Start -->
      <?php include 'templates/footer.php'; ?>
      <!-- Footer End -->
    </body>
</html>
