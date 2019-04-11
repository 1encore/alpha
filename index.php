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
    }else if($_GET['page'] == "rfalphastudy"){
        $page = "rfalphastudy";
    }else if($_GET['page'] == "teacher2"){
        $page = "teacher2";
    }else if($_GET['page'] == "teacher15"){
        $page = "teacher15";
    }else if($_GET['page'] == "teacher16"){
        $page = "teacher16";
    }else if($_GET['page'] == "teacher17"){
        $page = "teacher17";
    }else if($_GET['page'] == "teacher13"){
        $page = "teacher13";
    }else if($_GET['page'] == "teacher12"){
        $page = "teacher12";
    }else if($_GET['page'] == "teacher11"){
        $page = "teacher11";
    }else if($_GET['page'] == "teacher10"){
        $page = "teacher10";
    }else if($_GET['page'] == "teacher9"){
        $page = "teacher9";
    }else if($_GET['page'] == "teacher18"){
        $page = "teacher18";
    }else if($_GET['page'] == "teacher5"){
        $page = "teacher5";
    }else if($_GET['page'] == "teacher14"){
        $page = "teacher14";
    }else if($_GET['page'] == "teacher8"){
        $page = "teacher8";
    }else if($_GET['page'] == "teacher7"){
        $page = "teacher7";

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
