<?php
session_start();

if(isset($_GET['act'])){
  if($_GET['act'] == "login"){
    $login = $_POST['login'];
    $pwd = $_POST['pwd'];

    if($login == "mato" && $pwd == "qwerty98"){
      $_SESSION['logged'] = true;
      header('Location:index.php');
    }else{
      header('Location:index.php?error=1');
    }
  }else if($_GET['act'] == "logout"){
    session_destroy();
    header('Location:index.php');
  }
}
?>
