<?php include 'links.php'; ?>

<?php include 'engine.php'; ?>

<?php
$logged = false;

if(isset($_SESSION['logged'])){
  if($_SESSION['logged']){
    $logged = true;
  }
}
?>

<?php
if($logged){
  $page = "event";

  if(isset($_GET['page'])){
    if($_GET['page'] == "event"){
      $page = "event";
    }else if($_GET['page'] == "team"){
      $page = "team";
    }else if($_GET['page'] == "news"){
      $page = "news";
    }
  }
?>

<?php include 'pages/header.php'; ?>

<?php include 'pages/'.$page.'.php'; ?>

<?php
}else{
?>
<div class="login-area pt-1502 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <div class="login">
                    <div class="login-form-container">
                        <div class="login-text">
                            <h2>login</h2>
                            <span>Please login using account detail bellow.</span>
                        </div>
                        <div class="login-form">
                            <form action="?act=login" method="post">
                                <input type="text" name="login" placeholder="Username">
                                <input type="password" name="pwd" placeholder="Password">
                                <div class="button-box">
                                    <div class="login-toggle-btn">
                                        <input type="checkbox" id="remember">
                                        <label for="remember">Remember me</label>
                                        <a href="#">Forgot Password?</a>
                                    </div>
                                    <button type="submit" class="default-btn">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
}
?>
